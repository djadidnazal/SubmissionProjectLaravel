<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah matakuliah</title>
</head>
<body>
    <h1>Tambah Data matakuliah</h1>

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf

        <div>
            <label>Kode Mata Kuliah</label>
            <input type="text" name="kode_matakuliah"
                value="{{ old('kode_matakuliah') }}">
            @error('kode')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>Nama Mata Kuliah</label>
            <input type="text", name="nama_matakuliah"
                value="{{ old('nama_matakuliah') }}">
            @error('nama')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label>SKS</label>
            <input type="text", name="sks"
                value="{{ old('sks') }}">
            @error('sks')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Simpan</button>
        <a href="{{ route('matakuliah.index') }}">Kembali</a>
    </form>
</body>
</html>