<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'position',
        'phone',
        'team_id'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function tournament(){
        return $this->belongsToMany(Tournament::class,'tournament_teams','team_id','tournament_id');
    }
    use HasFactory;
}