<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pemeliharaan</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Laporan Pemeliharaan</h1>
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $maintenance->id }}</td>
        </tr>
        <tr>
            <th>Nama Proyek</th>
            <td>{{ $maintenance->project_name }}</td>
        </tr>
        <tr>
            <th>Nama Perubahan</th>
            <td>{{ $maintenance->change_name }}</td>
        </tr>
        <tr>
            <th>Nomor Tiket</th>
            <td>{{ $maintenance->ticket_number }}</td>
        </tr>
        <tr>
            <th>Diminta Oleh</th>
            <td>{{ $maintenance->requested_by }}</td>
        </tr>
        <tr>
            <th>Kontak</th>
            <td>{{ $maintenance->contact }}</td>
        </tr>
        <tr>
            <th>Tanggal</th>
            <td>{{ $maintenance->date }}</td>
        </tr>
        <tr>
            <th>Alasan</th>
            <td>{{ $maintenance->reason }}</td>
        </tr>
        <!-- Tambahkan field lain sesuai kebutuhan -->
    </table>
</body>

</html>
