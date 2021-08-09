<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Matched extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matched_teams', function (Blueprint $table) {

            $table->foreignId("fixture_id")->references('fixture_id')->on('fixtures')->cascadeOnDelete();
            $table->foreignId("team_id")->references('id')->on('users');
            $table->integer('score')->nullable();
            $table->string('round')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matched_teams');
    }
}
