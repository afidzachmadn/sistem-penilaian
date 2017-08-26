<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController_2 extends Controller
{
    //


    public function dashboard(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

        if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {
            return view('ketua-tim.dashboard');
        } 
        
        else {
            return view('auth.login');        
        }
   }

   public function data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;
    //dd($CekRole);
    if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {

        $id = $request->session()->get('id');
        $LihatDataDiri = DB::table('users');
        $LihatDataDiriNext = $LihatDataDiri->where('id', $id)->first();

        return view('ketua-tim.data-diri',  array('data_diri' => $LihatDataDiriNext));
    } 
    
    else {
        return view('auth.login');        
    }
}

    public function edit_data_diri_proses(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;
    //dd($CekRole);
        if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {
            $id = $request->session()->get('id');
            $nama = $request->get('nama');
            $nik = $request->get('nik');
            $email = $request->get('email');
            $no_hp = $request->get('no_hp');
            $bagian = $request->get('bagian');
            $jabatan = $request->get('jabatan');
    
            $file = $request->file('img');
            $fileName = $file->hashName();
            $storeFile = $file->store('public/foto');
    
            $userDb = DB::table('users')->where('id', $id)
            
                                        ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
            //dd($userDb);
            //dd($userDb);
            $request->session()->put('img_url', $fileName);
            return redirect()->action('HomeController_2@data_diri');
            
        } 
    
        else {
            return view('auth.login');        
        }
}



public function nilai_diri_sendiri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;

    $LihatUser = DB::table('users');
    $LihatUserNext = $LihatUser->where('id', $id)->first();
    
    
    if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {

        $id = $request->session()->get('id');
        $LihatDataDiri = DB::table('users');
        $LihatDataDiriNext = $LihatDataDiri->where('id', $id)->first();

        return view('ketua-tim.diri-sendiri-form',  array('lihat_user' => $LihatUserNext));
    } 
    
    else {
        return view('auth.login');        
    }
}












public function nilai_diri_sendiri_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;
    //dd($CekRole);
    if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {

        $LihatUser = DB::table('users');
        $id = $request->session()->get('id');
        $LihatUserNext = $LihatUser->where('id', $id)->first();

        
        $nama = $request->get('nama');
        //dd($nama);
        $nik = $request->get('nik');
        $email = $request->get('email');
        $no_hp = $request->get('no_hp');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');


        $kompetensi_4 = $request->get('kompetensi_4');
        $kompetensi_4_alasan = $request->get('kompetensi_4_alasan');

       
        $kompetensi_6 = $request->get('kompetensi_6');
        $kompetensi_6_alasan = $request->get('kompetensi_6_alasan');

        $kompetensi_7 = $request->get('kompetensi_7');
        $kompetensi_7_alasan = $request->get('kompetensi_7_alasan');
        
        $kompetensi_8 = $request->get('kompetensi_8');
        $kompetensi_8_alasan = $request->get('kompetensi_8_alasan');


        $kompetensi_10 = $request->get('kompetensi_10');
        $kompetensi_10_alasan = $request->get('kompetensi_10_alasan');

        $kompetensi_11 = $request->get('kompetensi_11');
        $kompetensi_11_alasan = $request->get('kompetensi_11_alasan');
        
        $kompetensi_13 = $request->get('kompetensi_13');
        $kompetensi_13_alasan = $request->get('kompetensi_13_alasan');
        
        $kompetensi_17 = $request->get('kompetensi_17');
        $kompetensi_17_alasan = $request->get('kompetensi_17_alasan');




        $jumlah= $kompetensi_4+$kompetensi_6+$kompetensi_7+$kompetensi_8+$kompetensi_10+$kompetensi_11+$kompetensi_13+$kompetensi_17;
        $rata_rata = $jumlah/8;

        if($rata_rata>=1 && $rata_rata<=1.5){
            $sebutan = 'Sangat Kurang';
        }
        elseif($rata_rata>=1.6 && $rata_rata<=2.5){
            $sebutan = 'Kurang';
        }
        elseif($rata_rata>=2.6 && $rata_rata<=3.5){
            $sebutan = 'Cukup';
        }
        elseif($rata_rata>=3.5 && $rata_rata<=4.5){
            $sebutan = 'Baik';
        }
        elseif($rata_rata>=4.6 && $rata_rata<=5){
            $sebutan = 'Sangat Baik';
        }
        else{
            $sebutan = "kesalahan-input-nilai";
        }



        $NilaiDiriSendiriDbCheck = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id',$id)->get();
        //dd(isset($NilaiDiriSendiriDbCheck[0]));

        $date = date('Y-m-d H:i:s');
        dd($date);

        if(isset($NilaiDiriSendiriDbCheck[0]) == true ){
            $NilaiDiriSendiriDb = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id',$id)
            ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
            
            'kompetensi_4_alasan' => $kompetensi_4_alasan,
            'kompetensi_4' => $kompetensi_4,

            'kompetensi_6_alasan' => $kompetensi_6_alasan,
            'kompetensi_6' => $kompetensi_6,

            'kompetensi_7_alasan' => $kompetensi_7_alasan,
            'kompetensi_7'  =>  $kompetensi_7,
            
            'kompetensi_8' =>$kompetensi_8,
            'kompetensi_8_alasan' => $kompetensi_8_alasan,


            'kompetensi_10' => $kompetensi_10,
            'kompetensi_10_alasan' => $kompetensi_10_alasan,

            'kompetensi_11' => $kompetensi_11,
            'kompetensi_11_alasan' => $kompetensi_11_alasan,


            'kompetensi_13' => $kompetensi_13,
            'kompetensi_13_alasan' => $kompetensi_13_alasan,



            'kompetensi_17' => $kompetensi_17,
            'kompetensi_17_alasan' => $kompetensi_17_alasan,
            

            'jumlah' => $jumlah,
            'rata_rata' => $rata_rata,
            'sebutan' => $sebutan,
            'tanggal_penilaian' =>$date                                   
            ]);
            //dd($NilaiDiriSendiriDb);
            return redirect()->action('HomeController_2@nilai_diri_sendiri');
        } 
        elseif (isset($NilaiDiriSendiriDbCheck[0]) == false ){
            $NilaiDiriSendiriDb = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id',$id)
            ->insert(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
            'kompetensi_4_alasan' => $kompetensi_4_alasan,
            'kompetensi_4' => $kompetensi_4,

            'kompetensi_6_alasan' => $kompetensi_6_alasan,
            'kompetensi_6' => $kompetensi_6,

            'kompetensi_7_alasan' => $kompetensi_7_alasan,
            'kompetensi_7'  =>  $kompetensi_7,
            
            'kompetensi_8' =>$kompetensi_8,
            'kompetensi_8_alasan' => $kompetensi_8_alasan,


            'kompetensi_10' => $kompetensi_10,
            'kompetensi_10_alasan' => $kompetensi_10_alasan,

            'kompetensi_11' => $kompetensi_11,
            'kompetensi_11_alasan' => $kompetensi_11_alasan,


            'kompetensi_13' => $kompetensi_13,
            'kompetensi_13_alasan' => $kompetensi_13_alasan,


            'kompetensi_17' => $kompetensi_17,
            'kompetensi_17_alasan' => $kompetensi_17_alasan,

            'jumlah' => $jumlah,
            'rata_rata' => $rata_rata,
            'sebutan' => $sebutan,         
            'tanggal_penilaian' =>$date                             
            ]);
            return redirect()->action('HomeController_2@nilai_diri_sendiri');
        }
        
    } 
    
    else {
        return view('auth.login');        
    }
}



public function riwayat_penilaian_diri_sendiri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;
    $riwayat_diri_sendiri = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id', $id)->first();
    
   
    
    if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {

        if ($riwayat_diri_sendiri != null){
            return view('ketua-tim.riwayat-penilaian-diri-sendiri',array('lihat_riwayat' => $riwayat_diri_sendiri));
            }
            else{
            return redirect()->action('HomeController_2@nilai_diri_sendiri');    
            }
        }
    
        else{
        return view('auth.login');        
    }
}


public function report_nilai_diri_sendiri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;
   
    
   
    
    if($request->session()->get('login') && $CekRole == 'Ketua Tim' || $request->session()->get('login') && $CekRole == 'ketua tim' ) {

        $id = $request->session()->get('id');
        $date = date('Y-m-d H:i:s');

        $cek_nilai_diri_sendiri = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id', $id)->first();
        if($cek_nilai_diri_sendiri != null){
            return view('ketua-tim.lihat-hasil-report-diri-sendiri', array('lihat_nilai' => $cek_nilai_diri_sendiri, 'tanggal_print' => $date));
        }
        else{
            return redirect()->action('HomeController_2@dashboard');    
            
        }

        
    } 
    
        else{
        return view('auth.login');        
    }
}










































}
