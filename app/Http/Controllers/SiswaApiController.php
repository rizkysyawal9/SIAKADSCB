<?php

namespace App\Http\Controllers;

use App\Matpel;
use App\Nilai;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaApiController extends Controller
{
    public function index()
    {
    }

    public function all()
    {
        $siswas = Siswa::all();
        return $siswas;
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nis' => 'required|unique:siswas',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
            'berat_badan' => 'integer',
            'tinggi_badan' => 'integer',
        ]);
        
        $matpel = Matpel::all();
        $siswa = new Siswa([

            'nama' => $request->get('nama'),
            'nis' => $request->get('nis'),
            'kelas' => $request->get('kelas'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'golongan_darah' => $request->get('golongan_darah'),
            'alamat' => $request->get('alamat'),
            'tinggi_badan' => $request->get('tinggi_badan'),
            'berat_badan' => $request->get('berat_badan'),
            'nama_ayah' => $request->get('nama_ayah'),
            'nama_ibu' => $request->get('nama_ibu'),

        ]);
        $siswa->save();
        $nis = $siswa->nis;
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 0; $j < count($matpel); $j++) {
                $nilai = new Nilai([
                    'kode_matpel' => $matpel[$j]->kode_matpel,
                    'kelas' => $siswa->kelas,
                    'nis' => $siswa->nis,
                    'semester' => $i,
                ]);
                $nilai->save();
            }
        }
        return "Success";
    }

    public function show($nis)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        return $siswa;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $nis)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        $siswa->nama = $request->nama;
        $siswa->nis = $request->nis;
        $siswa->orangTua = $request->orangTua;
        $siswa->kelas = $request->kelas;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return $siswa;
    }

    public function destroy($nis)
    {
        Nilai::where('nis', $nis)->delete();
        Siswa::where('nis', $nis)->delete();
        return 'Destroyed';
    }
}
