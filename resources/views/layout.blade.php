<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js', 'resources/css/app.css']) <!-- Include Vite assets { Bootstrap } -->
    <title>@yield('title')</title>
</head>
<body>

    <!-- Main content -->
    <main>
        @yield('content')
    </main>

</body>
</html>
