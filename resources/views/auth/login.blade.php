@extends('layouts.auth')

@section('content')
@inject('help', 'App\Http\Controllers\HelpController')
@php
    $setting = $help::getSetting();
@endphp
    <!--begin::Login Sign in form-->
    <div class="login-signin-on animate__animated animate__backInUp">
        <div class="mb-20">
            <h3>Iniciar Sesión</h3>
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
        <form class="form" id="kt_login_signin_form" action="{{ route('login') }}" method="POST">
            @csrf
            {!! RecaptchaV3::field('login') !!}
            <div class="form-group mb-5 @error('email') is-invalid @enderror">
                <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" autofocus placeholder="Correo Electrónico" id="email" type="email" name="email" value="{{ old('email') }}" autocomplete="off" />
                @error('email')
                <div class="error invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-5 @error('password') is-invalid @enderror">
                <input class="form-control h-auto form-control-solid py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Contraseña" name="password" />
                @error('password')
                <div class="error invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group d-flex flex-wrap justify-content-end align-items-center">
                <div class="checkbox-inline d-none">
                    <label class="checkbox m-0 text-muted">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <span></span>Recuérdame</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-muted text-hover-primary">¿Olvidó su contraseña?</a>
            </div>                
            <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Ingresar</button>
        </form>
        @if ($setting->register)
        <div class="mt-10">
            <span class="opacity-70 mr-4">¿Aún no tienes una cuenta?</span>
            <a href="{{ route('register') }}" class="text-muted text-hover-primary font-weight-bold">¡Registrarse!</a>
        </div>            
        @endif
    </div>
    <!--end::Login Sign in form-->
    
    
@endsection
