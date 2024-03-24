{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #e3f2fd;> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home.welcome') }}">
            <img src="{{asset('img/logo.png')}}" width="60" height="60" class="d-inline-block align-top" alt="">
            @lang('public.tvto')
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavLightDropdown" aria-controls="navbarNavLightDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavLightDropdown">
            @guest
            {{-- <div class="auth-btn collapse justify-content-end navbar-collapse"> --}}
                <a class="btn btn-info  mr-2" href="{{ route('auth.login.form') }}">@lang('public.login')</a>
                <a class="btn btn-info mr-2" href="{{ route('auth.register.form', ['id'=>1]) }}">@lang('public.register')</a>
            {{-- </div> --}}
            @endguest
            @auth
                <a class="btn btn-outline-info m-2" href="{{ route('home.welcome') }}">@lang('public.main page')</a>
                <a class="btn btn-outline-success m-2" href="{{ route('recruitment.create') }}">@lang('public.registration of employment advertisement')</a>
                <a class="btn btn-outline-warning m-2" href="{{ route('recruitment.index') }}">@lang('public.show job advertisement')</a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="navbarLightDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">مدیریت</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('auth.logout')}}">@lang('auth.logout')</a></li>
                        </ul>
                    </li>
                </ul>
            @endauth
        </div>
    </div>
</nav>