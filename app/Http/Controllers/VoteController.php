<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserVote;

class VoteController extends Controller
{
    //
    public function index()
    {
        // Mengambil jumlah vote berdasarkan vote_number
        $voteCounts = UserVote::select('vote_number', DB::raw('count(*) as total'))
                            ->groupBy('vote_number')
                            ->get();

        // Mengirim data ke view
        return view('result', compact('voteCounts'));
    }
}
