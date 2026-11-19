<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data MataKuliah</title>
</head>
<body>
    <h1>Data MataKuliah</h1>

    @if (session('success'))
        <p href="color: brown">{{ session('success') }}</p>
    @endif
    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Jurusan</th>
                <th>Aksi</th>
                <th>Detail</th>
            </tr>
        </thead>

        <tbody>
            @forelse($matakuliahs as $matakuliah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $matakuliah->kode_matakuliah }}</td>
                <td>{{ $matakuliah->nama_matakuliah }}</td>
                <td>{{ $matakuliah->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.show',  $matakuliah) }}">Detail</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3">Belum ada data jurusan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>