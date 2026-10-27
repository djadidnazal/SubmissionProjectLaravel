@exntends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <x-alert type="sukses">
        Data mahasiswa berhasil ditemukan.
    </x-alert>

    <table>
        <tr>
            <th>Nama</th>
            <td>{{ $mahasiswa['nama'] }}</td>
        </tr>

        <tr>
            <th>NIM</th>
            <td>{{ $mahasiswa['nim'] }}</td>
        </tr>

        <tr>
            <th>IPK</th>
            <td>{{ number_format($mahasiswa['ipk'], 2, ',', '.') }}</td>
        </tr>

        <tr>
            <th>Keterangan</th>
            <td>
                @if ($mahasiswa['ipk'] >= 3.5)
                Cum Laude
                @elseif ($mahasiswa['ipk'] >= 3.0)
                Baik
                @else
                    Perlu ditingkatkan
                @endif
            </td>
        </tr>
    </table>

    <br>

    <a href="{{ route('mahasiswa.daftar') }}" class="btn">
        Kembali ke Daftar
    </a>
@endsection