<?php

namespace App\Http\Controllers;

use App\Models\Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PeranController extends Controller
{
    public function tampilkan(){

        //ambil data dari table buku
        $peran = DB::table('peran')->whereNull('deleted_at')->get();

        // mengirim data ke view buku
        return view('petugass.peran', [
            'peran' => $peran
        ]);
    }

    public function tambahperan (Request $request)
    {
        $validatedData = $request->validate([
            'PERAN' =>['required', 'max:20'],
            'AKTIF' => 'required|max:1'
        ]);

        $peran = Peran::create($validatedData);

        $request->session()->flash('success', 'Peran berhasil ditambah !');

        return redirect('/peran');
    }

    public function ubah($IDPERAN){

        //Ambil data sesuai id santri
        $peran = DB::table("peran")->where('IDPERAN',$IDPERAN)->get();

        //Passing data dsb
        return view('petugass.ubahperan',['peran' => $peran]);
    }

    public function update(Request $request)
    {
        // update data ke table peran
        DB::table('peran')->where('IDPERAN',$request->idperan)->update([
            'PERAN' => $request->namaperan,
            'AKTIF' => $request->status]
        );

        // alihkan halaman ke halaman peran
        return redirect('/peran');
    }

    public function hapus($IDPERAN)
    {
        $peran = Peran::find($IDPERAN);
        $peran->delete();

        return redirect('/peran');
    }

    // menampilkan data peran yang sudah dihapus
    public function riwayat()
    {
        $peran = Peran::onlyTrashed()->get();
        return view('petugass.riwayatperan', ['peran' => $peran]);
    }

    public function kembalikan($IDPERAN)
    {
        $peran = Peran::onlyTrashed()->where('IDPERAN',$IDPERAN);
        $peran->restore();

        return redirect('peran');
    }

        // hapus permanen
    public function permanen($IDPERAN)
    {
        // hapus permanen data guru
        $peran = Peran::onlyTrashed()->where('IDPERAN',$IDPERAN);
        $peran->forceDelete();

        return redirect('peranterhapus');
    }

    //Menampilkan peran di form buat akun petugas
    public function tampil(){

        //ambil data dari table buku
        $peran = DB::table('peran')->get();

        // mengirim data ke view buku
        return view('index', [
            'peran2' => $peran
        ]);
    }

}
