@extends('layouts.app')
@inject('menus', 'App\Http\Controllers\HelpController' )
@section('content')
    <section class="items-container">
        <div class="container">
            <div class="row">
                <div class="container_form">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <form class="register-form" action="javascript:;">
                            <h2>Regístrate</h2>
                            <div class="form-group">
                                <label for="">Nombre (s)</label>
                                <input type="text" name="name" placeholder="Ingrese su nombre(s)">
                            </div>
                            <div class="form-group">
                                <label for="">Apellido (s)</label>
                                <input type="text" name="lastname" placeholder="Ingrese su apellido(s)">
                            </div>
                            <div class="form-group">
                                <label for="">Tipo de Cuenta</label>
                                <select name="type" id="">
                                    <option value="">-Seleccionar Cuenta-</option>
                                    <option value="pro">Profesional</option>
                                    <option value="prov">Proveedor</option>
                                </select>
                            </div>
                           {{--  <div class="form-group">
                                <label for="">Rubro <p>¿En qué rubro estas interesado?</p></label>
                                <select name="category" id="">
                                    <option value="">-Seleccionar Rubro-</option>
                                    <option value="pro">Rubro A</option>
                                    <option value="prov">Rubro B</option>
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label for="">Correo Electronico</label>
                                <input type="email" name="email" placeholder="Ingrese su correo electronico">
                            </div>
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" name="password" placeholder="Ingrese su contraseña">
                            </div>
                            <div class="form-group">
                                <label for="">Repetir Contraseña</label>
                                <input type="password" name="password" placeholder="Repita su contraseña">
                            </div>

                       {{--      <div class="form-group">
                                <label for="terms" class="label-checkbox">
                                    <input type="checkbox" name="terms" id="">
                                    Acepto las condiciones.
                                </label>
                            </div> --}}
                            <div class="form-group">
                                <label class="container_checkbox">
                                    <p class="text_term_and_conditions">Al ultilizar nuestros servicios usted acepta nuestros <a data-toggle="modal" href="#modal_term_condition" class="link_a">Terminos y Condiciones</a> de uso</p>
                                    <input type="checkbox" id="myCheck">
                                    <span class="checkmark"></span>
                                </label>
                            </div>

                            <div class="modal fade" id="modal_term_condition" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="m_header">
                                                <h4 class="modal-title" id="myModalLabel">Terminos y Condiciones de Uso
                                                </h4>
                                                <button type="button" class="m_close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span><span
                                                        class="sr-only">Cerrar</span>
                                                </button>

                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row m_text">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                    obcaecati mollitia saepe quam vero culpa maiores, at perferendis fuga,
                                                    ipsa iure nobis voluptate, optio sit deserunt. Nostrum hic
                                                    exercitationem necessitatibus.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                    obcaecati mollitia saepe quam vero culpa maiores, at perferendis fuga,
                                                    ipsa iure nobis voluptate, optio sit deserunt. Nostrum hic
                                                    exercitationem necessitatibus.
                                                </p>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
                                                    obcaecati mollitia saepe quam vero culpa maiores, at perferendis fuga,
                                                    ipsa iure nobis voluptate, optio sit deserunt. Nostrum hic
                                                    exercitationem necessitatibus.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="m_footer">
                                                <button type="button" class="btn btn-cancel"
                                                    data-dismiss="modal" onclick="uncheck()">Rechazar</button>
                                                <button type="button" class="btn btn-accept"
                                                data-dismiss="modal" onclick="check()">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <button type="button" class="thm-btn style-2">Crear Cuenta</button>
                            <p class="text-center" style="margin: 1rem 0">¿Ya tienes una cuenta? <a href="/iniciar-sesion" class="link_a">Iniciar Sesión</a></p>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        function check() {

            document.getElementById("myCheck").checked = true;
        }

        function uncheck() {
            document.getElementById("myCheck").checked = false;
        }
    </script>
@endsection
