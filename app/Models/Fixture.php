<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    // public function firstTeam(){
    //     return $this->belongsTo(User::class,'first_team_id','team_id');
    // }

    // public function secondTeam(){
    //     return $this->belongsTo(User::class,'second_team_id','team_id');
    // }
    protected $primaryKey = 'fixture_id';
    public $timestamps = false;
    protected $fillable = [
        'time',
        
        'date',
        'tournament_id',
        'end_date'
    ];
    public function matchedteams(){
        return $this->belongsToMany(User::class,'matched_teams','fixture_id','team_id')->withPivot(['score','round']);
    }
    public function Tournament(){
        return $this->belongsTo(Tournament::class,'tournament_id','tournament_id');
    }
    use HasFactory;
}
