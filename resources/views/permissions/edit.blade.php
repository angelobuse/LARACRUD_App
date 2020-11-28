@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header"><h4><center>Edit permission</center> </h4></div>
                <div class="card-body bg-dark text-white">
                    <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                        @csrf
                        <div class="form-group row">
                            <label for="permission_name" class="col-md-4 col-form-label text-md-right">{{ __('Permission') }}</label>

                            <div class="col-md-6">
                                <input id="permission_name" value="{{$permission->name}}" type="text" class="form-control @error('name') is-invalid @enderror" name="permission_name" value="{{ old('permission_name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('UPDATE') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
