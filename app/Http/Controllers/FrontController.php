<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function personal()
    {

        return view('front.home', [
            'type' => "Convocatorias de Personal"

        ]);
    }

    public function consultorias()
    {

        return view('front.home', [
            'type' => 'Consultorías'

        ]);
    }

    public function profile()
    {

        return view('front.perfil', [
            'type' => 'profesional'

        ]);
    }
    public function supplier()
    {
        return view('front.perfil', [
            'type' => 'proveedor'

        ]);
    }

    public function register()
    {
        return view('front.session.register');
    }

    public function login()
    {
        return view('front.session.login');
    }
    public function password_reset()
    {
        return view('front.session.password_reset');
    }

    public function detail()
    {
        return view('front.detail');
    }
}
