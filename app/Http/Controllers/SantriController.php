<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

// panggil model Santri
use App\Models\Santri;

class SantriController extends Controller
{
    public function index(){

        //ambil data dari table santri
        $santri = DB::table('santri')->get();


        // mengirim data ke view santri
        return view('ortu/santri2', [
            'santri' => $santri
        ]);
    }

    public function tabel(){

        //ambil data dari table santri
        $santri = DB::table('santri')->get();
        $santri = DB::table('santri')->whereNull('deleted_at')->get();

        // mengirim data ke view santri
        return view('petugas/table', [
            'santri' => $santri
        ]);
    }

    // hapus sementara
    public function hapus($IDSANTRI)
    {
        $santri = Santri::find($IDSANTRI);
        $santri->delete();
        
        return redirect('/tabelsantri');
    }

    // menampilkan data santri yang sudah dihapus
    public function riwayat()
    {
        $santri = Santri::onlyTrashed()->get();
        return view('petugas.riwayat', ['santri' => $santri]);
    }

    // restore data guru yang dihapus
    public function kembalikan($IDSANTRI)
    {
        $santri = Santri::onlyTrashed()->where('IDSANTRI',$IDSANTRI);
        $santri->restore();
        
        return redirect('tabelsantri');
    }

        // hapus permanen
    public function permanen($IDSANTRI)
    {
        // hapus permanen data guru
        $santri = Santri::onlyTrashed()->where('IDSANTRI',$IDSANTRI);
        $santri->forceDelete();
        
        return redirect('santriterhapus');
    }
};
