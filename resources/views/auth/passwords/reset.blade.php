@extends('layouts.auth')

@section('content')
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
    <form class="form" id="kt_login_signup_form" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group mb-5 @error('email') is-invalid @enderror">
            <input class="form-control h-auto form-control-solid py-4 px-8 @error('email') is-invalid @enderror" type="text" placeholder="Correo Electrónico" name="email" value="{{ old('email') }}" autocomplete="off" />
            @error('email')
            <div class="error invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Contraseña" name="password" />
        </div>
        <div class="form-group mb-5">
            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" />
        </div>
        <div class="form-group d-flex flex-wrap flex-center mt-10">
            <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Cambiar contraseña</button>
            <a href="{{ route('login') }}" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancelar</a>
        </div>
    </form>
</div>
@endsection
