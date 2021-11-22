<?php

namespace App\Http\Controllers;
use App\Models\Peran;
use App\Models\Santri;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PengurusController extends Controller
{
    public function index(){

        //ambil data dari table pengurus
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


        $validatedData = $request->validate([
            'IDPENGURUS' => 'required|unique:pengurus',
            'NAMA' =>['required', 'max:255'],
            'EMAIL' => 'required|email:dns|max:30|unique:pengurus',
            'HP' => ['required', 'max:15'],
            'GENDER' => ['required', 'max:1'],
            'PASSWORD' => ['required', 'min:5'],
            'AKTIF' => ['required', 'max:1'],
        ]);


        // if(empty($validatedData)){
        //     $request->session()->flash('buaterror', 'Gagal Membuat AKun');
        // };
        // $validatedData['PASSWORD'] = Hash::make($validatedData['PASSWORD']); ->Enkripsi menggunakan Has
        // $validatedData['PASSWORD'] =  bcrypt($validatedData['PASSWORD']);  ->Enkripsi menggunakan Bcrypt
        //enkripsi password
        $validatedData['PASSWORD'] =  password_hash($validatedData['PASSWORD'], PASSWORD_DEFAULT);
        $pengurus = Pengurus::create($validatedData);

        $pengurus = Pengurus::findOrFail($request->IDPENGURUS);
        $pengurus->peran()->attach($request->peran);
        $request->session()->flash('success', 'Registrasi Berhasil !, Silahkan Login');

        return redirect('/');

    }

    public function authenticate(Request $request){

        $credentials = $request->validate([
            'EMAIL' => ['required', 'email:dns'],
            'PASSWORD' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/pengurus');
        }

        return back()->with('logerror', 'Login Gagal');
    }

        public function postLogin(Request $request)
    {

        // Validate the form data
        // $this->validate($request, [
        // 'EMAIL' => 'required|email',
        // 'PASSWORD' => 'required'
        // ]);

        $pengurus = Pengurus::where('EMAIL', $request->EMAIL)->first();

        if( password_verify($request->PASSWORD, $pengurus->PASSWORD) ){
            if(Auth::loginUsingId($pengurus->IDPENGURUS)){
                $request->session()->regenerate();
                return redirect('/pengurus');
            }
        }else{
            return back()->with('logerror', 'Login Gagal');
        }


        // if (empty($pengurus)) {
        //     // abort(404);
        //     return ("error truss");
        // }

        // if(Auth::loginUsingId($pengurus->IDPENGURUS)){
        //     $request->session()->regenerate();
        //     return redirect('/pengurus');
        // }

    }

}
