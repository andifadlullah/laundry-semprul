<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['administrasi'] = \App\Models\Administrasi::with([
            'costumer',
            'karyawan'
        ])->paginate(5);
        $data['judul'] = 'Data-Data Administrasi';
        return view('administrasi_index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['list_costumer'] = 
        \App\Models\Costumer::selectRaw("id,concat(kode,'-',nama) as tampil")
        ->pluck('tampil','id');

        $data['list_karyawan'] = 
        \App\Models\Karyawan::selectRaw("id,concat(kode,'-',nama) as tampil")
        ->pluck('tampil','id');

        return view('administrasi_create', $data);
    }   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'costumer_id' => 'required',
            'karyawan_id' => 'required',
            'biaya' => 'required'
        ]);

        \App\Models\Administrasi::create([
            'tanggal' => $request->tanggal,
            'costumer_id' => $request->costumer_id,
            'karyawan_id' => $request->karyawan_id,
            'biaya' => $request->biaya,
        ]);

        return redirect('/administrasi')
            ->with('success', 'Data administrasi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['administrasi'] = \App\Models\Administrasi::findOrFail($id);

        $data['list_costumer'] =
            \App\Models\Costumer::selectRaw("id, concat(kode,'-',nama) as tampil")
            ->pluck('tampil', 'id');

        $data['list_karyawan'] =
            \App\Models\Karyawan::selectRaw("id, concat(kode,'-',nama) as tampil")
            ->pluck('tampil', 'id');

        return view('administrasi_edit', $data);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'tanggal'     => 'required',
        'costumer_id' => 'required',
        'karyawan_id' => 'required',
        'biaya'       => 'required|numeric',
        ]);

        $administrasi = \App\Models\Administrasi::findOrFail($id);

        $administrasi->update([
            'tanggal'     => $request->tanggal,
            'costumer_id' => $request->costumer_id,
            'karyawan_id' => $request->karyawan_id,
            'biaya'       => $request->biaya,
        ]);

        return redirect('/administrasi')
            ->with('success', 'Data administrasi berhasil diupdate');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $administrasi = \App\Models\Administrasi::findOrFail($id);

        $administrasi->delete();

        return redirect('administrasi')
            ->with('success', 'Data berhasil dihapus');
    }
}
