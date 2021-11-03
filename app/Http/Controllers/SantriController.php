<?php

namespace App\Http\Controllers;
use App\Models\Santri;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;


// panggil model Santri
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
            'foto' => $request->file('foto')->store('folder-foto')]
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
        if($request->file('foto')){
            $fotobaru = $request->file('foto')->store('folder-foto');
        }else{
            $fotobaru = $request->fotolama;
        }
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
            'foto' => $fotobaru
            ]
            
        );

        // alihkan halaman ke halaman santri
        return redirect('/tabelsantri');
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

    public function cetak($IDSANTRI){ 

        $santri = Santri::find($IDSANTRI);

        $pdf = PDF::loadView('petugas.santriPdf', ['santri' => $santri])->setOptions(['defaultFont' => 'sans-serif', 
                                                                                        'enable_remote' => true,
                                                                                        'chroot'  => public_path('storage')]);
        return $pdf->download('Data-Santri.pdf');
        }

};
