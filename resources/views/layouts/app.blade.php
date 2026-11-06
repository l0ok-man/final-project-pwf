<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    @include('components.navbar')
    <main class="flex-grow container mx-auto py-8 px-4">
        @yield('content')
    </main>
    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>© {{ date('Y') }} Sistem Informasi Perpustakaan Sederhana</p>
    </footer>
</body>
</html>
