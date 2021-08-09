<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pitches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitches', function (Blueprint $table) {
        $table->id('pitch_id');
        $table->string('pitchname');
        $table->string('address');
        $table->foreignId('manager_id')->references('id')->on('users')->onCascadeDelete();
        $table->string('pitchsize');
        $table->string('open');
        $table->string('close');
        $table->string('days');
        $table->string('reg_status');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pitches');
    }
}
