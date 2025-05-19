<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Data Supir</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /* Background gambar full cover, fixed, dan blur halus supaya teks tetap jelas */
        body {
            background: url('https://images.unsplash.com/photo-1506765515384-028b60a970df?auto=format&fit=crop&w=1470&q=80') no-repeat center center fixed;
            background-size: cover;
        }
        /* Overlay gelap semi transparan untuk teks mudah dibaca */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: -1;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center font-[Inter] text-white">

    <section class="text-center px-6 max-w-xl mx-auto">
        <h1 class="text-10xl font-extrabold mb-6 drop-shadow-lg">
            SISTEM PENDATAAN SUPIR 
        </h1>
        <p class="text-lg mb-12 drop-shadow-md">
            Aplikasi untuk mencatat, mengelola, dan memantau data supir secara efisien dan terintegrasi.
        </p>

        @if (Route::has('filament.admin.auth.login'))
            <div class="mt-6">
                @auth
                    <a href="{{ route('filament.admin.pages.dashboard') }}"
                       class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow-lg transition transform hover:scale-105">
                        Masuk ke Dashboard
                    </a>
                @else
                    <a href="{{ route('filament.admin.auth.login') }}"
                       class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow-lg transition transform hover:scale-105">
                        Login
                    </a>
                @endauth
            </div>
        @endif
    </section>

</body>
</html>
