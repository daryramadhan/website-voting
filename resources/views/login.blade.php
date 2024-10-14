@extends('layout')

@section('title', 'Login')
@section('content')

    <div class="bg-gray-100 h-screen">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-white shadow-none rounded-lg p-8 w-96">
                <img src="img/logo_smpn22.png" alt="" class="w-1/2 mb-5">
                <p class="text-gray-600 text-sm font-base">Selamat Datang di</p>
                <h2 class="text-xl font-bold mb-4">Pemilihan Ketua OSIS Masa Bhakti 2024/2025</h2>

                <form class="space-y-6" action="{{route('login')}}" method="POST">
                 @csrf
                    <div class="space-y-2">
                        <div>

                            <label for="nis" class="block mb-2 text-sm font-base text-gray-900">Nomor Induk Siswa</label>
                            <input type="number" name="nis" id="nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4" placeholder="Masukkan NIS" required />
                        </div>

                        <div>

                            <label for="token" class="block mb-2 text-sm font-base text-gray-900">Token Pemilihan</label>
                            <input type="text" name="token" id="token" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 px-4" placeholder="Masukkan Token" required />
                        </div>
                    </div>

                    <button type="submit" class="flex w-full justify-center text-white mt-4 rounded-md bg-gray-800 px-4 py-2 text-sm font-medium hover:bg-gray-500">Masuk</button>

                </form>
            </div>
        </div>
    </div>

@endsection