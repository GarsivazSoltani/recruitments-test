@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg mt-5 mb-5">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-6 fw-bold lh-1 text-body-emphasis">آزمون استخدامی {{$req['testName']}}</h1>
            <h1 class="display-6 fw-bold lh-1 text-body-emphasis">تعداد مورد نیاز {{$req['experience']}} نفر</h1>
            <p class="lead">شرایط آزمون {{$req['testConditions']}}</p>
            {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">بیشتر بدانید</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">درباره ما</button>
            </div> --}}
        </div>
        <div class="col-lg-4 offset-lg-1 p-5 overflow-hidden">
            <img class="rounded-lg-3" src="{{ asset('img/logo.png') }}" alt="" width="320">
        </div>
    </div>

    <div class="row g-5">
        <h4 class="mb-3">مشخصات آزمون</h4>
        <form class="needs-validation" novalidate="" method="POST" action="{{ route('recruitments.register.details') }}">
            @csrf
            <div class="row g-3">
                <div class="col-sm-4">
                    <label for="firstName" class="form-label">@lang('public.recruitments name')</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        نام معتبر مورد نیاز می‌باشد.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="grade" class="form-label">حداقل مقطع تحصیلی</label>
                    <select class="form-select" id="grade" required="">
                        <option value="">انتخاب کنید...</option>
                        <option>دکتری</option>
                        <option>کارشناسی ارشد</option>
                        <option>کارشناسی</option>
                        <option>کاردانی</option>
                        <option>دیپلم</option>
                        <option>زیر دیپلم</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid grade.
                    </div>
                </div>

                <div class="col-sm-4">
                    <label for="field" class="form-label">رشته تحصیلی</label>
                    <select class="form-select" id="field" required="">
                        <option value="">فناوری اطلاعات</option>
                        <option>صنایع خودرو</option>
                        <option>صنایع چوب</option>
                        <option>صنایع کاغذ</option>
                        <option>فناوری اطلاعات</option>
                        <option>الکترونیک</option>
                        <option>جوشکاری و بازرسی جوش</option>
                        <option>حمل ونقل زمینی</option>
                        <option>حمل ونقل دریایی</option>
                        <option>حمل و نقل ریلی</option>
                        <option>تاسیسات</option>
                        <option>صنایع دریایی</option>
                        <option>صنایع رنگ</option>
                        <option>صنایع شیمیایی</option>
                        <option>پلیمر</option>
                        <option>پتروشیمی</option>
                        <option>صنایع چرم وپوست و خز</option>
                        <option>صنایع نساجی</option>
                        <option>متالورژی</option>
                        <option>فناوری ارتباطات</option>
                        <option>مدیریت صنایع</option>
                        <option>سرامیک</option>
                        <option>مکانیک</option>
                        <option>کنترل وابزار دقیق</option>
                        <option>برق</option>
                        <option>صنایع فلزی</option>
                        <option>ساختمان</option>
                        <option>معماری</option>
                        <option>صنعت چاپ</option>
                        <option>معدن</option>
                        <option>امور اداری</option>
                        <option>امور مالی و بازرگانی</option>
                        <option>بهداشت و ایمنی</option>
                        <option>مراقبت و زیبایی</option>
                        <option>خدمات آموزشی</option>
                        <option>صنایع پوشاک</option>
                        <option>گردشگری</option>
                        <option>هتلداری</option>
                        <option>امور شیلات و آبزی پروری</option>
                        <option>امور دام و ماکیان</option>
                        <option>امور باغی</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid field.
                    </div>
                </div>

                    
                {{-- <div class="col-md-4">
                    <label for="orientation" class="form-label">رشته شغلی</label>
                    <select class="form-select" id="orientation" required="">
                        <option value="">انتخاب کنید...</option>
                        <option>کارشناس فناوری اطلاعات</option>
                        <option>کارشناس شبکه</option>
                        <option>زیر ساخت فناوری اطلاعات</option>
                        <option>هوشمند سازی</option>
                        <option>شبکه و امنیت</option>
                        <option>امنیت اطلاعات</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid orientation.
                    </div>
                </div> --}}

                <div class="col-md-4">
                    <label for="orientation" class="form-label">گرایش</label>
                    <select class="form-select" id="orientation" required="">
                        <option value="">انتخاب کنید...</option>
                        <option>گرایش مهندسی نرم ‌افزار</option>
                        <option>گرایش رایانش امن</option>
                        <option>گرایش شبکه های کامپیوتری</option>
                        <option>گرایش هوش مصنوعی</option>
                        <option>گرایش معماری سیستم های کامپیوتر</option>
                        <option>گرایش الگوریتم‌ها و محاسبات</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid orientation.
                    </div>
                </div>

                {{-- <div class="col-md-4">
                    <label for="city" class="form-label">استان</label>
                    <select class="form-select" id="city" required="">
                        <option value="">تهران</option>
                        @foreach ($citys as $city)
                            <option>{{$city->ostanname}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid city.
                    </div>
                </div> --}}

                <div class="col-md-4">
                    <label for="state" class="form-label">شهر</label>
                    <select class="form-select" id="state" required="">
                        <option value="">انتخاب کنید...</option>
                        <option>ورامین</option>
                        <option>آزادی</option>
                        <option>پاسدارن</option>
                        <option>تهران سر</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="sex" class="form-label">جنسیت</label>
                    <select class="form-select" id="sex" required="">
                        <option value="">انتخاب کنید...</option>
                        <option>زن</option>
                        <option>مرد</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid sex.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="experience" class="form-label">حداقل سابقه کاری</label>
                    <input type="number" class="form-control" id="experience" placeholder="" required="" min="1" max="5">
                    <div class="invalid-feedback">
                        Please provide a valid experience.
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="capacity" class="form-label">ظرفیت</label>
                    <input type="number" class="form-control" id="capacity" placeholder="" required="" min="1" max="20">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>

            {{-- <hr class="my-4"> --}}

            {{-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing
                    address</label>
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>

            <hr class="my-4"> --}}

            <button class="btn btn-primary btn-lg mt-5" type="submit">ثبت سفارش</button>
        </form>
    </div>
@endsection
