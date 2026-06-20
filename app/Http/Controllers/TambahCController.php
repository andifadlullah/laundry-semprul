<?php

namespace App\Http\Controllers;

use App\Models\TambahC;
use Illuminate\Http\Request;

class TambahCController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['tambahc'] = TambahC::all();
        $data['judul'] = 'Data-data Costumer';

        return view('tambahc_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahc_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'kode_costumer'   => 'required',
        'nama_costumer'   => 'required',
        'jenis_kelamin' => 'required',
        'status'        => 'required',
        'alamat'        => 'required',
        ]);

        TambahC::create([
            'kode'   => $request->kode_costumer,
            'nama'   => $request->nama_costumer,
            'jenkel' => $request->jenis_kelamin,
            'status' => $request->status,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('costumer.index')
            ->with('success', 'Data Costumer berhasil disimpan!');
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
