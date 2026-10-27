@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    <x-alert type="info">
        Berikut adalah daftar mahasiswa praktikum Laravel.
    </x-alert>

    @if (collect($mahasiswa)->contains(fn ($m) => $m['ipk'] < 2.0))
        <x-alert type="bahaya">
            Peringatan: terdapat mahasiswa dengan IPK dibawah 2,0.
        </x-alert>
    @endif

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mahasiswa as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['nim'] }}</td>
                    <td>{{ number_format($m['ipk'], 2, ',', '.') }}</td>

                    <td>
                        @if ($m['ipk'] >= 3.5)
                            <x-alert type="sukses">
                                Cum Laude
                            </x-alert>
                        @elseif ($m['ipk'] >= 3.0)
                            <x-alert type="info">
                                Baik                       
                            </x-alert>
                        @else
                            <x-alert type="bahaya">
                                Perlu ditingkatkan
                            </x-alert>
                        @endif
                    </td>

                    <td>
                        <a 
                            href="{{ route('mahasiswa.detail', ['/nim' => $m['nim']]) }}"
                            class="btn"
                        >
                            Detail
                        </a>
                    </td>
                </tr>
            @empty

                <tr>
                    <td colspan="6">
                        Belum ada data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection