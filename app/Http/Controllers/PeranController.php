<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PeranController extends Controller
{
    public function tampilkan(){

        //ambil data dari table buku
        $peran = DB::table('peran')->whereNull('deleted_at')->get();

        // mengirim data ke view buku
        return view('petugas.peran', [
            'peran' => $peran
        ]);
    }
}
