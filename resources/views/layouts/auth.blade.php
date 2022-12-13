<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.partials.seo')
    {!! RecaptchaV3::initJs() !!}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('theme/css/pages/login/classic/login-4.min.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('theme/plugins/global/plugins.bundle.min.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/plugins/custom/prismjs/prismjs.bundle.min.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('theme/css/style.bundle.min.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <style>
		.grecaptcha-badge {
			display: none !important;
		}
        .btn.btn-primary{
            background-color: #006c38;
            border-color: #006c38;
        }
        .btn.btn-primary.focus:not(.btn-text), .btn.btn-primary:focus:not(.btn-text), .btn.btn-primary:hover:not(.btn-text):not(:disabled):not(.disabled){
            background-color: #14c56b;
            border-color: #14c56b;
        }
	</style>
</head>
<body id="kt_body" style="" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url({{ asset('theme/media/bg/bg-3.jpg') }});">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="javascript:;">
                        <img src="{{ asset('images/logo.png') }}" class="max-h-150px" alt="" />
                    </a>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('theme/plugins/global/plugins.bundle.min.js?v=7.0.5') }}"></script>
    <script src="{{ asset('theme/plugins/custom/prismjs/prismjs.bundle.min.js?v=7.0.5') }}"></script>
    <script src="{{ asset('theme/js/scripts.bundle.min.js?v=7.0.5') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    @vite(['resources/js/auth.js'])
</body>
</html>
