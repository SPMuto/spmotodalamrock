<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoPOS</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-slate-100">

    <div class="flex min-h-screen">

        @include('layouts.sidebar')

        <div class="flex-1">

            @include('layouts.header')

            <main class="p-4 md:p-6 pb-24">
                @yield('content')
            </main>

        </div>

    </div>

    @include('layouts.mobile-nav')

</body>
</html>
