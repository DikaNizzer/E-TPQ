<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Kemajuan;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrtuController extends Controller
{
    public function postLogin(Request $request)
        {

            $santri = Santri::where('EMAIL', $request->EMAIL)->first();
            // $santri = DB::table('santri')->where('EMAIL', $request->EMAIL)->get();

            if($santri == null){
                return back()->with('logerror', 'Login Gagal');
            }else{
                if(password_verify($request->PASSWORD, $santri->PASSWORD)){
                    if(Auth::loginUsingId($santri->IDSANTRI)){
                        $request->session()->regenerate();
                        return redirect('/ortu'.$santri->IDSANTRI);
                    }
                }else{
                    return back()->with('logerror', 'Login Gagal');
                }
            }
        }

        public function index($IDSANTRI){

            //ambil data dari table santri
            $santri = DB::table('santri')->where('IDSANTRI',$IDSANTRI)->get();


            // mengirim data ke view santri
            return view('ortu/santri2', [
                'santri' => $santri
            ]);
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
