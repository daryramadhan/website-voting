@extends('layout')

@section('title', 'Kartu Suara Pemilihan')
@section('content')
    <div class="bg-gray-100 h-screen">
        <div class="flex items-center justify-center h-screen">
            <div class="bg-white shadow-none rounded-lg p-2 w-2/3">
                <div class="flex flex-col">
                    <div class="flex justify-between pt-3 pb-4 px-2">
                        <a href="#" class="text-gray-500 text-sm">Logo</a>

                        <h3 class="text-sm font-medium text-center">
                        Surat Suara Pemilihan Ketua OSIS 2024/2025
                        </h3>

                        <a href="{{route('logout')}}" class="text-gray-200 text-sm">Log Out</a>
                    </div>

                    <div class="flex flex-row gap-x-2">

                        <!-- Card 1 -->
                        <div class="flex flex-col border border-gray-200 rounded-lg basis-1/3">
                            <div class="py-2 text-center">
                                <h4 class="text-sm font-medium">Nomor Urut 1</h4>
                            </div> 

                            <!-- img -->
                            <div class="h-48"> <!-- Set a fixed height for the image container -->
                                <img class="w-full h-full object-cover" src="https://docs.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
                            </div>   

                            <!-- Content -->
                            <div class="flex flex-col p-4 rounded-lg flex-grow">
                                <!-- Name -->
                                <h2 class="text-lg font-medium">
                                    Sabrina Salsa
                                </h2>

                                <!-- Visi -->
                                <div class="flex flex-col gap-y-2">
                                    <h4 class="text-sm font-medium text-gray-300">
                                        VISI
                                    </h4>
                                    <p class="text-sm">Menjadikan OSIS (nama sekolah) menjadi satu organisasi yang bermutu dan berkualitas tinggi, sekaligus mengharumkan nama baik sekolah.</p>
                                </div>
                                
                                <!-- Misi -->
                                <div class="flex flex-col gap-y-2 flex-grow">
                                    <h4 class="text-sm font-medium text-gray-300">
                                        MISI
                                    </h4>
                                    <p class="text-sm">Mencanangkan etos kerja yang tinggi, aktif dalam menjalin kerjasama dengan berbagai instansi luar, penyuluhan dan sosialisasi tentang moral dan perilaku</p>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="p-4">
                                <button type="submit" class="flex w-full justify-center text-white rounded-md bg-gray-800 px-4 py-2 text-sm font-medium hover:bg-gray-500" onclick="confirmFollow1()">Pilih</button>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="flex flex-col border border-gray-200 rounded-lg basis-1/3">
                                <div class="py-2 text-center">
                                    <h4 class="text-sm font-medium">Nomor Urut 2</h4>
                                </div> 

                                <!-- img -->
                                <div class="h-48"> <!-- Set a fixed height for the image container -->
                                    <img class="w-full h-full object-cover" src="https://docs.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
                                </div>   

                                <!-- Content -->
                                <div class="flex flex-col p-4 rounded-lg flex-grow">
                                    <!-- Name -->
                                    <h2 class="text-lg font-medium">
                                        Sabrina Salsa
                                    </h2>

                                    <!-- Visi -->
                                    <div class="flex flex-col gap-y-2">
                                        <h4 class="text-sm font-medium text-gray-300">
                                            VISI
                                        </h4>
                                        <p class="text-sm">Menjadikan OSIS (nama sekolah) menjadi satu organisasi yang bermutu dan berkualitas tinggi, sekaligus mengharumkan nama baik sekolah.</p>
                                    </div>
                                    
                                    <!-- Misi -->
                                    <div class="flex flex-col gap-y-2 flex-grow">
                                        <h4 class="text-sm font-medium text-gray-300">
                                            MISI
                                        </h4>
                                        <p class="text-sm">Mencanangkan etos kerja yang tinggi, aktif dalam menjalin kerjasama dengan berbagai instansi luar, penyuluhan dan sosialisasi tentang moral dan perilaku</p>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="p-4">
                                    <button type="submit" class="flex w-full justify-center text-white rounded-md bg-gray-800 px-4 py-2 text-sm font-medium hover:bg-gray-500" onclick="confirmFollow1()">Pilih</button>
                                </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="flex flex-col border border-gray-200 rounded-lg basis-1/3">
                            <div class="py-2 text-center">
                                <h4 class="text-sm font-medium">Nomor Urut 3</h4>
                            </div> 
    
                            <!-- img -->
                            <div class="h-48"> <!-- Set a fixed height for the image container -->
                                <img class="w-full h-full object-cover" src="https://docs.material-tailwind.com/img/team-3.jpg" alt="profile-picture" />
                            </div>   
    
                            <!-- Content -->
                            <div class="flex flex-col p-4 rounded-lg flex-grow">
                                <!-- Name -->
                                <h2 class="text-lg font-medium">
                                    Sabrina Salsa
                                </h2>
    
                                <!-- Visi -->
                                <div class="flex flex-col gap-y-2">
                                    <h4 class="text-sm font-medium text-gray-300">
                                        VISI
                                    </h4>
                                    <p class="text-sm">Menjadikan OSIS (nama sekolah) menjadi satu organisasi yang bermutu dan berkualitas tinggi, sekaligus mengharumkan nama baik sekolah.</p>
                                </div>
                                
                                <!-- Misi -->
                                <div class="flex flex-col gap-y-2 flex-grow">
                                    <h4 class="text-sm font-medium text-gray-300">
                                        MISI
                                    </h4>
                                    <p class="text-sm">Mencanangkan etos kerja yang tinggi, aktif dalam menjalin kerjasama dengan berbagai instansi luar, penyuluhan dan sosialisasi tentang moral dan perilaku</p>
                                </div>
                            </div>
    
                            <!-- Button -->
                            <div class="p-4">
                                <button type="submit" class="flex w-full justify-center text-white rounded-md bg-gray-800 px-4 py-2 text-sm font-medium hover:bg-gray-500" onclick="confirmFollow1()">Pilih</button>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>

        <script>
            function confirmFollow1() {

                Swal.fire({
                    title: "Apakah kamu yakin memilih Sabrina Salsa",
                    text: "sebagai ketua osis SMPN 22 Malang Masa Bhakti 2024/2025?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yakin!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                        title: "Berhasil!",
                        text: "Selamat, data kamu berhasil terkirim.",
                        icon: "success"
                        });
                    }
                });

                // const swalWithBootstrapButtons = Swal.mixin({
                //     customClass: {
                //         confirmButton: "btn btn-success",
                //         cancelButton: "btn btn-danger"
                //     },
                //     buttonsStyling: false
                //     });
                //     swalWithBootstrapButtons.fire({
                //     title: "Apakah kamu yakin memilih Sabrina Salsa",
                //     text: "sebagai ketua osis SMPN 22 Malang Masa Bhakti 2024/2025?",
                //     icon: "warning",
                //     showCancelButton: true,
                //     confirmButtonText: "Yakin",
                //     cancelButtonText: "Kembali",
                //     reverseButtons: true
                //     }).then((result) => {
                //     if (result.isConfirmed) {
                //         swalWithBootstrapButtons.fire({
                //         title: "Berhasil!",
                //         text: "Selamat, data kamu berhasil terkirim.",
                //         icon: "success"
                //         });
                //     } else if (
                //         /* Read more about handling dismissals below */
                //         result.dismiss === Swal.DismissReason.cancel
                //     ) {
                //         swalWithBootstrapButtons.fire({
                //         title: "Cancelled",
                //         text: "Your imaginary file is safe :)",
                //         icon: "error"
                //         });
                //     }
                //     });
                }
        </script>
    </div>
@endsection