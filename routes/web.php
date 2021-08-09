<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pitch;
use App\Models\User;
use App\Models\Fixture;
use App\Models\Tournament;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('homepage');


Route::get('/tournamentpage', function () {

    return view('tournaments',['tournaments'=>Tournament::all()]);
})->name('tournamentpage');

Route::get('/signinpage', function () {
    return view('signin');
})->name('signinpage');

Route::get('/resultspage/{id}', function ($id) {
    
    return view('results',['fixtures'=>Tournament::findOrFail($id)->fixtures]);
})->name('resultspage');


Route::get('/fixturespage/{id}', function ($id) {
    
    return view('fixtures',['fixtures'=>Tournament::findOrFail($id)->fixtures]);
})->name('fixturespage');

Route::get('/pitchregpage', function () {
    return view('pitchreg');
})->name('pitchregpage');

Route::get('/allpitchespage', function () {

    return view('allpitches',['pitches'=>Pitch::all()]);
})->name('allpitchespage');

Route::get('/teamregpage', function () {
    return view('teamreg');
})->name('teamregpage');






Route::get('/pitchownerpage2', function () {
    return view('admin.pitchownercopy');
})->name('pitchownerpage2');

Route::group(['middleware' => 'auth'],function(){
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin'
    ],function(){
        Route::get('/adminpage', function () {
           $pitches= Pitch::where('reg_status','pending')->get();
            return view('admin.admin',['pitches'=>$pitches]);
        })->name('adminpage');


        Route::get('/approvepitch/{id}', function ($id) {
            $pitch= Pitch::findOrFail($id);
            $pitch->reg_status ='approved';
            $pitch->save();
             return redirect()->back();
         })->name('approvepitch');


         Route::get('/rejectpitch/{id}', function ($id) {
            $pitch= Pitch::findOrFail($id);
           
            $pitch->delete();
            if($pitch->manager->pitches->count()==0){
                $pitch->manager->delete();
            }
             return redirect()->back();
         })->name('rejectpitch');


    });

    Route::group([
        'prefix' => 'manager',
        'middleware' => 'is_manager'
    ],function(){
        Route::get('/managepage', function () {
            return view('admin.manage');
        })->name('managepage');
        
        
        Route::get('/pitchownerpage', function () {
            return view('admin.pitchowner');
        })->name('pitchownerpage');


        Route::post('/createtournament', function (Request $req) {
            Tournament::create([
                'name' =>$req['name'],
                'pitch_id' => $req['pitch'],
                'start_date' =>$req['startdate'],
                'end_date' =>$req['enddate'],
            ]);
            return redirect()->back();
        })->name('createtournament');


        Route::get('/managetournament', function (Request $req) {
            $tournament =Tournament::findOrFail($req['id']);
            return view('admin.manage',['tournament'=>$tournament,]);
        })->name('managetournament');




        Route::get('/jointournament/{id}', function ($id) {
            Tournament::findOrFail($id)->attach(Auth::user());
 
             return redirect()->back()->with(["status"=>"Success"]);
         })->name('jointournament');
         






        Route::post('/matchteams/{id}', function (Request $req,$id) {
           $fixture = Fixture::create([
                'time' => $req['time'],
                'date' => $req['date'],
                'tournament_id' => $id
            ]);
            $teamA = User::findOrFail($req['teamA']);
            $teamB = User::findOrFail($req['teamB']);
            $fixture->matchedteams()->attach($teamA,["round"=>$req['round']]);
            $fixture->matchedteams()->attach($teamB,["round"=>$req['round']]);
           

            return redirect()->back();
        })->name('matchteams');



        Route::post('/updatescore', function (Request $req) {
           $fixture = Fixture::findOrFail($req['fixture']);
           $fixture->matchedteams[0]->pivot->score =$req['teamAscore'];
           $fixture->matchedteams[1]->pivot->score =$req['teamBscore'];
           $fixture->matchedteams[0]->pivot->save();
           $fixture->matchedteams[1]->pivot->save();
           
            return redirect()->back();
        })->name('updatescore');


        Route::get('/deletetournament/{id}', function ($id) {
            Tournament::findOrFail($id)->delete();
            return redirect()->back();
        })->name('deletetournament');
        


    
    });

    Route::group([
        'prefix' => 'team',
        'middleware' => 'is_teamCaptain'
    ],function(){
        // $this->authorize('tournament_create');
        Route::get('/jointournament', function (Request $req) {
            Tournament::findOrFail($req['id'])->teams()->attach(Auth::user());
            return redirect()->route('homepage');
        })->name('jointournament');
    });
});
Auth::routes();
