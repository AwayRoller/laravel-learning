<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My App</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

    @include('layouts.nav')


    @if ($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
    @endif

    <div class="container">
        @yield('content')

        @include('layouts/sidebar')
    </div>

    @yield('footer')

</body>
</html>