<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jkegiatan extends Model
{
    protected $primaryKey='id';
    protected $table = 'jkegiatans';
    protected $fillable = [

        'nis','tgl','kd_jadwal'

    ];
}
