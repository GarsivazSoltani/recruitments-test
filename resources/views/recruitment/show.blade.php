@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="row p-4 pb-0 align-items-center rounded-3 border shadow-lg mt-5 mb-5">
        {{-- <div class="col-lg-12 p-3 p-lg-5 pt-lg-3"> --}}
            <h4 class="fw-bold lh-1 text-body-emphasis">آگهی آزمون استخدام</h4>
            <div class="row">
                <div class="col-sm-6">
                    <label class="form-label">@lang('public.recruitments name'): </label>
                    <label class="form-label text-primary fw-bold">{{$recruitment->title}}</label>
                </div>

                <div class="col-md-6">
                    <label class="form-label">ظرفیت آزمون: </label>
                    <label class="form-label text-primary fw-bold">{{$recruitment->total}} نفر</label>
                </div>

                <div class="mb-3">
                    <div class="mb-3">
                    <label class="form-label">شرایط آزمون: </label>
                    <label class="form-label text-primary fw-bold">{{$recruitment->eligibility}}</label>
                    {{-- <textarea class="form-control" id="testConditions" name="testConditions" rows="4">{{$recruitment->eligibility}}</textarea> --}}
                    </div>
                </div>
            </div>
            {{-- <a href="{{ route('recruitment.index') }}" class="btn btn-warning btn-lg mt-3">بازگشت</a> --}}
        {{-- </div> --}}
    </div>

    {{-- <div class="row g-5"> --}}

    <div class="row p-4 pb-0 align-items-center rounded-3 border mt-5 mb-3">
        <form class="needs-validation" id="addJob" method="POST" action="{{ route('recruitment.index') }}/{{$recruitment->id}}/conditions">
            @csrf
            <h5 class="fw-bold">درج مشخصات شغل</h5>
            <script type="text/javascript">
                let works = {!! $works->toJson() !!};
                let cities = {!! $cities->toJson() !!};
                let recruitmentID = {!! $recruitment->id !!};
                let condition = {!! $recruitment->conditions->toJson() !!};
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

                <div class="col-md-3">
                    <label for="grade" class="form-label">حداقل مقطع تحصیلی</label>
                    <select class="form-select" id="grade" name="grade" value="">
                        {{-- <option value="">انتخاب کنید...</option> --}}
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid grade.
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

                {{-- <hr class="my-4"> --}}

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="SwitchCapacity" checked>
                    <label class="form-check-label" for="SwitchCapacity">ظرفیت بر اساس استان</label>
                    <input type="hidden" id="cityCheck" name="cityCheck" value="true">
                </div>

                <div class="col-md-4" id="capacity1">
                    <label for="state" class="form-label">استان</label>
                    <select class="form-select" id="state" name="state" value="">
                        @foreach ($provinces as $province)
                            <option value="{{$province->id}}">{{$province->name}}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid city.
                    </div>
                </div>

                <div class="col-md-4" id="capacity2">
                    <label for="city" class="form-label">شهر</label>
                    <select class="form-select" id="city" name="city" value="">
                        {{-- <option value="">انتخاب کنید...</option> --}}
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>

                {{-- <hr class="my-4"> --}}

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="SwitchSex" checked>
                    <label class="form-check-label" for="SwitchSex">جنسیت بدون تفکیک</label>
                </div>

                <div class="col-md-4" id="sexAll">
                    <label for="capacityAll" class="form-label">ظرفیت</label>
                    <input type="number" class="form-control" id="capacityAll" name="capacityAll" placeholder="" min="1" max="10000" value="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-4 d-none" id="sexWoman">
                    <label for="capacityWoman" class="form-label">ظرفیت زن</label>
                    <input type="number" class="form-control" id="capacityWoman" name="capacityWoman" placeholder="" min="1" max="10000" value="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>

                <div class="col-md-4 d-none" id="sexMan">
                    <label for="capacityMan" class="form-label">ظرفیت مرد</label>
                    <input type="number" class="form-control" id="capacityMan" name="capacityMan" placeholder="" min="1" max="10000" value="">
                    <div class="invalid-feedback">
                        Security code required
                    </div>
                </div>
            </div>



            <div class="accordion mt-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        نوع شغل
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <label class="form-label badge bg-info text-dark" id="type"></label>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        تعریف
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <label class="form-label text-muted" id="title"></label>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        نمونه وظایف ومسئولیت‌ها
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul id="task"></ul>
                        </div>
                    </div>
                </div>
                                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        مهارت
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul id="skill"></ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        مهارت
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul id="cours"></ul>
                        </div>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        ویژگی‌ها شخصیتی و رفتاری 
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul id="personality"></ul>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-lg mt-5" type="submit">ثبت شغل</button>
            <a href="{{ route('recruitment.index') }}" class="btn btn-warning btn-lg mt-5">بازگشت</a>
        </form>
    </div>

    {{-- <div class="row g-5 mt-5" id="jobItems"> --}}
    <div class="row p-4 pb-0 align-items-center rounded-3 border mt-5 mb-3" id="jobItems">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">عنوان شغلی</th>
                <th scope="col">استان</th>
                <th scope="col">شهرستان</th>
                <th scope="col">ظرفیت</th>
                <th scope="col">تنظیمات</th>
                {{-- <th scope="col">ظرفیت زن</th>
                <th scope="col">ظرفیت مرد</th> --}}
            </tr>
            </thead>
            <tbody id="rowTableJob">

            </tbody>
        </table>
    </div>

    {{-- <script src="{{ asset('js/works.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('js/fillElements.js') }}" type="module"></script> --}}
    <script src="{{ asset('js/actionShow.js') }}" type="module"></script>
    {{-- @vite('/resources/js/registerPageOne.js') --}}
@endsection