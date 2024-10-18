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

        $query = User::where('nis', $data['nis'])->first();
        if (!$query)
        {
            return redirect('/')->with('status', 'Akun anda tidak terdaftar!');
        }
        if ($query['password'] == NULL)
        {
            // return response()->json(['success' => false, 'message' => 'Username atau password salah'], 500);

            return redirect('/')->with('status', 'Anda tidak dapat melakukan pemilihan 2 kali!');
        }

        // Cek aktif tidaknya
        // echo var_dump($query);
        // exit;
        if(Auth::attempt($cred)){
            // return response()->json(['success' => true, 'message' => 'success'], 200);
            return redirect()->route('choose');
        }else{
            // return response()->json(['success' => false, 'message' => 'Username atau password salah'], 500);
            return redirect('/')->with('status', 'Token anda tidak valid!');
        }
    }

    public function logout_aksi(){
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }


}
