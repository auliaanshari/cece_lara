<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_game', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained('game')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('team_id')->constrained('team')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('nilai');
            $table->integer('bonus');
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_game');
    }
}
