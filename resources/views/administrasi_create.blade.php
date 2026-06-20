@extends('layouts.template')
@section('bebas')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Tambah Data Administrasi
                    </div>
                    <div class="card-body">
                        <form action="{{ url('administrasi', []) }}" method="post">
                            @method('post')
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
                                    value="{{ date('Y-m-d') }}">
                            </div>
                            <div class="form-group">
                                <label for="my-select">Costumer</label>
                                <select id="my-select" class="form-control" name="costumer_id">
                                    <option value="">Pilih Costumer</option>
                                    @foreach ($list_costumer as $id => $a)
                                        <option value="{{ $id }}" @selected($id==old('costumer_id'))>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('costumer_id') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-select">Karyawan</label>
                                <select id="my-select" class="form-control" name="karyawan_id">
                                    <option value="">Pilih Karyawan</option>
                                    @foreach ($list_karyawan as $id => $a)
                                        <option value="{{ $id }}" @selected($id==old('karyawan_id'))>
                                            {{ $a }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('karyawan_id') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="my-input">Biaya</label>
                                <input id="my-input" class="form-control" type="number" name="biaya"
                                value="{{ old('biaya') }}">
                                <span class="text-danger">{{ $errors->first('biaya') }}</span>
                            </div>
                            <div class="card-footer">
                                <div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection