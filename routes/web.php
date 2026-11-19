<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, selamat datang di Laravel 13!';
});

Route::get('/waktu', fn () => now() ->format('d-m-Y H:i:s'));

Route::get('/profil/{nama}', function (string $nama) {
    return "Halo, {$nama}!";
});

Route::get('/kategori/{nama}', function (?string $nama = 'semua') {
    return "Menampilkan kategori: {$nama}";
});

Route::get('/kelas/{kode}/mahasiswa/{nim}', function (string $kode, string $nim) {
    return "Kelas {$kode}, NIM {$nim}";
});

Route::get('/artikel/{id}', function (int $id) {
    return "Artikel nomor {$id}";
})->whereNumber('id');

Route::get('/pengguna/{username}', function (string $username) {
    return "Pengguna: {$username}";
})->whereAlpha('username');

Route::get('/kode/{kode}', function (string $kode) {
    return "Kode: {$kode}";
})->where('kode', '[A-Z]{3}[0-9]{2}');

Route::view('/tentang', 'tentang')->name('tentang');

Route::get('/kontak', function () {
    return view('kontak', ['email' => 'info@kampus.ac.id']);
})->name('kontak');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dasboard', fn() => 'Dasboard Admin') ->name('dasboard');

    Route::get('/pengaturan', fn() => 'Pengaturan Admin') ->name('pengaturan');
});

Route::redirect('/beranda', '/');

Route::fallback(function () {
    return response('Halaman tidak ditemukan (404 Not Found).', 404);
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

Route::resource('produk', ProdukController::class);

// Route::get('/products/{id}', function ($id) {
//     return 'Produk #' . $id;
// });

Route::get('products/{id}', [ProdukController::class, 'show']);

Route::get('/profil', [
    MahasiswaController::class,
    'profil',
])->name('mahasiswa.profil');

Route::get('/mahasiswa', [
    MahasiswaController::class,
    'daftar',
])->name('mahasiswa.daftar');

Route::get('/mahasiswa/{/nim}', [
    MahasiswaController::class,
    'detail',
])->name('mahasiswa.detail');

// Route::get('/jurusan', [JurusanController::class, 'index']);

// Route::get('/jurusan/{id}', [JurusanController::class, 'show']);

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');

Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('jurusan.create');

Route::post('/jurusan', [JurusanController::class, 'store'])->name('jurusan.store');

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');

Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');

Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');

Route::get('matakuliah/{matakuliah}', [MatakuliahController::class, 'show'])->name('matakuliah.show');