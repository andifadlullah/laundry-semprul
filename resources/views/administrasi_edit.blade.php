@extends('layouts.template')
@section('bebas')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Edit Data Administrasi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('administrasi.update', $administrasi->id) }}" method="post">
                            @method('PUT')
                            @csrf

                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date"
                                    class="form-control"
                                    name="tanggal"
                                    value="{{ old('tanggal', $administrasi->tanggal) }}">
                                <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="costumer_id">Costumer</label>
                                <select id="costumer_id" class="form-control" name="costumer_id">
                                    <option value="">Pilih Costumer</option>
                                    @foreach ($list_costumer as $id => $a)
                                        <option value="{{ $id }}"
                                            @selected($id == old('costumer_id', $administrasi->costumer_id))>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('costumer_id') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="karyawan_id">Karyawan</label>
                                <select id="karyawan_id" class="form-control" name="karyawan_id">
                                    <option value="">Pilih Karyawan</option>
                                    @foreach ($list_karyawan as $id => $a)
                                        <option value="{{ $id }}"
                                            @selected($id == old('karyawan_id', $administrasi->karyawan_id))>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('karyawan_id') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input id="biaya" class="form-control" type="number" name="biaya"
                                    value="{{ old('biaya', $administrasi->biaya) }}">
                                <span class="text-danger">{{ $errors->first('biaya') }}</span>
                            </div>

                            <div class="card-footer px-0 pt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ url('administrasi') }}" class="btn btn-secondary">Batal</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection