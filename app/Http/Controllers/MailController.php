<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;

class MailController extends Controller
{
    public function enviarCorreo()
    {
        $subject = "Asunto del correo";
        $data = [
            'message' => 'Hola, este es un correo de prueba.'
        ];

        Mail::to('majasarc09@gmail.com')->send(new SampleMail($subject, $data));
    }
}
