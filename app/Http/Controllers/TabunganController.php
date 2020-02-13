<?php

namespace App\Http\Controllers;

use App\tabungan;
use App\Siswa;
use Illuminate\Http\Request;
use DB;


class TabunganController extends Controller
{


    public function jumlah_tabungan()
    {
        $tabungan = tabungan::with('siswa')
            ->select(
                'siswa_id',
                \DB::raw('sum(tabungans.jumlah_uang) as jumlah_uang')
            )
            ->groupBy('siswa_id')
            ->get();
        //dd($tabungan);
        return view('tabungan.report', compact('tabungan'));
    }


    public function index()
    {
        $tabungan = tabungan::with('siswa')->get();
        // $tabungan = DB::table('tabungans')
        //     ->join('siswas', 'siswas.id', '=', 'tabungans.siswa_id')
        //     ->select('siswas.nama', 'siswas.kelas', 'tabungans.siswa_id');
        return view('tabungan.index', compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Siswa::all();
        return view('tabungan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tabungan = new tabungan;
        $tabungan->siswa_id = $request->siswa_id;
        $tabungan->jumlah_uang = $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index')
            ->with(['message' => 'Data Siswa Berhasil Di Tambah +++']);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = tabungan::findorFail($id);
        return view('tabungan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::all();
        $data = tabungan::findorFail($id);
        return view('tabungan.edit', compact('data', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tabungan = tabungan::findorfail($id);
        $tabungan->siswa_id = $request->siswa_id;
        $tabungan->jumlah_uang = $request->jumlah_uang;
        $tabungan->save();
        return redirect()->route('tabungan.index')
            ->with(['message' => 'Data Siswa Berhasil Di Edit !!!!']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tabungan  $tabungan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabungan = tabungan::findorFail($id);
        $tabungan->delete();
        return redirect()->route('tabungan.index')
            ->with(['message' => 'Data Siswa Berhasil Hi Hapus -----']);;
    }
}
