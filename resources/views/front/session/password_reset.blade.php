@extends('layouts.app')
@inject('menus', 'App\Http\Controllers\HelpController' )
@section('content')
    <section class="items-container">
        <div class="container">
            <div class="row">
                <div class="container_form">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <form class="register-form" action="javascript:;">
                            <h2>Recupera tu contraseña</h2>
                            <div>
                                <p>Ingresa tu correo electrónico para reestablecer tu contraseña.</p>
                            </div>
                            <div class="form-group">
                                <label for="">Correo Electronico</label>
                                <input type="email" name="email" placeholder="Ingrese su correo electronico">
                            </div>


                            <button type="button" class="thm-btn style-2">enviar</button>
                            <p class="text-center" style="margin: 1rem 0">¿Necesitas una cuenta? <a href="/crear-cuenta" class="link_a">Registrate</a></p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="container_void"></div>
    </section>
@endsection
