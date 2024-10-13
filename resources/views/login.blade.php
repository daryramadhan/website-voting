@extends('layout')

@section('title', 'Login')
@section('content')
<div class="flex min-h-screen h-auto flex-col  justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
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
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
      </div>
    </form>

    <!-- <p class="mt-10 text-center text-sm text-gray-500">
      Not a member?
      <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Start a 14 day free trial</a>
    </p> -->
  </div>
</div>
@endsection
