<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    // public function authenticate(Request $request)
    // {
    //     // Autentikasi telah dilakukan oleh middleware
    //     return redirect()->route('dashboard');
    // }

    public function login_aksi(Request $request){
        //Validasi wajib diisi
        $validate = $request->validate([
            'nis' => 'required',
            'token' => 'required',
        ]);
        $data = $request->all();
        $cred = [
            'nis' => $data['nis'],
            'password' => $data['token']
        ];
        // Cek aktif tidaknya
        // echo var_dump($query);
        // exit;
        if(Auth::attempt($cred)){
            // return response()->json(['success' => true, 'message' => 'success'], 200);
            return redirect()->route('choose');
        }else{
            return response()->json(['success' => false, 'message' => 'Username atau password salah'], 500);
        }
    }

    public function logout_aksi(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }


}
