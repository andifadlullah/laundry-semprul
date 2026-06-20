@extends('layouts.template')

@section('bebas')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Costumer</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('tambahc.store') }}" method="POST">
                @csrf

                <!-- Kode Pasien -->
                <div class="mb-3">
                    <label class="form-label">Kode Costumer</label>
                    <input type="text" name="kode_costumer" class="form-control" placeholder="Masukkan kode costumer" required>
                </div>

                <!-- Nama Pasien -->
                <div class="mb-3">
                    <label class="form-label">Nama Costumer</label>
                    <input type="text" name="nama_costumer" class="form-control" placeholder="Masukkan nama costumer" required>
                </div>

                <!-- Spesialis -->
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-select" required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="" disabled selected>Pilih Status</option>
                        <option value="Masuk">Masuk</option>
                        <option value="Proses">Proses</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                </div>

                <!-- Button -->
                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>
                <a href="{{ route('costumer.index') }}" class="btn btn-danger ms-2">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection