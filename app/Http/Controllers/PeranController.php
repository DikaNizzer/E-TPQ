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

    public function tambahperan (Request $request)
    {
        // insert data ke table buku
        DB::table('peran')->insert([
            'IDPERAN' => $request->id,
            'PERAN' => $request->peran
        ]);

        // alihkan halaman ke halaman santri
        return redirect('/peran');
    }

}
