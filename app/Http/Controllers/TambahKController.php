<?php

namespace App\Http\Controllers;

use App\Models\TambahK;
use Illuminate\Http\Request;

class TambahKController extends Controller
{
    public function index()
    {
        $data['tambahk'] = TambahK::all();
        $data['judul'] = 'Data-data Karyawan';

        return view('tambahk_index', $data);
    }

    public function create()
    {
        return view('tambahk_create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'kode'          => 'required',
        'nama'          => 'required',
        'posisi'     => 'required',
        'nohp'          => 'required',
        ]);

        TambahK::create([
            'kode'      => $request->kode,
            'nama'      => $request->nama,
            'posisi' => $request->posisi,
            'nohp'      => $request->nohp,
        ]);

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil disimpan!');
        }

    /**
     * Display the specified resource.
     */
    public function show(rekam $rekam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rekam $rekam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rekam $rekam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rekam $rekam)
    {
        //
    }
}
