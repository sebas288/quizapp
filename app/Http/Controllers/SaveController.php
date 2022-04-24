<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Mail;

class SaveController extends Controller
{
    public function store(Request $request){
        $test = new Test();
        $test->questions = json_encode([
            "email" => $request->email,
            "finalData" => $request->finalData,
            "finalTime" => $request->finalTime,
            "points" => $request->points,
            "template" => $request->template,
        ]);

        $templates = [
            "emails.riesgo_bajo",
            "emails.riesgo_medio",
            "emails.riesgo_alto",
        ];

        $error = null;
        $email = null;
        try {
            $test->save();
            $email = $this->sendEmails($request->email, "edwin123067@gmail.com", $templates[$request->template], [
                "email" => $request->email,
                "finalData" => $request->finalData,
                "finalTime" => $request->finalTime,
                "points" => $request->points,
            ], "Caracterización yo decido");
        } catch (\Exception $e) {
            $error = $e->getMessage();
        }

        return response()->json([
            "request" => $request->all(),
            "test" => $test,
            "email" => $email,
            "error" => $error
        ], 200);
    }

    public function sendEmails($destinatario, $copia, $plantilla, $data, $asunto)
    {
        try {
            Mail::send($plantilla, $data, function($msj) use($destinatario, $copia, $asunto){
                $msj->from("yodecidocuando@medellin.gov.co","Yo decido");
                $msj->subject($asunto);
                $msj->to($destinatario);
                /* ->bcc($copia); */
            });
            return [
                "status" => 1,
                "message" => "Email enviado exitosamente",
                "plantilla" => $plantilla,
                "destinatario" => $destinatario
            ];

        } catch (\Exception $e) {
            return [
                "status" => 0,
                "error" => $e->getMessage(),
                "message" => "Fallo el envío del mensaje",
                "plantilla" => $plantilla,
                "destinatario" => $destinatario
            ];
        }
    }

    public function show() {
        $question = Test::select(
            'id',
            'questions'
        )->get();

        return response()->json([
            'question' => $question
        ], 200);
    }
}
