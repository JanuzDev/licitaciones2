<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AuthEmailNotification;
use App\Notifications\ResetPasswordEmailNotification;
use App\Notifications\UpdatedProfileEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class SendController extends Controller
{
    public function auth_email()
    {
        $user = User::first();
        Notification::send($user, new AuthEmailNotification());
        dd('autentificacion enviado');
    }

    public function reset_email()
    {
        $user = User::first();
        Notification::send($user, new ResetPasswordEmailNotification());
        dd('recuperacion de contraseña enviado');
    }

    public function update_email()
    {
        $user = User::first();
        Notification::send($user, new UpdatedProfileEmailNotification());
        dd('perfil actualizado enviado');
    }


    /* public function test_email(){
        return view('emails.auth');
    } */
}
