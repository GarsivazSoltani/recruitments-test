@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="col-lg-12 mt-5">
        <ol class="list-group list-group-numbered">
            @foreach ($recruitments as $recruitment)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                        <div class="fw-bold">{{$recruitment->title}}</div>
                        {{$recruitment->eligibility}}
                    </div>
                    <span class="badge bg-primary rounded-pill">{{$recruitment->total}}</span>
                </li>
            @endforeach
        </ol>
    </div>
    {{-- <script src="{{ asset('js/registerPageOne.js') }}"></script> --}}
    @vite('/resources/js/registerPageOne.js')
@endsection