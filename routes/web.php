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


Route::get('/datapengurus', function () {
    return view('datapengurus');
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
Route::post('/santri/store', [PengurusController::class, 'store'] );

//menampilkan kelas Iqra'
Route::get('/kelasIqra', function () {
    return view('kelasIqra');
}); 

//menampilkan Detail Santri
Route::get('/detail{IDSANTRI}', [PengurusController::class, 'detail'] );

//menampilkan Detail Santri yang mau di update
Route::get('/edit{IDSANTRI}', [PengurusController::class, 'edit'] );

//Menyimpan Data Santri Baru
Route::post('/santriupdate', [PengurusController::class, 'update'] );

Route::get('/coba', function () {
    return view('coba');
});

//Untuk menghapus(soft delete data Santri)
Route::get('/santrihapus{IDSANTRI}', [SantriController::class, 'hapus'] );

//Untuk Menampilkan RIwayat Data Santri
Route::get('/santriterhapus', [SantriController::class, 'riwayat'] );

//Untuk Mengembalikan RIwayat Data Santri
Route::get('/kembalikan', [SantriController::class, 'kembalikan'] );

//Untuk Mengembalikan RIwayat Data Santri
Route::get('/permanen{IDSANTRI}', [SantriController::class, 'permanen'] );