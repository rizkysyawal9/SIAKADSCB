<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester1 extends Model
{
    protected $fillable = ['kode_matpel', 'nis', 'uts', 'uas', 'tugas', 'rata_matpel', 'predikat'];
}
