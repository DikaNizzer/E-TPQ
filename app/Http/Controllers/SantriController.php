<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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

        // mengirim data ke view santri
        return view('petugas/table', [
            'santri' => $santri
        ]);
    }
};
