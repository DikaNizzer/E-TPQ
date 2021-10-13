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

//halaman data santri
Route::get('/santri', [SantriController::class, 'index'] );

//halaman Tabel Santri
Route::get('/tabelsantri', [SantriController::class, 'tabel'] );

//halaman pengurus
Route::get('/pengurus', [PengurusController::class, 'index'] );

Route::get('/tambah', function () {
    return view('petugas/tambah');
}); 

// //Menyimpan Data Santri Baru
// Route::post('/santri/store', [PengurusController::class, 'store'] );



// //menampilkan kelas Iqra'
// Route::get('/kelasIqra', function () {
//     return view('kelasIqra');
// }); 

// //menampilkan Detail Santri
// Route::get('/edit/{IDSANTRI}', [PengurusController::class, 'detail'] );
