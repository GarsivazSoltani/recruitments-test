@extends('layouts.app')

@section('title', __('public.tvto'))

@section('content')
    <div class="col-lg-12 mt-5">
        <ol class="list-group list-group-numbered">
        @foreach ($recruitments as $recruitment)
            <a href="{{ route('job.index') }}/{{$recruitment->id}}/edit" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between align-items-center">
                <h5 class="mb-1 fw-bold">{{$recruitment->title}}</h5>
                <small class="badge bg-primary rounded-pill">{{$recruitment->total}}</small>
            </div>
            <p class="mb-1">{{$recruitment->eligibility}}</p>
            {{-- <small class="badge bg-primary rounded-pill">{{$recruitment->total}}</small> --}}
            </a>
        @endforeach
        </ol>
    </div>


    {{-- <script src="{{ asset('js/registerPageOne.js') }}"></script> --}}
    @vite('/resources/js/registerPageOne.js')
@endsection