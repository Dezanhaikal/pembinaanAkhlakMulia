<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembuktiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembuktians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kd_jadwal');
            $table->string('kd_aktifitas');
            $table->string('bukti1');
            $table->string('bukti2');
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
        Schema::dropIfExists('pembuktians');
    }
}
