@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuti</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            position: relative;
            margin-bottom: 20px;
            width: 100px;
        }

        .header img {
            width: 100px;
        }

        .header h2 {
            position: absolute;
            right: 0;
            transform: translateX(100%) translateY(12px);
            width: 250px
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .no-column {
            width: 50px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ 'data:image/png;base64,' . base64_encode(file_get_contents(public_path('assets/logo.webp'))) }}"
            alt="Logo">
        <h2>Data Cuti Karyawan</h2>
    </div>
    <table>
        <thead>
            <tr>
                <th class="no-column">No</th>
                <th>Karyawan</th>
                <th>Departemen</th>
                <th>Jenis Cuti</th>
                {{-- <th>Sisa Cuti</th> --}}
                {{-- <th>Lama Cuti</th> --}}
                <th>Mulai Cuti</th>
                <th>Selesai Cuti</th>
                <th>Alasan Cuti</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($model as $row)
                <tr>
                    <td style="text-align: center">{{ $loop->iteration }}</td>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->departemen }}</td>
                    <td>{{ $row->jenis_cuti }}</td>
                    {{-- <td>{{ $row->kuota_cuti }}</td> --}}
                    {{-- <td>{{ $row->jumlah_cuti }}</td> --}}
                    <td>{{ Carbon::parse($row->start_cuti)->translatedFormat('l, d F Y') }}</td>
                    <td>{{ Carbon::parse($row->end_cuti)->translatedFormat('l, d F Y') }}</td>
                    <td>{{ $row->alasan_cuti }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
