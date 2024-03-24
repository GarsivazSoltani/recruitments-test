<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- @vite('resources/css/app.css') --}}
    @yield('links')
    <title>@yield('title')</title>
</head>

<body>
    <!-- Nav Menu -->
    @include('partials.navbar')
    @if (session('mustVerifyEmail'))
        <div class="alert alert-danger text-center">
            @lang('auth.you must verify your email')
        </div>
    @endif
    <div class="container">
        @yield('content')
    </div>

    @include('partials.footer')
    {{-- <script src="/resources/js/app.js"></script> --}}
    {{-- @vite('resources/js/app.js') --}}
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}
</body>

</html>
