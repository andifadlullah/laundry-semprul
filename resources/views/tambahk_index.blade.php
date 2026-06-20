@extends('layouts.template')

@section('bebas')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Karyawan</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('tambahk.store') }}" method="POST">
                @csrf

                <!-- Kode Karyawan -->
                <div class="mb-3">
                    <label class="form-label">Kode Karyawan</label>
                    <input type="text" name="kode" class="form-control" placeholder="Masukkan kode Karyawan" required>
                </div>

                <!-- Nama Karyawan -->
                <div class="mb-3">
                    <label class="form-label">Nama Karyawan</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Karyawan" required>
                </div>

                <!-- Posisi -->
                <div class="mb-3">
                    <label class="form-label">Posisi</label>
                    <select name="posisi" class="form-select" required>
                        <option value="" disabled selected>Pilih Posisi</option>
                        <option value="Kepala">Kepala Toko</option>
                        <option value="Admin">Admin Kasir</option>
                        <option value="Cuci">Tukang Cuci</option>
                        <option value="Setrika">Tukang Setrika</option>
                        <option value="Lipat">Tukang Lipat</option>
                        <option value="Packing">Tukang Packing</option>
                    </select>
                </div>

                <!-- Nomor HP -->
                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" name="nohp" class="form-control" placeholder="Masukkan nomor HP" required>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="{{ route('karyawan.index') }}" class="btn btn-danger ms-2">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection