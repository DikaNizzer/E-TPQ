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
    public function index($IDSANTRI){

        $kemajuan = DB::table("kemajuan")->where('IDSANTRI',$IDSANTRI)->get();
        $santri = Santri::findOrFail($IDSANTRI);

        // mengirim data ke view Kemajuan
        return view('petugas.kemajuan', [
            'kemajuan' => $kemajuan,
            'santri' => $santri
        ]);
    }

    public function buat(Request $request){

        DB::table('kemajuan')->insert([
            'IDKEMAJUAN' => $request->IDKEMAJUAN,
            'IDSANTRI' => $request->IDSANTRI,
            'IDPENGURUS' => $request->IDPENGURUS,
            'STATUS' => $request->STATUS,
            'keterangan' => $request->keterangan,
            'nilai' => $request->nilai,
        ]);

        $var = 'kemajuan'.$request['IDSANTRI'];
        return redirect($var);

    }

    public function santri($IDSANTRI){

        // $kemajuan = DB::table("kemajuan")->where('IDSANTRI',$IDSANTRI)->get();
        $kemajuan = Kemajuan::where('IDSANTRI',$IDSANTRI)->get();
        // $id = $kemajuan['IDPENGURUS'];
        // $petugas = Pengurus::findOrFail($id);

        // mengirim data ke view Kemajuan
        return view('ortu.perkembangan', [
            'kemajuan' => $kemajuan,
            // 'petugas' => $petugas
        ]);
    }
}
