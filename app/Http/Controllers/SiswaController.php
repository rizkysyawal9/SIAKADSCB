<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function tambahView()
    {
        return view('tambahsiswa');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $siswas = Siswa::all();
        return view('siswadashboard')->with(['siswas' => $siswas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa([
            'nama' => $request->get('nama'),
            'nis' => $request->get('nis'),
            'orangTua' => $request->get('orangTua'),
            'kelas' => $request->get('kelas'),
            'alamat' => $request->get('alamat'),
        ]);
        $siswa->save();
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function dump()
    {
        dd('Boo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::where('id', $id)->first();
        return view('siswaedit')->with('siswa', $siswa);
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
        Siswa::where('id', $id)->first()->update([
            'nama' => $request->get('nama'),
            'nis' => $request->get('nis'),
            'orangTua' => $request->get('orangTua'),
            'kelas' => $request->get('kelas'),
            'alamat' => $request->get('alamat'),
        ]);
        return redirect('/siswa');

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
        return redirect('/siswa');
    }
}
