<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matpel extends Model
{
    protected $table = 'matpels';
    protected $fillable = ['kode_matpel', 'matpel', 'kelas'];
}
