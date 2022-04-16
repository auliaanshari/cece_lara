<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soal', function (Blueprint $table) {
            $table->id();
            $table->string('soal', 300);
            $table->string('jawaban', 50);
            $table->integer('bobot');
            $table->foreignId('kategori_id')->constrained('kategori_soal')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('jenis_id')->constrained('jenis_soal')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status_soal')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soal');
    }
}
