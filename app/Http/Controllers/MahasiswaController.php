<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Djadid Nazal';
        $nim = '242520062';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact(
            'nama',
            'nim',
            'prodi'
        ));
    }

    public function daftar()
    {
        $mahasiswa = [
            [
                'nama' => 'Andi Saputra',
                'nim' => '23209832',
                'ipk' => '3.80'
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '242583298',
                'ipk' => '3.20'
            ],
            [
                'nama' => 'Citra Lestari',
                'nim' => '282372904',
                'ipk' => '3.70'
            ],
            [
                'nama' => 'Dewi Anggraini',
                'nim' => '293729429',
                'ipk' => '2.75'
            ],
            [
                'nama' => 'Eko Pratama',
                'nim' => '29847290',
                'ipk' => '1.85'
            ],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        if (!$data) {
            abort(404);
        }

        return view('mahasiswa.detail', [
            'mahasiswa' => $data,
        ]);
    }
}
