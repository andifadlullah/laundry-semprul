@extends('layouts.template')

@section('bebas')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        {{ $judul }}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Tanggal</th>
                                    <th>Nama Costumer</th>
                                    <th>Nama Karyawan</th>
                                    <th>Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                @foreach ($administrasi as $a)
                                    <tr>
                                        <td>{{ $a->id }}</td>
                                        <td>{{ $a->tanggal }}</td>
                                        <td>{{ $a->costumer->nama ?? '-' }}</td>
                                        <td>{{ $a->karyawan->nama ?? '-' }}</td>
                                        <td>{{ $a->biaya }}</td>
                                        <td>
                                            <a href="{{ url('administrasi/' . $a->id . '/edit') }}"
                                                class="btn btn-primary btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('administrasi.destroy', $a->id) }}"
                                                method="POST"
                                                class="d-inline"
                                                onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection