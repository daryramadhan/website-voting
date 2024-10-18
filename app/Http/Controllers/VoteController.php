<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserVote;
use App\Models\User;

class VoteController extends Controller
{
    //
    public function index()
    {
        // Mengambil jumlah vote berdasarkan vote_number
        $voteCounts = UserVote::select('vote_number', DB::raw('count(*) as total'))
                            ->groupBy('vote_number')
                            ->get();

        // Data yang telah memilih
        $alreadyVote = DB::table('users')
            ->join('user_votes', 'users.nis', '=', 'user_votes.nis_vote')
            // ->where('users.role', 'siswa')
            ->count();

        // Menghitung siswa yang dapat melakukan pemilihan
        // $userCount = User::where('role', 'siswa')->count();
        $userCount = User::count();

        // Pass both counts to the Blade view
        return view('result', compact('voteCounts', 'userCount', 'alreadyVote'));
    }

}
