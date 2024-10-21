<!DOCTYPE html>
<html lang="en" class="class=h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Custom Auth Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <!-- Asset Preload -->
    <link rel="preload" as="fetch" href="https://lottie.host/c404786e-2d84-4239-a092-5fa55366d5a7/DRPRrsgJH4.json" crossorigin="anonymous" />
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

        //Set Interval Page Expired
        setInterval(function() {
            fetch('/refresh-csrf')
                .then(response => response.text())
                .then(token => {
                    document.querySelector('meta[name="csrf-token"]').setAttribute('content', token);
                    document.querySelector('input[name="_token"]').value = token;
                });
        }, 300000); // Refresh token every 10 minutes (600,000 ms)
    </script>
</body>
</html>