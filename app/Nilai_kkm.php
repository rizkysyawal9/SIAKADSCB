<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai_kkm extends Model
{
    //
    protected $table = 'nilai_kkms';
    protected $fillable = ['kode_matpel', 'kkm'];
}
