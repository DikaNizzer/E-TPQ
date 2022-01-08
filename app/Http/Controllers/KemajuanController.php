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
        $koneksi = mysqli_connect("localhost", "root", "", "tpaa");
        $query = "SELECT * FROM bab";
        $hasil = mysqli_query($koneksi, $query); //membuat query mysql
        $data = [];

        while($sql = mysqli_fetch_assoc($hasil) ) { //mengambil data di mysql
            $data[] = $sql;
        }

        //ambil data dari table santri
        $santri = DB::table('santri')->get();
        // $bab = DB::table('bab')->get();

        $kemajuan = DB::table("kemajuan")->get();
        $kemajuan = $kemajuan->count();

        // mengirim data ke view Kemajuan
        return view('petugass.tabkemajuan', [
            'kemajuan' => $kemajuan,
            'santri' => $santri,
            'bab' => $data
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

        $koneksi = mysqli_connect("localhost", "root", "", "tpaa");
        $query = "SELECT IDKEMAJUAN from kemajuan ORDER BY IDKEMAJUAN DESC LIMIT 1";
        $hasil = mysqli_query($koneksi, $query); //membuat query mysql
        $data = [];

        while($sql = mysqli_fetch_assoc($hasil) ) { //mengambil data di mysql
            $data[] = $sql;
        }

        foreach($data as $id)
            $idterbaru = $id['IDKEMAJUAN'];





        DB::table('bab_kemajuan')->insert([
            // 'IDKEMAJUAN' => $request->IDKEMAJUAN,
            'kemajuan_IDKEMAJUAN' => $idterbaru,
            'bab_IDBAB' => $request->bab_IDBAB
        ]);

        // $var = 'kemajuan'.$request['IDSANTRI'];
        return redirect('/Kemajuan');

    }

    public function santri($IDSANTRI){
        $koneksi = mysqli_connect("localhost", "root", "", "tpaa");
        $query = "SELECT * from kemajuan join bab_kemajuan
        on (kemajuan.IDKEMAJUAN = bab_kemajuan.kemajuan_IDKEMAJUAN)
        join bab
        on (bab_kemajuan.bab_IDBAB = bab.IDBAB)
        join pengurus
        on kemajuan.IDPENGURUS = pengurus.IDPENGURUS
        where IDSANTRI = $IDSANTRI";
        $hasil = mysqli_query($koneksi, $query); //membuat query mysql
        $data = [];

        while($sql = mysqli_fetch_assoc($hasil) ) { //mengambil data di mysql
            $data[] = $sql;
        }


        $kemajuan = Kemajuan::where('IDSANTRI',$IDSANTRI)->get();

        // mengirim data ke view Kemajuan
        return view('santrii.perkembangan', [
            'kemajuan' => $data,
            // 'petugas' => $petugas
        ]);
    }
}
