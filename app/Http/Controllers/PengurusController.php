<?php

namespace App\Http\Controllers;
use App\Models\Santri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PengurusController extends Controller
{
    public function index(){

        //ambil data dari table santri
        $pengurus = DB::table('pengurus')->get();

        // mengirim data ke view santri
        return view('petugas/pengurus', [
            'pengurus' => $pengurus
        ]);
    }


    //yang dikiri nama kolom yang di kanan request nama dari form
   // method untuk insert data ke table santri
    public function store(Request $request)
    {
        // insert data ke table Santri
        DB::table('santri')->insert([
            'IDSANTRI' => $request->id,
            'PASSWORD' => $request->pass,
            'NAMASATRI' => $request->nama,
            'TAGGALLHR' => $request->lahir,
            'NAMAORTU' => $request->ortu,
            'ALAMATORTU' => $request->alamat,
            'GENDER' => $request->jk,
            'EMAIL' => $request->email,
            'HP' => $request->hp,
            'TANGGALMASUK' => $request->masuk,
            'KOTALHR' => $request->tempatLahir,
            'foto' => $request->foto]
        );

        // alihkan halaman ke halaman santri
        return redirect('/tabelsantri');
    }

    public function detail($IDSANTRI){ 
    // mengambil data santri berdasarkan id yang dipilih
    $santri = DB::table('santri')->where('IDSANTRI',$IDSANTRI)->get(); 
    
    // passing data santri yang didapat ke view detail
    return view('petugas.detail',['santri' => $santri]);
    }

    public function edit($IDSANTRI){ 
        // mengambil data santri berdasarkan id yang dipilih
        $santri = DB::table('santri')->where('IDSANTRI',$IDSANTRI)->get(); 
        
        // passing data santri yang didapat ke view detail
        return view('petugas.edit',['santri' => $santri]);
    }

    public function update(Request $request)
    {
        // update data ke table Santri
        DB::table('santri')->where('IDSANTRI',$request->id)->update([
            'PASSWORD' => $request->pass,
            'NAMASATRI' => $request->nama,
            'TAGGALLHR' => $request->lahir,
            'NAMAORTU' => $request->ortu,
            'ALAMATORTU' => $request->alamat,
            'GENDER' => $request->jk,
            'EMAIL' => $request->email,
            'HP' => $request->hp,
            'TANGGALMASUK' => $request->masuk,
            'KOTALHR' => $request->tempatLahir,
            'foto' => $request->foto]
        );

        // alihkan halaman ke halaman santri
        return redirect('/tabelsantri');
    }

    // fungsi untuk mengakses data pengurus
    public function pengurus(){

        //ambil data dari table pengurus
        $pengurus = DB::table('pengurus')->get();

        // mengirim data ke view santri
        return view('datapengurus', [
            'pengurus1' => $pengurus
        ]);
    }

    // FUNGSI UNTUK MENAMPILKAN DATA PENGURUS 
    public function detailurus($IDSANTRI){ 
        // mengambil data santri berdasarkan id yang dipilih
        $pengurus = DB::table('pengurus ')->where('IDPENGURUS',$IDSANTRI)->get(); 
        
        // passing data santri yang didapat ke view detail
        return view('detailpengurus', ['pengurus' => $pengurus]);
        }
    
}
