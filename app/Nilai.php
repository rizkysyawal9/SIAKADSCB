<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = ['kode_matpel', 'nis', 'semester', 'h1', 'h2', 'h3',
        'h4', 'h5', 'h6', 'h7', 'hpts', 'hpas', 'hpa', 'predikat'];
}
