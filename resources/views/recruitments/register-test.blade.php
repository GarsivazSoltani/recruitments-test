@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg mt-5 mb-5">
        <div class="col-lg-12 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-6 fw-bold lh-1 text-body-emphasis mb-5">درج مشخصات آزمون استخدام</h1>
            <form class="needs-validation" method="POST" action="{{route('recruitments.register.test.form')}}">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="testName" class="form-label">@lang('public.recruitments name')</label>
                        <input type="text" class="form-control" id="testName" name="testName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            نام معتبر مورد نیاز می‌باشد.
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <label for="experience" class="form-label">ظرفیت آزمون</label>
                        <input type="number" class="form-control" id="experience" name="experience" placeholder="" required="" min="1" max="100">
                        <div class="invalid-feedback">
                            Please provide a valid experience.
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                          <label for="testConditions" class="form-label">شرایط آزمون</label>
                          <textarea class="form-control" id="testConditions" name="testConditions" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg mt-3" type="submit">ثبت آزمون</button>
            </form>
        </div>
    </div>


    <div class="col-lg-12">
        <ol class="list-group list-group-numbered">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">آزمون استخدامی 1000 نفری هنر آموز</div>
                شرایط آزمون
              </div>
              <span class="badge bg-primary rounded-pill">1000 نفر</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">آزمون استخدامی 500 دانشجو</div>
                شرایط آزمون
              </div>
              <span class="badge bg-primary rounded-pill">500 نفر</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">آزمون استخدامی 800 نفری</div>
                شرایط آزمون
              </div>
              <span class="badge bg-primary rounded-pill">800 نفر</span>
            </li>
        </ol>
    </div>
@endsection
