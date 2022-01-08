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

    public function tambahBab (Request $request)
    {
        // insert data ke table buku
        DB::table('bab')->insert([
            'buku_IDBUKU' => $request->buku_IDBUKU,
            'BAB' => $request->BAB,
            'JUDUL' => $request->Judul,
            'KETERANGAN' => $request->KETERANGAN,
        ]);

        // alihkan halaman ke halaman santri
        return redirect('/bab'.$request->buku_IDBUKU,);
    }
}
