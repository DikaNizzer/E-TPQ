<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BabController extends Controller
{
    //Menampilkan peran di form buat kemjaun petugas
    public function tampil(){

        //ambil data dari table buku
        $peran = DB::table('bab')->get();

        // mengirim data ke view buku
        return view('index', [
            'peran2' => $peran
        ]);
    }
}
