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
}
