<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.index');
    }


    public function proses_login(Request $request)
    {
        // $request()->validate(
        //     [
        //         'email'=>'required',
        //         'password'=>'request'
        //     ]);
            $kredensil = $request->only('email','password');

            if (Auth::attempt($kredensil)){
                $user = Auth::user();
                if($user->level == 'admin'){
                    return redirect()->intended('home');

                } else if($user->level =='puskesmas'){
                    return redirect()->intended('puskesmas');

                }if($user->level == 'gudang'){
                    return redirect()->intended('gudang');


                }else if($user->level =='dinas'){
                    return redirect()->intended('dinas');
                }
                    
                return redirect()->intended('/')->with('seccess','Selamat anda Telah Berhasil Login!');
            }
            return redirect('/')->with('seccess','Selamat anda Telah Berhasil Login!');

    }
    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}

