<footer class="my-5 p-3 text-body-secondary text-center text-small bg-light">
    <img class="d-block mx-auto mb-1" src="{{asset('img/logo.png')}}" alt="logo" width="128" height="128">
    <p class="mb-1">تمام حقوق مادی و معنوی وب سایت متعلق به سازمان آموزش فنی و حرفه‌ای کشور می‌باشد.</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="{{ route('home.welcome') }}">@lang('public.main page')</a></li>
        <li class="list-inline-item"><a href="{{ route('recruitment.create') }}">@lang('public.registration of employment advertisement')</a></li>
        <li class="list-inline-item"><a href="{{ route('recruitment.index', ['id'=>1]) }}">@lang('public.show job advertisement')</a></li>
    </ul>
</footer>