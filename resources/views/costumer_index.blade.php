@extends('layouts.template')

@section('bebas')

<div class="container-fluid">
    <div class="card">

        <div class="card-header">
            <h3>Data Costumer</h3>
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Costumer</th>
                        <th>Nama Costumer</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                        
                    </tr>
                </thead>

                <tbody>

                    @foreach($costumer as $p)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $p->kode}}</td>
                        <td>{{ $p->nama}}</td>
                        <td>{{ $p->jenkel }}</td>
                        <td>{{ $p->status }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>
                            <a href="{{ url('costumer/' .$p->id. '/edit') }}"
                                class="btn btn-primary btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('costumer.destroy', $p->id) }}" method="POST" class="d-inline"
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
            <div class="card-footer">
            {{ $costumer->links() }}
        </div>
        </div>
    </div>
</div>

@endsection