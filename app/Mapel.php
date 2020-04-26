<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $primaryKey='id';
    protected $table = 'mapels';
    protected $fillable = [

        'kd_mapel','nama_mapel'

    ];

}
