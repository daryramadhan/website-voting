@extends('layout')

@section('title', 'Login')
@section('content')
    <!-- <div class="">
        <div class="bg-white items-center">
            <div class="flex flex-col">
                <h3>Selamat Datang di</h3>
                <h2>Pemilihan Ketua OSIS Masa Bhakti 2024/2025</h2>
            </div>
            
            <Button class="h-full">Masuk</Button>
        </div>
       

    </div> -->

    <!-- <div class="flex min-h-screen flex-col bg-gray-500 justify-center">
        <div class="bg-white p-20">
            <div class="sm:mx-auto sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">

                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Selamat Datang</h2>
                
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="{{route('login')}}" method="POST">
                    @csrf
                <div>
                    <label for="nis" class="block text-sm font-medium leading-6 text-gray-900">Nomor Induk Siswa</label>
                    <div class="mt-2">
                    <input id="nis" name="nis" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                    <label for="token" class="block text-sm font-medium leading-6 text-gray-900">Token</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Token Bermasalah?</a>
                    </div>
                    </div>
                    <div class="mt-2">
                    <input id="token" name="token" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    
                </div>
                </form>
            </div>
        </div>
    </div> -->

    <body class="bg-gray-100 h-screen">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-white shadow-none rounded-lg p-8 w-96">
                <p class="text-gray-600 text-md font-base">Selamat Datang di</p>
                <h2 class="text-xl font-bold mb-4">Pemilihan Ketua OSIS Masa Bhakti 2024/2025</h2>

                <form class="space-y-6" action="{{route('login')}}" method="POST">
                 @csrf
                    <div class="space-y-2">
                        <div>
                            <!-- <label for="nis" class="block text-sm font-medium leading-6 text-gray-900">Nomor Induk Siswa</label>
                            <div class="mt-2">
                            <input id="nis" name="nis" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div> -->

                            <label for="nis" class="block mb-2 text-sm font-base text-gray-900">Nomor Induk Siswa</label>
                            <input type="number" name="nis" id="nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan NIS" required />
                        </div>

                        <div>
                            <!-- <div class="flex items-center justify-between">
                            <label for="token" class="block text-sm font-medium leading-6 text-gray-900">Token</label>
                            </div>
                            <div class="mt-2">
                            <input id="token" name="token" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div> -->

                            <label for="token" class="block mb-2 text-sm font-base text-gray-900">Token Pemilihan</label>
                            <input type="text" name="token" id="token" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan Token" required />
                        </div>
                    </div>

                    <button type="submit" class="flex w-full justify-center text-white mt-4 rounded-md bg-gray-800 px-4 py-2 text-sm font-medium hover:bg-gray-500">Masuk</button>

                </form>
            </div>
        </div>
    </body>

@endsection