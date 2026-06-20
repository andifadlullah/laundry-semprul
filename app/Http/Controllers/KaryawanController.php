<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\TambahK;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        $data['karyawan'] = TambahK::paginate(4);

        return view('karyawan_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function edit($id)
    {
        $data['karyawan'] = \App\Models\Karyawan::findOrFail($id);
        $data['list_sp'] = ['Kepala', 'Admin', 'Cuci', 'Setrika', 'Lipat', 'Packing'];
        return view('karyawan_edit', $data);
    }
    public function hapus($id)
    {
        $data['karyawan'] = \App\Models\Karyawan::findOrFail($id);
        $data['list_sp'] = ['Kepala', 'Admin', 'Cuci', 'Setrika', 'Lipat', 'Packing'];
        return view('karyawan_edit', $data);
    }
    public function update(Request $request, $id)
    {
        $karyawan = \App\Models\Karyawan::findOrFail($id);
        $karyawan->kode = $request->kode;
        $karyawan->nama = $request->nama;
        $karyawan->posisi = $request->posisi;
        $karyawan->nohp = $request->nohp;
        $karyawan->save();

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil diupdate');
    }
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data Karyawan berhasil dihapus');
    }
    public function laporan()
    {
        $karyawan = Karyawan::all();

        return view('karyawan_laporan', compact('karyawan'));
    }
}   