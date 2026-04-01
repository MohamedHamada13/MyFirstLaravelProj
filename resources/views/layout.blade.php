<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css']) <!-- Include Vite assets { Bootstrap } -->
    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column min-vh-100">

    @hasSection('nav')
        @yield('nav')
    @endif

    <!-- Main content -->
    <main class="flex-grow-1">
        @yield('content')
    </main>

    @hasSection('footer')
        @yield('footer')
    @endif

</body>
</html>
