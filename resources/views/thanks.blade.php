@extends('layout')

@section('title', 'Terima kasih!')
@section('content')
<div class="bg-gray-100 h-screen">
    <div class="flex flex-col gap-y-4 items-center justify-center h-screen">
        <h2 class="text-center text-2xl font-medium">
        Terima kasih, anda telah berpartisipasi dalam <br>
        pemilihan Ketua OSIS 2024/2025
        </h2>
        <button class="border border-gray-200 py-2 px-4 rounded-full text-gray-300 hover:text-gray-400">Kembali ke homepage</button>
        <p class="text-sm text-gray-500">Otomatis kembali dalam 10 detik</p>
    </div>
</div>
@endsection