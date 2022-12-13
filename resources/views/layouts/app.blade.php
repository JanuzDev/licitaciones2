<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <link rel='stylesheet' id='fulton-parent-style-css' href='{{ asset('front/css/parent.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('front/css/bootstrap.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css' href='{{ asset('front/css/font-awesome.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='flaticon-css' href='{{ asset('front/css/flaticon.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='icomoon-css' href='{{ asset('front/css/icomoon.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='owl-theme-css' href='{{ asset('front/css/owl.carousel.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fancybox-css' href='{{ asset('front/css/jquery.fancybox.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='gui-css' href='{{ asset('front/css/gui.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='animate-css' href='{{ asset('front/css/animate.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='common-style-css' href='{{ asset('front/css/common.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fulton-custom-style-css' href='{{ asset('front/css/custom.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fulton-responsive-css' href='{{ asset('front/css/responsive.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fulton-theme-slug-fonts-css'
        href='https://fonts.googleapis.com/css?family=Hind%3A400%2C700%7CLora%3A400%2C700&#038;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='tf-compiled-options-mobmenu-css'
        href='{{ asset('front/css/titan-framework-mobmenu-css.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='tf-google-webfont-dosis-css'
        href='//fonts.googleapis.com/css?family=Dosis%3Ainherit%2C400&#038;subset=latin%2Clatin-ext&#038;ver=5.5.11'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fulton-main-style-css' href='{{ asset('front/css/child.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='cssmobmenu-icons-css' href='{{ asset('front/css/mobmenu-icons.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='kc-general-css' href='{{ asset('front/css/kingcomposer.min.css') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' href='{{ asset('front/css/dropzone.css') }}' type='text/css' media='all' />

    <style>
        @media only screen and (max-width: 320px) {

            /*TODO: home.blade.php - Licitaciones*/
            .col-lg-8 .pagination_container .page_pagination .pagination li {
                margin: 0 0px !important;
            }

            .pagination>li>a,
            .pagination>li>span {
                width: 45px;
                font-size: 15px;
                font-family: 'GillSans';
                color: #222221;
            }

            /*TODO: detail.blade.php - SP Documentos */
            .items-container .items .item .detail .separator {
                width: auto !important;
            }

            .items-container .items .item .detail .document_section .document_all {
                flex-direction: column;
                text-align: center;
            }

            .items-container .items .item .detail .document_section {
                padding: 20px 0px;
            }

        }




        @media only screen and (max-width: 425px) {

            /* home.blade.php */
            .search-form .row .col-lg-3 {

                padding: 0px 15px 0px 15px !important;
            }

            .search-form .row .col-lg-6 {

                padding: 0px 15px 0px 15px !important;
            }

            .col-lg-8 .pagination_container {
                flex-direction: column
            }

            .col-lg-8 .items .item {
                flex-direction: column
            }

            .col-lg-8 .items .item .icon {
                text-align: center;
                margin-top: 0px !important;
            }

            .col-lg-8 .items .item .detail .content {
                text-align: justify;
                margin-top: 0px !important;
            }

            .col-lg-8 .items .item .detail .content .info {
                justify-content: center;
                margin-top: 0px !important;
            }

            .col-lg-8 .items .item .detail .content .title {
                font-size: 19px !important;
            }

            .col-lg-8 .items .item .detail .status {
                flex-direction: column;
            }

            .col-lg-8 .items .item .detail .content .sub_info {
                flex-direction: column;
            }

            .col-lg-8 .items .item .detail .status .sub_info_status {
                flex-direction: column;
            }

            .items-container .items .item .detail .info .sub_info_status_new {
                flex-direction: column;
            }

            .col-lg-8 .pagination_container .page_pagination .pagination li {
                margin: 0 0px !important;
            }

            /* SP de Documentos */
            .items-container .items .item .detail .info .sub_info_status_new {
                align-items: start !important
            }

            .items-container .items .item .detail .info .sub_info {
                align-items: start !important
            }

            .items-container .items .item .detail .document_section .documents .document_all {
                padding-bottom: 20px;
                flex-direction: column;
            }

            .items-container .items_footer .social_section .social_title {
                font-size: 14px !important
            }

            .items-container .items_footer .social_section .btn-social {
                padding: 5px !important;
                width: 35px !important;
            }

            .items-container .items_footer .social_section .btn-social .fa {
                font-size: 14px !important
            }

            /* Perfil Profesional/Proovedor */
            .items-container .container_flex {

                flex-direction: column;

            }

            .menu-profile {
                margin-bottom: 20px
            }

            /* Terminos y condiciones */
            .register-form.profile .terms_and_conditions .container_checkbox .text_term_and_conditions {
                font-size: 14px !important;
            }

            /* Terminos y condiciones en Registro*/
            .items-container .container_form .container_checkbox .text_term_and_conditions {
                font-size: 14px !important;
            }

            .register-form.profile .terms_and_conditions .container_checkbox .checkmark,
            .items-container .container_form .container_checkbox .checkmark {
                margin-top: 15px !important;
            }

        }

        @media only screen and (max-width: 768px) {
            .search-form .row .col-lg-3 {

                padding-left: 0;
            }

            .search-form .row .col-lg-6 {

                padding-right: 0;
            }

            .col-lg-8 .pagination_container .page_pagination .pagination li {
                margin: 0 0px !important;
            }

            /* Perfil Profesional/Proovedor */
            .items-container .container_flex {

                flex-direction: column;

            }

            .menu-profile {
                margin-bottom: 20px
            }



        }

        @media only screen and (max-width: 1024px) {
            .search-form .row .col-lg-3 {

                padding-left: 0;
            }

            .search-form .row .col-lg-6 {

                padding-right: 0;
            }

            .col-lg-8 .pagination_container .page_pagination .pagination li {
                margin: 0 0px !important;
            }

            /* Terminos y condiciones */
            .register-form.profile .terms_and_conditions .container_checkbox .text_term_and_conditions {
                font-size: 14px !important;
            }

            .register-form.profile .terms_and_conditions .container_checkbox .checkmark {
                margin-top: 7px
            }
        }




        /* Hide WP Mobile Menu outside the width of trigger */
        @media only screen and (min-width:991px) {

            .mob_menu,
            .mob_menu_left_panel,
            .mob_menu_right_panel,
            .mobmenu {
                display: none !important;
            }

        }

        /* Our css Custom Options values */
        @media only screen and (max-width:991px) {
                {
                display: none !important;
            }

            .mob-menu-left-panel .mobmenu-left-bt,
            .mob-menu-right-panel .mobmenu-right-bt {
                position: absolute;
                right: 0px;
                top: 10px;
                font-size: 30px;
            }

            .mob-menu-slideout .mob-cancel-button {
                display: none;
            }

            .mobmenu,
            .mob-menu-left-panel,
            .mob-menu-right-panel {
                display: block;
            }

            .mobmenur-container i {
                color: #da291c;
            }

            .mobmenul-container i {
                color: #222;
            }

            .mobmenul-container img {
                max-height: 70px;
                float: left;
            }

            .mobmenur-container img {
                max-height: 70px;
                float: right;
            }

            #mobmenuleft li a,
            #mobmenuleft li a:visited {
                color: #222;

            }

            .mobmenu_content h2,
            .mobmenu_content h3,
            .show-nav-left .mob-menu-copyright,
            .show-nav-left .mob-expand-submenu i {
                color: #222;
            }

            .mobmenu_content #mobmenuleft li:hover,
            .mobmenu_content #mobmenuright li:hover {
                background-color: #a3d3e8;
            }

            .mobmenu_content #mobmenuright li:hover {
                background-color: #da291c;
            }

            .mobmenu_content #mobmenuleft .sub-menu {
                background-color: #eff1f1;
                margin: 0;
                color: #222;
                width: 100%;
                position: initial;
            }

            .mob-menu-left-panel .mob-cancel-button {
                color: #000;
            }

            .mob-menu-right-panel .mob-cancel-button {
                color: #da291c;
            }

            .mob-menu-slideout-over .mobmenu_content {
                padding-top: 40px;
            }

            .mob-menu-left-bg-holder {
                opacity: 1;
                background-attachment: fixed;
                background-position: center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }

            .mob-menu-right-bg-holder {
                opacity: 1;
                background-attachment: fixed;
                background-position: center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }

            .mobmenu_content #mobmenuleft .sub-menu a {
                color: #222;
            }

            .mobmenu_content #mobmenuright .sub-menu a {
                color: #ffffff;
            }

            .mobmenu_content #mobmenuright .sub-menu {
                background-color: #343434;
                margin: 0;
                color: #ffffff;
                position: initial;
                width: 100%;
            }

            #mobmenuleft li a:hover {
                color: #fff;

            }

            #mobmenuright li a,
            #mobmenuright li a:visited,
            .show-nav-right .mob-menu-copyright,
            .show-nav-right .mob-expand-submenu i {
                color: #ffffff;
            }

            #mobmenuright li a:hover {
                color: #fff;
            }

            .mobmenul-container {
                top: 5px;
                margin-left: 5px;
            }

            .mobmenur-container {
                top: 5px;
                margin-right: 15px;
            }

            /* 2nd Level Menu Items Padding */
            .mobmenu .sub-menu li a {
                padding-left: 50px;
            }

            /* 3rd Level Menu Items Padding */
            .mobmenu .sub-menu .sub-menu li a {
                padding-left: 75px;
            }


            .mob-menu-logo-holder {
                padding-top: 0px;
                text-align: center;
                ;
                ;
            }

            .mob-menu-header-holder {

                background-color: #fbfbfb;
                height: 70px;
                width: 100%;
                font-weight: bold;
                position: fixed;
                top: 0px;
                right: 0px;
                z-index: 99998;
                color: #000;
                display: block;
            }

            .mobmenu-push-wrap,
            body.mob-menu-slideout-over {
                padding-top: 70px;
            }

            .mob-menu-slideout .mob-menu-left-panel {
                background-color: #f9f9f9;
                ;
                width: 270px;
                -webkit-transform: translateX(-270px);
                -moz-transform: translateX(-270px);
                -ms-transform: translateX(-270px);
                -o-transform: translateX(-270px);
                transform: translateX(-270px);
            }

            .mob-menu-slideout .mob-menu-right-panel {
                background-color: #343434;
                width: 270px;
                -webkit-transform: translateX(270px);
                -moz-transform: translateX(270px);
                -ms-transform: translateX(270px);
                -o-transform: translateX(270px);
                transform: translateX(270px);
            }

            /* Will animate the content to the right 275px revealing the hidden nav */
            .mob-menu-slideout.show-nav-left .mobmenu-push-wrap,
            .mob-menu-slideout.show-nav-left .mob-menu-header-holder {

                -webkit-transform: translate(270px, 0);
                -moz-transform: translate(270px, 0);
                -ms-transform: translate(270px, 0);
                -o-transform: translate(270px, 0);
                transform: translate(270px, 0);
                -webkit-transform: translate3d(270px, 0, 0);
                -moz-transform: translate3d(270px, 0, 0);
                -ms-transform: translate3d(270px, 0, 0);
                -o-transform: translate3d(270px, 0, 0);
                transform: translate3d(270px, 0, 0);
            }

            .mob-menu-slideout.show-nav-right .mobmenu-push-wrap,
            .mob-menu-slideout.show-nav-right .mob-menu-header-holder {

                -webkit-transform: translate(-270px, 0);
                -moz-transform: translate(-270px, 0);
                -ms-transform: translate(-270px, 0);
                -o-transform: translate(-270px, 0);
                transform: translate(-270px, 0);

                -webkit-transform: translate3d(-270px, 0, 0);
                -moz-transform: translate3d(-270px, 0, 0);
                -ms-transform: translate3d(-270px, 0, 0);
                -o-transform: translate3d(-270px, 0, 0);
                transform: translate3d(-270px, 0, 0);
            }


            /* Mobmenu Slide Over */
            .mobmenu-overlay {
                opacity: 0;
            }

            .mob-menu-slideout-top .mobmenu-overlay,
            .mob-menu-slideout .mob-menu-right-panel .mob-cancel-button,
            .mob-menu-slideout .mob-menu-left-panel .mob-cancel-button {
                display: none !important;
            }

            .show-nav-left .mobmenu-overlay,
            .show-nav-right .mobmenu-overlay {
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.83);
                z-index: 99999;
                position: absolute;
                left: 0;
                top: 0;
                opacity: 1;
                -webkit-transition: .5s ease;
                -moz-transition: .5s ease;
                -ms-transition: .5s ease;
                -o-transition: .5s ease;
                transition: .5s ease;
                position: fixed;
                cursor: pointer;
            }

            .mob-menu-slideout-over .mob-menu-left-panel {
                display: block !important;
                background-color: #f9f9f9;
                ;
                width: 270px;
                -webkit-transform: translateX(-270px);
                -moz-transform: translateX(-270px);
                -ms-transform: translateX(-270px);
                -o-transform: translateX(-270px);
                transform: translateX(-270px);
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .mob-menu-slideout-over .mob-menu-right-panel {
                display: block !important;
                background-color: #343434;
                ;
                width: 270px;
                -webkit-transform: translateX(270px);
                -moz-transform: translateX(270px);
                -ms-transform: translateX(270px);
                -o-transform: translateX(270px);
                transform: translateX(270px);
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .mob-menu-slideout-over.show-nav-left .mob-menu-left-panel {
                display: block !important;
                background-color: #f9f9f9;
                ;
                width: 270px;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .show-nav-right.mob-menu-slideout-over .mob-menu-right-panel {
                display: block !important;
                background-color: #343434;
                width: 270px;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
            }

            /* Hides everything pushed outside of it */
            .mob-menu-slideout .mob-menu-left-panel,
            .mob-menu-slideout-over .mob-menu-left-panel {
                position: fixed;
                top: 0;
                height: 100%;
                z-index: 300000;
                overflow-y: auto;
                overflow-x: hidden;
                opacity: 1;
            }


            .mob-menu-slideout .mob-menu-right-panel,
            .mob-menu-slideout-over .mob-menu-right-panel {
                position: fixed;
                top: 0;
                right: 0;
                height: 100%;
                z-index: 300000;
                overflow-y: auto;
                overflow-x: hidden;
                opacity: 1;

            }

            /*End of Mobmenu Slide Over */

            .mobmenu .headertext {
                color: #222;
            }

            .headertext span {
                position: initial;
                line-height: 70px;
            }


            /* Adds a transition and the resting translate state */
            .mob-menu-slideout .mobmenu-push-wrap,
            .mob-menu-slideout .mob-menu-header-holder {

                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
                -webkit-transform: translate(0, 0);
                -moz-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                -o-transform: translate(0, 0);
                transform: translate(0, 0);
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);

            }

            /* Mobile Menu Frontend CSS Style*/
            html,
            body {
                overflow-x: hidden;
            }

            .hidden-overflow {
                overflow: hidden !important;
            }

            /* Hides everything pushed outside of it */
            .mob-menu-slideout .mob-menu-left-panel {
                position: fixed;
                top: 0;
                height: 100%;
                z-index: 300000;
                overflow-y: auto;
                overflow-x: hidden;
                opacity: 1;
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .mob-menu-slideout.show-nav-left .mob-menu-left-panel {
                transition: transform .5s;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
            }

            body.admin-bar .mobmenu {
                top: 32px;
            }

            @media screen and (max-width: 782px) {
                body.admin-bar .mobmenu {
                    top: 46px;
                }
            }

            .mob-menu-slideout .mob-menu-right-panel {
                position: fixed;
                top: 0;
                right: 0;
                height: 100%;
                z-index: 300000;
                overflow-y: auto;
                overflow-x: hidden;
                opacity: 1;
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .mob-menu-slideout.show-nav-right .mob-menu-right-panel {
                transition: transform .5s;
                -webkit-transform: translateX(0);
                -moz-transform: translateX(0);
                -ms-transform: translateX(0);
                -o-transform: translateX(0);
                transform: translateX(0);
            }

            .show-nav-left .mobmenu-push-wrap {
                height: 100%;
            }

            /* Will animate the content to the right 275px revealing the hidden nav */
            .mob-menu-slideout.show-nav-left .mobmenu-push-wrap,
            .show-nav-left .mob-menu-header-holder {
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .show-nav-right .mobmenu-push-wrap {
                height: 100%;
            }

            /* Will animate the content to the right 275px revealing the hidden nav */
            .mob-menu-slideout.show-nav-right .mobmenu-push-wrap,
            .mob-menu-slideout.show-nav-right .mob-menu-header-holder {
                -webkit-transition: -webkit-transform .5s;
                -moz-transition: -moz-transform .5s;
                -ms-transition: -ms-transform .5s;
                -o-transition: -o-transform .5s;
                transition: transform .5s;
            }

            .widget img {
                max-width: 100%;
            }

            #mobmenuleft,
            #mobmenuright {
                margin: 0;
                padding: 0;
            }

            #mobmenuleft li>ul {
                display: none;
                left: 15px;
            }

            .mob-expand-submenu {
                position: relative;
                right: 0px;
                float: right;
                margin-top: -50px;
            }

            .mob-expand-submenu i {
                padding: 12px;
            }

            #mobmenuright li>ul {
                display: none;
                left: 15px;
            }

            .rightmbottom,
            .rightmtop {
                padding-left: 10px;
                padding-right: 10px;
            }

            .mobmenu_content {
                z-index: 1;
                height: 100%;
                overflow: auto;
            }

            .mobmenu_content li a {
                display: block;
                letter-spacing: 1px;
                padding: 10px 20px;
                text-decoration: none;
            }

            .mobmenu_content li {
                list-style: none;
            }

            .mob-menu-left-panel li,
            .leftmbottom,
            .leftmtop {
                padding-left: 0%;
                padding-right: 0%;
            }

            .mob-menu-right-panel li,
            .rightmbottom,
            .rightmtop {
                padding-left: 0%;
                padding-right: 0%;
            }

            .mob-menu-slideout .mob_menu_left_panel_anim {
                -webkit-transition: all .30s ease-in-out !important;
                transition: all .30s ease-in-out !important;
                transform: translate(0px) !important;
                -ms-transform: translate(0px) !important;
                -webkit-transform: translate(0px) !important;
            }

            .mob-menu-slideout .mob_menu_right_panel_anim {
                -webkit-transition: all .30s ease-in-out !important;
                transition: all .30s ease-in-out !important;
                transform: translate(0px) !important;
                -ms-transform: translate(0px) !important;
                -webkit-transform: translate(0px) !important;
            }

            .mobmenul-container {
                position: absolute;
            }

            .mobmenur-container {
                position: absolute;
                right: 0px;
            }

            .mob-menu-slideout .mob_menu_left_panel {
                width: 230px;
                height: 100%;
                position: fixed;
                top: 0px;
                left: 0px;
                z-index: 99999999;
                transform: translate(-230px);
                -ms-transform: translate(-230px);
                -webkit-transform: translate(-230px);
                transition: all .30s ease-in-out !important;
                -webkit-transition: all .30s ease-in-out !important;
                overflow: hidden;
            }

            .leftmbottom h2 {
                font-weight: bold;
                background-color: transparent;
                color: inherit;
            }

            .show-nav-right .mobmenur-container img,
            .show-nav-left .mobmenul-container img,
            .mobmenu .mob-cancel-button,
            .show-nav-left .mobmenu .mob-menu-icon,
            .show-nav-right .mobmenu .mob-menu-icon,
            .mob-menu-slideout-over.show-nav-left .mobmenur-container,
            .mob-menu-slideout-over.show-nav-right .mobmenul-container {
                display: none;
            }

            .show-nav-left .mobmenu .mob-cancel-button,
            .mobmenu .mob-menu-icon,
            .show-nav-right .mobmenu .mob-cancel-button {
                display: block;
            }

            .mobmenul-container i {
                line-height: 30px;
                font-size: 30px;
                float: left;
            }

            .left-menu-icon-text {
                float: left;
                line-height: 30px;
                color: #222;
            }

            .right-menu-icon-text {
                float: right;
                line-height: 25px;
                color: #222;
            }

            .mobmenur-container i {
                line-height: 25px;
                font-size: 25px;
                float: right;
            }

            .mobmenu_content .widget {
                padding-bottom: 0px;
                padding: 20px;
            }

            .mobmenu input[type="text"]:focus,
            .mobmenu input[type="email"]:focus,
            .mobmenu textarea:focus,
            .mobmenu input[type="tel"]:focus,
            .mobmenu input[type="number"]:focus {
                border-color: rgba(0, 0, 0, 0) !important;
            }

            .mob-expand-submenu i {
                padding: 12px;
                top: 10px;
                position: relative;
                font-weight: 600;
                cursor: pointer;
            }

            .nav,
            .main-navigation,
            .genesis-nav-menu,
            #main-header,
            #et-top-navigation,
            .site-header,
            .site-branding,
            .ast-mobile-menu-buttons,
            .hide {
                display: none !important;
            }

            .mob-menu-left-bg-holder,
            .mob-menu-right-bg-holder {
                width: 100%;
                height: 100%;
                position: absolute;
                z-index: -50;
                background-repeat: no-repeat;
                top: 0;
                left: 0;
            }

            .mobmenu_content .sub-menu {
                display: none;
            }

            .mob-standard-logo {
                display: inline-block;
                height: 70px !important;
            }

            .mob-retina-logo {
                height: 70px !important;
            }
        }

        .mobmenu-push-wrap {
            height: 100%;
        }

        .no-menu-assigned {
            font-size: 12px;
            padding-left: 10px;
            margin-top: 20px;
            position: absolute;
        }

        /* For 2K & 4K resolutions */
        @media only screen and (min-width: 2048px) {
            body {
                zoom: 1.5;
            }

        }

        @media only screen and (min-width: 3840px) {
            body {
                zoom: 2;
            }

        }
    </style>
    @vite('resources/sass/front.scss')
</head>

<body
    class="page-template page-template-tpl-king_composer page-template-tpl-king_composer-php page page-id-522 kingcomposer kc-css-system mob-menu-slideout-over">
    <div class="boxed_wrapper">
        <div class="preloader" style="display: none;"></div>
        @include('front.partials.header')
        @yield('content')
        @include('front.partials.footer')
        <button class="scroll-top" style="display: none;"><span id="flecha_scroll" class="fa fa-angle-up"
                style="transform:rotate(0deg);"></span></button>
        @include('front.partials.mobile')
    </div>
    <script type='text/javascript' src='{{ asset('front/js/jquery.js') }}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/mobmenu.js') }}' id='mobmenujs-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/core.min.js') }}' id='jquery-ui-core-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/bootstrap.min.js') }}' id='bootstrap-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/owl.carousel.min.js') }}' id='owl-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/jquery.fancybox.pack.js') }}' id='fancybox-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/custom.js') }}' id='fulton-main-script-js'></script>
    <script type='text/javascript' src='{{ asset('front/js/custom_script.js') }}' id='custom-js-js'></script>
    <script type='text/javascript'
        src='https://www.savethechildren.org.bo/wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min.js?ver=2.7.6'
        id='kc-front-scripts-js'></script>
</body>

</html>
