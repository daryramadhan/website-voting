<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\UserVote;
use App\Models\User;

class UpdatePassword extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Ambil semua siswa dari tabel
        $students = DB::table('users')->where('role', 'student')->get();

        foreach ($students as $student) {
            // Hash the password_row column
            $hashedPassword = bcrypt($student->password_row);

            // Update password untuk setiap siswa
            DB::table('users')->where('nis', $student->nis)->update([
                'password' => $hashedPassword,
            ]);
        }
    }
}
