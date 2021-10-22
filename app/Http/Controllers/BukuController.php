<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function dataBuku(){

        //ambil data dari table buku
        $buku = DB::table('buku')->get();

        // mengirim data ke view buku
        return view('petugas/buku', [
            'buku' => $buku
        ]);
    }

    public function tambahBuku (Request $request)
   {
       // insert data ke table buku
       DB::table('buku')->insert([
           'IDBUKU' => $request->idbuku,
           'BUKU' => $request->namabuku,
           'KETERANGAN' => $request->ketbuku
       ]);

       // alihkan halaman ke halaman santri
       return redirect('/buku');
   }
}
