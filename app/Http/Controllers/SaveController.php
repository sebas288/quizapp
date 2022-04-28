<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Mail;

class SaveController extends Controller
{
    public $templates = [
        "emails.riesgo_bajo",
        "emails.riesgo_medio",
        "emails.riesgo_alto",
    ];

    public function store(Request $request){
        $test = new Test();
        $test->tdni = $request->tdni;
        $test->dni = $request->dni;
        $test->fnac = $request->date;
        $test->email = $request->email;
        $test->questions = json_encode([
            "email" => $request->email,
            "finalData" => $request->finalData,
            "finalTime" => $request->finalTime,
            "points" => $request->points,
            "template" => $request->template,
            "genero" => $request->genero,
        ]);

        $error = null;
        $email = null;
        try {
            $test->save();
            /* $email = $this->sendEmails($request->email, "edwin123067@gmail.com", $this->templates[$request->template], [
                "email" => $request->email,
                "finalData" => $request->finalData,
                "finalTime" => $request->finalTime,
                "points" => $request->points,
                "genero" => $request->genero,
            ], "Caracterización yo decido"); */
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

    public function notifyPerson(Request $request){
        $test = Test::where("dni", $request->dni)->first();

        if (!$test) {
            return response()->json([
                "status" => 0,
                "error" => "No se encontraron clientes con dni ".$request->dni,
            ], 200);
        }
        $test->email = $request->email;
        if (!$test->update()) {
            return response()->json([
                "status" => 0,
                "msg" => "error en la edición",
            ], 200);
        }
        //decodificar el json para sacar los datos
        $data = json_decode($test->questions);

        $email = $this->sendEmails($request->email, "edwin123067@gmail.com", $this->templates[$request->template], [
            "email" => $request->email,
            "finalData" => $request->finalData,
            "finalTime" => $request->finalTime,
            "points" => $request->points,
            "genero" => $request->genero,
        ], "Caracterización yo decido");

        return response()->json([
            "status" => $email["status"],
            "response" => $email,
            "request" => $request->all(),
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
        $test = Test::select(
            'id',
            'tdni',
            'dni',
            'fnac',
            'email',
            'questions',
        )->get();

        return response()->json([
            'test' => $test
        ], 200);
    }
}
