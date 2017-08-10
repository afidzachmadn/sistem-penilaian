<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class AuthController extends Controller
{
    public function login(Request $request) {
        if($request->session()->get('login')) {
            return redirect()->action('HomeController@dashboard');
        } else {
            return view('auth.login');
        }
    }


    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->action('AuthController@login');
    }
    

    public function bacadatabase(Request $request) {
        $email = $request->input('email');
        $password=$request->input('password');
        // login ke db
        $usersTable = DB::table('users');
        //cek username dan pass di database
        $usercheck= $usersTable->where('email', $email)->first();
        //dd($usercheck);
        if($usercheck != null){

        
            $decrypt = decrypt($usercheck->password);
            
            if($password == $decrypt) {
                $request->session()->put('login', true);
               // $request->session()->put('role', 'user');
                $request->session()->put('name', $usercheck->nama);
                $request->session()->put('id', $usercheck->id);
                $request->session()->put('img_url', $usercheck->img_url);
                
                return redirect()->action('HomeController@dashboard');
                
            } 
            else {
            return redirect()->action('AuthController@login');
            }
    }
        else{
            return redirect()->action('AuthController@login');
        }
    }
}
