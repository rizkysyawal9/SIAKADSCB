<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = ['nama', 'kelas', 'nis', 'jenis_kelamin', 'tanggal_lahir', 'tempat_lahir', 'golongan_dara', 'alamat', 'tinggi_badan', 'berat_badan', 'nama_ayah', 'nama_ibu'];
    public function nilais()
    {
        return $this->hasMany('App\Nilai');
    }
}
