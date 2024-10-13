<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Validation extends Controller
{
    //
    public function choose(){
        if (!Auth::check()) {
            return redirect()->route('index');
        }
        return view('choose');
        
    }

    public function result(){
        if (!Auth::check() || auth()->user()->role == 'siswa') {
            return redirect()->route('index');
        }
        return view('result');
    }
}
