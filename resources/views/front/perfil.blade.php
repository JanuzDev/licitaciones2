@extends('layouts.app')

@section('content')
    @inject('menus', 'App\Http\Controllers\HelpController')
    <link href='{{ asset('front/css/tagify.css') }}' rel='stylesheet' type='text/css' />
    <section class="header-section bg-red ">
        <div class="container">
            <h1 class="text-center text-white text-capitalize">Perfil {{ $type }}</h1>
        </div>
    </section>
    <section class="items-container">
        <div class="container">
            <div class="row container_flex">
                <div class="col-lg-4">
                    <div class="menu-profile">
                        <h4>Usuario</h4>
                        <div class="user-info">
                            <i class="fa fa-user"></i>
                            <div class="user-data">
                                <h3>nombre</h3>
                                <p class="text-red">Perfil {{ $type }}</p>
                                <span>mi_email@mail.com</span>
                            </div>
                        </div>
                        <h4>Opciones</h4>
                        <div class="user-options">
                            <div class="option">
                                <i class="fa fa-user"></i>
                                <p>Datos del {{ ucfirst($type) }}</p>
                            </div>
                            <div class="option">
                                <i class="fa fa-list"></i>
                                <p>Licitaciones</p>
                            </div>
                            <div class="option">
                                <i class="fa fa-users"></i>
                                <p>Convocatorias de Personal</p>
                            </div>
                            <div class="option">
                                <i class="fa fa-briefcase"></i>
                                <p>Consultorias</p>
                            </div>
                            <div class="option">
                                <i class="fa fa-sign-out"></i>
                                <p>Salir</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="register-form profile" action="javascript:;">
                        @switch($type)
                            @case('profesional')
                                <div class="section-title">
                                    <h2>Datos Generales :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre (s) <span class="red_required">*</span></label>
                                    <input type="text" name="name" placeholder="Ingrese su nombre(s)" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Apellido (s) <span class="red_required">*</span></label>
                                    <input type="text" name="lastname" placeholder="Ingrese su apellido(s)" id="lastname">
                                </div>
                                <div class="form-group">
                                    <label for="departament">Departamento de Residencia <span class="red_required">*</span></label>
                                    <select name="departament" id="departament">
                                        <option value="">-Seleccionar Departamento-</option>
                                        <option value="pro">La Paz</option>
                                        <option value="prov">Cochabamba</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">Ciudad de Residencia <span class="red_required">*</span></label>
                                    <select name="city" id="city">
                                        <option value="">-Seleccionar Cuidad-</option>
                                        <option value="pro">La Paz</option>
                                        <option value="prov">Cochabamba</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico <span class="red_required">*</span></label>
                                    <input type="email" name="email" placeholder="Ingrese su correo electrónico" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Teléfono o Celular <span class="red_required">*</span></label>
                                    <input type="number" name="phone" placeholder="Ingrese su teléfono o celular" id="phone">
                                </div>
                                <div class="section-title">
                                    <h2>Rubro y Áreas de Interés :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="category">Rubro <span class="red_required">*</span>
                                        <p>¿En qué rubro estas interesado?</p>
                                    </label>
                                    <select name="category" id="category">
                                        <option value="">-Seleccionar Rubro-</option>
                                        <option value="pro">Rubro A</option>
                                        <option value="prov">Rubro B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="container_tag">
                                        <label for="areas_of_interest">Áreas de Interes <span class="red_required">*</span>
                                            <p>¿En qué areas estas interesado?</p>
                                        </label>
                                        <input type="text" name="areas_of_interest" id="areas_of_interest" placeholder=""
                                            value="">
                                    </div>
                                </div>
                                <div class="section-title">
                                    <h2>Datos Academicos :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="degree">Grado Académico <span class="red_required">*</span></label>
                                    <select name="degree" id="degree">
                                        <option value="">-Seleccionar Grado Académico-</option>
                                        <option value="pro">Rubro A</option>
                                        <option value="prov">Rubro B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="profession">Profesión <span class="red_required">*</span></label>
                                    <input type="text" name="profession" placeholder="Ingrese su profesión" id="profession">
                                </div>

                                <div class="form-group">
                                    <label for="profession">Universidad <span class="red_required">*</span></label>
                                    <div class="container_radio">
                                        <label class="container_label_radio">Boliviana
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark_radio"></span>
                                        </label>
                                        <label class="container_label_radio">Extranjera
                                            <input type="radio" name="radio">
                                            <span class="checkmark_radio"></span>
                                        </label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="profession">Univesidad/Institución Academica <span
                                            class="red_required">*</span></label>
                                    <input type="text" name="profession" placeholder="Ingrese su universidad/instituto" id="profession">
                                </div>
                                <div class="form-group">
                                    <label for="">Cargar CV <span class="red_required">*</span></label>
                                    <div class="dropzone dropzone-default" id="document_dropzone">
                                        <div class="dropzone-msg dz-message needsclick">
                                            <h3 class="dropzone-msg-title">
                                                <i class="fa fa-cloud-upload text-red" style="font-size: 3rem"></i>
                                            </h3>
                                            <span class="dropzone-msg-desc">Suelta el archivo aquí o haz clic para subirlo.</span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="lastname" placeholder="Ingrese su teléfono o celular">
                                </div>

                                <div class="form-group">
                                    <label for="motivation">Motivación <span class="red_required">*</span></label>
                                    <textarea name="motivation" id="motivation" style="width: 100%; padding: 0 1.5rem" id="motivation" rows="5"
                                        placeholder="Ingrese su motivacion"></textarea>
                                </div>
                            @break

                            @case('proveedor')
                                <div class="section-title">
                                    <h2>Datos del Proveedor :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="company_name">Razón Social <span class="red_required">*</span></label>
                                    <input type="text" name="company_name" id="company_name"
                                        placeholder="Ingrese su razón social">
                                </div>
                                <div class="form-group">
                                    <label for="nit">NIT <span class="red_required">*</span></label>
                                    <input type="number" name="nit" id="nit" placeholder="Ingrese su NIT">
                                </div>
                                <div class="form-group">
                                    <label for="departament">Departamento Oficina Central <span
                                            class="red_required">*</span></label>
                                    <select name="departament" id="departament">
                                        <option value="">-Seleccionar Departamento-</option>
                                        <option value="pro">La Paz</option>
                                        <option value="prov">Cochabamba</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="city">Ciudad Oficina Central <span class="red_required">*</span></label>
                                    <select name="city" id="city">
                                        <option value="">-Seleccionar Ciudad-</option>
                                        <option value="pro">La Paz</option>
                                        <option value="prov">Cochabamba</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="address">Dirección <span class="red_required">*</span></label>
                                    <input type="text" name="address" id="address" placeholder="Ingrese su dirección">
                                </div>
                                <div class="section-title">
                                    <h2>Registro de Usuario :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nombre (s) <span class="red_required">*</span></label>
                                    <input type="text" name="name" id="name" placeholder="Ingrese su nombre(s)">
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Apellido (s) <span class="red_required">*</span></label>
                                    <input type="text" name="lastname" id="lastname" placeholder="Ingrese su apellido(s)">
                                </div>
                                <div class="form-group">
                                    <label for="occupation">Cargo <span class="red_required">*</span></label>
                                    <input type="text" name="occupation" id="occupation" placeholder="Ingrese su cargo">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electrónico <span class="red_required">*</span></label>
                                    <input type="email" name="email" id="email"
                                        placeholder="Ingrese su correo electrónico">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Teléfono o Celular <span class="red_required">*</span></label>
                                    <input type="number" name="phone" id="phone"
                                        placeholder="Ingrese su teléfono o celular">
                                </div>
                                <div class="section-title">
                                    <h2>Rubro y Áreas de Interés :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="categry">Rubro <span class="red_required">*</span>
                                        <p>¿En qué rubro estas interesado?</p>
                                    </label>
                                    <select name="category" id="categry">
                                        <option value="">-Seleccionar Rubro-</option>
                                        <option value="pro">Rubro A</option>
                                        <option value="prov">Rubro B</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="container_tag">
                                        <label for="areas_of_interest">Áreas de Interes <span class="red_required">*</span>
                                            <p>¿En qué areas estas interesado?</p>
                                        </label>
                                        <input type="text" name="areas_of_interest" id="areas_of_interest" placeholder=""
                                            value="">
                                    </div>
                                </div>
                                <div class="section-title">
                                    <h2>Portafolio :</h2>
                                </div>
                                <div class="form-group">
                                    <label for="">Cargar Portafolio <p>Opcional</p></label>
                                    <div class="dropzone dropzone-default" id="document_dropzone">
                                        <div class="dropzone-msg dz-message needsclick">
                                            <h3 class="dropzone-msg-title">
                                                <i class="fa fa-cloud-upload text-red" style="font-size: 3rem"></i>
                                            </h3>
                                            <span class="dropzone-msg-desc">Suelta el archivo aquí o haz clic para subirlo.</span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="lastname" placeholder="Ingrese su teléfono o celular">
                                </div>

                                <div class="form-group">
                                    <label for="motivation">Motivación <span class="red_required">*</span></label>
                                    <textarea name="motivation" id="motivation" style="width: 100%; padding: 0 1.5rem" id="motivation" rows="5"
                                        placeholder="Ingrese su motivación"></textarea>
                                </div>
                            @break

                            @default
                        @endswitch
                        <div class="terms_and_conditions">
                            <div>
                                <label class="container_checkbox">
                                    <p class="text_term_and_conditions">Al ultilizar nuestros servicios usted acepta
                                        nuestros <a data-toggle="modal" href="#modal_term_condition"
                                            class="link_a">Terminos y Condiciones</a> de uso</p>
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
                                                <button type="button" class="btn btn-cancel" data-dismiss="modal"
                                                    onclick="uncheck()">Rechazar</button>
                                                <button type="button" class="btn btn-accept" data-dismiss="modal"
                                                    onclick="check()">Aceptar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <button type="button" class="thm-btn style-2">Guardar Perfil</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type='text/javascript' src='{{ asset('front/js/tagify.js') }}'></script>
    <script type='text/javascript' src='{{ asset('front/js/tagify.polyfills.min.js') }}'></script>
    <script>
        function check() {

            document.getElementById("myCheck").checked = true;
        }

        function uncheck() {
            document.getElementById("myCheck").checked = false;
        }
    </script>

    <script>
        // Tagify
        let input = document.getElementById('areas_of_interest');
        new Tagify(input, {
            maxTags: 5,
        })
    </script>
@endsection
