<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nama', 'nis', 'orangTua', 'kelas', 'alamat'];
    public function nilais()
    {
        return $this->hasMany('App\Nilai');
    }
}
