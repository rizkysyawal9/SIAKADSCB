<?php

namespace App\Http\Controllers;

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
        $matpel = array('PAI', 'PKN', 'BIND', 'BING', 'MTK', 'IPA', 'IPS', 'SB',
            'PJOK', 'TAHSIN', 'TIK', 'BSUN', 'PLH', 'ARAB');
        $siswa = new Siswa([
            'nama' => $request->get('nama'),
            'nis' => $request->get('nis'),
            'orangTua' => $request->get('orangTua'),
            'kelas' => $request->get('kelas'),
            'alamat' => $request->get('alamat'),
        ]);
        $siswa->save();
        $nis = $siswa->nis;
        for ($i = 1; $i <= 6; $i++) {
            for ($j = 0; $j < count($matpel); $j++) {
                $nilai = new Nilai([
                    'kode_matpel' => $matpel[$j],
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
