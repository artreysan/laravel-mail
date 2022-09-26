<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudMailable;
use Illuminate\Http\Request;

class MailController extends Controller{
    public function sendMail(){
        $correo = new SolicitudMailable;
        Mail::to('rarturo899@gmail.com')->send($correo);
        return "Menasaje enviado";
    }
}
