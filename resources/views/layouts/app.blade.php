<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- @vite('resources/css/app.css') --}}
    {{-- @yield('links') --}}
    <title>@yield('title')</title>
</head>

<body>
    <!-- Nav Menu -->
    @include('partials.navbar')
    
    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
    {{-- <script src="/resources/js/app.js"></script> --}}
    {{-- @vite('resources/js/app.js') --}}
    {{-- <script src="js/bootstrapV5.js"></script> --}}
</body>

</html>
