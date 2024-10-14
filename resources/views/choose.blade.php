@extends('layout')

@section('title', 'Pemilihan Ketua OSIS')
@section('content')
<div>
    <div class="flex justify-center gap-x-1">
        <div class="flex min-h-screen h-auto flex-col items-center justify-center px-6 py-12 lg:px-8">
            <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg my-6 w-96">
                <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                    <img class="w-full h-full object-cover" src="https://docs.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
                </div>
                <div class="p-6 text-center">
                    <h4 class="mb-1 text-xl font-semibold text-slate-800">
                    Made Adi
                    </h4>
                    <p
                    class="text-sm font-semibold text-slate-500 uppercase">
                    Product Manager 
                    </p>
                    <p class="text-base text-slate-600 mt-4 font-light ">
                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to Naviglio where you can enjoy the main night life in Barcelona.
                    </p>
                </div>
                <div class="flex justify-center p-6 pt-2 gap-7">
                    <button class="min-w-32  rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" onclick="confirmFollow1()">
                    Pilih
                    </button>
                </div>
            </div>
        </div>

        <div class="flex min-h-screen h-auto flex-col items-center justify-center px-6 py-12 lg:px-8">
            <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg my-6 w-96">
                <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                    <img class="w-full h-full object-cover" src="https://docs.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
                </div>
                <div class="p-6 text-center">
                    <h4 class="mb-1 text-xl font-semibold text-slate-800">
                    Dary Ramadhan
                    </h4>
                    <p
                    class="text-sm font-semibold text-slate-500 uppercase">
                    Product Manager 
                    </p>
                    <p class="text-base text-slate-600 mt-4 font-light ">
                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to Naviglio where you can enjoy the main night life in Barcelona.
                    </p>
                </div>
                <div class="flex justify-center p-6 pt-2 gap-7">
                    <button class="min-w-32  rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" onclick="confirmFollow2()">
                    Pilih
                    </button>
                </div>
            </div>
        </div>

        <div class="flex min-h-screen h-auto flex-col items-center justify-center px-6 py-12 lg:px-8">
            <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg my-6 w-96">
                <div class="m-2.5 overflow-hidden rounded-md h-80 flex justify-center items-center">
                    <img class="w-full h-full object-cover" src="https://docs.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
                </div>
                <div class="p-6 text-center">
                    <h4 class="mb-1 text-xl font-semibold text-slate-800">
                    Fufuffafa
                    </h4>
                    <p
                    class="text-sm font-semibold text-slate-500 uppercase">
                    Product Manager 
                    </p>
                    <p class="text-base text-slate-600 mt-4 font-light ">
                        The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to Naviglio where you can enjoy the main night life in Barcelona.
                    </p>
                </div>
                <div class="flex justify-center p-6 pt-2 gap-7">
                    <button class="min-w-32  rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button" onclick="confirmFollow3()">
                    Pilih
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <a href="{{route('logout')}}">Log Out</a>

    <script>
    function confirmFollow1() {
        // const isConfirmed = confirm("Apakah kamu yakin akan memilih dia?");
        // if (isConfirmed) {
        //     alert("Kamu telah memilih dia");
        //     // Add any additional actions like making an API request here
        // } else {
        //     alert("Action canceled.");
        // }
        Swal.fire({
        title: "Apakah kamu yakin memilih Made Adi?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
             }
        });
    }
    
    function confirmFollow2() {
        // const isConfirmed = confirm("Apakah kamu yakin akan memilih dia?");
        // if (isConfirmed) {
        //     alert("Kamu telah memilih dia");
        //     // Add any additional actions like making an API request here
        // } else {
        //     alert("Action canceled.");
        // }
        Swal.fire({
        title: "Apakah kamu yakin memilih Dary Ramadhan?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
             }
        });
    }

    function confirmFollow3() {
        // const isConfirmed = confirm("Apakah kamu yakin akan memilih dia?");
        // if (isConfirmed) {
        //     alert("Kamu telah memilih dia");
        //     // Add any additional actions like making an API request here
        // } else {
        //     alert("Action canceled.");
        // }
        Swal.fire({
        title: "Apakah kamu yakin memilih Fufufafaf?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
             }
        });
    }

    
    </script>
</div>
@endsection