<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Siswa;
use Illuminate\Http\Request;

class NilaiApiController extends Controller
{
    public function updateNilai(Request $request, $nis, $semester, $kode)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        // $nis = $siswa->nis;
        $nilai = Nilai::where(['nis' => $nis, 'semester' => $semester, 'kode_matpel' => $kode])->first();
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
        // $nis = $siswa->nis;
        $kelas = $siswa->kelas;
        $semester1 = Nilai::where(['nis' => $nis,
            'semester' => 1])->get();
        $semester2 = Nilai::where(['nis' => $nis,
            'semester' => 2])->get();
        $semester3 = Nilai::where(['nis' => $nis,
            'semester' => 3])->get();
        $semester4 = Nilai::where(['nis' => $nis,
            'semester' => 4])->get();
        $semester5 = Nilai::where(['nis' => $nis,
            'semester' => 5])->get();
        $semester6 = Nilai::where(['nis' => $nis,
            'semester' => 6])->get();
        // return view('nilaisiswa')->with('semester1', $semester1);
        if ($kelas == 7) {
            return [
                'siswa' => $siswa,
                'semester1' => $semester1,
                'semester2' => $semester2,
            ];
        } else if ($kelas == 8) {
            return [
                'siswa' => $siswa,
                'semester1' => $semester3,
                'semester2' => $semester4,
            ];
        } else if ($kelas == 9) {
            return [
                'siswa' => $siswa,
                'semester1' => $semester5,
                'semester2' => $semester6,
            ];
        } else {
            return 'Data Tidak Tersedia';
        }

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
