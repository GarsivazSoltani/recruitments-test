@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg mt-5 mb-5">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-6 fw-bold lh-1 text-body-emphasis mb-5">مشخصات آزمون استخدام</h1>
            <div class="row g-3">
                <div class="col-sm-6">
                    <label class="form-label">@lang('public.recruitments name'): </label>
                    <label class="form-label text-primary fw-bold">{{$recruitment->title}}</label>
                </div>

                <div class="col-md-6">
                    <label class="form-label">ظرفیت آزمون: </label>
                    <label class="form-label text-primary fw-bold">{{$recruitment->total}}</label>
                </div>

                <div class="mb-3">
                    <div class="mb-3">
                    <label class="form-label">شرایط آزمون: </label>
                    <label class="form-label text-primary fw-bold">{{$recruitment->eligibility}}</label>
                    {{-- <textarea class="form-control" id="testConditions" name="testConditions" rows="4">{{$recruitment->eligibility}}</textarea> --}}
                    </div>
                </div>
            </div>
            <a href="{{ route('recruitment.index') }}" class="btn btn-warning btn-lg mt-3">بازگشت</a>
        </div>
    </div>




    
    <div class="row g-5">
        <h4 class="mb-1">درج مشخصات شغل</h4>
        <form class="needs-validation" id="addJob" method="POST" action="{{ route('recruitment.index') }}/{{$recruitment->id}}/conditions">
            @csrf
            <script type="text/javascript">
                let data = {!! $works->toJson() !!}
                // console.log('Garsi:', data);
            </script>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="careerField" class="form-label">عنوان شغلی</label>
                    <select class="form-select" id="careerField" name="careerField" value="">
                        {{-- <option value="">انتخاب کنید...</option> --}}
                        @foreach ($works as $work)
                            <option value="{{$work->id}}">{{$work->title}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid career field.
                    </div>
                </div>

                <div class="col-sm-5">
                    <label for="field" class="form-label">رشته تحصیلی و گرایش</label>
                    <select class="form-select" id="field" name="field" value="">
                        {{-- <option value="فناوری اطلاعات">فناوری اطلاعات</option> --}}
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid field.
                    </div>
                </div>

                <div class="col-md-3">
                    <label for="grade" class="form-label">حداقل مقطع تحصیلی</label>
                    <select class="form-select" id="grade" name="grade" value="">
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

                <div class="mb-3">
                    <label class="form-label">تعریف: </label>
                    <label class="form-label text-primary" id="title"></label>
                </div>

                <div class="mb-3">
                    <label class="form-label">نمونه وظایف ومسئولیت‌ها: </label>
                    {{-- <label class="form-label text-primary" id="task"></label> --}}
                    <ul id="task"></ul>
                </div>

                <div class="mb-3">
                    <label class="form-label">نوع شغل: </label>
                    <label class="form-label text-primary" id="type"></label>
                </div>

                <hr class="my-4">

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="SwitchZarfiyat" checked>
                    <label class="form-check-label" for="SwitchZarfiyat">ظرفیت بر اساس استان</label>
                </div>

                <div class="col-md-4" id="zarfiyat1">
                    <label for="state" class="form-label">استان</label>
                    <select class="form-select" id="state" name="state" value="">
                        <option>آذربایجان شرقی</option>
                        <option>آذربایجان غربی</option>
                        <option>اردبیل</option>
                        <option>اصفهان</option>
                        <option>البرز</option>
                        <option>ایلام</option>
                        <option>بوشهر</option>
                        <option>تهران</option>
                        <option>چهارمحال و بختیاری</option>
                        <option>خراسان جنوبی</option>
                        <option>خراسان رضوی</option>
                        <option>خراسان شمالی</option>
                        <option>خوزستان</option>
                        <option>زنجان</option>
                        <option>سمنان</option>
                        <option>سیستان و بلوچستان</option>
                        <option>فارس</option>
                        <option>قزوین</option>
                        <option>قم</option>
                        <option>کردستان</option>
                        <option>کرمان</option>
                        <option>کرمانشاه</option>
                        <option>کهگیلویه و بویراحمد</option>
                        <option>گلستان</option>
                        <option>گیلان</option>
                        <option>لرستان</option>
                        <option>مازندران</option>
                        <option>مرکزی</option>
                        <option>هرمزگان</option>
                        <option>همدان</option>
                        <option>یزد</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid city.
                    </div>
                </div>

                <div class="col-md-4" id="zarfiyat2">
                    <label for="city" class="form-label">شهر</label>
                    <select class="form-select" id="city" name="city" value="">
                        <option value="">انتخاب کنید...</option>
                        <option>اسلامشهر</option>
                        <option>پاکدشت</option>
                        <option>پردیس</option>
                        <option>تهران</option>
                        <option>دماوند</option>
                        <option>رباط کریم</option>
                        <option>ری</option>
                        <option>شمیرانات</option>
                        <option>شهریار</option>
                        <option>فیروزکوه</option>
                        <option>شهر قدس</option>
                        <option>ملارد</option>
                        <option>پیشوا</option>
                        <option>ورامین</option>
                        <option>قرچك</option>
                        <option>بهارستان</option>
                        <option>پرند</option>
                        <option>نسیم</option>
                        <option>قرچک</option>
                        <option>اندیشه</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                <hr class="my-4">

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="SwitchSex" checked>
                    <label class="form-check-label" for="SwitchSex">جنسیت بدون تفکیک</label>
                </div>

                <!-- <div class="col-md-4">
                    <label for="sex" class="form-label">جنسیت</label>
                    <select class="form-select" id="sex" name="sex" value="">
                        <option>بدون تفکیک</option>
                        <option>همراه با تفکیک</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid sex.
                    </div>
                </div> -->

                <div class="col-md-4" id="val1">
                    <label for="capacity" class="form-label">ظرفیت</label>
                    <input type="number" class="form-control" id="capacity" name="capacity" placeholder="" min="1" max="10000" value="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-4 d-none" id="val2">
                    <label for="capacityWoman" class="form-label">ظرفیت زن</label>
                    <input type="number" class="form-control" id="capacityWoman" name="capacityWoman" placeholder="" min="1" max="10000" value="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-4 d-none" id="val3">
                    <label for="capacityMan" class="form-label">ظرفیت مرد</label>
                    <input type="number" class="form-control" id="capacityMan" name="capacityMan" placeholder="" min="1" max="10000" value="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>

            <hr class="my-4">

            <button class="btn btn-primary btn-lg mt-5" type="submit">ثبت شغل</button>
        </form>
    </div>


    <hr>

    <div class="row g-5 mt-5" id="jobItems">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ردیف</th>
                <th scope="col">عنوان شغلی</th>
                <th scope="col">استان</th>
                <th scope="col">شهرستان</th>
                <th scope="col">ظرفیت کلی</th>
                <th scope="col">ظرفیت زن</th>
                <th scope="col">ظرفیت مرد</th>
              </tr>
            </thead>
            <tbody id="rowTableJob">
                @foreach ($recruitment->conditions as $condition)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$condition->job_title}}</td>
                        <td>{{$condition->grade}}</td>
                        <td>{{$condition->state}}</td>
                        <td>{{$condition->capacity[0]}}</td>
                        <td></td>
                        <td></td>
                        {{-- {{$loop->count}} --}}
                    </tr>
                    {{-- <li> | {{$condition->field_of_study}} | {{$condition->orientation}}
                        |  |  | {{$condition->city}} | 
                    </li> --}}
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/works.js') }}" type="text/javascript"></script>
    {{-- @vite('/resources/js/registerPageOne.js') --}}
@endsection