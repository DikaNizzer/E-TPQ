<?php
use App\Models\Santri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\KemajuanController;
use App\Http\Controllers\PengurusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
//halaman Index
Route::get('/', [PeranController::class, 'tampil'] );

//cek koneksi database
Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});
//halaman data santri yang dilihat Santri
Route::get('/santri', [SantriController::class, 'index'] );

// //halaman data santri yang dilihat ortu
// Route::get('/ortu{IDSANTRI}', [SantriController::class, 'index'] );

// //halaman perkembangan yang dilihat ortu
// Route::get('/perkembangan', function () {
//     return view('ortu.perkembangan');
// });


// Login Pengurus
Route::post('/logsantri', [SantriController::class, 'postLogin'] );

// Lihat Perkembangan Santri
Route::get('/perkembangan{IDSANTRI}', [KemajuanController::class, 'santri'] );

//halaman Tabel Santri
Route::get('/tabelsantri', [SantriController::class, 'tabel'] );

Route::get('/tambah', function () {
    return view('petugass/tambah');
});

//Menyimpan Data Santri Baru
Route::post('/santri/store', [SantriController::class, 'store'] );

//menampilkan Detail Santri
Route::get('/detail{IDSANTRI}', [SantriController::class, 'detail'] );

//Cetak detail santri
Route::get('/cetak{IDSANTRI}', [SantriController::class, 'cetak'] );

//menampilkan Detail Santri yang mau di update
Route::get('/editKemajuan{IDSANTRI}', [SantriController::class, 'edit'] );

//Menyimpan Data Santri Baru
Route::post('/santriupdate', [SantriController::class, 'update'] );

// Route::get('/coba', function () {
//     return view('coba');
// });

//Untuk menghapus(soft delete data Santri)
Route::get('/santrihapus{IDSANTRI}', [SantriController::class, 'hapus'] );

//Untuk Menampilkan RIwayat Data Santri
Route::get('/santriterhapus', [SantriController::class, 'riwayat'] );

//Untuk Mengembalikan RIwayat Data Santri
Route::get('/kembalikan{IDSANTRI}', [SantriController::class, 'kembalikan'] );

//Untuk Mengembalikan RIwayat Data Santri
Route::get('/permanen{IDSANTRI}', [SantriController::class, 'permanen'] );

//LOGOUT
Route::get('/logoutsan', [SantriController::class, 'logout']);

// Login Pengurus
Route::post('/logpetugas', [PengurusController::class, 'postLogin'] );

//halaman pengurus
Route::get('/pengurus', [PengurusController::class, 'index'] );

// Membuat Data Pengurus
Route::post('/buatpengurus', [PengurusController::class, 'buat'] );

//menampilkan data pengurus dalam tabel
Route::get('/data', [PengurusController::class, 'pengurus'] );

//menampilkan detail data pengurus yang di HOME
Route::get('/id{IDPENGURUS}', [PengurusController::class, 'detail']);

//menampilkan detail data pengurus yang Setelah login
Route::get('/di{IDPENGURUS}', [PengurusController::class, 'detail2']);

//menampilkan detail data pengurus
Route::get('/ubah{IDPENGURUS}', [PengurusController::class, 'ubah']);

//Menyimpan Data Santri Baru
Route::post('/pengurusupdate', [PengurusController::class, 'update'] );

//LOGOUT
Route::get('/logoutpetug', [PengurusController::class, 'logout']);

//Menampilkan tbel santri dan menu kemajuan
Route::get('/Kemajuan', [KemajuanController::class, 'tampil'] );

//kelasIqra
Route::get('/kelasIqra', [BukuController::class, 'indexBuku'] );

Route::get('/tambahBuku', function () {
    return view('petugass.tambahBuku');
});

//menamilkan data buku
Route::get('/buku', [BukuController::class, 'dataBuku'] );

//menambah data buku
Route::post('/buku/store', [BukuController::class, 'tambahBuku'] );

//menampilkan detail data Buku unytuk diubah
Route::get('/bukuubah{IDBUKU}', [BukuController::class, 'ubah']);

//Menyimpan Data Buku Baru
Route::post('/buku/update', [BukuController::class, 'update'] );

//Untuk menghapus(soft delete data Buku)
Route::get('/bukuhapus{IDBUKU}', [BukuController::class, 'hapus'] );

//Untuk Menampilkan RIwayat Data Santri
Route::get('/bukuterhapus', [BukuController::class, 'riwayat'] );

//Untuk Mengembalikan RIwayat Data Buku
Route::get('/kembalibuku{IDBUKU}', [BukuController::class, 'kembalikan'] );

//Untuk Mengembalikan RIwayat Data Buku
Route::get('/del{IDBUKU}', [BukuController::class, 'permanen'] );

//menamilkan data peran
Route::get('/peran', [PeranController::class, 'tampilkan'] );

//Menyimpan Data Peran Baru
Route::post('/peran/store', [PeranController::class, 'tambahperan'] );

// menampilkan detail data Buku unytuk diubah
Route::get('/peranubah{IDPERAN}', [PeranController::class, 'ubah']);

//Menyimpan Data peran baru
Route::post('/peran/update', [PeranController::class, 'update'] );

//Untuk menghapus(soft delete data peran)
Route::get('/peranhapus{IDPERAN}', [PeranController::class, 'hapus'] );

//Untuk Menampilkan RIwayat Data Peran
Route::get('/peranterhapus', [PeranController::class, 'riwayat'] );

//Untuk Mengembalikan RIwayat Data Peran
Route::get('/kembaliperan{IDPERAN}', [PeranController::class, 'kembalikan'] );

//Untuk Mengembalikan RIwayat Data Peran
Route::get('/dpr{IDPERAN}', [PeranController::class, 'permanen'] );

//untuk menampilkan detailBAB di buku
Route::get('/bab{IDBUKU}', [BukuController::class, 'bab'] );

//untuk menampilkan riwayat perkembangan santri
Route::get('/kemajuan{IDSANTRI}', [KemajuanController::class, 'index'] );

//menampilkan Detail Kemajuan Santri yang mau di update
Route::get('/editKemajuan{IDSANTRI}', [KemajuanController::class, 'edit'] );

//Menyimpan Data peran baru
Route::post('/kemajuanupdate', [KemajuanController::class, 'update'] );

//halaman Tabel Santri
Route::get('/tabelkemajuan', [KemajuanController::class, 'tabel'] );

// Membuat Data Perkembangan
Route::post('/buatkemajuan', [KemajuanController::class, 'buat'] );

//Untuk menghapus(soft delete data Santri)
Route::get('/kemajuanhapus{IDKEMAJUAN}', [KemajuanController::class, 'hapus'] );


//LOGIN ORANG TUA
Route::post('/logortu', [OrtuController::class, 'postLogin'] );

//halaman data santri yang dilihat Ortu
Route::get('/ortu', [OrtuController::class, 'index'] );

// Lihat Perkembangan Santri
Route::get('/ortuliat{IDSANTRI}', [OrtuController::class, 'santri'] );

//LOGOUT
Route::get('/logoutortu', [OrtuController::class, 'logout']);

// Membuat Data Bab
Route::post('/buatbab', [BabController::class, 'tambahBab'] );
