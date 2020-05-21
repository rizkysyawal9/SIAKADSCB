<?php

namespace App\Http\Controllers;

use App\Matpel;
use App\Nilai;
use App\Siswa;
use Illuminate\Http\Request;

class NilaiApiController extends Controller
{
    public function updateNilai(Request $request, $nis, $kelas, $semester, $kode)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        // $nis = $siswa->nis;
        $nilai = Nilai::where(['nis' => $nis, 'semester' => $semester, 'kode_matpel' => $kode, 'kelas' => $kelas])->first();
        // return view('nilaisiswa')->with('semester1', $semester1);
        $nilai->h1 = $request->h1;
        $nilai->h2 = $request->h2;
        $nilai->h3 = $request->h3;
        $nilai->h4 = $request->h4;
        $nilai->h5 = $request->h5;
        $nilai->h6 = $request->h6;
        $nilai->h7 = $request->h7;
        $nilai->h8 = $request->h8;
        $nilai->hph = $request->hph;
        $nilai->hpts = $request->hpts;
        $nilai->hpas = $request->hpas;
        $nilai->hpa = $request->hpa;
        $nilai->predikat = $request->predikat;
        $nilai->save();
        return $nilai;
    }

    public function shownilai($nis)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        $semester1 = Nilai::where(['nis' => $nis, 'kelas' => $siswa->kelas,
            'semester' => 1])->get();
        $semester2 = Nilai::where(['nis' => $nis, 'kelas' => $siswa->kelas,
            'semester' => 2])->get();
        // return view('nilaisiswa')->with('semester1', $semester1);
        return [
            'siswa' => $siswa,
            'semester1' => $semester1,
            'semester2' => $semester2,
        ];

    }

    public function addNullMatpel($nis)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        $kelas = $siswa->kelas;
        $matpels = Matpel::where('kelas', $kelas)->get();
        for ($i = 1; $i <= 2; $i++) {
            for ($j = 0; $j < count($matpels); $j++) {
                $nilai = new Nilai([
                    'kode_matpel' => $matpels[$j]->kode_matpel,
                    'kelas' => $kelas,
                    'nis' => $siswa->nis,
                    'semester' => $i,
                ]);
                $nilai->save();

            }
        }
        $semester1 = Nilai::where(['nis' => $nis,
            'semester' => 1, 'kelas' => $kelas])->get();
        $semester2 = Nilai::where(['nis' => $nis,
            'semester' => 2, 'kelas' => $kelas])->get();
        return [
            // 'what' => 'gaada',
            'siswa' => $siswa,
            'semester1' => $semester1,
            'semester2' => $semester2,
            // 'Tapi bohong hiyaaaaa'
        ];

    }

    public function nilaiSemester($nis, $semester)
    {
        // $siswa = Siswa::where('id', $id)->first();
        // $nis = $siswa->nis;
        $semester = Nilai::where([
            'nis' => $nis,
            'semester' => $semester,
        ])->get();
        return $semester;
    }

}
