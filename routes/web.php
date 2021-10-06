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

Route::get('/info', function () {
    return view('info');
});

// Route::get('/siswa', function () {
//     return view('siswa');
// });


//cek koneksi database
Route::get('/test-koneksi-database', function() {
	try {
		\DB::connection()->getPdo();

		echo 'Sudah terkoneksi dengan database: ' . \DB::connection()->getDatabaseName();

	} catch (\Exception $e) {
		echo 'Belum terkoneksi database, error: ' . $e->getMessage();
	}
});

//halaman data santri
Route::get('/santri', [SantriController::class, 'index'] );

//halaman Tabel Santri
Route::get('/tabelsantri', [SantriController::class, 'tabel'] );

//halaman pengurus
Route::get('/pengurus', [PengurusController::class, 'index'] );

Route::get('/tambah', function () {
    return view('petugas/tambah');
}); 

//menambah Data Santri
Route::get('/tambah', [PengurusController::class, 'tambah'] );

//Menyimpan Data Santri Baru
Route::post('/santri/store', [PengurusController::class, 'store'] );

//menampilkan Detail Santri
Route::get('/santri/edit/{IDSANTRI}', [PengurusController::class, 'edit'] );

//menampilkan kelas Iqra'
Route::get('/kelasIqra', function () {
    return view('kelasIqra');
}); 

Route::get('/coba', function () {
    return view('petugas.detail'); 
});