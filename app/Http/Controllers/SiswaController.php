<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::all();
        return view('layouts.Siswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new siswa;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        return redirect()->route('Siswa.index')
            ->with(['message' => 'Data Siswa Berhasil Di Tambah +++++++']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $siswa = Siswa::findorFail($id);
        return view('layouts.Siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findorFail($id);
        return view('layouts.Siswa.edit', compact('siswa'));
    }


    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        return redirect()->route('Siswa.index')
            ->with(['message' => 'Data Siswa Berhasil Di Update!!!!!']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findorFail($id);
        $siswa->delete();
        return redirect()->route('Siswa.index')
            ->with(['message' => 'Data Siswa Berhasil Di Hapus --------']);;
    }
}
