<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    protected $primaryKey = 'pitch_id';
    public $timestamps = false;
    protected $fillable = [
        'pitchname',
        'address',
        'pitchsize', 
        'days',
        'open',
        'close',
        'manager_id',
        'reg_status'
    ];

    public function tournament(){
        return $this->hasMany(Tournament::class,'pitch_id',"pitch_id");
     }

     public function manager(){
        return $this->belongsTo(User::class,'manager_id','id');
    }
    use HasFactory;
}