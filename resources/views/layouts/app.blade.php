<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .container {
        width: 100%;
    }
.card {
    width: 100%;
    margin-bottom: 20px; /* Menambahkan margin bawah pada card */
}

.card-body {
    padding-bottom: 0; /* Menghilangkan padding bawah pada card-body */
}

@media (min-width: 768px) {
    .card-body {
        padding: 20px; /* Menambahkan padding pada card-body untuk tampilan desktop */
    }
}

@media (max-width: 767px) {
    .justify-content-center {
        flex-direction: column; /* Mengubah orientasi flexbox pada kontainer menjadi kolom di perangkat kecil */
        align-items: center; /* Mengatur konten agar berada di tengah secara vertikal */
    }
}


.counters{
    margin-right:30px;
}
strong{
    display:block;
}
</style>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white dark:bg-gray-900" >
        <!-- Page Content -->
        <main>
            @yield('content') </main>
    </div>
</body>

</html>
