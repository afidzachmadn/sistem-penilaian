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




}
