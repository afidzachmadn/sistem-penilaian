<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   /* public function __construct() {
        $this->middleware('checkLogin');
        $this->middleware('isKaryawan');
    }*/
    //
    public function dashboard(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;


        //dd($CekRole);
        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            return view('user.dashboard');
        } else {
            return view('auth.login');
        }
   }


/* ---------------------------------------- DIRI SENDIRI -----------------------------------------------------------*/

   public function nilai_diri_sendiri(Request $request) {
        $id = $request->session()->get('id');
        $cek_role = DB::table('users')->where('id',$id)->first();
        $CekRole = $cek_role -> jabatan;


        $LihatUser = DB::table('users');
        $LihatUserNext = $LihatUser->where('id', $id)->first();

        

        if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            return view('user.diri-sendiri-form',array('lihat_user' => $LihatUserNext));
        } else {
            return view('auth.login');

        }
   }



   public function nilai_diri_sendiri_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
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


        $kompetensi_1 = $request->get('kompetensi_1');
        $kompetensi_1_alasan = $request->get('kompetensi_1_alasan');
        $kompetensi_2 = $request->get('kompetensi_2');
        $kompetensi_2_alasan = $request->get('kompetensi_2_alasan');
        $kompetensi_3 = $request->get('kompetensi_3');
        $kompetensi_3_alasan = $request->get('kompetensi_3_alasan');
        $kompetensi_4 = $request->get('kompetensi_4');
        $kompetensi_4_alasan = $request->get('kompetensi_4_alasan');
        $kompetensi_5 = $request->get('kompetensi_5');
        $kompetensi_5_alasan = $request->get('kompetensi_5_alasan');
        $kompetensi_6 = $request->get('kompetensi_6');
        $kompetensi_6_alasan = $request->get('kompetensi_6_alasan');
        $kompetensi_7 = $request->get('kompetensi_7');
        $kompetensi_7_alasan = $request->get('kompetensi_7_alasan');
        $kompetensi_8 = $request->get('kompetensi_8');
        $kompetensi_8_alasan = $request->get('kompetensi_8_alasan');
        $kompetensi_9 = $request->get('kompetensi_9');
        $kompetensi_9_alasan = $request->get('kompetensi_9_alasan');
        $kompetensi_10 = $request->get('kompetensi_10');
        $kompetensi_10_alasan = $request->get('kompetensi_10_alasan');
        $kompetensi_11 = $request->get('kompetensi_11');
        $kompetensi_11_alasan = $request->get('kompetensi_11_alasan');
        $kompetensi_12 = $request->get('kompetensi_12');
        $kompetensi_12_alasan = $request->get('kompetensi_12_alasan');
        $kompetensi_13 = $request->get('kompetensi_13');
        $kompetensi_13_alasan = $request->get('kompetensi_13_alasan');
        $kompetensi_14 = $request->get('kompetensi_14');
        $kompetensi_14_alasan = $request->get('kompetensi_14_alasan');
        $kompetensi_15 = $request->get('kompetensi_15');
        $kompetensi_15_alasan = $request->get('kompetensi_15_alasan');
        $kompetensi_16 = $request->get('kompetensi_16');
        $kompetensi_16_alasan = $request->get('kompetensi_16_alasan');
        $kompetensi_17 = $request->get('kompetensi_17');
        $kompetensi_17_alasan = $request->get('kompetensi_17_alasan');
        $kompetensi_18 = $request->get('kompetensi_18');
        $kompetensi_18_alasan = $request->get('kompetensi_18_alasan');




        $jumlah= $kompetensi_1+$kompetensi_2+$kompetensi_3+$kompetensi_4+$kompetensi_5+$kompetensi_6+$kompetensi_7+$kompetensi_8+$kompetensi_9+$kompetensi_10+$kompetensi_11+$kompetensi_12+$kompetensi_13+$kompetensi_14+$kompetensi_15+$kompetensi_16+$kompetensi_17+$kompetensi_18;
        $rata_rata = $jumlah/18;

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

        if(isset($NilaiDiriSendiriDbCheck[0]) == true ){
            $NilaiDiriSendiriDb = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id',$id)
            ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
            'kompetensi_1_alasan' => $kompetensi_1_alasan,
            'kompetensi_1'  =>  $kompetensi_1,

            'kompetensi_2_alasan' => $kompetensi_2_alasan,
            'kompetensi_2' => $kompetensi_2,

            'kompetensi_3_alasan' => $kompetensi_3_alasan,
            'kompetensi_3'  =>  $kompetensi_3,

            'kompetensi_4_alasan' => $kompetensi_4_alasan,
            'kompetensi_4' => $kompetensi_4,

            'kompetensi_5_alasan' => $kompetensi_5_alasan,
            'kompetensi_5' => $kompetensi_5,

            'kompetensi_6_alasan' => $kompetensi_6_alasan,
            'kompetensi_6' => $kompetensi_6,

            'kompetensi_7_alasan' => $kompetensi_7_alasan,
            'kompetensi_7'  =>  $kompetensi_7,
            
            'kompetensi_8' =>$kompetensi_8,
            'kompetensi_8_alasan' => $kompetensi_8_alasan,

            'kompetensi_9' => $kompetensi_9,
            'kompetensi_9_alasan' => $kompetensi_9_alasan,

            'kompetensi_10' => $kompetensi_10,
            'kompetensi_10_alasan' => $kompetensi_10_alasan,

            'kompetensi_11' => $kompetensi_11,
            'kompetensi_11_alasan' => $kompetensi_11_alasan,

            'kompetensi_12' => $kompetensi_12,
            'kompetensi_12_alasan' => $kompetensi_12_alasan,

            'kompetensi_13' => $kompetensi_13,
            'kompetensi_13_alasan' => $kompetensi_13_alasan,

            'kompetensi_14' => $kompetensi_14,
            'kompetensi_14_alasan' => $kompetensi_14_alasan,

            'kompetensi_15' => $kompetensi_15,
            'kompetensi_15_alasan' => $kompetensi_15_alasan,

            'kompetensi_16' => $kompetensi_16,
            'kompetensi_16_alasan' => $kompetensi_16_alasan,

            'kompetensi_17' => $kompetensi_17,
            'kompetensi_17_alasan' => $kompetensi_17_alasan,
            
            'kompetensi_18' => $kompetensi_18,
            'kompetensi_18_alasan' => $kompetensi_18_alasan,

            'jumlah' => $jumlah,
            'rata_rata' => $rata_rata,
            'sebutan' => $sebutan,
            'tanggal_penilaian' =>$date                                   
            ]);
            //dd($NilaiDiriSendiriDb);
            return redirect()->action('HomeController@nilai_diri_sendiri');
        } 
        elseif (isset($NilaiDiriSendiriDbCheck[0]) == false ){
            $NilaiDiriSendiriDb = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id',$id)
            ->insert(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
            'kompetensi_1_alasan' => $kompetensi_1_alasan,
            'kompetensi_1'  =>  $kompetensi_1,

            'kompetensi_2_alasan' => $kompetensi_2_alasan,
            'kompetensi_2' => $kompetensi_2,

            'kompetensi_3_alasan' => $kompetensi_3_alasan,
            'kompetensi_3'  =>  $kompetensi_3,

            'kompetensi_4_alasan' => $kompetensi_4_alasan,
            'kompetensi_4' => $kompetensi_4,

            'kompetensi_5_alasan' => $kompetensi_5_alasan,
            'kompetensi_5' => $kompetensi_5,

            'kompetensi_6_alasan' => $kompetensi_6_alasan,
            'kompetensi_6' => $kompetensi_6,

            'kompetensi_7_alasan' => $kompetensi_7_alasan,
            'kompetensi_7'  =>  $kompetensi_7,
            
            'kompetensi_8' =>$kompetensi_8,
            'kompetensi_8_alasan' => $kompetensi_8_alasan,

            'kompetensi_9' => $kompetensi_9,
            'kompetensi_9_alasan' => $kompetensi_9_alasan,

            'kompetensi_10' => $kompetensi_10,
            'kompetensi_10_alasan' => $kompetensi_10_alasan,

            'kompetensi_11' => $kompetensi_11,
            'kompetensi_11_alasan' => $kompetensi_11_alasan,

            'kompetensi_12' => $kompetensi_12,
            'kompetensi_12_alasan' => $kompetensi_12_alasan,

            'kompetensi_13' => $kompetensi_13,
            'kompetensi_13_alasan' => $kompetensi_13_alasan,

            'kompetensi_14' => $kompetensi_14,
            'kompetensi_14_alasan' => $kompetensi_14_alasan,

            'kompetensi_15' => $kompetensi_15,
            'kompetensi_15_alasan' => $kompetensi_15_alasan,

            'kompetensi_16' => $kompetensi_16,
            'kompetensi_16_alasan' => $kompetensi_16_alasan,

            'kompetensi_17' => $kompetensi_17,
            'kompetensi_17_alasan' => $kompetensi_17_alasan,
            
            'kompetensi_18' => $kompetensi_18,
            'kompetensi_18_alasan' => $kompetensi_18_alasan,

            'jumlah' => $jumlah,
            'rata_rata' => $rata_rata,
            'sebutan' => $sebutan,         
            'tanggal_penilaian' =>$date                             
            ]);
            return redirect()->action('HomeController@nilai_diri_sendiri');
        }
                                   
   }
   else{
        return view('auth.login');

   }
}




    public function riwayat_penilaian_diri_sendiri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;

    $riwayat_diri_sendiri = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id', $id)->first();
    //dd($riwayat_diri_sendiri);
    
    /*$LihatUser = DB::table('users');
    $request = $LihatUser->where('id', $id)->first();

    $LihatNilai= DB::table('nilai-dari-karyawan-untuk-karyawan'); */

    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        if ($riwayat_diri_sendiri != null){
        return view('user.riwayat-penilaian-diri-sendiri',array('lihat_riwayat' => $riwayat_diri_sendiri));
        }
        else{
        return redirect()->action('HomeController@nilai_diri_sendiri');    
        }
    }
    else {
        return view('auth.login');

    }
}

public function report_nilai_diri_sendiri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;



    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $id = $request->session()->get('id');
        $date = date('Y-m-d H:i:s');

        $cek_nilai_diri_sendiri = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id', $id)->first();
        if($cek_nilai_diri_sendiri != null){
            return view('user.lihat-hasil-report-diri-sendiri', array('lihat_nilai' => $cek_nilai_diri_sendiri, 'tanggal_print' => $date));
        }
        else{
            return redirect()->action('HomeController@dashboard');    
            
        }

        
    } 
    
    else {
        return view('auth.login');

    }
}
/* -------------------------------------------------------------------------------------------------------------------- */


    






















/*-------------------------------------- REKAN KERJA ------------------------------------------------------------*/

   public function nilai_rekan_kerja(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    
    $lihat_user = DB::table('users')->where('id',$id)->first();

    $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'officer'],])->get();
    
           
    
    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {

        return view('user.rekan-kerja-form', array('lihat_user' => $lihat_user,'LihatUserSpesial' => $LihatUserSpesial));
    } 
    else {
        return view('auth.login');

    }
}


   public function nilai_rekan_kerja_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $LihatUser = DB::table('users');
        $id = $request->session()->get('id');
        $LihatUserNext = $LihatUser->where('id', $id)->first();

       

        //dd($LihatUserSpesial);

        
        $nama = $request->get('nama');
        //dd($nama);
        $nik = $request->get('nik');
        $email = $request->get('email');
        $no_hp = $request->get('no_hp');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');



        $pilihan_nama = $request->get('pilihan_nama');
        $kompetensi_1 = $request->get('kompetensi_1');
        $kompetensi_1_alasan = $request->get('kompetensi_1_alasan');
        $kompetensi_2 = $request->get('kompetensi_2');
        $kompetensi_2_alasan = $request->get('kompetensi_2_alasan');
        $kompetensi_3 = $request->get('kompetensi_3');
        $kompetensi_3_alasan = $request->get('kompetensi_3_alasan');
        $kompetensi_4 = $request->get('kompetensi_4');
        $kompetensi_4_alasan = $request->get('kompetensi_4_alasan');
        $kompetensi_5 = $request->get('kompetensi_5');
        $kompetensi_5_alasan = $request->get('kompetensi_5_alasan');
        $kompetensi_6 = $request->get('kompetensi_6');
        $kompetensi_6_alasan = $request->get('kompetensi_6_alasan');
        $kompetensi_7 = $request->get('kompetensi_7');
        $kompetensi_7_alasan = $request->get('kompetensi_7_alasan');
        $kompetensi_8 = $request->get('kompetensi_8');
        $kompetensi_8_alasan = $request->get('kompetensi_8_alasan');
        $kompetensi_9 = $request->get('kompetensi_9');
        $kompetensi_9_alasan = $request->get('kompetensi_9_alasan');
        $kompetensi_10 = $request->get('kompetensi_10');
        $kompetensi_10_alasan = $request->get('kompetensi_10_alasan');
        $kompetensi_11 = $request->get('kompetensi_11');
        $kompetensi_11_alasan = $request->get('kompetensi_11_alasan');
        $kompetensi_12 = $request->get('kompetensi_12');
        $kompetensi_12_alasan = $request->get('kompetensi_12_alasan');
        $kompetensi_13 = $request->get('kompetensi_13');
        $kompetensi_13_alasan = $request->get('kompetensi_13_alasan');
        $kompetensi_14 = $request->get('kompetensi_14');
        $kompetensi_14_alasan = $request->get('kompetensi_14_alasan');
        $kompetensi_15 = $request->get('kompetensi_15');
        $kompetensi_15_alasan = $request->get('kompetensi_15_alasan');
        $kompetensi_16 = $request->get('kompetensi_16');
        $kompetensi_16_alasan = $request->get('kompetensi_16_alasan');
        $kompetensi_17 = $request->get('kompetensi_17');
        $kompetensi_17_alasan = $request->get('kompetensi_17_alasan');
        $kompetensi_18 = $request->get('kompetensi_18');
        $kompetensi_18_alasan = $request->get('kompetensi_18_alasan');




        $jumlah= $kompetensi_1+$kompetensi_2+$kompetensi_3+$kompetensi_4+$kompetensi_5+$kompetensi_6+$kompetensi_7+$kompetensi_8+$kompetensi_9+$kompetensi_10+$kompetensi_11+$kompetensi_12+$kompetensi_13+$kompetensi_14+$kompetensi_15+$kompetensi_16+$kompetensi_17+$kompetensi_18;
        $rata_rata = $jumlah/18;

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


        $user_check_db = DB::table('users')->where('nama',$pilihan_nama)->first();
        $nama_yang_dinilai = $user_check_db -> nama;
        $nik_yang_dinilai = $user_check_db -> nik;
        $bagian_yang_dinilai = $user_check_db -> bagian;
        $jabatan_yang_dinilai = $user_check_db -> jabatan;

        $NilaiKaryawanDbCheck = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('nama_yang_dinilai',$nama_yang_dinilai)->get();
        
        
        //dd($nik_test);
        //dd(isset($NilaiDiriSendiriDbCheck[0]));

        $date = date('Y-m-d H:i:s');

        
       
        $NilaiKaryawanDb = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('nama_yang_dinilai',$nama_yang_dinilai)
        ->insert(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
        'kompetensi_1_alasan' => $kompetensi_1_alasan,
        'kompetensi_1'  =>  $kompetensi_1,

        'kompetensi_2_alasan' => $kompetensi_2_alasan,
        'kompetensi_2' => $kompetensi_2,

        'kompetensi_3_alasan' => $kompetensi_3_alasan,
        'kompetensi_3'  =>  $kompetensi_3,

        'kompetensi_4_alasan' => $kompetensi_4_alasan,
        'kompetensi_4' => $kompetensi_4,

        'kompetensi_5_alasan' => $kompetensi_5_alasan,
        'kompetensi_5' => $kompetensi_5,

        'kompetensi_6_alasan' => $kompetensi_6_alasan,
        'kompetensi_6' => $kompetensi_6,

        'kompetensi_7_alasan' => $kompetensi_7_alasan,
        'kompetensi_7'  =>  $kompetensi_7,
            
        'kompetensi_8' =>$kompetensi_8,
        'kompetensi_8_alasan' => $kompetensi_8_alasan,

        'kompetensi_9' => $kompetensi_9,
        'kompetensi_9_alasan' => $kompetensi_9_alasan,

        'kompetensi_10' => $kompetensi_10,
        'kompetensi_10_alasan' => $kompetensi_10_alasan,

        'kompetensi_11' => $kompetensi_11,
        'kompetensi_11_alasan' => $kompetensi_11_alasan,

        'kompetensi_12' => $kompetensi_12,
        'kompetensi_12_alasan' => $kompetensi_12_alasan,

        'kompetensi_13' => $kompetensi_13,
        'kompetensi_13_alasan' => $kompetensi_13_alasan,

        'kompetensi_14' => $kompetensi_14,
        'kompetensi_14_alasan' => $kompetensi_14_alasan,

        'kompetensi_15' => $kompetensi_15,
        'kompetensi_15_alasan' => $kompetensi_15_alasan,

        'kompetensi_16' => $kompetensi_16,
        'kompetensi_16_alasan' => $kompetensi_16_alasan,

        'kompetensi_17' => $kompetensi_17,
        'kompetensi_17_alasan' => $kompetensi_17_alasan,
            
        'kompetensi_18' => $kompetensi_18,
        'kompetensi_18_alasan' => $kompetensi_18_alasan,

        'jumlah' => $jumlah,
        'rata_rata' => $rata_rata,
        'sebutan' => $sebutan,   
            
        'nama_yang_dinilai' => $nama_yang_dinilai,
        'nik_yang_dinilai'  =>  $nik_yang_dinilai,
        'bagian_yang_dinilai'   =>  $bagian_yang_dinilai,
        'jabatan_yang_dinilai'  =>  $jabatan_yang_dinilai,
        'tanggal_penilaian'     =>  $date,
        ]);
            //dd($NilaiDiriSendiriDb);
        return redirect()->action('HomeController@nilai_rekan_kerja');
                                   
   }
   else{
    return view('auth.login');

   }
   
}


public function riwayat_penilaian_untuk_karyawan(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;



    $riwayat_nilai_untuk_karyawan = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('id', $id)->get();
    
    
    /*$LihatUser = DB::table('users');
    $request = $LihatUser->where('id', $id)->first();

    $LihatNilai= DB::table('nilai-dari-karyawan-untuk-karyawan'); */

       if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $id = $request->session()->get('id');
        
        $lihat_user = DB::table('users')->where('id',$id)->first();
    
        $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'Ketua Tim'],])->get();
        
        return view('user.riwayat-penilaian-karyawan-lain',array('lihat_riwayat' => $riwayat_nilai_untuk_karyawan));
    } else {
        return view('auth.login');

    }
}

public function report_nilai_dari_rekan_kerja(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


        if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            $id = $request->session()->get('id');

            $lihat_user = DB::table('users')->where('id', $id)->first();
            $get_nama = $lihat_user -> nama;
            $date = date('Y-m-d H:i:s');
    
            $cek_nilai_dari_rekan_kerja = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('nama_yang_dinilai', $get_nama)->get();
            //dd($cek_nilai_dari_rekan_kerja);
    
            return view('user.lihat-hasil-report-dari-rekan-kerja', array('lihat_user' => $lihat_user, 'lihat_nilai' => $cek_nilai_dari_rekan_kerja, 'tanggal_print' => $date));
        } 
        
        else {
            return view('auth.login');

        }
    }

/* -------------------------------------------------------------------------------------------------------- */






















/* ------------------------------------------------------ KETUA TIM --------------------------------------------------*/



public function nilai_ketua_tim(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;



    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $id = $request->session()->get('id');
        
        $lihat_user = DB::table('users')->where('id',$id)->first();
    
        $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'ketua tim'],])->get();






        return view('user.ketua-tim-form', array('lihat_user' => $lihat_user,'LihatUserSpesial' => $LihatUserSpesial));
    } 

    else {
        return view('auth.login');

    }
}



public function nilai_ketua_tim_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $LihatUser = DB::table('users');
        $id = $request->session()->get('id');
        $LihatUserNext = $LihatUser->where('id', $id)->first();

       

        //dd($LihatUserSpesial);

        
        $nama = $request->get('nama');
        //dd($nama);
        $nik = $request->get('nik');
        $email = $request->get('email');
        $no_hp = $request->get('no_hp');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');



        $pilihan_nama = $request->get('pilihan_nama');
        
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


        $user_check_db = DB::table('users')->where('nama',$pilihan_nama)->first();
        $nama_yang_dinilai = $user_check_db -> nama;
        $nik_yang_dinilai = $user_check_db -> nik;
        $bagian_yang_dinilai = $user_check_db -> bagian;
        $jabatan_yang_dinilai = $user_check_db -> jabatan;

        //$NilaiKaryawanDbCheck = DB::table('nilai-dari-karyawan-untuk-ketua-tim')->where('nama_yang_dinilai',$nama_yang_dinilai)->get();
        
        
        //dd($nik_test);
        //dd(isset($NilaiDiriSendiriDbCheck[0]));


        $date = date('Y-m-d H:i:s');
        
       
        $NilaiKetuaTimDb = DB::table('nilai-dari-karyawan-untuk-ketua-tim')->where('nama_yang_dinilai',$nama_yang_dinilai)
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
            
        'nama_yang_dinilai' => $nama_yang_dinilai,
        'nik_yang_dinilai'  =>  $nik_yang_dinilai,
        'bagian_yang_dinilai'   =>  $bagian_yang_dinilai,
        'jabatan_yang_dinilai'  =>  $jabatan_yang_dinilai,
        'tanggal_penilaian' =>  $date
        ]);
            //dd($NilaiDiriSendiriDb);
        return redirect()->action('HomeController@nilai_ketua_tim');
                                   
   }
   else{
    return view('auth.login');

   }
   
}



public function riwayat_penilaian_untuk_ketua_tim(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;



    $riwayat_nilai_untuk_ketua_tim = DB::table('nilai-dari-karyawan-untuk-ketua-tim')->where('id', $id)->get();
    
    
    /*$LihatUser = DB::table('users');
    $request = $LihatUser->where('id', $id)->first();

    $LihatNilai= DB::table('nilai-dari-karyawan-untuk-karyawan'); */

       if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            if(isset($riwayat_nilai_untuk_ketua_tim) != true){
                $id = $request->session()->get('id');
                
                $lihat_user = DB::table('users')->where('id',$id)->first();
            
                $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'Ketua Tim'],])->get();
                
                return view('user.riwayat-penilaian-ketua-tim',array('lihat_riwayat' => $riwayat_nilai_untuk_ketua_tim));
            }
            else{
                return redirect()->action('HomeController@nilai_ketua_tim');                
            }
        
    } else {
        return view('auth.login');

    }
}

public function report_nilai_dari_ketua_tim(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;
    
        if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            $id = $request->session()->get('id');

            $lihat_user = DB::table('users')->where('id', $id)->first();
            $get_nama = $lihat_user -> nama;
            $date = date('Y-m-d H:i:s');
    
            $cek_nilai_dari_rekan_kerja = DB::table('nilai-dari-ketua-tim-untuk-karyawan')->where('nama_yang_dinilai', $get_nama)->get();
            //dd($cek_nilai_dari_rekan_kerja);
    
            return view('user.lihat-hasil-report-dari-ketua-tim', array('lihat_user' => $lihat_user, 'lihat_nilai' => $cek_nilai_dari_rekan_kerja, 'tanggal_print' => $date));
        } 
        
        else {
            return view('auth.login');

        }
}

/* --------------------------------------------------------------------------------------------------------------- */


















/* ----------------------------------------------- NILAI PIMPINAN ------------------------------------------------- */


   public function nilai_pimpinan(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $id = $request->session()->get('id');
        
        $lihat_user = DB::table('users')->where('id',$id)->first();
    
        $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'direksi'],])->get();






        return view('user.pimpinan-form', array('lihat_user' => $lihat_user,'LihatUserSpesial' => $LihatUserSpesial));
    } 

    else {
        return view('auth.login');

    }
}

public function nilai_pimpinan_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
        $LihatUser = DB::table('users');
        $id = $request->session()->get('id');
        $LihatUserNext = $LihatUser->where('id', $id)->first();

       

        //dd($LihatUserSpesial);

        
        $nama = $request->get('nama');
        //dd($nama);
        $nik = $request->get('nik');
        $email = $request->get('email');
        $no_hp = $request->get('no_hp');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');



        $pilihan_nama = $request->get('pilihan_nama');
        
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


        $user_check_db = DB::table('users')->where('nama',$pilihan_nama)->first();
        $nama_yang_dinilai = $user_check_db -> nama;
        $nik_yang_dinilai = $user_check_db -> nik;
        $bagian_yang_dinilai = $user_check_db -> bagian;
        $jabatan_yang_dinilai = $user_check_db -> jabatan;

        //$NilaiKaryawanDbCheck = DB::table('nilai-dari-karyawan-untuk-ketua-tim')->where('nama_yang_dinilai',$nama_yang_dinilai)->get();
        
        
        //dd($nik_test);
        //dd(isset($NilaiDiriSendiriDbCheck[0]));

        $date = date('Y-m-d H:i:s');

        
       
        $NilaiKetuaTimDb = DB::table('nilai-dari-karyawan-untuk-direksi')->where('nama_yang_dinilai',$nama_yang_dinilai)
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
            
        'nama_yang_dinilai' => $nama_yang_dinilai,
        'nik_yang_dinilai'  =>  $nik_yang_dinilai,
        'bagian_yang_dinilai'   =>  $bagian_yang_dinilai,
        'jabatan_yang_dinilai'  =>  $jabatan_yang_dinilai,
        'tanggal_penilaian' =>  $date
        ]);
            //dd($NilaiDiriSendiriDb);
        return redirect()->action('HomeController@nilai_pimpinan');
                                   
   }
   else{
    return view('auth.login');

   }
   
}


public function riwayat_penilaian_untuk_pimpinan(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;



    $riwayat_nilai_untuk_direksi = DB::table('nilai-dari-karyawan-untuk-direksi')->where('id', $id)->get();
    
    //dd($riwayat_nilai_untuk_direksi);
    /*$LihatUser = DB::table('users');
    $request = $LihatUser->where('id', $id)->first();

    $LihatNilai= DB::table('nilai-dari-karyawan-untuk-karyawan'); */

       if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            if(isset($riwayat_nilai_untuk_direksi) != true){
                $id = $request->session()->get('id');
        
                $lihat_user = DB::table('users')->where('id',$id)->first();
    
                $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'direksi'],])->get();
        
                return view('user.riwayat-penilaian-pimpinan',array('lihat_riwayat' => $riwayat_nilai_untuk_direksi));
            }
            else{
                return redirect()->action('HomeController@nilai_pimpinan');
                
            }
    } 
    else {
        return view('auth.login');

    }
}


public function report_nilai_dari_pimpinan(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    
        if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            $id = $request->session()->get('id');

            $lihat_user = DB::table('users')->where('id', $id)->first();
            $get_nama = $lihat_user -> nama;
            $date = date('Y-m-d H:i:s');
    
            $cek_nilai_dari_rekan_kerja = DB::table('nilai-dari-direksi-untuk-karyawan')->where('nama_yang_dinilai', $get_nama)->get();
            //dd($cek_nilai_dari_rekan_kerja);
    
            return view('user.lihat-hasil-report-dari-pimpinan', array('lihat_user' => $lihat_user, 'lihat_nilai' => $cek_nilai_dari_rekan_kerja, 'tanggal_print' => $date));
        } 
        
        else {
            return view('auth.login');

        }
}

/* -------------------------------------------------------------------------------------------------------------------- */

   

































public function komplain_nilai(Request $request) {
        $id = $request->session()->get('id');

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            return view('user.komplain-nilai');
        } else {
            return view('auth.login');

        }
   }


  


    
   
















/* ------------------------------------------------- DATA DIRI /edit ------------------------------------------------ */
   public function data_diri(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


        if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
            $id = $request->session()->get('id');

            $LihatDataDiri = DB::table('users');
            $LihatDataDiriNext = $LihatDataDiri->where('id', $id)->first();
        
            return view('user.data-diri', array('data_diri' => $LihatDataDiriNext));
       }
       else{
            return view('auth.login');

       }
   }

   public function edit_data_diri_proses(Request $request) {
    $id = $request->session()->get('id');
    $cek_role = DB::table('users')->where('id',$id)->first();
    $CekRole = $cek_role -> jabatan;


    if($request->session()->get('login') && $CekRole == 'officer' || $request->session()->get('login') && $CekRole == 'Officer') {
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
        return redirect()->action('HomeController@data_diri');
   }
   else{
        return view('auth.login');

   }
}

   




}
