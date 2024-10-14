<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserVote;

class Validation extends Controller
{
    //
    public function choose(){
        // if (!Auth::check()) {
        //     return redirect()->route('index');
        // }
        return view('choose-new');
        
    }

    public function result(){
        // if (!Auth::check() || auth()->user()->role == 'siswa') {
        //     return redirect()->route('index');
        // }
        return view('result');
    }

    public function sendVote(Request $request){
        //untuk validasi input yang masuk
        $validateReq = $request->validate([
            'candidate_id' => 'required|between:1,3',
            'nis' => 'required',
        ]);

        //
        $vote = new UserVote();
        $vote->nis_vote = $request->nis;
        $vote->vote_number = $request->candidate_id;
        $vote->save();
        
        return;
    }
}
