<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $steps = [
            "step_1" => [
                "id" => "step_1",
                "title" => "Preguntas step 1",
                "show" => "d-block",
                "fields" => [
                    [
                        "field" => "task_1",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => "true",
                        "label" => "Conoces o participas de comunidades activas de desarrollo web en tu pais ciudad o región?, importante!",
                    ],
                    [
                        "field" => "task_2",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => "false",
                        "label" => "Check me out, adicional le pueden meter cualquier cantidad de información y el tienene que seguir funcionando",
                    ],
                    [
                        "field" => "task_3",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => "false",
                        "label" => "Check me out, adicional le pueden meter cualquier cantidad de información y el tienene que seguir funcionando... Check me out, adicional le pueden meter",
                    ],
                    [
                        "field" => "task_4",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => "false",
                        "label" => "informacion de la pregunta final, la idea es ver como se comporta la maquetación",
                    ],
                ],
            ],
            "step_2" => [
                "id" => "step_2",
                "title" => "Preguntas step 2",
                "show" => "d-none",
                "fields" => [
                    [
                        "field" => "name",
                        "type" => "checkbox",
                        "class" => "step_2",
                        "data" => "false",
                        "label" => "Crees que 1 año son el tiempo suficiente para dominar una tecnologia del front",
                    ],
                    [
                        "field" => "phone",
                        "type" => "checkbox",
                        "class" => "step_2",
                        "data" => "true",
                        "label" => "Sabes o haz manejado alguna tecnología en el backend para el guardado de tus registros en db",
                    ],
                ],
            ],
            "step_3" => [
                "id" => "step_3",
                "title" => "Preguntas step 3",
                "show" => "d-none",
                "fields" => [
                    [
                        "field" => "name",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => "true",
                        "label" => "lorem isun dolor amet, amet is un insup dolor amet before amet dolor insup amen dolor",
                    ],
                    [
                        "field" => "phone",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => "false",
                        "label" => "Tienes alguna experiencia laboral en empresas de tecnología, casa de software o marketing digital?",
                    ],
                ],
            ],
        ];
        return view('welcome', [
            'steps' => $steps
        ]);
    }
}
