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
                    // if(Auth::loginUsingId($santri->IDSANTRI)){
                        Auth::guard('websantri')->login($santri);
                        $request->session()->regenerate();
                        $request->session()->put('santri', $santri);
                        return redirect('/ortu');
                    // }
                }else{
                    return back()->with('logerror', 'Login Gagal');
                }
            }
        }

        public function index(){

            // mengirim data ke view santri
            return view('ortuu/santri2');
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

            // mengirim data ke view Kemajuan
            return view('ortuu.perkembangan', [
                'kemajuan' => $data,
                // 'petugas' => $petugas
            ]);
        }

        public function logout(){

            Auth::logout();

            request()->session()->invalidate();

            request()->session()->regenerateToken();
            session()->forget('santri');

            return redirect('/');
        }
}
