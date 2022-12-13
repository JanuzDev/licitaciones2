@extends('layouts.app')

@section('content')
<!--begin::Subheader-->
<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5">Verificar Correo Electrónico</h2>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    <a href="#" class="opacity-75 hover-opacity-100">
                        <i class="flaticon2-shelter text-white icon-1x"></i>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                    <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Verificar</a>
                    <!--end::Item-->
                </div>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Info-->
    </div>
</div>
<!--end::Subheader-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('resent'))
                <div class="alert alert-custom alert-success" role="alert">
                    <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                    <div class="alert-text">Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.</div>
                </div>
                @endif
                <div class="alert alert-custom alert-primary" role="alert">
                    <div class="alert-icon"><i class="flaticon-alert"></i></div>
                    <div class="alert-text">
                        <h4 class="pt-5"><strong>Verifica tu dirección de Correo Electrónico</strong></h4>
                        <p>Antes de continuar, consulte la bandeja de su correo electrónico para ver un enlace de verificación. Si no ha recibido el correo electrónico, haga clic en el siguiente botón para solicitar otro.
                        </p>
                        <form class="d-block text-center mb-4" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-secondary btn-elevate">Solicitar otro correo electrónico</button>
                        </form>			
                        <p class="kt-margin-t-40" style="font-style: italic">NOTA.- Recuerde que el enlace del correo de verificación expira en 24 horas, posterior a este tiempo debe solicitar otro.</p>
                    </div>
                </div>
                <div class="alert alert-custom alert-secondary" role="alert">
                    <div class="alert-icon">
                        <i class="flaticon-information text-danger font-weight-bold"></i>
                    </div>
                    <div class="alert-text font-weight-bold">No olvides revisar tu bandeja SPAM.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
