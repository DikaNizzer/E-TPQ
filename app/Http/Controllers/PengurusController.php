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

    // fungsi untuk mengakses data pengurus
    public function pengurus(){

        //ambil data dari table pengurus
        $pengurus = DB::table('pengurus')->get();

        // mengirim data ke view santri
        return view('datapengurus', [
            'pengurus1' => $pengurus
        ]);
    }


    
}
