<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    public function dataBuku(){

        //ambil data dari table buku
        $buku = DB::table('buku')->whereNull('deleted_at')->get();

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

    public function ubah($IDBUKU){

        //Ambil data sesuai id santri
        $buku = DB::table("buku")->where('IDBUKU',$IDBUKU)->get();
        
        //Passing data dsb
        return view('petugas.ubahbuku',['buku' => $buku]);
    }

    public function update(Request $request)
    {
        // update data ke table Santri
        DB::table('buku')->where('IDBUKU',$request->id)->update([
            'BUKU' => $request->namabuku,
            'KETERANGAN' => $request->ketbuku]
        );
 
        // alihkan halaman ke halaman santri
        return redirect('/buku');
    }

    // hapus sementara
    public function hapus($IDBUKU)
    {
        $buku = Buku::find($IDBUKU);
        $buku->delete();
        
        return redirect('/buku');
    }

    // menampilkan data santri yang sudah dihapus
    public function riwayat()
    {
        $buku = Buku::onlyTrashed()->get();
        return view('petugas.riwayatbuku', ['buku' => $buku]);
    }

    // restore data guru yang dihapus
    public function kembalikan($IDBUKU)
    {
        $buku = Buku::onlyTrashed()->where('IDBUKU',$IDBUKU);
        $buku->restore();
        
        return redirect('buku');
    }

        // hapus permanen
    public function permanen($IDBUKU)
    {
        // hapus permanen data guru
        $buku = Buku::onlyTrashed()->where('IDBUKU',$IDBUKU);
        $buku->forceDelete();
        
        return redirect('bukuterhapus');
    }

    public function indexBuku(){

        //ambil data dari table buku
        $buku = DB::table('buku')->whereNull('deleted_at')->get();

        // mengirim data ke view buku
        return view('/kelasIqra', [
            'buku' => $buku
        ]);
    }
}
