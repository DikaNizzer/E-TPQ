<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Kemajuan;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KemajuanController extends Controller
{

    public function tampil(){
        //ambil data dari table santri
        $santri = DB::table('santri')->get();
        $pengurus = DB::table('pengurus')->get();
        $kemajuan = DB::table("kemajuan")->get();
        $kemajuan = $kemajuan->count();

        // mengirim data ke view Kemajuan
        return view('petugass.tabkemajuan', [
            'kemajuan' => $kemajuan,
            'santri' => $santri,
            'pengurus' => $pengurus
        ]);
    }

    public function index($IDSANTRI){

        $kemajuan = DB::table("kemajuan")->where('IDSANTRI',$IDSANTRI)->get();
        $santri = Santri::findOrFail($IDSANTRI);

        // mengirim data ke view Kemajuan
        return view('petugass.kemajuan', [
            'kemajuan' => $kemajuan,
            'santri' => $santri
        ]);
    }

    public function buat(Request $request){


        DB::table('kemajuan')->insert([
            // 'IDKEMAJUAN' => $request->IDKEMAJUAN,
            'IDSANTRI' => $request->IDSANTRI,
            'IDPENGURUS' => $request->IDPENGURUS,
            'STATUS' => $request->STATUS,
            'keterangan' => $request->keterangan,
            'nilai' => $request->nilai,
        ]);

        // $var = 'kemajuan'.$request['IDSANTRI'];
        return redirect('/Kemajuan');

    }

    public function santri($IDSANTRI){

        // $kemajuan = DB::table("kemajuan")->where('IDSANTRI',$IDSANTRI)->get();
        $kemajuan = Kemajuan::where('IDSANTRI',$IDSANTRI)->get();
        // $id = $kemajuan['IDPENGURUS'];
        // $petugas = Pengurus::findOrFail($id);

        // mengirim data ke view Kemajuan
        return view('santrii.perkembangan', [
            'kemajuan' => $kemajuan,
            // 'petugas' => $petugas
        ]);
    }

    public function edit($IDSANTRI){
        // mengambil data santri berdasarkan id yang dipilih
        $kemajuan = DB::table('kemajuan')->where('IDSANTRI',$IDSANTRI)->get();

        // passing data santri yang didapat ke view detail
        return view('petugass.editKemajuan',['kemajuan' => $kemajuan]);
    }

    public function update(Request $request)
    {
        // update data ke table Santri
        DB::table('kemajuan')->where('IDSANTRI',$request->id)->update([
            'STATUS' => $request->status,
            'keterangan' => $request->keterangan,
            'nilai' => $request->nilai,
            ]

        );

        // alihkan halaman ke halaman santri
        return redirect('/kemajuan');
    }

    public function tabel(){

        //ambil data dari table santri
        // $santri = DB::table('santri')->get();
        $santri = DB::table('kemajuan')->whereNull('deleted_at')->paginate(2);

        // mengirim data ke view santri
        return view('petugass/kemajuan', [
            'kemajuan' => $santri
        ]);
    }

    public function hapus($IDKEMAJUAN)
    {
        $kemajuan = Santri::find($IDKEMAJUAN);
        $kemajuan->delete();

        return redirect('/kemajuan');
    }
}
