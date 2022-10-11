<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchFootTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matchfoot', function (Blueprint $table) {
            $table->id();
            $table->integer('league_id')->index();
            $table->integer('home')->index();
            $table->integer('out')->index();
            $table->integer('goal_home');
            $table->integer('goal_out');
            $table->integer('journee');
            $table->integer('score');
            $table->integer('api_id');
            $table->timestamp('date');
            $table->foreign('home')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('out')->references('id')->on('teams')->onDelete('cascade');
            $table->foreign('league_id')->references('id')->on('leagues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchfoot');
    }
}
