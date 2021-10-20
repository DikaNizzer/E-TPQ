<?php

namespace App\Http\Controllers;
use App\Models\Santri;
use App\Models\Pengurus;
use App\Models\Peran;
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

    // fungsi untuk mengakses data pengurus
    public function pengurus(){

        //ambil data dari table pengurus
        // $pengurus = DB::table('pengurus')->get();

        // // mengirim data ke view santri
        // return view('data', [
        //     'pengurus' => $pengurus
        // ]);

        $pengurus = Pengurus::get();
    	return view('data', ['pengurus' => $pengurus]);
    }

    public function detail($IDPENGURUS){

        //Ambil data sesuai id santri
        $pengurus = DB::table("pengurus")->where('IDPENGURUS',$IDPENGURUS)->get();
        
        //Passing data dsb
        return view('detail',['pengurus' => $pengurus]);

    }

    public function detail2($IDPENGURUS){

        //Ambil data sesuai id santri
        $pengurus = DB::table("pengurus")->where('IDPENGURUS',$IDPENGURUS)->get();
        
        //Passing data dsb
        return view('petugas.detailpengurus',['pengurus' => $pengurus]);
    }

    
}
