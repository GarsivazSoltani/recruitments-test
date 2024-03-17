@extends('panel.main')
@section('panel')
<div class="card">
    <div class="card-header">
        @lang('users.edit role')
    </div>
    <div class="card-body">
    <form method="post" action="#">
            @csrf
            <div class="form-row">
                <div class="col">
                <input type="text" name="name" class="form-control" value="{{$role->name}}" placeholder=" @lang('users.role name') ">
                    {{-- @if($errors->has('name')) --}}
                    <small class="form-text text-danger"> ایراد </small>
                    {{-- @endif --}}
                </div>
                <div class="col">
                <input type="text" name="persian_name" class="form-control"  value="" placeholder=" @lang('users.role persian name') ">
							{{-- @if($errors->has('persian_name')) --}}
							<small class=" form-text text-danger"> ایراد نام فارسی </small>
                    @endif
                </div>
            </div>
            <div class="form-group mt-5">
                <span>
                    @lang('users.add permission to role')
                </span>
                <hr>
            </div>
            <div class="form-group">
        {{-- @forelse ($permissions as $permission) --}}
        <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" name='permissions[]' value="" class="custom-control-input" id="">
        <label class="custom-control-label" for="">نام فارسی</label>
        </div>
        {{-- @empty --}}
           <p>@lang('users.there are not any role')</p> 
        {{-- @endforelse --}}
            </div>
            <div class="form-group">
                <button class="btn btn-primary">@lang('users.edit')</button>
            </div>
        </form>
    </div>
</div>
@endsection
