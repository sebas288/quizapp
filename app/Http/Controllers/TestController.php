<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class TestController extends Controller
{
    public function test() {
        $plantilla = "emails.riesgo_alto";
        try {
            Mail::send($plantilla, [] ,function($msj) use($plantilla){
                $msj->from("japersa92@gmail.com","Yo decido");
                $msj->subject("asunto de prueba");
                $msj->to("gerencia@somoscreandola.com");
                /* ->bcc($copia); */
            });
            return [
                "status" => 1,
                "message" => "Email enviado exitosamente"
            ];

        } catch (\Exception $e) {
            return [
                "status" => 0,
                "error" => $e->getMessage(),
                "message" => "Fallo el envío del mensaje"
            ];
        }
    }
}
