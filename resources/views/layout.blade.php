<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mon site')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') {{-- si tu utilises Vite --}}
</head>
<body class="min-h-screen flex flex-col bg-gray-500 text-gray-900">

<header class="bg-white shadow p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">
            <a href="{{ route('test') }}">Mon site</a>
        </h1>
        <nav>
            <a href="{{ route('test') }}" class="text-gray-700 hover:text-black mr-4">TEST</a>
            <a href="{{ route('ma-page') }}" class="text-gray-700 hover:text-black">Ma page</a>
        </nav>
    </div>
</header>

<main class="flex-grow container mx-auto p-6">
    @yield('content')
</main>

<footer class="bg-gray-200 text-center text-sm p-4">
    &copy; {{ date('Y') }} Mon site. Tous droits réservés.
</footer>

@stack('scripts')
</body>
</html>
