<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Costumer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @media print {
        @page {
            margin: 0;
        }
        body {
            margin: 1.5cm;
        }
    }
    </style>
</head>
<body onload="window.print()">

<div class="container mt-5">

    <h2 class="text-center mb-4">
        Laporan Data Costumer
    </h2>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>jenkel</th>
                <th>alamat</th>
                <th>status</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($costumer as $a)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->kode }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->jenkel }}</td>
                <td>{{ $a->alamat}}</td>
                <td>{{ $a->status}}</td>
            </tr>

            @endforeach

        </tbody>

    </table>
    <br>
    <br>
    <br>
    <h5>Mengatahui</h5>
    <br>
    <br>
    <br>
    <h5>Admin</h5>

</div>

</body>
</html>