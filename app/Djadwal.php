<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Djadwal extends Model
{
    protected $primaryKey='id';
    protected $table = 'djadwals';
    protected $fillable = [

    	'nis','nama','hari','tgl','kd_jadwal','jam_mulai','jam_akhir','kd_aktifitas','kd_mapel'
    ];
}
