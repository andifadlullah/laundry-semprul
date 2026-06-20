<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Karyawan</title>
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
        Laporan Data Karyawan
    </h2>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Nomor HP</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($karyawan as $a)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a->kode }}</td>
                <td>{{ $a->nama }}</td>
                <td>{{ $a->posisi }}</td>
                <td>{{ $a->nohp }}</td>
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