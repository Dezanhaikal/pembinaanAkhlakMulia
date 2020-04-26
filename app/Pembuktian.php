<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembuktian extends Model
{
    protected $primaryKey='id';
    protected $table = 'pembuktians';
    protected $fillable = [

        'kd_jadwal','kd_aktifitas','bukti1','bukti2'

    ];
}
