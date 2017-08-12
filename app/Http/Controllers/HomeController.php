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

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login')) {
            return view('user.diri-sendiri-form');
        } else {
            return view('auth.login');
        }
   }




   public function nilai_rekan_kerja(Request $request) {
        $id = $request->session()->get('id');

        //$statusVer = DB::table('users');
        //$status_iso = $statusVer->where('id', $id)->first();
        //$status_sni = $statusVer->where('id', $id)->first();

        //$status_pembayaran_iso = $statusVer->where('id',$id)->first();
        //$status_pembayaran_sni = $statusVer->where('id',$id)->first();

           if($request->session()->get('login')) {
            return view('user.rekan-kerja-form');
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

        $date = date('Y-m-d H:i:s');

           if($request->session()->get('login')) {
            return view('user.lihat-hasil-report-diri-sendiri',array('date' => $date));
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




}
