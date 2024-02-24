@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="col-lg-12 mt-5 list-group list-group-numbered">
        <ol class="list-group list-group-numbered">
            @foreach ($recruitments as $recruitment)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{$recruitment->title}}</div>
                        <div>{{$recruitment->eligibility}}</div>
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <span class="badge text-bg-success rounded-pill m-2 w-75">{{$recruitment->total}} نفر</span>
                        <div>
                        <a href="{{ route('job.index') }}/{{$recruitment->id}}" class="btn btn-outline-primary btn-sm">نمایش</a>
                        <a href="{{ route('job.index') }}/{{$recruitment->id}}/edit" class="btn btn-outline-primary btn-sm">ویرایش</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>

    {{-- <script src="{{ asset('js/registerPageOne.js') }}"></script> --}}
    @vite('/resources/js/registerPageOne.js')
@endsection