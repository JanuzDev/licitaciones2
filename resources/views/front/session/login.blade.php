@extends('layouts.app')
@inject('menus', 'App\Http\Controllers\HelpController' )
@section('content')
    <section class="items-container">
        <div class="container">
            <div class="row">
                <div class="container_form">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <form class="register-form" action="javascript:;">
                            <h2>Iniciar Sesion</h2>
                            <div class="form-group">
                                <label for="">Correo Electronico</label>
                                <input type="email" name="email" placeholder="Ingrese su correo electronico">
                            </div>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" name="password" placeholder="Ingrese su contraseña">
                                <p class="text-center" style="margin: 1rem 0"><a href="/recuperar-contraseña" class="link_a">¿Has olvidado la contraseña?</a></p>
                            </div>
                            <div class="form-group">
                            <button type="button" class="thm-btn style-2" >Iniciar Sesión</button>
                            <p class="text-center" style="margin: 1rem 0">¿Necesitas una cuenta? <a href="/crear-cuenta" class="link_a">Registrate</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="container_void"></div>
    </section>

@endsection
