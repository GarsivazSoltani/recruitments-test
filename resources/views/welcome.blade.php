@extends('layouts.app')

@section('title', __('public.recruitments test'))

@section('content')
    <div class="container mt-3">
        <div class="alert alert-warning" role="alert">
            <h4 class="alert-heading">شرایط آزمون استخدامی</h4>
            <p>یکی از مهم ترین شرایط لازم جهت ثبت نام در آزمون استخدامی 1402، دارا بودن حداقل 20 سال و حداکثر 40 سال برای فارغ التحصیلان کارشناسی و کارشناسی ارشد می‌باشد.</p>
            <hr>
            <p class="mb-0">قوانین و شرایط استخدامی کشور</p>
        </div>
    </div>

    <ul class="list-group m-3">
        <li class="list-group-item active" aria-current="true">شرایط عمومی</li>
        <li class="list-group-item">داشتن تابعیت ایرانی</li>
        <li class="list-group-item">اعتقاد داشتن به دین اسلام یا یکی از ادیان شناخته شده در قانون اساسی جمهوری اسلامی ایران</li>
        <li class="list-group-item">پایبند به قانون اساسی جمهوری اسلامی ایران</li>
        <li class="list-group-item">ارائه کارت پایان خدمت سربازی و یا معافیت قانونی (ویژه آقایان)</li>
        <li class="list-group-item">داشتن از سلامت جسمانی و روانی کامل و توانایی انجام شغل محوله</li>
        <li class="list-group-item">عدم اعتیاد به دخانیات و مواد مخدر</li>
        <li class="list-group-item">نداشتن سابقه محکومیت جزایی</li>
    </ul>

    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card m-3">
                <div class="card-header bg-success text-light">
                    @lang('public.government services')
                </div>
                <div class="card-body">
                    <h5 class="card-title">ورود از طریق @lang('public.government services')</h5>
                    <p class="card-text">سامانه دولت من یا همان پنجره ملی خدمات دولت هوشمند، مرکز ارائه خدمات گوناگون در حوزه های مختلف است که کاربران می توانند با ورود به پنا کاربری خود، به آن ها دسترسی داشته باشند. در نتیجه لازم است که افراد در این سایت ثبت نام کنند و به حساب کاربری خود بروند.</p>
                    <a href="#" class="btn btn-outline-success">ورود</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card m-3">
                <div class="card-header bg-warning text-light">
                @lang('public.tvto')
                </div>
                <div class="card-body">
                    <h5 class="card-title">ورود از طریق پورتال @lang('public.tvto')</h5>
                    <p class="card-text">سامانه دولت من یا همان پنجره ملی خدمات دولت هوشمند، مرکز ارائه خدمات گوناگون در حوزه های مختلف است که کاربران می توانند با ورود به پنا کاربری خود، به آن ها دسترسی داشته باشند. در نتیجه لازم است که افراد در این سایت ثبت نام کنند و به حساب کاربری خود بروند.</p>
                    <a href="{{ route('job.index') }}" class="btn btn-outline-warning">ورود</a>
                </div>
            </div>
        </div>
    </div>
@endsection
