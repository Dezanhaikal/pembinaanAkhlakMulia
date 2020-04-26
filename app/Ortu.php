<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    protected $primaryKey='id';
    protected $table = 'ortus';
    protected $fillable = [

        'nik','nama','nis'
    ];
}
