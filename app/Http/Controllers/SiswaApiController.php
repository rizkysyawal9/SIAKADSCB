<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function all()
    {
        $siswas = Siswa::all();
        return $siswas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($nis)
    {
        $siswa = Siswa::where('nis', $nis)->first();
        return $siswa;
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::where('id', $id)->first()->update([
            'nama' => $request->get('nama'),
            'nis' => $request->get('nis'),
            'orangTua' => $request->get('orangTua'),
            'kelas' => $request->get('kelas'),
            'alamat' => $request->get('alamat'),
        ]);

        $siswa->save();
        return $siswa;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::where('id', $id)->delete();
        return 'Destroyed';
    }
}
