<?php
use App\Models\Santri;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
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

Route::get('/', function () {
    return view('index');
});

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

//halaman data santri yang dilihat ortu
Route::get('/ortu', [SantriController::class, 'index'] );

//halaman perkembangan yang dilihat ortu
Route::get('/perkembangan', function () {
    return view('ortu.perkembangan');
});


//halaman Tabel Santri
Route::get('/tabelsantri', [SantriController::class, 'tabel'] );

//halaman pengurus
Route::get('/pengurus', [PengurusController::class, 'index'] );

Route::get('/tambah', function () {
    return view('petugas/tambah');
}); 

//Menyimpan Data Santri Baru
Route::post('/santri/store', [SantriController::class, 'store'] );

//menampilkan Detail Santri
Route::get('/detail{IDSANTRI}', [SantriController::class, 'detail'] );

//menampilkan Detail Santri yang mau di update
Route::get('/edit{IDSANTRI}', [SantriController::class, 'edit'] );

//Menyimpan Data Santri Baru
Route::post('/santriupdate', [SantriController::class, 'update'] );

Route::get('/coba', function () {
    return view('coba');
});

//Untuk menghapus(soft delete data Santri)
Route::get('/santrihapus{IDSANTRI}', [SantriController::class, 'hapus'] );

//Untuk Menampilkan RIwayat Data Santri
Route::get('/santriterhapus', [SantriController::class, 'riwayat'] );

//Untuk Mengembalikan RIwayat Data Santri
Route::get('/kembalikan{IDSANTRI}', [SantriController::class, 'kembalikan'] );

//Untuk Mengembalikan RIwayat Data Santri
Route::get('/permanen{IDSANTRI}', [SantriController::class, 'permanen'] );

// //menampilkan Data Pengurus
// Route::get('/kelasIqra', [PengurusController::class, 'pengurus'] );

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
