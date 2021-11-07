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

    public function ubah($IDPENGURUS){

        //Ambil data sesuai id santri
        $pengurus = DB::table("pengurus")->where('IDPENGURUS',$IDPENGURUS)->get();

        //Passing data dsb
        return view('petugas.ubahpengurus',['pengurus' => $pengurus]);
    }

    public function update(Request $request)
    {
        // update data ke table Santri
        DB::table('pengurus')->where('IDPENGURUS',$request->id)->update([
            'NAMA' => $request->nama,
            'GENDER' => $request->jk,
            'EMAIL' => $request->email,
            'HP' => $request->hp]
        );

        // alihkan halaman ke halaman santri
        return redirect('/pengurus');
    }

    public function buat(Request $request){

        // $pengurus = $request->all();
        // dd($pengurus);

        $pengurus = Pengurus::create($request->all());
        // $pengurus->peran()->attach($request->input('peran'));

        $pengurus = Pengurus::findOrFail($request->IDPENGURUS);
        $pengurus->peran()->attach($request->peran);

        return redirect('/');

    }
}
