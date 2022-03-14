<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $steps = [
            "step_1" => [
                "id" => "step_1",
                "title" => "¿Me siento aceptada por mi grupo de pares y amigos(as)?",
                "show" => "d-block",
                "btnEnd" => false,
                "fields" => [
                    [
                        "field" => "ask_1",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "ask_2",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_2" => [
                "id" => "step_2",
                "title" => "¿En los últimos tres meses has tenido relaciones sexuales con más de una persona? ",
                "show" => "d-none",
                "btnEnd" => false,
                "fields" => [
                    [
                        "field" => "name",
                        "type" => "checkbox",
                        "class" => "step_2",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "phone",
                        "type" => "checkbox",
                        "class" => "step_2",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_3" => [
                "id" => "step_3",
                "title" => "¿Actualmente utilizas algún método anticonceptivo para prevenir embarazos?",
                "show" => "d-none",
                "btnEnd" => true,
                "fields" => [
                    [
                        "field" => "name",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "phone",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
        ];
        return view('welcome', [
            'steps' => $steps
        ]);
    }
}
