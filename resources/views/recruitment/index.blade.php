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
                    <div class="d-flex flex-column align-items-center">
                        <span class="badge text-bg-success rounded-pill">{{$recruitment->total}} نفر</span>
                        <div class="d-flex align-items-center">
                            <a href="{{ route('recruitment.index') }}/{{$recruitment->id}}" class="btn btn-outline-warning btn-sm m-1">نمایش</a>
                            <a href="{{ route('recruitment.index') }}/{{$recruitment->id}}/edit" class="btn btn-outline-primary btn-sm m-1">ویرایش</a>
                            <form action="{{ route('recruitment.index') }}/{{$recruitment->id}}" method="POST" class="mt-3">
                                @method('delete')
                                @csrf
                                <input type="submit" value="حذف" class="btn btn-danger btn-sm m-1">
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>
    </div>

    {{-- <script src="{{ asset('js/registerPageOne.js') }}"></script> --}}
    {{-- @vite('/resources/js/registerPageOne.js') --}}
@endsection