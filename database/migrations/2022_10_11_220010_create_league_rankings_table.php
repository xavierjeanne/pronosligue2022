<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_rankings', function (Blueprint $table) {
            $table->id();
            $table->integer('league_id')->index();
            $table->integer('team_id')->index();
            $table->integer('point');
            $table->integer('journee');
            $table->integer('serie');
            $table->integer('victory');
            $table->integer('defeat');
            $table->integer('draw');
            $table->integer('goal_for');
            $table->integer('goal_against');
            $table->integer('goal_average');
            $table->integer('ranking_before');
            $table->integer('ranking_after');
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('league_rankings');
    }
}
