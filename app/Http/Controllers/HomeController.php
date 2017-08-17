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
        $id = $request->session()->get('id');
        $nama = $request->get('nama');
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
        //dd($rata_rata);
      //  where([['status_pembayaran_SNI','=','terbayar'],['surat_pengesahan_SNI','=','default-pengesahan-sni.pdf'],])

        $NilaiDiriSendiriDbCheck = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')->where('id',$id)->get();
        //dd(isset($NilaiDiriSendiriDbCheck[0]));

        if(isset($NilaiDiriSendiriDbCheck[0]) == true ){
            $NilaiDiriSendiriDb = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')
            ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
            'kompetensi_4' => $kompetensi_4,
            'kompetensi_4_alasan' => $kompetensi_4_alasan,
            'kompetensi_6' => $kompetensi_6,
            'kompetensi_6_alasan' => $kompetensi_6_alasan,
            'kompetensi_7' => $kompetensi_7,
            'kompetensi_7_alasan' => $kompetensi_7_alasan,
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
            ]);
            //dd($NilaiDiriSendiriDb);
            return redirect()->action('HomeController@nilai_diri_sendiri');
        } 
        elseif (isset($NilaiDiriSendiriDbCheck[0]) == false ){
            $NilaiDiriSendiriDb = DB::table('nilai-dari-diri-sendiri-untuk-diri-sendiri')
            ->insert(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'no_hp' => $no_hp, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 
            'kompetensi_4' => $kompetensi_4,
            'kompetensi_4_alasan' => $kompetensi_4_alasan,
            'kompetensi_6' => $kompetensi_6,
            'kompetensi_6_alasan' => $kompetensi_6_alasan,
            'kompetensi_7' => $kompetensi_7,
            'kompetensi_7_alasan' => $kompetensi_7_alasan,
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
            ]);
        }
                                   
   }
   else{
       return view('auth.login');
   }
}




   public function nilai_rekan_kerja(Request $request) {
    $id = $request->session()->get('id');
    
            $LihatUser = DB::table('users');
            $LihatUserNext = $LihatUser->where('id', $id)->first();
            $LihatUserNextGet = DB::table('nilai-untuk-orang-lain')->where([['nilai_kesetiaan_untuk_karyawan_1','=',null],['nilai_kesetiaan_untuk_karyawan_2','=',null],['nilai_kesetiaan_untuk_pimpinan','=',null],])->get();

            
    
            $LihatTableNilaiUntukOrangLain= DB::table('nilai-untuk-orang-lain')->where('id',$id)->first();

            
            //$userList = DB::table('users')->where('status_ISO', 'terverifikasi')->get();
    
               if($request->session()->get('login')) {
                return view('user.rekan-kerja-form',array('lihat_user' => $LihatUserNext, 'lihat_table_nilai_untuk_orang_lain' => $LihatTableNilaiUntukOrangLain, 'lihat_user_next_get' => $LihatUserNextGet));
            } else {
                return view('auth.login');
            }
   }



   public function nilai_rekan_kerja_proses(Request $request) {

    if($request->session()->get('login')) {
        $id = $request->session()->get('id');
        $nama = $request->get('nama');
        $nik = $request->get('nik');
        $email = $request->get('email');
        $pangkat_golongan_ruang = $request->get('pangkat_golongan_ruang');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');
        $nama_karyawan_1 = $request->get('nama_karyawan_1');
        $nama_karyawan_2 = $request->get('nama_karyawan_2');
        $nama_pimpinan = $request->get('nama_pimpinan');


        $nilai_kesetiaan_untuk_karyawan_1 = $request->get('nilai_kesetiaan_untuk_karyawan_1');
        $nilai_prestasi_kerja_untuk_karyawan_1 = $request->get('nilai_prestasi_kerja_untuk_karyawan_1');
        $nilai_tanggung_jawab_untuk_karyawan_1 = $request->get('nilai_tanggung_untuk_karyawan_1');
        $nilai_ketaatan_untuk_karyawan_1 = $request->get('nilai_ketaatan_untuk_karyawan_1');
        $nilai_kejujuran_untuk_karyawan_1 = $request->get('nilai_kejujuran_untuk_karyawan_1');
        $nilai_kerjasama_untuk_karyawan_1 = $request->get('nilai_kerjasama_untuk_karyawan_1');
        $nilai_prakarsa_untuk_karyawan_1 = $request->get('nilai_prakarsa_untuk_karyawan_1');
        $nilai_kepemimpinan_untuk_karyawan_1 = $request->get('nilai_kepemimpinan_untuk_karyawan_1');

        $nilai_kesetiaan_untuk_karyawan_2 = $request->get('nilai_kesetiaan_untuk_karyawan_2');
        $nilai_prestasi_kerja_untuk_karyawan_2 = $request->get('nilai_prestasi_kerja_untuk_karyawan_2');
        $nilai_tanggung_jawab_untuk_karyawan_2 = $request->get('nilai_tanggung_jawab_untuk_karyawan_2');
        $nilai_ketaatan_untuk_karyawan_2 = $request->get('nilai_ketaatan_untuk_karyawan_2');
        $nilai_kejujuran_untuk_karyawan_2 = $request->get('nilai_kejujuran_untuk_karyawan_2');
        $nilai_kerjasama_untuk_karyawan_2 = $request->get('nilai_kerjasama_untuk_karyawan_2');
        $nilai_prakarsa_untuk_karyawan_2 = $request->get('nilai_prakarsa_untuk_karyawan_2');
        $nilai_kepemimpinan_untuk_karyawan_2 = $request->get('nilai_kepemimpinan_untuk_karyawan_2');

        $nilai_kesetiaan_untuk_pimpinan = $request->get('nilai_kesetiaan_untuk_pimpinan');
        $nilai_prestasi_kerja_untuk_pimpinan= $request->get('nilai_prestasi_kerja_untuk_pimpinan');
        $nilai_tanggung_jawab_untuk_pimpinan = $request->get('nilai_tanggung_jawab_untuk_pimpinan');
        $nilai_ketaatan_untuk_pimpinan = $request->get('nilai_ketaatan_untuk_pimpinan');
        $nilai_kejujuran_untuk_pimpinan = $request->get('nilai_kejujuran_untuk_pimpinan');
        $nilai_kerjasama_untuk_pimpinan = $request->get('nilai_kerjasama_untuk_pimpinan');
        $nilai_prakarsa_untuk_pimpinan = $request->get('nilai_prakarsa_untuk_pimpinan');
        $nilai_kepemimpinan_untuk_pimpinan = $request->get('nilai_kepemimpinan_untuk_pimpinan');


        $nilai_jumlah_untuk_karyawan_1= $nilai_kesetiaan_untuk_karyawan_1+$nilai_prestasi_kerja_untuk_karyawan_1+$nilai_tanggung_jawab_untuk_karyawan_1+$nilai_ketaatan_untuk_karyawan_1+$nilai_kejujuran_untuk_karyawan_1+$nilai_kerjasama_untuk_karyawan_1+$nilai_prakarsa_untuk_karyawan_1+$nilai_kepemimpinan_untuk_karyawan_1;
        
        $nilai_rata_rata_untuk_karyawan_1 = $nilai_jumlah_untuk_karyawan_1/8;


        $nilai_jumlah_untuk_karyawan_2= $nilai_kesetiaan_untuk_karyawan_2+$nilai_prestasi_kerja_untuk_karyawan_2+$nilai_tanggung_jawab_untuk_karyawan_2+$nilai_ketaatan_untuk_karyawan_2+$nilai_kejujuran_untuk_karyawan_2+$nilai_kerjasama_untuk_karyawan_2+$nilai_prakarsa_untuk_karyawan_2+$nilai_kepemimpinan_untuk_karyawan_2;
        
        $nilai_rata_rata_untuk_karyawan_2 = $nilai_jumlah_untuk_karyawan_2/8;


        $nilai_jumlah_untuk_pimpinan= $nilai_kesetiaan_untuk_pimpinan+$nilai_prestasi_kerja_untuk_pimpinan+$nilai_tanggung_jawab_untuk_pimpinan+$nilai_ketaatan_untuk_pimpinan+$nilai_kejujuran_untuk_pimpinan+$nilai_kerjasama_untuk_pimpinan+$nilai_prakarsa_untuk_pimpinan+$nilai_kepemimpinan_untuk_pimpinan;
        
        $nilai_rata_rata_untuk_pimpinan = $nilai_jumlah_untuk_pimpinan/8;


        if(($nilai_rata_rata_untuk_karyawan_1>=1 && $nilai_rata_rata_untuk_karyawan_1<=1.5) || ($nilai_rata_rata_untuk_karyawan_2>=1 && $nilai_rata_rata_untuk_karyawan_2<=1.5) || ($nilai_rata_rata_untuk_pimpinan>=1 && $nilai_rata_rata_untuk_pimpinan<=1.5)){
            $sebutan = 'Sangat Kurang';
        }
        elseif(($nilai_rata_rata_untuk_karyawan_1>=1.6 && $nilai_rata_rata_untuk_karyawan_1<=2.5) || ($nilai_rata_rata_untuk_karyawan_2>=1.6 && $nilai_rata_rata_untuk_karyawan_2<=2.5) || ($nilai_rata_rata_untuk_pimpinan>=1.6 && $nilai_rata_rata_untuk_pimpinan<=2.5)){
            $sebutan = 'Kurang';
        }
        elseif(($nilai_rata_rata_untuk_karyawan_1>=2.6 && $nilai_rata_rata_untuk_karyawan_1<=3.5) || ($nilai_rata_rata_untuk_karyawan_2>=2.6 && $nilai_rata_rata_untuk_karyawan_2<=3.5) || ($nilai_rata_rata_untuk_pimpinan>=2.6 && $nilai_rata_rata_untuk_pimpinan<=3.5)){
            $sebutan = 'Cukup';
        }
        elseif(($nilai_rata_rata_untuk_karyawan_1>=3.6 && $nilai_rata_rata_untuk_karyawan_1<=4.5) || ($nilai_rata_rata_untuk_karyawan_2>=3.6 && $nilai_rata_rata_untuk_karyawan_2<=4.5) || ($nilai_rata_rata_untuk_pimpinan>=3.6 && $nilai_rata_rata_untuk_pimpinan<=4.5)){
            $sebutan = 'Baik';
        }
        elseif(($nilai_rata_rata_untuk_karyawan_1>=4.6 && $nilai_rata_rata_untuk_karyawan_1<=5) || ($nilai_rata_rata_untuk_karyawan_2>=4.6 && $nilai_rata_rata_untuk_karyawan_2<=5) || ($nilai_rata_rata_untuk_pimpinan>=4.6 && $nilai_rata_rata_untuk_pimpinan<=5)){
            $sebutan = 'Sangat Baik';
        }
        else{
            $sebutan = "kesalahan-input-nilai";
        }
        //dd($nilai_rata_rata);


        $NilaiUntukOrangLainDb = DB::table('nilai-untuk-orang-lain')->where('id', $id)
                                    ->update(['nilai_kesetiaan_untuk_karyawan_1' => $nilai_kesetiaan_untuk_karyawan_1, 'nilai_kesetiaan_untuk_karyawan_2' => $nilai_kesetiaan_untuk_karyawan_2,
                                    'nilai_kesetiaan_untuk_pimpinan' => $nilai_kesetiaan_untuk_pimpinan,

                                    'nilai_prestasi_kerja_untuk_karyawan_1' => $nilai_prestasi_kerja_untuk_karyawan_1, 'nilai_prestasi_kerja_untuk_karyawan_2' => $nilai_prestasi_kerja_untuk_karyawan_2, 
                                    'nilai_prestasi_kerja_untuk_pimpinan' => $nilai_prestasi_kerja_untuk_pimpinan, 
                                    
                                    'nilai_tanggung_jawab_untuk_karyawan_1' => $nilai_tanggung_jawab_untuk_karyawan_1, 'nilai_tanggung_jawab_untuk_karyawan_2' => $nilai_tanggung_jawab_untuk_karyawan_2,
                                    'nilai_tanggung_jawab_untuk_pimpinan' => $nilai_tanggung_jawab_untuk_pimpinan,


                                    'nilai_ketaatan_untuk_karyawan_1' => $nilai_ketaatan_untuk_karyawan_1,
                                    'nilai_ketaatan_untuk_karyawan_2' => $nilai_ketaatan_untuk_karyawan_2,
                                    'nilai_ketaatan_untuk_pimpinan' => $nilai_ketaatan_untuk_pimpinan,


                                    'nilai_kejujuran_untuk_karyawan_1' => $nilai_kejujuran_untuk_karyawan_1,
                                    'nilai_kejujuran_untuk_karyawan_2' => $nilai_kejujuran_untuk_karyawan_2,
                                    'nilai_kejujuran_untuk_pimpinan' => $nilai_kejujuran_untuk_pimpinan,


                                    'nilai_kerjasama_untuk_karyawan_1' => $nilai_kerjasama_untuk_karyawan_1,
                                    'nilai_kerjasama_untuk_karyawan_2' => $nilai_kerjasama_untuk_karyawan_2,
                                    'nilai_kerjasama_untuk_pimpinan' => $nilai_kerjasama_untuk_pimpinan,

                                    'nilai_prakarsa_untuk_karyawan_1' => $nilai_prakarsa_untuk_karyawan_1,
                                    'nilai_prakarsa_untuk_karyawan_2' => $nilai_prakarsa_untuk_karyawan_2,
                                    'nilai_prakarsa_untuk_pimpinan' => $nilai_prakarsa_untuk_pimpinan,

                                    'nilai_kepemimpinan_untuk_karyawan_1' => $nilai_kepemimpinan_untuk_karyawan_1,
                                    'nilai_kepemimpinan_untuk_karyawan_2' => $nilai_kejujuran_untuk_karyawan_2,
                                    'nilai_kepemimpinan_untuk_pimpinan' => $nilai_kejujuran_untuk_pimpinan,
                                    
                                    
                                    
                                    'nilai_jumlah_untuk_karyawan_1' => $nilai_jumlah_untuk_karyawan_1,
                                    'nilai_jumlah_untuk_karyawan_2' => $nilai_jumlah_untuk_karyawan_2,
                                    'nilai_jumlah_untuk_pimpinan' => $nilai_jumlah_untuk_pimpinan,
                                    

                                    'nilai_rata_rata_untuk_karyawan_1' => $nilai_rata_rata_untuk_karyawan_1,
                                    'nilai_rata_rata_untuk_karyawan_2' => $nilai_rata_rata_untuk_karyawan_2,
                                    'nilai_rata_rata_untuk_pimpinan' => $nilai_rata_rata_untuk_pimpinan,


                                    'nama_karyawan_1' => $nama_karyawan_1,
                                    'nama_karyawan_2' => $nama_karyawan_2,
                                    'nama_pimpinan' => $nama_pimpinan
                                    
                                    
                                    
                                    ]);
        //dd($NilaiDiriSendiriDb);
        return redirect()->action('HomeController@nilai_rekan_kerja');
   }
   else{
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
        $LihatUserNext = $LihatUser->where('id', $id)->first();

        $LihatTableNilaiDiriSendiri= DB::table('nilai-diri-sendiri')->where('id',$id)->first();


           if($request->session()->get('login')) {
            return view('user.lihat-hasil-report-diri-sendiri',array('date' => $date, 'lihat_user' => $LihatUserNext, 'lihat_table_nilai_diri_sendiri' => $LihatTableNilaiDiriSendiri));
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
