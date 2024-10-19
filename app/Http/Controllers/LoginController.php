<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

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

        // Jika NIS tidak ditemukan
        $query = User::where('nis', $data['nis'])->first();
        if (!$query)
        {
            return redirect('/')->with('status', 'Akun anda tidak terdaftar!');
        }

        // Cek apakah user sudah memilih sebelumnya
        if ($query['password'] == NULL)
        {
            return redirect('/')->with('status', 'Anda tidak dapat melakukan pemilihan 2 kali!');
        }

        // Cek autentikasi dengan credential NIS dan token (password)
        if(Auth::attempt($cred)){
             // Jika autentikasi berhasil, periksa role pengguna
             if ($query-> role == 'admin')
             {
                return redirect()->route('result');
             } else {
                return redirect()->route('choose');
             }
        }else{
            // Jika autentikasi gagal
            return redirect('/')->with('status', 'Token anda tidak valid!');
        }
    }

    public function logout_aksi(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }


}
