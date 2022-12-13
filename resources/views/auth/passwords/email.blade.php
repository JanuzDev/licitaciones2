@extends('layouts.auth')

@section('content')
<!--begin::Login forgot password form-->
<div class="login-forgot-on animate__animated animate__backInUp">
    <div class="mb-10">
        <h3>¿Olvidó su contraseña?</h3>
        <div class="text-muted font-weight-bold">Ingrese su correo electrónico para restablecer su contraseña</div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-custom alert-warning fade show" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">{{ $error }}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>                        
        @endforeach
    @endif
    @if (session('status'))
    <div class="alert alert-custom alert-success fade show" role="alert">
        <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
        <div class="alert-text">{{ session('status') }}</div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>
    @else 
    <form class="form" id="kt_login_forgot_form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group mb-5 @error('email') is-invalid @enderror">
            <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" placeholder="Correo Electrónico" id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="off" />
            @error('email')
            <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group d-flex flex-wrap flex-center mt-10">
            <button id="kt_login_forgot_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Solicitar</button>
            <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</a>
        </div>
    </form>
    @endif
</div>
<!--end::Login forgot password form-->
@endsection
