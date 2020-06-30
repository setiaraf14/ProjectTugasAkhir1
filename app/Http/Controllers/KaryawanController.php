<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use App\Jabatan;
use App\Pendidikan;
use App\Status;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    // public function dashboard(){
    //     $total = Karyawan::all()->count();
    //     return view('dashboard', compact('total'));  
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jabatan = Jabatan::all();
        $pendidikan = Pendidikan::all();
        $status = Status::all();

        return view('karyawan.create', compact('jabatan', 'pendidikan', 'status'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validasiKaryawan = $request->validate([
            'nama' => 'required|min:3',
            'jabatan_id' => 'required|',
            'no_telepon' => 'required|numeric',
            'pendidikan_id' => 'required',
            'jenis_kelamin' => 'required',
            'status_id' => 'required',
            'umur' => 'required|numeric|between:19,45',
            'tanggal_masuk' => 'required'
        ]);

        $karyawan = Karyawan::create($validasiKaryawan);
        return redirect()->route('karyawan.index')->with('Pesan', "Data karyawan $request->nama, Berhasil disimpan" );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
        return view('karyawan.show', ['karyawan' => $karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        //
        $jabatan = Jabatan::all();
        $pendidikan = Pendidikan::all();
        $status = Status::all();
        return view('karyawan.edit', compact('karyawan', 'jabatan', 'pendidikan', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
        $validasiKaryawan = $request->validate([
            'nama' => 'required|min:3',
            'jabatan_id' => 'required|',
            'no_telepon' => 'required|numeric',
            'pendidikan_id' => 'required',
            'jenis_kelamin' => 'required',
            'status_id' => 'required',
            'umur' => 'required|numeric|between:19,45',
            'tanggal_masuk' => 'required'
        ]);

        $karyawan->update($validasiKaryawan);
        return redirect()->route('karyawan.index')->with('Pesan', "Data $karyawan->nama, berhasil diperbarui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        //
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('Pesan', "Data $karyawan->nama, Berhasil dihapus");
    }
}
