<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    static function role($rol)
    {
        switch ($rol) {
            case 'admin_ea':
                return 'Super Administrador';
                break;

            case 'admin':
                return 'Administrador Institucional';
                break;

            case 'monitor':
                return 'Monitor General';
                break;

            case 'institution':
                return 'Monitor Institucional';
                break;

            default:
                return 'Colaborador';
                break;
        }
    }

    static function statusHtml($status)
    {
        $color = 'secondary';
        $text = '';
        switch ($status) {
            case 'draft':
                $color = 'dark';
                $text = 'Borrador';
                break;

            case 'actived':
                $color = 'success';
                $text = 'Activo';
                break;

            case 'deleted':
                $color = 'danger';
                $text = 'Eliminado';
                break;

            case 'finished':
                $color = 'warning';
                $text = 'Finalizado';
                break;

            case 'submited':
                $color = 'success';
                $text = 'Enviado';
                break;

            default:
                # code...
                break;
        }
        return "<span class='label label-lg font-weight-bold label-light-$color label-inline'>$text</span>";
    }

    static function isActiveHtml($status)
    {
        $color = 'secondary';
        $text = '';
        switch ($status) {
            case true:
                $color = 'success';
                $text = 'Activa';
                break;

            case false:
                $color = 'danger';
                $text = 'Archivada';
                break;

            default:
                # code...
                break;
        }
        return "<span class='label label-lg font-weight-bold label-light-$color label-inline'>$text</span>";
    }

    static function getSetting()
    {
        return (object)[
            'password' => false,
            'register' => false,
        ];
    }

    static function getMenu(){
        $menus = Configuration::get();
        return $menus;
    }
}
