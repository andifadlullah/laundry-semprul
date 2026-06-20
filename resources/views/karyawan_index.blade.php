@extends('layouts.template')

@section('bebas')

<div class="container-fluid">
    <div class="card">

        <div class="card-header">
            <h3>Data Karyawan</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>Posisi</th>
                        <th>Nomor Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($karyawan as $p)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->kode}}</td>
                        <td>{{ $p->nama}}</td>
                        <td>{{ $p->posisi}}</td>
                        <td>{{ $p->nohp}}</td>
                        <td>
                            <a href="{{ url('karyawan/' .$p->id. '/edit') }}"
                                class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('karyawan.destroy', $p->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Apakah yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>
        <div class="card-footer">
            {{ $karyawan->links() }}
        </div>
    </div>
</div>

@endsection