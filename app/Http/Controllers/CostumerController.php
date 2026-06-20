<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TambahC;
use App\Models\Costumer;

class CostumerController extends Controller
{
    public function index()
    {
        $data['costumer'] = TambahC::paginate(4);

        return view('costumer_index', $data);
    }
    public function create()
    {
        //
    }
    public function edit($id)
    {
        $data['costumer'] = \App\Models\Costumer::findOrFail($id);
        return view('costumer_edit', $data);
    }

    public function hapus($id)
    {
        $data['costumer'] = \App\Models\Costumer::findOrFail($id);
        return view('costumer_edit', $data);
    }
    public function update(Request $request, $id)
    {
        $costumer = \App\Models\Costumer::findOrFail($id);
        $costumer->kode   = $request->kode;
        $costumer->nama   = $request->nama;
        $costumer->jenkel = $request->jenkel;
        $costumer->status = $request->status;
        $costumer->alamat = $request->alamat;
        $costumer->save();

        return redirect()->route('costumer.index')->with('success', 'Data costumer berhasil diupdate');
    }
    public function destroy($id)
    {
        $costumer = \App\Models\Costumer::findOrFail($id);
        $costumer->delete();

        return redirect()->route('costumer.index')->with('success', 'Data costumer berhasil dihapus');
    }
    public function laporan()
    {
        $costumer = Costumer::all();

        return view('costumer_laporan', compact('costumer'));
    }
}