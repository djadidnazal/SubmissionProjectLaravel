@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1>Profil Mahasiswa</h1>

    <p>
        <strong>Nama:</strong>
        {{ $nama }}
    </p>

    <p>
        <strong>NIM:</strong>
        {{ $nim }}
    </p>

    <p>
        <strong>Program Studi:</strong>
        {{ $prodi }}
    </p>

    <a href="{{ route('mahasiswa.daftar') }}" class="btn">
        Lihat Daftar Mahasiswa
    </a>
@endsection