<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_manager',
        'is_admin',
        'is_teamCaptain'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pitches(){
        return $this->hasMany(Pitch::class,'manager_id','id');
    }

    public function team(){
        return $this->hasMany(Player::class,'team_id','id');
    }

    public function fixtures(){
        return $this->belongsToMany(Fixture::class,'matched_teams','team_id','fixture_id')->withPivot(['score','round']);
    }

    public function tournaments(){
        return $this->belongsToMany(Tournament::class,'tournament_teams','team_id','tournament_id');
    }
}
