<?php

namespace App\Http\Controllers;
use App\Models\Santri;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;


// panggil model Santri
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SantriController extends Controller
{
    public function index($IDSANTRI){

        //ambil data dari table santri
        $santri = DB::table('santri')->where('IDSANTRI',$IDSANTRI)->get();


        // mengirim data ke view santri
        return view('santrii/santri2', [
            'santri' => $santri
        ]);
    }

    //yang dikiri nama kolom yang di kanan request nama dari form
   // method untuk insert data ke table santri
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'IDSANTRI' => 'required|unique:santri',
            'NAMASATRI' =>['required', 'max:255'],
            // 'EMAIL' => 'required|email:dns|max:30',
            'HP' => ['required', 'max:15'],
            'GENDER' => ['required', 'max:1'],
            'PASSWORD' => ['required', 'min:5'],
            'NAMAORTU' => ['required', 'max:255'],
            'ALAMATORTU' => ['required', 'max:255'],
            'KOTALHR' => ['required', 'max:255'],
        ]);

        $validatedpass=  password_hash($request->PASSWORD, PASSWORD_DEFAULT);
        // insert data ke table Santri
        DB::table('santri')->insert([
            'IDSANTRI' => $request->IDSANTRI,
            'PASSWORD' => $validatedpass,
            'NAMASATRI' => $request->NAMASATRI,
            'TAGGALLHR' => $request->TAGGALLHR,
            'NAMAORTU' => $request->NAMAORTU,
            'ALAMATORTU' => $request->ALAMATORTU,
            'GENDER' => $request->GENDER,
            'EMAIL' => $request->EMAIL,
            'HP' => $request->HP,
            'TANGGALMASUK' => $request->TANGGALMASUK,
            'KOTALHR' => $request->KOTALHR,
            'foto' => $request->file('foto')->store('folder-foto')]
        );

        $request->session()->flash('success', 'Registrasi Berhasil !, Silahkan Cek Kebenaran Data');
        // alihkan halaman ke halaman santri
        return redirect('/tabelsantri');
    }

    public function detail($IDSANTRI){
    // mengambil data santri berdasarkan id yang dipilih
    $santri = DB::table('santri')->where('IDSANTRI',$IDSANTRI)->get();

    // passing data santri yang didapat ke view detail
    return view('petugass.detail',['santri' => $santri]);
    }

    public function edit($IDSANTRI){
        // mengambil data santri berdasarkan id yang dipilih
        $santri = DB::table('santri')->where('IDSANTRI',$IDSANTRI)->get();

        // passing data santri yang didapat ke view detail
        return view('petugass.edit',['santri' => $santri]);
    }

    public function update(Request $request)
    {
        if($request->file('foto')){
            $fotobaru = $request->file('foto')->store('folder-foto');
        }else{
            $fotobaru = $request->fotolama;
        }
        // update data ke table Santri
        DB::table('santri')->where('IDSANTRI',$request->id)->update([
            'PASSWORD' => $request->pass,
            'NAMASATRI' => $request->nama,
            'TAGGALLHR' => $request->lahir,
            'NAMAORTU' => $request->ortu,
            'ALAMATORTU' => $request->alamat,
            'GENDER' => $request->jk,
            'EMAIL' => $request->email,
            'HP' => $request->hp,
            'TANGGALMASUK' => $request->masuk,
            'KOTALHR' => $request->tempatLahir,
            'foto' => $fotobaru
            ]

        );

        // alihkan halaman ke halaman santri
        return redirect('/tabelsantri');
    }


    public function tabel(){

        //ambil data dari table santri
        // $santri = DB::table('santri')->get();
        $santri = DB::table('santri')->whereNull('deleted_at')->paginate(2);

        // mengirim data ke view santri
        return view('petugass/table', [
            'santri' => $santri
        ]);
    }

    // hapus sementara
    public function hapus($IDSANTRI)
    {
        $santri = Santri::find($IDSANTRI);
        $santri->delete();

        return redirect('/tabelsantri');
    }

    // menampilkan data santri yang sudah dihapus
    public function riwayat()
    {
        $santri = Santri::onlyTrashed()->get();
        return view('petugass.riwayat', ['santri' => $santri]);
    }

    // restore data guru yang dihapus
    public function kembalikan($IDSANTRI)
    {
        $santri = Santri::onlyTrashed()->where('IDSANTRI',$IDSANTRI);
        $santri->restore();

        return redirect('tabelsantri');
    }

        // hapus permanen
    public function permanen($IDSANTRI)
    {
        // hapus permanen data guru
        $santri = Santri::onlyTrashed()->where('IDSANTRI',$IDSANTRI);
        $santri->forceDelete();

        return redirect('santriterhapus');
    }

    public function cetak($IDSANTRI){

        $santri = Santri::find($IDSANTRI);

        $pdf = PDF::loadView('petugass.santriPdf', ['santri' => $santri])->setOptions(['defaultFont' => 'sans-serif',
                                                                                        'enable_remote' => true,
                                                                                        'chroot'  => public_path('storage')]);
        return $pdf->download('Data-Santri.pdf');
        }



        public function postLogin(Request $request){

            $santri = Santri::where('EMAIL', $request->EMAIL)->first();

            if($santri == null){
                return back()->with('logerror', 'Login Gagal');
            }else{
                if(password_verify($request->PASSWORD, $santri->PASSWORD)){
                    if(Auth::loginUsingId($santri->IDSANTRI)){
                        // $request->session()->regenerate();
                        $request->session()->put('santri', $santri['IDSANTRI']);
                        return redirect('/santri'.$santri->IDSANTRI);

                    }
                }else{
                    return back()->with('logerror', 'Login Gagal');
                }
            }


        }

};
