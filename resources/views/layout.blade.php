<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css']) <!-- Include Vite assets { Bootstrap } -->
    <title>@yield('title')</title>
</head>
<body>
    
    <!-- Navigation bar -->
    @include('components.nav')

    <!-- Main content -->
    <main class="container mt-5 mb-5">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('components.footer')
</body>
</html>