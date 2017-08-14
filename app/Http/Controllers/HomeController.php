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

        $LihatTableNilaiDiriSendiri= DB::table('nilai-diri-sendiri')->where('id',$id)->first();

           if($request->session()->get('login')) {
            return view('user.diri-sendiri-form',array('lihat_user' => $LihatUserNext, 'lihat_table_nilai_diri_sendiri' => $LihatTableNilaiDiriSendiri));
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
        $pangkat_golongan_ruang = $request->get('pangkat_golongan_ruang');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');

        $nilai_kesetiaan = $request->get('nilai_kesetiaan');
        $nilai_prestasi_kerja = $request->get('nilai_prestasi_kerja');
        $nilai_tanggung_jawab = $request->get('nilai_tanggung_jawab');
        $nilai_ketaatan = $request->get('nilai_ketaatan');
        $nilai_kejujuran = $request->get('nilai_kejujuran');
        $nilai_kerjasama = $request->get('nilai_kerjasama');
        $nilai_prakarsa = $request->get('nilai_prakarsa');
        $nilai_kepemimpinan = $request->get('nilai_kepemimpinan');
        //dd($nilai_kesetiaan);
        //dd($nilai_prestasi_kerja);
        //dd($nilai_ketaatan);
        //dd($nilai_kejujuran);
        //dd($nilai_kerjasama);
        //dd($nilai_prakarsa);
        //($nilai_kepemimpinan);


        $nilai_jumlah= $nilai_kesetiaan+$nilai_prestasi_kerja+$nilai_tanggung_jawab+$nilai_ketaatan                     +$nilai_kejujuran+$nilai_kerjasama+$nilai_prakarsa+$nilai_kepemimpinan;
        //dd($nilai_jumlah);
        $nilai_rata_rata = ($nilai_kesetiaan+$nilai_prestasi_kerja+$nilai_tanggung_jawab                                 +$nilai_ketaatan +$nilai_kejujuran+$nilai_kerjasama+$nilai_prakarsa                            +$nilai_kepemimpinan)/8;
        if($nilai_rata_rata>=1 && $nilai_rata_rata<=1.5){
            $sebutan = 'Sangat Kurang';
        }
        elseif($nilai_rata_rata>=1.6 && $nilai_rata_rata<=2.5){
            $sebutan = 'Kurang';
        }
        elseif($nilai_rata_rata>=2.6 && $nilai_rata_rata<=3.5){
            $sebutan = 'Cukup';
        }
        elseif($nilai_rata_rata>=3.5 && $nilai_rata_rata<=4.5){
            $sebutan = 'Baik';
        }
        elseif($nilai_rata_rata>=4.6 && $nilai_rata_rata<=5){
            $sebutan = 'Sangat Baik';
        }
        else{
            $sebutan = "kesalahan-input-nilai";
        }
        //dd($nilai_rata_rata);


        $NilaiDiriSendiriDb = DB::table('nilai-diri-sendiri')->where('id', $id)
                                    ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'pangkat_golongan_ruang' => $pangkat_golongan_ruang, 'bagian' => $bagian, 'jabatan' => $jabatan, 'id' => $id, 'nilai_kesetiaan' => $nilai_kesetiaan, 'nilai_prestasi_kerja' => $nilai_prestasi_kerja, 'nilai_tanggung_jawab' => $nilai_tanggung_jawab, 'nilai_ketaatan' =>$nilai_ketaatan, 'nilai_kejujuran' => $nilai_kejujuran, 'nilai_kerjasama' => $nilai_kerjasama, 'nilai_prakarsa' => $nilai_prakarsa, 'nilai_kepemimpinan' => $nilai_kepemimpinan, 'nilai_jumlah' => $nilai_jumlah,'nilai_rata_rata' => $nilai_rata_rata, 'sebutan' => $sebutan]);
        //dd($NilaiDiriSendiriDb);
        return redirect()->action('HomeController@nilai_diri_sendiri');
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
        $pangkat_golongan_ruang = $request->get('pangkat_golongan_ruang');
        $bagian = $request->get('bagian');
        $jabatan = $request->get('jabatan');

        $file = $request->file('img');
        $fileName = $file->hashName();
        $storeFile = $file->store('public/foto');

        $userDb = DB::table('users')->where('id', $id)
                                    ->update(['nama' => $nama, 'nik' => $nik, 'email' => $email, 'pangkat_golongan_ruang' => $pangkat_golongan_ruang, 'bagian' => $bagian, 'jabatan' => $jabatan, 'img_url' => $fileName]);
        //dd($userDb);
        $request->session()->put('img_url', $fileName);
        return redirect()->action('HomeController@data_diri');
   }
   else{
       return view('auth.login');
   }
}

   




}
