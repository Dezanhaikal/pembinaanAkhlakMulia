<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDjadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djadwals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_jadwal');
            $table->integer('jam_mulai');
            $table->integer('jam_akhir');
            $table->string('kd_aktifitas');
            $table->string('kd_mapel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('djadwals');
    }
}
