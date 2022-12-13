@extends('layouts.app')
@php
    $text = 'licitaciones';
    if (isset($type)) {
        $text = $type;
    }

@endphp
@inject('menus', 'App\Http\Controllers\HelpController')
@section('content')
    <section class="header-section">
        <div class="container">
            <h1 class="text-center text-white">{{ $text }}</h1>
            <form class="search-form" action="javascript:;">
                <div class="row">
                    <div class="col-lg-3">
                        <select name="" id="">
                            <option value="">Todos los Rubros</option>
                            <option value="pro">Rubro A</option>
                            <option value="prov">Rubro B</option>
                        </select>
                    </div>
                    <div class="col-lg-3 center">
                        <select name="" id="">
                            <option value="">Todos los Departamentos</option>
                            <option value="">La Paz</option>
                            <option value="">Cochabamba</option>
                            <option value="">Santa Cruz</option>
                            <option value="">Tarija</option>
                            <option value="">Oruro</option>
                            <option value="">Potosi</option>
                            <option value="">Beni</option>
                            <option value="">Pando</option>
                            <option value="">Chuquisaca</option>

                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="search">
                            <input type="text" placeholder="Buscar ..." />
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="items-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="items">
                        <div class="item">

                            <div class="detail">
                                <div class="content">
                                    <div class="info">
                                        <span class="type">Licitaciones</span>
                                    </div>
                                    <h2 class="title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur
                                        x</h2>
                                    <div class="separator"></div>
                                    <div class="info">
                                        <div class="sub_info_general">
                                            <div class="sub_info_status_new">
                                                <div>
                                                    <span>Estado:</span>
                                                    <span class="success"><i class="fa fa-check"></i>Activa</span>
                                                </div>
                                                <div><span>Vencimiento:</span> 12/12/2022</div>
                                            </div>
                                            <div class="sub_info">
                                                <div><span>Cuidad:</span> La Paz</div>
                                                <span class="category">Telecomunicaciones</span>
                                                @if (false)
                                                    <div><span>Código:</span> ASDG34-342</div>
                                                @endif
                                                <div class="areas">
                                                    <div>
                                                        <span>Áreas Relacionadas:</span>
                                                    </div>
                                                    <div>
                                                        Derecho Penal<span class="separator_red"> | </span>
                                                        Derecho Procesal<span class="separator_red"> | </span>
                                                        Derecho Judicial
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos, corporis?
                                        Dolor nihil natus quisquam cupiditate recusandae cumque quis fugit delectus quae
                                        labore, officia consequuntur error facilis animi dicta hic ex.</p>
                                </div>
                                <div class="document_section">

                                    <h2 class="title">Documentos</h2>
                                    <div class="documents">
                                        <div class="document_all">

                                            <div>
                                                <h3 class="document_title">LICITACION TDRs SEGURIDAD NRO 16_AF23-2.docx</h3>
                                            </div>
                                            <div class="document_link">
                                                <a class="btn_download"
                                                    href="https://www.savethechildren.org.bo/wp-content/uploads/2022/10/Generation-Hope-CYP-summary-ES-online-version-25-10-22.pdf"
                                                    download=""><i class="fa fa-file-pdf-o"></i> Descargar</a>
                                            </div>
                                        </div>

                                        <div class="document_all">

                                            <div>
                                                <h3 class="document_title">NOTAS ACLARATORIAS 5-12-22.docx</h3>
                                            </div>
                                            <div class="document_link">
                                                <a class="btn_download"
                                                    href="https://www.savethechildren.org.bo/wp-content/uploads/2022/10/Generation-Hope-CYP-summary-ES-online-version-25-10-22.pdf"
                                                    download=""><i class="fa fa-file-pdf-o"></i> Descargar</a>
                                            </div>
                                        </div>

                                        <div class="document_all">

                                            <div>
                                                <h3 class="document_title">LICITACION TDRs SEGURIDAD NRO 16_AF23-2.docx</h3>
                                            </div>
                                            <div class="document_link">
                                                <a class="btn_download"
                                                    href="https://www.savethechildren.org.bo/wp-content/uploads/2022/10/Generation-Hope-CYP-summary-ES-online-version-25-10-22.pdf"
                                                    download=""><i class="fa fa-file-pdf-o"></i> Descargar</a>
                                            </div>
                                        </div>

                                        <div class="document_all">

                                            <div>
                                                <h3 class="document_title">NOTAS ACLARATORIAS 5-12-22.docx</h3>
                                            </div>
                                            <div class="document_link">
                                                <a class="btn_download"
                                                    href="https://www.savethechildren.org.bo/wp-content/uploads/2022/10/Generation-Hope-CYP-summary-ES-online-version-25-10-22.pdf"
                                                    download=""><i class="fa fa-file-pdf-o"></i> Descargar</a>
                                            </div>
                                        </div>

                                        <div class="document_all">

                                            <div>
                                                <h3 class="document_title">NOTAS ACLARATORIAS 5-12-22.docx</h3>
                                            </div>
                                            <div class="document_link">
                                                <a class="btn_download"
                                                    href="https://www.savethechildren.org.bo/wp-content/uploads/2022/10/Generation-Hope-CYP-summary-ES-online-version-25-10-22.pdf"
                                                    download=""><i class="fa fa-file-pdf-o"></i> Descargar</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                    <div class="items_footer">
                        <div class="social_section">
                            <p class="social_title">Compartir <i class="fa fa-share-alt" aria-hidden="true"></i></p>
                            <a href="" class="btn-social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="" class="btn-social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="" class="btn-social"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a>
                        </div>


                        <div class="posts-nav">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <a href="https://www.savethechildren.org.bo/cierre-del-proyecto-advocacy-para-la-chiquitania/"
                                        rel="prev">
                                        <div class="prev-post"><span class="fa fa-long-arrow-left"></span> Anterior</div>
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="https://www.savethechildren.org.bo/ninos-ninas-y-adolescentes-de-america-latina-y-el-caribe-se-enfrentan-a-la-amenaza-del-alto-riesgo-climatico-pobreza-extrema-y-conflictos/"
                                        rel="next">
                                        <div class="next-post">Siguiente <span class="fa fa-long-arrow-right"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pagination_container">
                        <div class="page_pagination">
                            <ul class="pagination">
                                <li><span class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="javascript:;">2</a></li>
                                <li><a class="page-numbers" href="javascript:;">3</a></li>
                                <li><span class="page-numbers dots">…</span></li>
                                <li><a class="page-numbers" href="javascript:;">5</a></li>
                                <li><a class="next page-numbers" href="javascript:;"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form class="register-form" action="javascript:;">

                        <p class="title_form">Tú tambien puedes participar y hacer cambios positivos en la niñez boliviana,
                            registra tu CV o portafolio como:</p>

                        <div class="form-group">
                            <div class="list_types">

                                <div>
                                    <ul class="list_form">
                                        <li>Profesional</li>
                                        <li>Proveedor</li>
                                        <li>Voluntario</li>
                                        <li>Pasante</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <hr>
                        <a href="/iniciar-sesion" class="thm-btn style-2 link_form">Iniciar Sesión</a>


                        <p class="text-center" style="margin: 1rem 0">Si no tienes una cuenta, puedes crear una</p>

                        <a href="/crear-cuenta" class="thm-btn style-2 link_form">Crea Cuenta</a>
                    </form>



                </div>
            </div>
        </div>
    </section>
@endsection
