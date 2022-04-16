<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point', function (Blueprint $table) {
            $table->foreignId('game_id')->constrained('game')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('team_id')->constrained('team')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('soal_id')->constrained('soal')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('point');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point');
    }
}
