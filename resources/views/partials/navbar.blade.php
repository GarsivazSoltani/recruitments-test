{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #e3f2fd;> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home.welcome') }}">
        <img src="{{asset('img/logo.png')}}" width="60" height="60" class="d-inline-block align-top" alt="">
        سازمان آموزش فنی و حرفه‌ای کشور
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="auth-btn collapse justify-content-end navbar-collapse">
        @guest
            <a class="btn btn-outline-info m-2" href="#">@lang('public.login')</a>
            <a class="btn btn-outline-info m-2" href="">@lang('public.register')</a>
        @endguest
        {{-- @auth
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" 
                        aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu logout-btn" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">@lang('auth.logout')</a>
                    </div>
                </li>
            </ul>
        @endauth --}}
    </div>
</nav>
