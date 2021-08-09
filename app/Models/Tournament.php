<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = "tournaments";
    protected $primaryKey = "tournament_id";
    public $timestamps = false;
    protected $fillable = [
        'name',
        
        'pitch_id',
        'start_date',
        'end_date'
    ];

    public function pitch(){
        return $this->belongsTo(Pitch::class,'pitch_id','pitch_id');
    }

    public function teams(){
        return $this->belongsToMany(User::class,'tournament_teams','tournament_id','team_id');
    }

    public function fixtures(){
        return $this->hasMany(Fixture::class,'tournament_id','tournament_id');
    }
    use HasFactory;
}
