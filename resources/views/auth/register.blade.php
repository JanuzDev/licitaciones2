@extends('layouts.auth')

@section('content')
<!--begin::Login Sign up form-->
<div class="login-signup-on animate__animated animate__backInUp">
    <div class="mb-20">
        <h3>Registro</h3>
        <div class="text-muted font-weight-bold">Ingrese sus datos para crear su cuenta</div>
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
    <form class="form" id="kt_login_signup_form" method="POST" action="{{ route('register') }}">
        @csrf
        {!! RecaptchaV3::field('register') !!}
        <div class="form-group mb-5 @error('name') is-invalid @enderror">
            <input class="form-control h-auto form-control-solid py-4 px-8 @error('name') is-invalid @enderror" type="text" placeholder="Nombre (s)" name="name" value="{{ old('name') }}" />
            @error('name')
            <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5 @error('lastname') is-invalid @enderror">
            <input class="form-control h-auto form-control-solid py-4 px-8 @error('lastname') is-invalid @enderror" type="text" placeholder="Apellido (s)" name="lastname" value="{{ old('lastname') }}" />
            @error('lastname')
            <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5 @error('email') is-invalid @enderror">
            <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" autocomplete="off" />
            @error('email')
            <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5 @error('phone') is-invalid @enderror">
            <input class="form-control h-auto form-control-solid py-4 px-8 @error('phone') is-invalid @enderror" type="text" placeholder="Teléfono o Celular" name="phone" value="{{ old('phone') }}" autocomplete="off" />
            @error('phone')
            <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Contraseña" name="password" />
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" />
        </div>
        @if (false)                
        <div class="form-group mb-5 text-left">
            <div class="checkbox-inline">
                <label class="checkbox m-0">
                    <input type="checkbox" name="agree" />
                    <span></span>I Agree the
                    <a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
            </div>
            <div class="form-text text-muted text-center"></div>
        </div>
        @endif
        <div class="form-group d-flex flex-wrap flex-center mt-10">
            <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Crear Cuenta</button>
            <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancelar</a>
        </div>
    </form>
</div>
@endsection
