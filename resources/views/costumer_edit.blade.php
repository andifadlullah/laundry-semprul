@extends('layouts.template')

@section('bebas')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Costumer</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('costumer.update', $costumer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Kode costumer -->
                <div class="mb-3">
                    <label class="form-label">Kode Costumer</label>
                    <input type="text" name="kode" class="form-control" 
                        value="{{ $costumer->kode }}" required>
                </div>

                <!-- Nama costumer -->
                <div class="mb-3">
                    <label class="form-label">Nama Costumer</label>
                    <input type="text" name="nama" class="form-control" 
                        value="{{ $costumer->nama }}" required>
                </div>

                <!-- Jenis Kelamin -->
                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="jenkel" class="form-select" required>
                        <option value="Laki-laki" {{ $costumer->jenkel == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $costumer->jenkel == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <!-- Status -->
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="" disabled>Pilih Status</option>
                        @foreach(['Masuk', 'Proses', 'Selesai'] as $sp)
                            <option value="{{ $sp }}" {{ $costumer->status == $sp ? 'selected' : '' }}>
                                {{ $sp }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Alamat -->
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" 
                        value="{{ $costumer->alamat }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('costumer.index') }}" class="btn btn-danger ms-2">Batal</a>
            </form>

        </div>
    </div>
</div>
@endsection