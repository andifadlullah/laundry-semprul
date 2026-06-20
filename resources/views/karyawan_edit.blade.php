@extends('layouts.template')

@section('bebas')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Karyawan</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Kode Doktkaryawaner -->
                <div class="mb-3">
                    <label class="form-label">Kode Karyawan</label>
                    <input type="text" name="kode" class="form-control" 
                        value="{{ $karyawan->kode }}" required>
                </div>

                <!-- Nama karyawan -->
                <div class="mb-3">
                    <label class="form-label">Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" 
                        value="{{ $karyawan->nama }}" required>
                </div>

                <!-- Posisi -->
                <div class="mb-3">
                    <label class="form-label">Posisi</label>
                    <select name="posisi" class="form-select" required>
                        <option value="" disabled>Pilih Posisi</option>
                        @foreach(['Kepala', 'Admin', 'Cuci', 'Setrika', 'Lipat', 'Packing'] as $sp)
                            <option value="{{ $sp }}" {{ $karyawan->posisi == $sp ? 'selected' : '' }}>
                                {{ $sp }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Nomor HP -->
                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" name="nohp" class="form-control" 
                        value="{{ $karyawan->nohp }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-danger ms-2">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection