<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function dashboard(Request $request) {
        $id = $request->session()->get('id');

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login')) {
            return view('user.dashboard');
        } else {
            return view('auth.login');
        }
   }



   public function nilai_diri_sendiri(Request $request) {
        $id = $request->session()->get('id');

        $LihatUser = DB::table('users');
        $LihatUserNext = $LihatUser->where('id', $id)->first();

        $LihatNilai= DB::table('nilai-dari-karyawan-untuk-karyawan');

           if($request->session()->get('login')) {
            return view('user.diri-sendiri-form',array('lihat_user' => $LihatUserNext, 'lihat_nilai' => $LihatNilai));
        } else {
            return view('auth.login');
        }
   }



   public function nilai_diri_sendiri_proses(Request $request) {
    if($request->session()->get('login')) {
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
            ]);
            return redirect()->action('HomeController@nilai_rekan_kerja');
        }
                                   
   }
   else{
       return view('auth.login');
   }
}




    public function riwayat_penilaian_diri_sendiri(Request $request) {
    $id = $request->session()->get('id');

    $riwayat_diri_sendiri = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id', $id)->first();
    //dd($riwayat_diri_sendiri);
    
    /*$LihatUser = DB::table('users');
    $request = $LihatUser->where('id', $id)->first();

    $LihatNilai= DB::table('nilai-dari-karyawan-untuk-karyawan'); */

       if($request->session()->get('login')) {
        return view('user.riwayat-penilaian-diri-sendiri',array('lihat_riwayat' => $riwayat_diri_sendiri));
    } else {
        return view('auth.login');
    }
}


    




   public function nilai_rekan_kerja(Request $request) {
    $id = $request->session()->get('id');
    
    $lihat_user = DB::table('users')->where('id',$id)->first();

    $LihatUserSpesial = DB::table('users')->where([['jabatan','=', 'officer'],])->get();
    
           
    
    if($request->session()->get('login')) {

        return view('user.rekan-kerja-form', array('lihat_user' => $lihat_user,'LihatUserSpesial' => $LihatUserSpesial));
    } 
    else {
        return view('auth.login');
    }
}







   public function nilai_rekan_kerja_proses(Request $request) {
    if($request->session()->get('login')) {
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

        $NilaiKaryawanDbCheck = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('id',$id)->get();
        //dd(isset($NilaiDiriSendiriDbCheck[0]));

        if(isset($NilaiKaryawanDbCheck[0]) == true ){
            $NilaiKaryawanDb = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('id',$id)
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
            'nama_karyawan_yang_dinilai' => $pilihan_nama                                
            ]);
            //dd($NilaiDiriSendiriDb);
            return redirect()->action('HomeController@nilai_rekan_kerja');
        } 
        elseif (isset($NilaiDiriSendiriDbCheck[0]) == false ){
            $NilaiKaryawanDb = DB::table('nilai-dari-karyawan-untuk-karyawan')->where('id',$id)
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
            'nama_karyawan_yang_dinilai' => $pilihan_nama                                
            ]);
            //dd($NilaiDiriSendiriDb);
            return redirect()->action('HomeController@nilai_rekan_kerja');
        }
                                   
   }
   else{
       return view('auth.login');
   }
   
}






public function nilai_ketua_tim(Request $request) {
    $id = $request->session()->get('id');
    
           
    
               if($request->session()->get('login')) {
                return view('user.ketua-tim-form');
            } else {
                return view('auth.login');
            }
   }




   public function nilai_pimpinan(Request $request) {
    $id = $request->session()->get('id');
    
           
    
               if($request->session()->get('login')) {
                return view('user.pimpinan-form');
            } else {
                return view('auth.login');
            }
   }



    public function komplain_nilai(Request $request) {
        $id = $request->session()->get('id');

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login')) {
            return view('user.komplain-nilai');
        } else {
            return view('auth.login');
        }
   }


   public function report_nilai_diri_sendiri(Request $request) {
        $id = $request->session()->get('id');

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

        $date = date('d-m-Y H:i:s');

        $LihatUser = DB::table('users');
        $request = $LihatUser->where('id', $id)->first();

        $LihatTableNilaiDiriSendiri= DB::table('nilai-diri-sendiri')->where('id',$id)->first();


           if($request->session()->get('login')) {
            return view('user.lihat-hasil-report-diri-sendiri',array('date' => $date, 'lihat_user' => $request, 'lihat_table_nilai_diri_sendiri' => $LihatTableNilaiDiriSendiri));
        } else {
            return view('auth.login');
        }
   }


    public function report_nilai_dari_rekan_kerja_dan_atasan(Request $request) {
        $id = $request->session()->get('id');

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

        $date = date('Y-m-d H:i:s');

           if($request->session()->get('login')) {
            return view('user.lihat-hasil-report-dari-orang-lain',array('date' => $date));
        } else {
            return view('auth.login');
        }
   }
   

   public function data_diri(Request $request) {
        if($request->session()->get('login')) {
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
    if($request->session()->get('login')) {
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
