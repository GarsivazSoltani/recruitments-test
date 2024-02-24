{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #e3f2fd;> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home.welcome') }}">
        <img src="{{asset('img/logo.png')}}" width="60" height="60" class="d-inline-block align-top" alt="">
        @lang('public.tvto')
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="auth-btn collapse justify-content-end navbar-collapse">
        @guest
            <a class="btn btn-outline-info m-2" href="{{ route('home.welcome') }}">@lang('public.main page')</a>
            <a class="btn btn-outline-success m-2" href="{{ route('job.create') }}">@lang('public.registration of employment advertisement')</a>
            <a class="btn btn-outline-warning m-2" href="{{ route('job.index') }}">@lang('public.show job advertisement')</a>
        @endguest
    </div>
</nav>
