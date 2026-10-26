@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body class="bg-gray-50 flex flex-col min-h-screen">
    <x-header />

    <main class="flex-grow">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>