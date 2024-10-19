<!DOCTYPE html>
<html lang="en" class="class=h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Custom Auth Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>



<body>
    @yield('content')

    <script>

        // Menonaktifkan klik kanan
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });

        // Antisipasi user kembali ke halaman sebelumnya
        window.addEventListener('popstate', function(event) {
                window.location.href = '{{ url()->current() }}'; // Mendapatkan URL halaman saat ini
            });
    </script>
</body>
</html>