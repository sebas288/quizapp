<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $finalForm = [
            "step_person" => [
                "id" => "step_person",
                "title" => "Datos personales",
                "show" => "d-block",
                "btnEnd" => false,
                "changeSteps" => false,
                "fields" => [
                    [
                        "field" => "task_2",
                        "type" => "text",
                        "class" => "step_1",
                        "data" => "false",
                        "label" => "Nombres,",
                    ],
                    [
                        "field" => "task_3",
                        "type" => "email",
                        "class" => "step_1",
                        "data" => "false",
                        "label" => "Correo electronico",
                    ],
                    [
                        "field" => "task_4",
                        "type" => "phone",
                        "class" => "step_1",
                        "data" => "false",
                        "label" => "Celular",
                    ],
                ],
            ],
        ];
        $steps = [
            "step_0" => [
                "id" => "step_0",
                "title" => "¿ SOY ?",
                "show" => "d-block",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s1",
                        "type" => "checkbox",
                        "class" => "step_0",
                        "data" => 0,
                        "label" => "Hombre",
                    ],
                    [
                        "field" => "a2s2",
                        "type" => "checkbox",
                        "class" => "step_0",
                        "data" => 0,
                        "label" => "Mujer",
                    ],
                    [
                        "field" => "a2s3",
                        "type" => "checkbox",
                        "class" => "step_0",
                        "data" => 0,
                        "label" => "Otro",
                    ],
                ],
            ],
            "step_1" => [//¿Has tenido relaciones sexuales?
                "id" => "step_1",
                "title" => "¿Has tenido relaciones sexuales?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s1",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s1",
                        "type" => "checkbox",
                        "class" => "step_1",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_2" => [//Edad de tu primera relación sexual
                "id" => "step_2",
                "title" => "Edad de tu primera relación sexual",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s2",
                        "type" => "checkbox",
                        "class" => "step_2",
                        "data" => 1,
                        "label" => "11 a 14 años",
                    ],
                    [
                        "field" => "a2s2",
                        "type" => "checkbox",
                        "class" => "step_2",
                        "data" => 0,
                        "label" => "15 a 19 años",
                    ],
                ],
            ],
            "step_3" => [//¿Cuál es tu estado civil actual?
                "id" => "step_3",
                "title" => "¿ Cuál es tu estado civil actual ?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s3",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => 0,
                        "label" => "Soltero(a)",
                    ],
                    [
                        "field" => "a2s3",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => 1,
                        "label" => "Casado(a)",
                    ],
                    [
                        "field" => "a3s3",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => 1,
                        "label" => "Separado(a)",
                    ],
                    [
                        "field" => "a4s3",
                        "type" => "checkbox",
                        "class" => "step_3",
                        "data" => 1,
                        "label" => "Unión libre",
                    ],
                ],
            ],
            "step_4" => [//¿Tienes Hijos?
                "id" => "step_4",
                "title" => "¿ Tienes Hijos ?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s4",
                        "type" => "checkbox",
                        "class" => "step_4",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s4",
                        "type" => "checkbox",
                        "class" => "step_4",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_5" => [//Total de hijos
                "id" => "step_5",
                "title" => "Total de hijos",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s5",
                        "type" => "checkbox",
                        "class" => "step_5",
                        "data" => 0,
                        "label" => "0",
                    ],
                    [
                        "field" => "a2s5",
                        "type" => "checkbox",
                        "class" => "step_5",
                        "data" => 0,
                        "label" => "1",
                    ],
                    [
                        "field" => "a3s5",
                        "type" => "checkbox",
                        "class" => "step_5",
                        "data" => 0,
                        "label" => "2",
                    ],
                    [
                        "field" => "a4s5",
                        "type" => "checkbox",
                        "class" => "step_5",
                        "data" => 0,
                        "label" => "3",
                    ],
                    [
                        "field" => "a5s5",
                        "type" => "checkbox",
                        "class" => "step_5",
                        "data" => 0,
                        "label" => "4",
                    ],
                    [
                        "field" => "a6s5",
                        "type" => "checkbox",
                        "class" => "step_5",
                        "data" => 0,
                        "label" => "5",
                    ],
                ],
            ],
            "step_6" => [//Nivel de escolaridad de mi madre
                "id" => "step_6",
                "title" => "Nivel de escolaridad de mi madre",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 1,
                        "label" => "No la conocí",
                    ],
                    [
                        "field" => "a2s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 1,
                        "label" => "No tuvo ningún tipo de estudio",
                    ],
                    [
                        "field" => "a3s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 1,
                        "label" => "Sólo estudios primarios",
                    ],
                    [
                        "field" => "a4s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 0,
                        "label" => "Sólo estudios secundarios",
                    ],
                    [
                        "field" => "a5s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 0,
                        "label" => "Estudios técnicos",
                    ],
                    [
                        "field" => "a6s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 0,
                        "label" => "Estudios tecnológicos",
                    ],
                    [
                        "field" => "a7s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 0,
                        "label" => "Estudios profesionales",
                    ],
                    [
                        "field" => "a8s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 0,
                        "label" => "No sabe",
                    ],
                    [
                        "field" => "a9s6",
                        "type" => "checkbox",
                        "class" => "step_6",
                        "data" => 0,
                        "label" => "No responde",
                    ],
                ],
            ],
            "step_7" => [//Nivel de escolaridad de mi padre
                "id" => "step_7",
                "title" => "Nivel de escolaridad de mi padre",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 1,
                        "label" => "No la conocí",
                    ],
                    [
                        "field" => "a2s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 1,
                        "label" => "No tuvo ningún tipo de estudio",
                    ],
                    [
                        "field" => "a3s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 1,
                        "label" => "Sólo estudios primarios",
                    ],
                    [
                        "field" => "a4s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 0,
                        "label" => "Sólo estudios secundarios",
                    ],
                    [
                        "field" => "a5s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 0,
                        "label" => "Estudios técnicos",
                    ],
                    [
                        "field" => "a6s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 0,
                        "label" => "Estudios tecnológicos",
                    ],
                    [
                        "field" => "a7s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 0,
                        "label" => "Estudios profesionales",
                    ],
                    [
                        "field" => "a8s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 0,
                        "label" => "No sabe",
                    ],
                    [
                        "field" => "a9s7",
                        "type" => "checkbox",
                        "class" => "step_7",
                        "data" => 0,
                        "label" => "No responde",
                    ],
                ],
            ],
            "step_8" => [//¿Cuál es el nivel de ingresos familiares?
                "id" => "step_8",
                "title" => "¿Cuál es el nivel de ingresos familiares? ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "description" => "<p class='text-left'>Se entiende como salario mínimo el valor que por ley las empresas pagan a sus trabajadores y está en $1'117.172 pesos  (salario básico $1.000.000+ auxilio trasporte $117.172)</p>",
                "fields" => [
                    [
                        "field" => "a1s25",
                        "type" => "checkbox",
                        "class" => "step_8",
                        "data" => 1,
                        "label" => "Menos de $1'117.172 mensuales",
                    ],
                    [
                        "field" => "a2s25",
                        "type" => "checkbox",
                        "class" => "step_8",
                        "data" => 0,
                        "label" => "Más de $1'117.172 mensuales",
                    ],
                    [
                        "field" => "a3s25",
                        "type" => "checkbox",
                        "class" => "step_8",
                        "data" => 0,
                        "label" => "No sabe",
                    ],
                    [
                        "field" => "a4s25",
                        "type" => "checkbox",
                        "class" => "step_8",
                        "data" => 0,
                        "label" => "No responde",
                    ],
                ],
            ],
            "step_9" => [//¿Cuál es tu grado educativo alcanzado?
                "id" => "step_9",
                "title" => "¿Cuál es tu grado educativo alcanzado?  ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 1,
                        "label" => "0°",
                    ],
                    [
                        "field" => "a2s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "1°",
                    ],
                    [
                        "field" => "a3s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "2°",
                    ],
                    [
                        "field" => "a4s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "3°",
                    ],
                    [
                        "field" => "a5s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "4°",
                    ],
                    [
                        "field" => "a6s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "5°",
                    ],
                    [
                        "field" => "a7s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "6°",
                    ],
                    [
                        "field" => "a8s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "7°",
                    ],
                    [
                        "field" => "a9s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "8°",
                    ],
                    [
                        "field" => "a10s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "9°",
                    ],
                    [
                        "field" => "a11s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "10°",
                    ],
                    [
                        "field" => "a12s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "11°",
                    ],
                    [
                        "field" => "a13s9",
                        "type" => "checkbox",
                        "class" => "step_9",
                        "data" => 0,
                        "label" => "12°",
                    ],
                ],
            ],
            "step_10" => [//¿Me siento aceptado(a) por mis compañeros(as) de clase o amigos(as)?
                "id" => "step_10",
                "title" => "¿Me siento aceptado(a) por mis compañeros(as) de clase o amigos(as)?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s10",
                        "type" => "checkbox",
                        "class" => "step_10",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s10",
                        "type" => "checkbox",
                        "class" => "step_10",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_11" => [//¿En los últimos tres meses has tenido relaciones sexuales con más de una persona?
                "id" => "step_11",
                "title" => "¿En los últimos tres meses has tenido relaciones sexuales con más de una persona? ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s11",
                        "type" => "checkbox",
                        "class" => "step_11",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s11",
                        "type" => "checkbox",
                        "class" => "step_11",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_12" => [//¿Al  momento de  tener relaciones sexuales, utilizas preservativo?
                "id" => "step_12",
                "title" => "¿Al  momento de  tener relaciones sexuales, utilizas preservativo? ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "description" => "<p class='text-left'>¿ Qué es un Preservativo ?</p>
                <p class='text-left'>Más conocido como condón, es una funda  de látex (u otros materiales sintéticos) que se coloca en el pene del hombre para evitar el paso del semen hacia la mujer, evitando infecciones y embarazos. </p>
                <p class='text-left'>Tambien existen preservativos femenimos que funcionan de manera similar. </p>",
                "fields" => [
                    [
                        "field" => "a1s12",
                        "type" => "checkbox",
                        "class" => "step_12",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s12",
                        "type" => "checkbox",
                        "class" => "step_12",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_13" => [//¿Actualmente utilizas algún método anticonceptivo para prevenir embarazos?
                "id" => "step_13",
                "title" => "¿Actualmente utilizas algún método anticonceptivo para prevenir embarazos?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "description" => "<p class='text-left'>¿ Qué es un método anticonceptivo ?</p><p class='text-left'>Son sustancias, objetos o procedimientos que evitan que la mujer quede embarazada. Por ejemplo; condón, las pastillas , inyecciones, parche, implante subdérmico condón (Masculino y femenino) , entre otros. </p>",
                "fields" => [
                    [
                        "field" => "a1s13",
                        "type" => "checkbox",
                        "class" => "step_13",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s13",
                        "type" => "checkbox",
                        "class" => "step_13",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_14" => [//¿Alguna  vez has  tenido relaciones sexuales  bajo los  efectos  del alcohol  u  otra droga?
                "id" => "step_14",
                "title" => "¿Alguna  vez has  tenido relaciones sexuales  bajo los  efectos  del alcohol  u  otra droga? ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s14",
                        "type" => "checkbox",
                        "class" => "step_14",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s14",
                        "type" => "checkbox",
                        "class" => "step_14",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_15" => [//¿Alguna vez , tus relaciones sexuales han sido con personas mayores a 28 años?
                "id" => "step_15",
                "title" => "¿Alguna vez, tus relaciones sexuales han sido con personas mayores a 28 años?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s15",
                        "type" => "checkbox",
                        "class" => "step_15",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s15",
                        "type" => "checkbox",
                        "class" => "step_15",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_16" => [//¿La relación establecida con tus madre, padre o cuidador te permite hablar de sexualidad?
                "id" => "step_16",
                "title" => "¿La relación establecida con tus madre, padre o cuidador te permite hablar de sexualidad?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s16",
                        "type" => "checkbox",
                        "class" => "step_16",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s16",
                        "type" => "checkbox",
                        "class" => "step_16",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_17" => [//¿Has  recibido información relacionada  con métodos de anticoncepción a través de amigos, padres de familia, docentes  u otras personas?
                "id" => "step_17",
                "title" => "¿Has  recibido información relacionada  con métodos de anticoncepción a través de amigos, padres de familia, docentes  u otras personas? ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "description" => "<p class='text-left'>¿ Qué es un método anticonceptivo ?</p><p class='text-left'>Son sustancias, objetos o procedimientos que evitan que la mujer quede embarazada. Por ejemplo; condón, las pastillas , inyecciones, parche, implante subdérmico condón (Masculino y femenino) , entre otros. </p>",
                "fields" => [
                    [
                        "field" => "a1s17",
                        "type" => "checkbox",
                        "class" => "step_17",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s17",
                        "type" => "checkbox",
                        "class" => "step_17",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_18" => [//¿Tu  mamá  fue madre antes de los 19 años?
                "id" => "step_18",
                "title" => "¿Tu  mamá  fue madre antes de los 19 años? ",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s18",
                        "type" => "checkbox",
                        "class" => "step_18",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s18",
                        "type" => "checkbox",
                        "class" => "step_18",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_19" => [//¿Tu madre es cabeza de Familia y dependes economicamente de ella?
                "id" => "step_19",
                "title" => "¿Tu madre es cabeza de Familia y dependes economicamente de ella?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s19",
                        "type" => "checkbox",
                        "class" => "step_19",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s19",
                        "type" => "checkbox",
                        "class" => "step_19",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_20" => [//¿Alguna vez , has tenido relaciones sexuales bajo presión o en contra de tu voluntad?
                "id" => "step_20",
                "title" => "¿Alguna vez , has tenido relaciones sexuales bajo presión o en contra de tu voluntad?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s20",
                        "type" => "checkbox",
                        "class" => "step_20",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s20",
                        "type" => "checkbox",
                        "class" => "step_20",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_21" => [//¿Actualmente participas de alguna actividad deportiva, artística, cultural, grupo juvenil entre otras?
                "id" => "step_21",
                "title" => "¿Actualmente participas de alguna actividad deportiva, artística, cultural, grupo juvenil entre otras?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s21",
                        "type" => "checkbox",
                        "class" => "step_21",
                        "data" => 0,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s21",
                        "type" => "checkbox",
                        "class" => "step_21",
                        "data" => 1,
                        "label" => "No",
                    ],
                ],
            ],
            "step_22" => [//¿Actualmente trabajas para generar ingresos a la familia?
                "id" => "step_22",
                "title" => "¿Actualmente trabajas para generar ingresos a la familia?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s22",
                        "type" => "checkbox",
                        "class" => "step_22",
                        "data" => 1,
                        "label" => "Si",
                    ],
                    [
                        "field" => "a2s22",
                        "type" => "checkbox",
                        "class" => "step_22",
                        "data" => 0,
                        "label" => "No",
                    ],
                ],
            ],
            "step_23" => [//¿Cuánto es tu sueldo actual?
                "id" => "step_23",
                "title" => "¿Cuánto es tu sueldo actual?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "description" => "<p class='text-left'>Se entiende como salario mínimo el valor que por ley las empresas pagan a sus trabajadores y está en $1'117.172 pesos  (salario básico $1.000.000+ auxilio trasporte $117.172)</p>",
                "fields" => [
                    [
                        "field" => "a1s23",
                        "type" => "checkbox",
                        "class" => "step_23",
                        "data" => 1,
                        "label" => "Menos de $1'117.172 mensuales",
                    ],
                    [
                        "field" => "a2s23",
                        "type" => "checkbox",
                        "class" => "step_23",
                        "data" => 0,
                        "label" => "Más de $1'117.172 mensuales",
                    ],
                    [
                        "field" => "a3s23",
                        "type" => "checkbox",
                        "class" => "step_23",
                        "data" => 0,
                        "label" => "No sabe",
                    ],
                    [
                        "field" => "a4s23",
                        "type" => "checkbox",
                        "class" => "step_23",
                        "data" => 0,
                        "label" => "No responde",
                    ],
                    [
                        "field" => "a5s23",
                        "type" => "checkbox",
                        "class" => "step_23",
                        "data" => 0,
                        "label" => "No aplica"
                    ]
                ],
            ],
            "step_24" => [//Estrato socieconomico
                "id" => "step_24",
                "title" => "Estrato socieconómico",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "description" => "<p class='text-left'>¿ Qué es estrato socioeconómico ?</p><p class='text-left'>Es la forma en la que un pais clasifica las condiciones de la vivienda en la que habita un grupo de personas.
                Generalemnte,  Estrato 1: Bajo-Bajo  ,    Estrato 2: Bajo , Estrato 3: Medio-Bajo ,  Estrato 4: Medio , Estrato 5: Medio-Alto ,Estrato 6: Alto.</p>
                <p class='text-left'>Nota: Si no lo conoces preguntale al profesional a cargo</p>",
                "fields" => [
                    [
                        "field" => "a1s24",
                        "type" => "checkbox",
                        "class" => "step_24",
                        "data" => 1,
                        "label" => "1",
                    ],
                    [
                        "field" => "a2s24",
                        "type" => "checkbox",
                        "class" => "step_24",
                        "data" => 1,
                        "label" => "2",
                    ],
                    [
                        "field" => "a3s24",
                        "type" => "checkbox",
                        "class" => "step_24",
                        "data" => 1,
                        "label" => "3",
                    ],
                    [
                        "field" => "a4s24",
                        "type" => "checkbox",
                        "class" => "step_24",
                        "data" => 0,
                        "label" => "4",
                    ],
                    [
                        "field" => "a5s24",
                        "type" => "checkbox",
                        "class" => "step_24",
                        "data" => 0,
                        "label" => "5",
                    ],
                    [
                        "field" => "a6s24",
                        "type" => "checkbox",
                        "class" => "step_24",
                        "data" => 0,
                        "label" => "6",
                    ]
                ],
            ],
            "step_25" => [//¿Con cual de los siguientes grupos étnicos te identificas?
                "id" => "step_25",
                "title" => "¿Con cual de los siguientes grupos étnicos te identificas?",
                "show" => "d-none",
                "btnEnd" => false,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 0,
                        "label" => "No aplica",
                    ],
                    [
                        "field" => "a2s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Indígena",
                    ],
                    [
                        "field" => "a3s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Negritudes",
                    ],
                    [
                        "field" => "a4s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Rom",
                    ],
                    [
                        "field" => "a5s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Otras etnias",
                    ],
                    [
                        "field" => "a6s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Raizales",
                    ],
                    [
                        "field" => "a7s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Afrodescendientes",
                    ],
                    [
                        "field" => "a8s25",
                        "type" => "checkbox",
                        "class" => "step_25",
                        "data" => 1,
                        "label" => "Palanquero",
                    ],
                ],
            ],
            "step_26" => [//Edad tu primera menstruación
                "id" => "step_26",
                "title" => "Edad tu primera menstruación",
                "show" => "d-none",
                "btnEnd" => true,
                "changeSteps" => true,
                "fields" => [
                    [
                        "field" => "a1s26",
                        "type" => "checkbox",
                        "class" => "step_26",
                        "data" => 1,
                        "label" => "11 a 14 años",
                    ],
                    [
                        "field" => "a2s26",
                        "type" => "checkbox",
                        "class" => "step_26",
                        "data" => 0,
                        "label" => "15 a 19 años",
                    ],
                ],
            ]
        ];

        $responses = [
            [//riesgo alto que se muestra en el front
                "genero" => true,
                "titulo" => ["<h1>Camilo</h1>","<h1>Camila</h1>", "<h1>Cami</h1>"], //riesgo alto
                "image" => ["/images/camilo_alto.png", "/images/camila_alto.png", "/images/riesgo_alto.png"],
                "texto" => "<p>Tu vida viene desarrollándose en un contexto económico, social y cultural que te expone a un alto riesgo de un embarazo adolescente, pero ¡¡¡ANIMO!!!, Tu eres muy inteligente y  sabes  que  con  acceso  a  métodos  de  anticoncepción  y  un  proyecto  de  vida  claro,  tú DECIDES tu futuro, a continuación, te invitamos a conocer el directorio de oferta para la Prevención  de  Embarazo  Adolescente  y  a  conectarte  con  la  línea  amiga  en  Salud 3007231123  </p>
                <p>Es  importante  seguir  estas  recomendaciones  y  empoderarse  de  tu  futuro,  pues  Los padres y Las madres en la adolescencia reciben menos salario y tienen mayor tasa de desempleo, además están en alto riesgo de abandonar o postergar sus estudios, y muy pocos logran culminar una formación universitaria.  </p>
                <p>Si  eres  menor  de  14  años  recuerda  que  un  embarazo  a  tan  temprana  edad  es considerado por ley delito, por ello tienen unos derechos especiales que puedes consultar con un profesional en salud.</p>",
                "recordatorio" => "<h1>Y RECUERDA NO CREAS EN MITOS</h1>",
                "politicas" => [
                    "La mujer nunca queda embarazada en la primera relación sexual. ",
                    "A las mujeres que han tenido relaciones sexuales se les arquean las piernas. ",
                    "El lavado vaginal después de la relación sexual es un método eficaz para evitar el embarazo.",
                    "Durante la menstruación la mujer no debe practicar deportes, lavarse o cortarse el cabello, cargar bebés, cortar las plantas, entre otras actividades. ",
                    "Si la mujer no sangra en su primera relación sexual, quiere decir que no es virgen.",
                    "El VIH-SIDA se contagia sólo si se tiene relaciones sexuales con homosexuales o prostitutas. ",
                    "Las vaginas de las mujeres huelen a pescado. ",
                    "Si  un  hombre  se  masturba  demasiado,  tarde  o  temprano  se  le  acabarán  los espermatozoides",
                    "El lugar más seguro para guardar el condón es la billetera.",
                    "EL VIH puede pasar por los condones porque el condón se rompe con facilidad.",
                    "Días antes y días después del periodo la mujer no queda embarazada .",
                    "Retirar el pene de la vagina antes de eyacular es una forma efectiva de  prevenir el embarazo. ",
                    "La masturbación es practicada casi exclusivamente por los hombres  .",
                    "La vasectomía causa impotencia o disfunción eréctil en el hombre. ",
                    "Los que calzan grande lo tienen grande .",
                ]
            ],
            [//riesgo medio
                "genero" => true,
                "titulo" => ["<h1>Andres</h1>","<h1>Andrea</h1>", "<h1>Andy</h1>"], //riesgo medio
                "image" => ["/images/andres_medio.png", "/images/andrea_medio.png", "/images/riesgo_medio.png"],
                "texto" => "<p>Tu vida viene desarrollándose en un contexto económico, social y cultural que te expone a un riesgo medio de un embarazo adolescente, pero ¡¡¡ANIMO!!!Tu eres muy inteligente y  sabes  que  con  acceso  a  métodos  de  anticoncepción  y  un  proyecto  de  vida  claro,  tú DECIDES tu futuro, a continuación, te invitamos a conocer el directorio de Prevención de Embarazo Adolescente y a conectarte con la línea amiga en Salud 3007231123 </p>
                <p>Es  importante  seguir  estas  recomendaciones  y  empoderarse  de  tu  futuro,  pues  Los padres y Las madres en la adolescencia reciben menos salario y tienen mayor tasa de desempleo, además están en riesgo de abandonar o postergar sus estudios, y muy pocos logran culminar una formación universitaria.  </p>
                ",
                "recordatorio" => "<h1>Y RECUERDA NO CREAS EN MITOS</h1>",
                "politicas" => [
                    "La mujer nunca queda embarazada en la primera relación sexual. ",
                    "A las mujeres que han tenido relaciones sexuales se les arquean las piernas. ",
                    "El lavado vaginal después de la relación sexual es un método eficaz para evitar el embarazo.",
                    "Durante la menstruación la mujer no debe practicar deportes, lavarse o cortarse el cabello, cargar bebés, cortar las plantas, entre otras actividades. ",
                    "Si la mujer no sangra en su primera relación sexual, quiere decir que no es virgen.",
                    "El VIH-SIDA se contagia sólo si se tiene relaciones sexuales con homosexuales o prostitutas. ",
                    "Las vaginas de las mujeres huelen a pescado. ",
                    "Si  un  hombre  se  masturba  demasiado,  tarde  o  temprano  se  le  acabarán  los espermatozoides",
                    "El lugar más seguro para guardar el condón es la billetera.",
                    "EL VIH puede pasar por los condones porque el condón se rompe con facilidad.",
                    "Días antes y días después del periodo la mujer no queda embarazada .",
                    "Retirar el pene de la vagina antes de eyacular es una forma efectiva de  prevenir el embarazo. ",
                    "La masturbación es practicada casi exclusivamente por los hombres  .",
                    "La vasectomía causa impotencia o disfunción eréctil en el hombre. ",
                    "Los que calzan grande lo tienen grande .",
                ]
            ],
            [//riesgo bajo
                "genero" => true,
                "titulo" => ["<h1>Diego</h1>","<h1>Erika</h1>", "<h1>Dany</h1>"], //riesgo bajo
                "image" => ["/images/diego_bajo.png", "/images/erika_bajo.png", "/images/riesgo_bajo.png"],
                "texto" => "<p>Al estar en un riesgo bajo de un embarazo adolescente tienes una gran posibilidad de terminar una carrera universitaria, un postgrado, devengar un buen salario, sin embargo, no te confíes , siempre es necesario consultar un profesional de la salud y tener metas y sueños  claros,  te  invitamos  a  conocer  el  directorio  de  oferta  para  la  Prevención  de Embarazo Adolescente y a conectarte con la línea amiga en Salud 3007231123. </p>
                ",
                "recordatorio" => "<h1>Y RECUERDA NO CREAS EN MITOS</h1>",
                "politicas" => [
                    "La mujer nunca queda embarazada en la primera relación sexual. ",
                    "A las mujeres que han tenido relaciones sexuales se les arquean las piernas. ",
                    "El lavado vaginal después de la relación sexual es un método eficaz para evitar el embarazo.",
                    "Durante la menstruación la mujer no debe practicar deportes, lavarse o cortarse el cabello, cargar bebés, cortar las plantas, entre otras actividades. ",
                    "Si la mujer no sangra en su primera relación sexual, quiere decir que no es virgen.",
                    "El VIH-SIDA se contagia sólo si se tiene relaciones sexuales con homosexuales o prostitutas. ",
                    "Las vaginas de las mujeres huelen a pescado. ",
                    "Si  un  hombre  se  masturba  demasiado,  tarde  o  temprano  se  le  acabarán  los espermatozoides",
                    "El lugar más seguro para guardar el condón es la billetera.",
                    "EL VIH puede pasar por los condones porque el condón se rompe con facilidad.",
                    "Días antes y días después del periodo la mujer no queda embarazada .",
                    "Retirar el pene de la vagina antes de eyacular es una forma efectiva de  prevenir el embarazo. ",
                    "La masturbación es practicada casi exclusivamente por los hombres  .",
                    "La vasectomía causa impotencia o disfunción eréctil en el hombre. ",
                    "Los que calzan grande lo tienen grande .",
                ]
            ],
        ];

        $instituciones = [
            "INSTITUCION EDUCATIVA FE Y ALEGRIA JOSE MARIA VELAZ",
            "INSTITUCION EDUCATIVA BARRIO SANTA CRUZ",
            "INSTITUCION EDUCATIVA CENTRO FORMATIVO DE ANTIOQUIA -CEFA",
            "INSTITUCION EDUCATIVA JOSE MARIA BERNAL",
            "INSTITUCION EDUCATIVA PRESBITERO CAMILO TORRES RESTREPO",
            "INSTITUCION EDUCATIVA SAN AGUSTIN",
            "INSTITUCION EDUCATIVA HECTOR ABAD GOMEZ"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA JOSE MARIA VELAZ"
            ,"INSTITUCION EDUCATIVA BARRIO SANTA CRUZ"
            ,"INSTITUCION EDUCATIVA CENTRO FORMATIVO DE ANTIOQUIA -CEFA"
            ,"INSTITUCION EDUCATIVA JOSE MARIA BERNAL"
            ,"INSTITUCION EDUCATIVA PRESBITERO CAMILO TORRES RESTREPO"
            ,"INSTITUCION EDUCATIVA GABRIEL RESTREPO MORENO"
            ,"SECCION ESCUELA SANTA BERNARDITA"
            ,"INSTITUCION EDUCATIVA SAN AGUSTIN"
            ,"INSTITUCION EDUCATIVA HECTOR ABAD GOMEZ"
            ,"SECCION ESCUELA DARIO LONDOÑO CARDONA"
            ,"INSTITUCION EDUCATIVA JUAN DE LA CRUZ POSADA"
            ,"SECCION ESCUELA HIPOLITO LONDOÑO MESA"
            ,"SECCION COLEGIO AGUSTIN NIETO CABALLERO"
            ,"INSTITUCION EDUCATIVA JOSE ACEVEDO Y GOMEZ"
            ,"SECCION ESCUELA GABRIELA MISTRAL"
            ,"SECCION ESCUELA LA COLINA"
            ,"SECCION ESCUELA REPUBLICA DE COSTA RICA"
            ,"INSTITUCION EDUCATIVA LA MILAGROSA"
            ,"SECCION ESCUELA SANTO TOMAS DE AQUINO"
            ,"INSTITUCION EDUCATIVA LA SALLE DE CAMPOAMOR"
            ,"INSTITUCION EDUCATIVA RAMON GIRALDO CEBALLOS"
            ,"INSTITUCION EDUCATIVA CARACAS"
            ,"SECCION ESCUELA BEATO HERMANO SALOMON"
            ,"INSTITUCION EDUCATIVA ESCUELA NORMAL SUPERIOR DE MEDELLIN"
            ,"INSTITUCION EDUCATIVA ALFREDO COCK ARANGO"
            ,"INSTITUCION EDUCATIVA PERPETUO SOCORRO"
            ,"INSTITUCION EDUCATIVA JESUS MARIA EL ROSAL"
            ,"INSTITUCION EDUCATIVA REPUBLICA DE VENEZUELA"
            ,"INSTITUCION EDUCATIVA JAVIERA LONDOÑO SEVILLA"
            ,"INSTITUCION EDUCATIVA DIEGO ECHAVARRIA MISAS"
            ,"SECCION ESCUELA EDUARDO URIBE BOTERO"
            ,"INSTITUCION EDUCATIVA GILBERTO ALZATE AVENDAÑO"
            ,"SECCION ESCUELA TOMAS CARRASQUILLA NO. 1"
            ,"SECCION ESCUELA CARLOS VILLA MARTINEZ"
            ,"SECCION ESCUELA SEGUROS BOLIVAR"
            ,"SECCION ESCUELA SAN ISIDRO"
            ,"INSTITUCION EDUCATIVA GONZALO RESTREPO JARAMILLO"
            ,"SECCION ESCUELA JUAN CANCIO RESTREPO"
            ,"SECCION ESCUELA LA ANUNCIACION"
            ,"INSTITUCION EDUCATIVA ANTONIO RICAURTE"
            ,"INSTITUCION EDUCATIVA JOSE ROBERTO VASQUEZ BARRIO MANRIQUE"
            ,"SECCION ESCUELA BALDOMERO SANIN CANO"
            ,"SECCION ESCUELA JOSE MANUEL MORA VASQUEZ"
            ,"INSTITUCION EDUCATIVA SAN JUAN BAUTISTA DE LA SALLE"
            ,"INSTITUCION EDUCATIVA LA ASUNCION"
            ,"INSTITUCION EDUCATIVA AURES"
            ,"SECCION ESCUELA AURES"
            ,"INSTITUCION EDUCATIVA MONTECARLO GUILLERMO GAVIRIA CORREA"
            ,"INSTITUCION EDUCATIVA CRISTOBAL COLON"
            ,"INSTITUCION EDUCATIVA CIRO MENDIA"
            ,"SECCION ESCUELA ARZOBISPO GARCIA"
            ,"INSTITUCION EDUCATIVA MADRE MARIA MAZARELLO"
            ,"INSTITUCION EDUCATIVA ALVARO MARIN VELASCO"
            ,"INSTITUCION EDUCATIVA MANUELA BELTRAN"
            ,"SECCION ESCUELA SAN JOSE"
            ,"INSTITUCION EDUCATIVA LOLA GONZALEZ"
            ,"SECCION ESCUELA SANTA LUCIA"
            ,"INSTITUCION EDUCATIVA JAVIERA LONDOÑO"
            ,"SECCION ESCUELA ANTONIA SANTOS"
            ,"SECCION ESCUELA LUIS ALFONSO AGUDELO"
            ,"INSTITUCION EDUCATIVA YERMO Y PARRES"
            ,"SECCION ESCUELA CARLOS FRANCO"
            ,"SECCION ESCUELA GUILLERMO VALENCIA"
            ,"INSTITUCION EDUCATIVA JOSE CELESTINO MUTIS"
            ,"INSTITUCION EDUCATIVA JOSE ANTONIO GALAN"
            ,"INSTITUCION EDUCATIVA SANTA CATALINA DE SIENA"
            ,"INSTITUCION EDUCATIVA MONSEÑOR GERARDO VALENCIA CANO"
            ,"SECCION ESCUELA LA PORTADA"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA POPULAR NO. 1"
            ,"SECCION ESCUELA FE Y ALEGRIA POPULAR NO. 2"
            ,"INSTITUCION EDUCATIVA NUEVO HORIZONTE - PAULO VI"
            ,"SECCION ESCUELA NUEVO HORIZONTE 2"
            ,"INSTITUCION EDUCATIVA SOR JUANA INES DE LA CRUZ"
            ,"SECCION ESCUELA SOR JUANA"
            ,"INSTITUCION EDUCATIVA CARLOS VIECO ORTIZ"
            ,"SECCION ESCUELA JUAN DE DIOS ARANZAZU"
            ,"SECCION ESCUELA MUNICIPAL SAN JAVIER"
            ,"SECCION ESCUELA VEINTE DE JULIO"
            ,"INSTITUCION EDUCATIVA SAN ROBERTO BELARMINO"
            ,"INSTITUCION EDUCATIVA FEDERICO OZANAM"
            ,"INSTITUCION EDUCATIVA RAFAEL URIBE URIBE"
            ,"SECCION ESCUELA RAFAEL URIBE URIBE"
            ,"INSTITUCION EDUCATIVA JOSE EUSEBIO CARO"
            ,"INSTITUCION EDUCATIVA BENJAMIN HERRERA"
            ,"SECCION ESCUELA SANTISIMA TRINIDAD"
            ,"INSTITUCION EDUCATIVA JUAN DE DIOS COCK"
            ,"INSTITUCION EDUCATIVA MARCO FIDEL SUAREZ"
            ,"SECCION ESCUELA CUARTA BRIGADA"
            ,"SECCION ESCUELA CARLOS OBANDO VELASCO"
            ,"SECCION ESCUELA LA IGUANA"
            ,"INSTITUCION EDUCATIVA RAMON MUNERA LOPERA"
            ,"SECCION ESCUELA ALTO DE LA CRUZ"
            ,"INSTITUCION EDUCATIVA MARISCAL ROBLEDO"
            ,"SECCION ESCUELA CONRADO GONZALEZ MEJIA"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA SANTO DOMINGO SAVIO"
            ,"SECCION ESCUELA FE Y ALEGRIA SEGUNDA AGRUPACION"
            ,"INSTITUCION EDUCATIVA GABRIEL GARCIA MARQUEZ"
            ,"SECCION ESCUELA SAN VICENTE DE PAUL"
            ,"INSTITUCION EDUCATIVA LUCRECIO JARAMILLO VELEZ"
            ,"SECCION ESCUELA AGRUPACION COLOMBIA"
            ,"INSTITUCION EDUCATIVA SAN VICENTE DE PAUL"
            ,"SECCION ESCUELA ALFREDO COCK ARANGO"
            ,"INSTITUCION EDUCATIVA PEDRO LUIS VILLA"
            ,"SECCION ESCUELA MARCO FIDEL SUAREZ"
            ,"SECCION ESCUELA VERSALLES"
            ,"INSTITUCION EDUCATIVA CRISTO REY"
            ,"SECCION ESCUELA CRISTO REY-APOLO"
            ,"INSTITUCION EDUCATIVA SAMUEL BARRIENTOS"
            ,"SECCION ESCUELA MONSEÑOR PERDOMO"
            ,"SECCION ESCUELA PIO XII"
            ,"INSTITUCION EDUCATIVA SAN FRANCISCO DE ASIS"
            ,"INSTITUCION EDUCATIVA MATER DEI"
            ,"INSTITUCION EDUCATIVA FRANCISCO ANTONIO ZEA"
            ,"SECCION ESCUELA PEDRO DE CASTRO"
            ,"INSTITUCION EDUCATIVA LA PIEDAD"
            ,"INSTITUCION EDUCATIVA FATIMA NUTIBARA"
            ,"SECCION ESCUELA SOFIA OSPINA DE NAVARRO"
            ,"INSTITUCION EDUCATIVA REPUBLICA DE HONDURAS"
            ,"SECCION ESCUELA MUNICIPAL LA ROSA"
            ,"INSTITUCION EDUCATIVA MANUEL JOSE CAYZEDO"
            ,"INSTITUCION EDUCATIVA OCTAVIO HARRY - JACQUELINE KENNEDY"
            ,"SECCION JARDIN INFANTIL NO.1"
            ,"INSTITUCION EDUCATIVA MARIA MONTESSORI"
            ,"SECCION ESCUELA LA UNION"
            ,"INSTITUCION EDUCATIVA LORENZA VILLEGAS DE SANTOS"
            ,"SECCION ESCUELA ESTEBAN JARAMILLO"
            ,"SECCION ESCUELA SIMONA DUQUE"
            ,"INSTITUCION EDUCATIVA SANTA ROSA DE LIMA"
            ,"SECCION ESCUELA REPUBLICA DE PANAMA"
            ,"SECCION ESCUELA LA PRADERA"
            ,"INSTITUCION EDUCATIVA JOSE MARIA BRAVO MARQUEZ"
            ,"SECCION ESCUELA PORFIRIO BARBA JACOB"
            ,"INSTITUTO TECNICO INDUSTRIAL PASCUAL BRAVO"
            ,"INSTITUCION EDUCATIVA ROSALIA SUAREZ"
            ,"SECCION ESCUELA MUNICIPAL BELEN"
            ,"INSTITUCION EDUCATIVA LA PRESENTACION"
            ,"INSTITUCION EDUCATIVA SANTO ANGEL"
            ,"INSTITUCION EDUCATIVA CAMPO VALDES"
            ,"INSTITUCION EDUCATIVA MONSEÑOR FRANCISCO CRISTOBAL TORO"
            ,"SECCION ESCUELA ANA FRANK"
            ,"SECCION ESCUELA EPIFANIO MEJIA"
            ,"INSTITUCION EDUCATIVA TULIO OSPINA"
            ,"INSTITUCION EDUCATIVA MANUEL URIBE ANGEL"
            ,"SECCION ESCUELA GERARDO DAVID GIRALDO"
            ,"INSTITUCION EDUCATIVA JUAN DE DIOS CARVAJAL"
            ,"SECCION ESCUELA BATALLON GIRARDOT"
            ,"SECCION ESCUELA FRANCISCO ANTONIO URIBE"
            ,"INSTITUCION EDUCATIVA REPUBLICA DE URUGUAY"
            ,"INSTITUCION EDUCATIVA ENRIQUE OLAYA HERRERA"
            ,"INSTITUCION EDUCATIVA FRANCISCO MIRANDA"
            ,"SECCION ESCUELA JULIO ARBOLEDA"
            ,"INSTITUCION EDUCATIVA DINAMARCA"
            ,"SECCION ESCUELA RICARDO URIBE ESCOBAR"
            ,"INSTITUCION EDUCATIVA JULIO CESAR GARCIA"
            ,"INSTITUCION EDUCATIVA PEDRO OCTAVIO AMADO"
            ,"INSTITUCION EDUCATIVA JORGE ROBLEDO"
            ,"INSTITUCION EDUCATIVA RODRIGO CORREA PALACIO"
            ,"INSTITUCION EDUCATIVA JUAN XXIII"
            ,"INSTITUCION EDUCATIVA ASIA IGNACIANA"
            ,"SECCION ESCUELA LA FRONTERA"
            ,"SECCION ESCUELA ASIA IGNACIANA"
            ,"SECCION PREESCOLAR EL PLAYON"
            ,"INSTITUCION EDUCATIVA CONCEJO DE MEDELLIN"
            ,"SECCION ESCUELA PICHINCHA"
            ,"SECCION ESCUELA CLODOMIRO RAMIREZ"
            ,"INSTITUCION EDUCATIVA SEBASTIAN DE BELALCAZAR"
            ,"INSTITUCION EDUCATIVA BENEDIKTA ZUR NIEDEN"
            ,"INSTITUCION EDUCATIVA MARIA DE LOS ANGELES CANO MARQUEZ"
            ,"INSTITUCION EDUCATIVA OCTAVIO CALDERON MEJIA"
            ,"INSTITUCION EDUCATIVA PEDRO CLAVER AGUIRRE"
            ,"INSTITUCION EDUCATIVA JUVENIL NUEVO FUTURO"
            ,"INSTITUCION EDUCATIVA PABLO NERUDA"
            ,"INSTITUCION EDUCATIVA BELLO HORIZONTE"
            ,"INSTITUCION EDUCATIVA GABRIELA GOMEZ CARVAJAL"
            ,"SECCION ESCUELA MERCEDES YEPES ISAZA"
            ,"INSTITUCION EDUCATIVA CAPILLA DEL ROSARIO"
            ,"INSTITUCION EDUCATIVA SAN LORENZO DE ABURRA"
            ,"SECCION ESCUELA SAN LORENZO DE ABURRA"
            ,"INSTITUCION EDUCATIVA SAN JUAN BOSCO"
            ,"INSTITUCION EDUCATIVA FELIX HENAO BOTERO"
            ,"SECCION ESCUELA REPUBLICA DEL PERU"
            ,"SECCION ESCUELA MIGUEL DE AGUINAGA"
            ,"INSTITUCION EDUCATIVA HERNAN TORO AGUDELO"
            ,"SECCION ESCUELA VICTOR GOMEZ RESTREPO"
            ,"SECCION ESCUELA NUESTRA SEÑORA DE LAS NIEVES"
            ,"INSTITUCION EDUCATIVA MAESTRO FERNANDO BOTERO"
            ,"SECCION ESCUELA EL PEDREGAL"
            ,"INSTITUCION EDUCATIVA SANTOS ANGELES CUSTODIOS"
            ,"SECCION ESCUELA JUAN PABLO II"
            ,"INSTITUCION EDUCATIVA LA ESPERANZA"
            ,"SECCION ESCUELA REPUBLICA DE CUBA"
            ,"SECCION ESCUELA SAN FRANCISCO DE PAULA"
            ,"SECCION ESCUELA LOS COMUNEROS"
            ,"SECCION ESCUELA SAN MARTIN DE PORRES"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA LA CIMA"
            ,"SECCION ESCUELA FE Y ALEGRIA NO. 3"
            ,"SECCION ESCUELA LA CIMA SAN JOSE"
            ,"INSTITUCION EDUCATIVA ANA DE CASTRILLON"
            ,"SECCION ESCUELA DIVINO SALVADOR"
            ,"INSTITUCION EDUCATIVA TOMAS CARRASQUILLA"
            ,"INSTITUCION EDUCATIVA JOSE ASUNCION SILVA"
            ,"INSTITUCION EDUCATIVA MERCEDITAS GOMEZ MARTINEZ"
            ,"SECCION ESCUELA NUESTRA SEÑORA DEL ROSARIO"
            ,"SECCION ESCUELA JUAN MANUEL GONZALEZ ARBELAEZ"
            ,"SECCION ESCUELA ETERNA PRIMAVERA"
            ,"INSTITUCION EDUCATIVA CIUDADELA LAS AMERICAS"
            ,"INSTITUCION EDUCATIVA DOCE DE OCTUBRE"
            ,"SECCION ESCUELA LEON DE GREIFF"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA AURES"
            ,"INSTITUCION EDUCATIVA HORACIO MUÑOZ SUESCUN"
            ,"SECCION ESCUELA SAN PABLO"
            ,"INSTITUCION EDUCATIVA ASAMBLEA DEPARTAMENTAL"
            ,"SECCION ESCUELA ALEJANDRO ECHAVARRIA"
            ,"SECCION LICEO LEON DE GREIFF"
            ,"INSTITUCION EDUCATIVA FEDERICO CARRASQUILLA"
            ,"SECCION ESCUELA DIVINA PROVIDENCIA"
            ,"INSTITUCION EDUCATIVA VILLA DE LA CANDELARIA"
            ,"INSTITUCION EDUCATIVA AMERICA"
            ,"SECCION ESCUELA BETANIA"
            ,"ESCUELA UNIVERSIDAD NACIONAL"
            ,"INSTITUCION EDUCATIVA BARRIO SANTANDER"
            ,"SECCION ESCUELA ESTADO DE ISRAEL"
            ,"INSTITUCION EDUCATIVA JUAN MARIA CESPEDES"
            ,"SECCION ESCUELA LAS PLAYAS"
            ,"INSTITUCION EDUCATIVA GUADALUPE"
            ,"SECCION ESCUELA AGRIPINA MONTES DEL VALLE"
            ,"SECCION ESCUELA GRACIELA JIMENEZ DE BUSTAMANTE"
            ,"INSTITUCION EDUCATIVA REINO DE BELGICA"
            ,"INSTITUCION EDUCATIVA ALFONSO LOPEZ PUMAREJO"
            ,"SECCION ESCUELA JULIA AGUDELO"
            ,"SECCION ESCUELA SANTIAGO SANTAMARIA"
            ,"INSTITUCION EDUCATIVA SAN PABLO"
            ,"SECCION ESCUELA MEDELLIN"
            ,"INSTITUCION EDUCATIVA EL PICACHITO"
            ,"INSTITUCION EDUCATIVA MAESTRO PEDRO NEL GOMEZ"
            ,"SECCION ESCUELA DIEGO MARIA GOMEZ"
            ,"INSTITUCION EDUCATIVA SANTA TERESA"
            ,"INSTITUCION EDUCATIVA INEM JOSE FELIX DE RESTREPO"
            ,"SECCION ESCUELA GUILLERMO ECHAVARRIA MISAS"
            ,"INSTITUCION EDUCATIVA FELIX DE BEDOUT MORENO"
            ,"INSTITUCION EDUCATIVA JOSE HORACIO BETANCUR"
            ,"INSTITUCION EDUCATIVA LOMA HERMOSA"
            ,"SECCION ESCUELA SAN VICENTE FERRER"
            ,"INSTITUCION EDUCATIVA LUIS LOPEZ DE MESA"
            ,"INSTITUCION EDUCATIVA JESUS REY"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA GRANIZAL"
            ,"SECCION ESCUELA FE Y ALEGRIA GRANIZAL"
            ,"INSTITUCION EDUCATIVA CAMILO MORA CARRASQUILLA"
            ,"INSTITUCION EDUCATIVA EDUARDO SANTOS"
            ,"SECCION ESCUELA PEDRO J GOMEZ"
            ,"INSTITUCION EDUCATIVA LA LIBERTAD"
            ,"INSTITUCION EDUCATIVA VALLEJUELOS"
            ,"INSTITUCION EDUCATIVA TRICENTENARIO"
            ,"SECCION ESCUELA TRICENTENARIO"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA SAN JOSE"
            ,"INSTITUCION EDUCATIVA FRANCISCO LUIS HERNANDEZ BETANCUR"
            ,"INSTITUCION EDUCATIVA MANUEL JOSE GOMEZ SERNA"
            ,"SECCION ESCUELA ALEJO PIMIENTA"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA EL LIMONAR"
            ,"SECCION ESCUELA VENTANITAS"
            ,"INSTITUCION EDUCATIVA STELLA VELEZ LONDOÑO"
            ,"INSTITUCION EDUCATIVA ALFONSO MORA NARANJO"
            ,"SECCION ESCUELA SANTA MARIA GORETTI"
            ,"INSTITUCION EDUCATIVA VIDA PARA TODOS"
            ,"SECCION ESCUELA HOGAR ANTIOQUIA"
            ,"SECCION ESCUELA SOR MARIA LUISA COURBIN"
            ,"INSTITUCION EDUCATIVA JORGE ELIECER GAITAN"
            ,"INSTITUCION EDUCATIVA EL PEDREGAL"
            ,"SECCION ESCUELA RAFAEL J. MEJIA"
            ,"INSTITUCION EDUCATIVA LA AVANZADA"
            ,"INSTITUCION EDUCATIVA BARRIO SANTA MARGARITA"
            ,"SECCION ESCUELA SANTA MARGARITA"
            ,"SECCION ESCUELA PEDRO NEL OSPINA"
            ,"INSTITUCION EDUCATIVA LUIS CARLOS GALAN SARMIENTO"
            ,"SECCION ESCUELA NIÑO JESUS DE PRAGA"
            ,"SECCION ESCUELA COLINAS DE ENCISO"
            ,"INSTITUCION EDUCATIVA VILLA DEL SOCORRO"
            ,"SECCION ESCUELA FIDEL ANTONIO SALDARRIAGA"
            ,"SECCION ESCUELA VILLA NIZA"
            ,"INSTITUCION EDUCATIVA RODRIGO LARA BONILLA"
            ,"INSTITUCION EDUCATIVA MIRAFLORES - LUIS EDUARDO VALENCIA GARCIA"
            ,"INSTITUCION EDUCATIVA ALFONSO LOPEZ"
            ,"SECCION ESCUELA MUNICIPAL KENNEDY"
            ,"SECCION ESCUELA CARDENAL CRISANTO LUQUE"
            ,"INSTITUCION EDUCATIVA ALCALDIA DE MEDELLIN"
            ,"SECCION ESCUELA ANTONIO JOSE RESTREPO"
            ,"SECCION ESCUELA YERMO Y PARRES"
            ,"INSTITUCION EDUCATIVA EL SALVADOR"
            ,"SECCION ESCUELA JOSE DE SAN MARTIN"
            ,"INSTITUCION EDUCATIVA RAFAEL GARCIA HERREROS"
            ,"INSTITUCION EDUCATIVA CIUDAD DON BOSCO"
            ,"INSTITUCION EDUCATIVA LA INDEPENDENCIA"
            ,"SECCION ESCUELA AMOR AL NIÑO"
            ,"SECCION ESCUELA REFUGIO DEL NIÑO"
            ,"INSTITUCION EDUCATIVA VILLA FLORA"
            ,"INSTITUCION EDUCATIVA KENNEDY"
            ,"SECCION CONCENTRACION EDUCATIVA KENNEDY"
            ,"SECCION ESCUELA CAROLINA KENNEDY"
            ,"SECCION ESCUELA EL PICACHO"
            ,"SECCION ESCUELA MINERVA"
            ,"INSTITUCION EDUCATIVA SOL DE ORIENTE"
            ,"SECCION ESCUELA BEATO DOMINGO ITURRATE"
            ,"INSTITUCION EDUCATIVA LAS NIEVES"
            ,"INSTITUCION EDUCATIVA FINCA LA MESA"
            ,"SECCION ESCUELA LA FRANCIA"
            ,"SECCION ESCUELA JUAN BAUTISTA MONTINI"
            ,"SECCION ESCUELA LA ISLA"
            ,"INSTITUCION EDUCATIVA JOSE MARIA ESPINOSA PRIETO - CASD"
            ,"SECCION ESCUELA CONTRANAL"
            ,"COLEGIO MIGUEL ANTONIO RAMON MARTINEZ"
            ,"INSTITUCION EDUCATIVA DEBORA ARANGO PEREZ"
            ,"SECCION ESCUELA MANO DE DIOS"
            ,"INSTITUCION EDUCATIVA JOAQUIN VALLEJO ARBELAEZ"
            ,"SECCION ESCUELA LAS GOLONDRINAS"
            ,"SECCION ESCUELA ALTOS DE LA TORRE"
            ,"INSTITUCION EDUCATIVA PBRO ANTONIO JOSE BERNAL LONDOÑO SJ"
            ,"SECCION ESCUELA TOSCANA"
            ,"INSTITUCION EDUCATIVA ANGELA RESTREPO MORENO"
            ,"SECCION ESCUELA LUIS GUILLERMO ECHEVERRY ABAD"
            ,"INSTITUCION EDUCATIVA ANTONIO DERKA - SANTO DOMINGO"
            ,"SECCION ESCUELA ANTONIO DERKA"
            ,"SECCION ESCUELA SANTO DOMINGO SAVIO"
            ,"SECCION ESCUELA CARPINELO AMAPOLITA"
            ,"INSTITUCION EDUCATIVA COLEGIO LOYOLA PARA LA CIENCIA Y LA INNOVACION"
            ,"INSTITUCION EDUCATIVA NICANOR RESTREPO SANTAMARIA (ANTES LA HUERTA)"
            ,"INSTITUCION EDUCATIVA CIUDADELA NUEVO OCCIDENTE"
            ,"CENTRO EDUCATIVO PEDREGAL BAJO"
            ,"INSTITUCION EDUCATIVA EL PINAL"
            ,"SECCION ESCUELA EL PINAL"
            ,"INSTITUCION EDUCATIVA EL CORAZON"
            ,"SECCION ESCUELA EL CORAZON"
            ,"INSTITUCION EDUCATIVA JESUS MARIA VALLE"
            ,"INSTITUCION EDUCATIVA SAN BENITO"
            ,"INSTITUCION EDUCATIVA BELLO ORIENTE"
            ,"SECCION ESCUELA BELLO ORIENTE"
            ,"INSTITUCION EDUCATIVA LUSITANIA- PAZ DE COLOMBIA"
            ,"SECCION ESCUELA EL TIROL"
            ,"INSTITUCION EDUCATIVA LA SIERRA"
            ,"SECCION ESCUELA VILLA TURBAY"
            ,"INSTITUCION EDUCATIVA ALTAVISTA"
            ,"INSTITUCION EDUCATIVA EL PLAYON"
            ,"INSTITUCION EDUCATIVA LA PASTORA"
            ,"INSTITUCION EDUCATIVA BARRIO SAN NICOLAS"
            ,"INSTITUCION EDUCATIVA BLANQUIZAL"
            ,"INSTITUCION EDUCATIVA FUNDADORES"
            ,"SECCION ESCUELA EL SOCORRO"
            ,"INSTITUCION EDUCATIVA PROGRESAR"
            ,"INSTITUCION EDUCATIVA RODRIGO ARENAS BETANCUR"
            ,"INSTITUCION EDUCATIVA EL DIAMANTE"
            ,"SECCION ESCUELA EL DIAMANTE"
            ,"CENTRO EDUCATIVO MEDIA LUNA"
            ,"CENTRO EDUCATIVO EL PLAN"
            ,"CENTRO EDUCATIVO EL PLACER"
            ,"INSTITUCION EDUCATIVA MONSEÑOR VICTOR WIEDEMANN"
            ,"SECCION ESCUELA LA VERDE"
            ,"CENTRO EDUCATIVO LA ALDEA"
            ,"CENTRO EDUCATIVO LA VOLCANA"
            ,"CENTRO EDUCATIVO LA FRISOLA"
            ,"CENTRO EDUCATIVO LUIS MESA VILLA"
            ,"CENTRO EDUCATIVO LA SUIZA"
            ,"CENTRO EDUCATIVO LA POTRERA"
            ,"CENTRO EDUCATIVO LEON ARANGO PAUCAR"
            ,"INSTITUCION EDUCATIVA PRESBITERO CARLOS ALBERTO CALDERON"
            ,"CENTRO EDUCATIVO EL SALADO"
            ,"CENTRO EDUCATIVO YARUMALITO"
            ,"CENTRO EDUCATIVO EL ASTILLERO"
            ,"CENTRO EDUCATIVO POTRERITO"
            ,"CENTRO EDUCATIVO QUEBRADA LARGA"
            ,"CENTRO EDUCATIVO MONTAÑITA"
            ,"CENTRO EDUCATIVO JUAN ANDRES PATIÑO"
            ,"CENTRO EDUCATIVO PIEDRA GORDA"
            ,"CENTRO EDUCATIVO EL CERRO"
            ,"CENTRO EDUCATIVO PERMANENTE MAZO"
            ,"CENTRO EDUCATIVO PIEDRAS BLANCAS"
            ,"INSTITUCION EDUCATIVA SAN CRISTOBAL"
            ,"INSTITUCION EDUCATIVA MARINA ORTH"
            ,"SECCION ESCUELA AGUAS FRIAS"
            ,"INSTITUCION EDUCATIVA HECTOR ROGELIO MONTOYA"
            ,"SECCION ESCUELA PALMITAS"
            ,"INSTITUCION EDUCATIVA MANUEL J. BETANCUR"
            ,"SECCION ESCUELA GUSTAVO RODAS ISAZA"
            ,"CENTRO EDUCATIVO EL MANZANILLO"
            ,"CENTRO EDUCATIVO MARIA PAULINA TABORDA"
            ,"CENTRO EDUCATIVO CARLOS MESA SANCHEZ"
            ,"INSTITUCION EDUCATIVA PRESBITERO JUAN J. ESCOBAR"
            ,"SECCION ESCUELA JUAN NEPOMUCENO MORALES"
            ,"INSTITUCION EDUCATIVA ALFONSO UPEGUI OROZCO"
            ,"INSTITUCION EDUCATIVA SANTA ELENA"
            ,"SECCION ESCUELA RURAL SANTA ELENA"
            ,"INSTITUCION EDUCATIVA SAN ANTONIO DE PRADO"
            ,"SECCION ESCUELA MANUEL MARIA MALLARINO"
            ,"SECCION ESCUELA CARLOS BETANCUR BETANCUR"
            ,"CENTRO EDUCATIVO LAS PLAYAS"
            ,"CENTRO EDUCATIVO SAGRADO CORAZON"
            ,"CENTRO EDUCATIVO EL PATIO"
            ,"INSTITUCION EDUCATIVA EL LIMONAR"
            ,"INSTITUCION EDUCATIVA SAN JOSE OBRERO"
            ,"CENTRO EDUCATIVO TRAVESIAS EL MORRO"
            ,"CENTRO EDUCATIVO FABIO ZULUAGA OROZCO"
            ,"CENTRO EDUCATIVO PEDREGAL ALTO"
            ,"CENTRO EDUCATIVO BOQUERON"
            ,"CENTRO EDUCATIVO EL YOLOMBO"
            ,"CENTRO EDUCATIVO SAN JOSE DE LA MONTAÑA"
            ,"INSTITUCION EDUCATIVA COMPARTIR"
            ,"INSTITUCION EDUCATIVA CORVIDE"
            ,"INSTITUCION EDUCATIVA PRADITO"
            ,"INSTITUCION EDUCATIVA ALVERNIA"
            ,"INSTITUCION EDUCATIVA SANTA JUANA DE LESTONAC"
            ,"INSTITUCION EDUCATIVA LA CANDELARIA"
            ,"SECCION ESCUELA LA ESPERANZA NO.2"
            ,"INSTITUCION EDUCATIVA MAESTRO ARENAS BETANCUR"
            ,"SECCION ESCUELA IMPERIO DEL JAPON"
            ,"SECCION ESCUELA MUNICIPAL CASTILLA"
            ,"INSTITUCION EDUCATIVA EL TRIUNFO SANTA TERESA"
            ,"SECCION ESCUELA EL TRIUNFO"
            ,"INSTITUCION EDUCATIVA FE Y ALEGRIA LUIS AMIGO"
            ,"INSTITUCION EDUCATIVA MADRE LAURA"
            ,"INSTITUCION EDUCATIVA ARZOBISPO TULIO BOTERO SALAZAR"
            ,"SECCION ESCUELA LAS ESTANCIAS"
            ,"INSTITUCION EDUCATIVA BARRIO OLAYA HERRERA"
            ,"INSTITUCION EDUCATIVA EL BOSQUE"
            ,"COLEGIO COMFAMA - SEDE ARANJUEZ"
            ,"COLEGIO SAGRADA FAMILIA ALDEA PABLO VI"
            ,"CENTRO EDUCACIONAL DON BOSCO"
            ,"CENTRO DE EDUCACION EL ARCA"
            ,"CENTRO EDUCATIVO CARRUSEL DE LA ALEGRIA"
            ,"COLEGIO VIDA Y PAZ SEDE CENTRO"
            ,"CENTRO EDUCATIVO SAGRADO NIÑO"
            ,"COLEGIO COMFAMA - SEDE MANRIQUE"
            ,"EL NUEVO COLEGIO THE NEW SCHOOL"
            ,"INSTITUCION EDUCATIVA PRADOS VERDES"
            ,"PREESCOLAR HORMIGUITAS LABORIOSAS - SEDE CALASANZ"
            ,"CENTRO INFANTIL CASITA DE ILUSIONES"
            ,"COLEGIO DE MARIA"
            ,"COLEGIO COMPUESTUDIO"
            ,"COLEGIO CALASANZ CAMPESTRE ESCOLAPIAS"
            ,"COLEGIO SANTA CLARA DE ASIS"
            ,"INSTITUTO COLOMBO VENEZOLANO"
            ,"COLEGIO SAN JOSE DE LA SALLE"
            ,"INSTITUTO PEDAGOGICO CLARET"
            ,"LICEO SAN RAFAEL"
            ,"INSTITUTO SAN CARLOS"
            ,"COLEGIO MARYMOUNT"
            ,"COLEGIO MILITAR JOSE MARIA CORDOBA"
            ,"INSTITUTO SALESIANO PEDRO JUSTO BERRIO"
            ,"INSTITUTO ANTIOQUIA Y CIA LTDA"
            ,"CENTRO EDUCACIONAL CONQUISTADORES"
            ,"COMUNIDAD COLEGIO JESUS MARIA"
            ,"LICEO SALAZAR Y HERRERA"
            ,"COLEGIO DE LA PRESENTACION - MEDELLIN"
            ,"COLEGIO CALASANZ"
            ,"COLEGIO NUESTRA SEÑORA DE LOURDES"
            ,"COLEGIO DE LA UNIVERSIDAD PONTIFICIA BOLIVARIANA"
            ,"COLEGIO SANTA MARIA DEL ROSARIO"
            ,"COLEGIO EUCARISTICO DE LA MILAGROSA"
            ,"COLEGIO SALESIANO EL SUFRAGIO"
            ,"COLEGIO SAN IGNACIO DE LOYOLA"
            ,"COLEGIO SAGRADOS CORAZONES"
            ,"COLEGIO MARIA REINA DEL CARMELO"
            ,"COLEGIO TOMAS CARRASQUILLA"
            ,"COLEGIO PALERMO DE SAN JOSE"
            ,"INSTITUTO JORGE ROBLEDO"
            ,"COLEGIO GIMNASIO LOS PINARES"
            ,"COLEGIO DIVINO SALVADOR"
            ,"COLEGIO AGUSTINIANO DE SAN NICOLAS"
            ,"COLEGIO PABLO VI"
            ,"COLEGIO SAN JUAN BOSCO"
            ,"COLEGIO NUESTRA SEÑORA DEL ROSARIO DE CHIQUINQUIRA"
            ,"COLEGIO DE LA INMACULADA"
            ,"COLEGIO SANTA TERESITA"
            ,"COLEGIO SAN JOSE DE LAS VEGAS"
            ,"INSTITUTO FERRINI - SEDE CALASANZ"
            ,"COLEGIO LA ANUNCIACION"
            ,"COLEGIO MADRE ANTONIA CERINI"
            ,"ESCUELA NORMAL SUPERIOR ANTIOQUEÑA"
            ,"COLEGIO BETHLEMITAS"
            ,"SEMINARIO MENOR DE LA ARQUIDIOCESIS DE MEDELLIN"
            ,"COLEGIO MARIA AUXILIADORA"
            ,"COLEGIO TERESIANO NUESTRA SEÑORA DE LA CANDELARIA"
            ,"COLEGIO LATINO"
            ,"COLEGIO NUESTRA MADRE DE MERCEDES"
            ,"COLEGIO CORAZONISTA"
            ,"COLEGIO BARBARA MICARELLI"
            ,"COLEGIO EL HOGAR DE SU NIÑO"
            ,"COLEGIO EMILIA RIQUELME"
            ,"GIMNASIO LOS CEDROS"
            ,"ESCUELA POPULAR EUCARISTICA ZORAIDA TRUJILLO"
            ,"ESCUELA POPULAR EUCARISTICA CAMILO C. RESTREPO"
            ,"COLEGIO DE LA COMPAÑIA DE MARIA"
            ,"INSTITUTO MUSICAL DIEGO ECHAVARRIA"
            ,"COLEGIO SAN FRANCISCO JAVIER"
            ,"COLEGIO CAMPESTRE LA COLINA"
            ,"GIMNASIO GUAYACANES"
            ,"COLEGIO NUESTRA SEÑORA DE LA PROVIDENCIA"
            ,"CENTRO EDUCATIVO CAMPESTRE COLOMBO ITALIANO"
            ,"INSTITUCION EDUCATIVA GUADALUPANO LA SALLE"
            ,"COLEGIO ADVENTISTA SIMON BOLIVAR"
            ,"COLEGIO MONTESSORI"
            ,"CENTRO PREESCOLAR EUGENIA RAVASCO"
            ,"KINDER PINOCHO"
            ,"COLEGIO SANTA BERTILLA BOSCARDIN"
            ,"CENTRO EDUCATIVO TALENTOS INFANTILES"
            ,"JARDIN INFANTIL MI MUNDO MARAVILLOSO"
            ,"COLEGIO SAN LUCAS"
            ,"INSTITUTO FERRINI - SEDE ROBLEDO"
            ,"INSTITUTO VICARIAL JESUS MAESTRO"
            ,"CENTRO EDUCATIVO INFANTIL PIOLIN"
            ,"ESCUELA JOSE GREGORIO HERNANDEZ"
            ,"JARDIN INFANTIL LOS SANTOS ANGELES"
            ,"JARDIN INFANTIL EL RECREO DE LOS NIÑOS"
            ,"JARDIN INFANTIL LA ARBOLEDA"
            ,"CENTRO EDUCATIVO MI DULCE HOGAR"
            ,"COLEGIO SAN JUAN EUDES"
            ,"CENTRO INFANTIL NOTAS Y COLORES"
            ,"COLEGIO VID OBRA DE LA CONGREGACION MARIANA"
            ,"COLEGIO MANZANARES"
            ,"PREESCOLAR GUARDERIA LA CASA DE LOS COLORES"
            ,"COLEGIO ALFRED BINET"
            ,"COLEGIO PESTALOZZI"
            ,"JARDIN INFANTIL PELUSA"
            ,"CENTRO INFANTIL MI MUNDO SOÑADO"
            ,"JARDIN INFANTIL VIDA NUEVA"
            ,"GUARDERIA PREESCOLAR CASCANUECES"
            ,"GENIOS PREESCOLAR LTDA."
            ,"COLEGIO PARROQUIAL SAN JUDAS TADEO"
            ,"COLEGIO BAUTISTA DE CASTILLA"
            ,"COLEGIO HISPANO"
            ,"JARDIN INFANTIL CHIQUILANDIA"
            ,"JARDIN INFANTIL MI MAGICO MUNDO"
            ,"JARDIN INFANTIL PREESCOLAR MUNDO DE JUGUETE"
            ,"PREESCOLAR COLORINES LTDA."
            ,"CENTRO EDUCATIVO MUNDO DE COLORES"
            ,"PREESCOLAR MICKEY MOUSE"
            ,"CENTRO EDUCATIVO SAGRADO CORAZON DE JESUS"
            ,"COLEGIO PARROQUIAL NUESTRA SEÑORA DEL BUEN CONSEJO"
            ,"CENTRO EDUCATIVO INTEGRAL EL PACTO"
            ,"CENTRO EDUCATIVO LOS 7 ENANITOS"
            ,"COLEGIO MADRID CAMPESTRE"
            ,"CENTRO EDUCATIVO INGENIOS"
            ,"CENTRO INFANTIL NUBECITAS"
            ,"CENTRO EDUCATIVO AUTONOMO"
            ,"COLEGIO EUSKADI"
            ,"ESCUELA POPULAR EUCARISTICA ARZOBISPO TULIO BOTERO SALAZAR"
            ,"JARDIN INFANTIL SUPER AMIGOS"
            ,"CENTRO EDUCATIVO INFANTIL LOS OSITOS"
            ,"COLEGIO GUILLERMO TABORDA RESTREPO"
            ,"MATERNAL Y JARDIN INFANTIL PIMPILIN"
            ,"CENTRO EDUCATIVO GENIOS EN ACCION"
            ,"JARDIN INFANTIL EL ARTE Y EL CONOCER"
            ,"CENTRO INFANTIL PREESCOLAR TRAVIESOS"
            ,"CENTRO EDUCATIVO PEQUEÑOS CREADORES"
            ,"PREESCOLAR GIMNASIO INFANTIL PEPEGRILLO"
            ,"CENTRO EDUCATIVO LOS NOGALES"
            ,"GUARDERIA Y JARDIN INFANTIL CHUPETIN"
            ,"INSTITUCION EDUCATIVA PEDAGOGICO INTEGRAL"
            ,"CENTRO EDUCATIVO LOS GANSITOS"
            ,"ESCUELA POPULAR EUCARISTICA JULIO C. HERNANDEZ"
            ,"GURI GURI GUARDERIA Y PREESCOLAR"
            ,"CENTRO EDUCATIVO CASA MAMA MARGARITA"
            ,"CENTRO PEDAGOGICO FLORENCIA"
            ,"COLEGIO ARENYS DEL MAR"
            ,"CENTRO DE DESARROLLO INTEGRADO - CENDI"
            ,"COLEGIO PADRE MANYANET"
            ,"CENTRO EDUCATIVO CAMINITO"
            ,"CENTRO EDUCATIVO MECHUDITOS"
            ,"CENTRO INFANTIL PIRUETAS"
            ,"PREESCOLAR EL RODEO"
            ,"GUARDERIA Y PREESCOLAR PALOTIN"
            ,"CENTRO INFANTIL IMAGINATE"
            ,"COLEGIO GRACIELA VASQUEZ CANO"
            ,"CENTRO INFANTIL CACATUAS"
            ,"CENTRO EDUCATIVO TRAMPOLIN"
            ,"PREESCOLAR LUCECITAS DEL CORTIJO"
            ,"CENTRO EDUCATIVO LA MOTICA"
            ,"COLEGIO SAN GABRIEL DE LA DOLOROSA"
            ,"INSTITUCION EDUCATIVA Y CULTURAL JESUS AMIGO"
            ,"CENTRO EDUCATIVO INFANTIL PEQUEÑOS PERSONAJES"
            ,"CENTRO DE EDUCACION PREESCOLAR MI CHANCHITO"
            ,"JARDIN INFANTIL LA TATA"
            ,"INSTITUCION EDUCATIVA LEONARDO DA VINCI"
            ,"PREESCOLAR AMIGO DE LOS NIÑOS"
            ,"PREESCOLAR GUILLE"
            ,"CENTRO EDUCATIVO NUEVOS AMIGOS"
            ,"CENTRO EDUCATIVO SENDEROS INFANTILES"
            ,"GUARDERIA Y PREESCOLAR MIS PRIMEROS EXITOS"
            ,"CENTRO EDUCATIVO MIS PRIMEROS MAESTROS"
            ,"JARDIN INFANTIL COQUI"
            ,"INSTITUTO PEDAGOGICO ALFA"
            ,"PREESC ANGELILLOS"
            ,"PREESCOLAR COLOMBIANITOS DEL FUTURO"
            ,"ESCUELA HERMANA ALCIRA CASTRO OSORIO"
            ,"INSTITUTO DE EDUCACION COMFENALCO CONSUELO MONTOYA GIL"
            ,"CENTRO EDUCATIVO EL PRINCIPITO FELIZ"
            ,"COLEGIO SAPIENCIA"
            ,"COLEGIO PANAMERICANO COLOMBO SUECO"
            ,"CENTRO EDUCATIVO VENTANA MAGICA"
            ,"CENTRO EDUCATIVO INTEGRAL BUCARELLY"
            ,"COLEGIO PARROQUIAL EMAUS"
            ,"CENTRO EDUCATIVO RAFAEL POMBO"
            ,"CENTRO EDUCATIVO MI PATITO"
            ,"COLEGIO MUSICAL LAS COMETAS"
            ,"COLEGIO CAMINOS ABIERTOS"
            ,"COLEGIO CREADORES DEL FUTURO"
            ,"GUARDERIA Y PREESCOLAR MUNDO DE ILUSIONES"
            ,"CENTRO EDUCATIVO LOS PIONEROS"
            ,"COLEGIO ANTARES"
            ,"CENTRO EDUCATIVO INSTITUTO DE CIENCIAS APLICADAS - INDECAP"
            ,"COLEGIO GENTE UNIDA JOVENES POR LA PAZ - MORAVIA"
            ,"CENTRO EDUCATIVO SAN ANTONIO DE PADUA"
            ,"PREESCOLAR NUEVO AMANECER"
            ,"COLEGIO COMFAMA - SEDE PEDREGAL"
            ,"JARDIN INFANTIL CHIQUILLOS DE LA COLINA"
            ,"PREESCOLAR LA CASITA DEL SABER"
            ,"CENTRO EDUCATIVO CORAZONES ALEGRES"
            ,"COLEGIO COMFAMA - SEDE CENTRO"
            ,"JARDIN COMUNITARIO SUSANITA DIAZ"
            ,"PREESCOLAR LOS PINGÜINOS"
            ,"CENTRO EDUCATIVO RONDAS INFANTILES"
            ,"COLEGIO MILITAR GENERAL PEDRO NEL OSPINA"
            ,"CENTRO EDUCATIVO LA MAGIA DEL SABER"
            ,"JARDIN INFANTIL PEQUEÑAS PERSONITAS"
            ,"CENTRO EDUCATIVO DESCUBRIENDO MARAVILLAS"
            ,"CENTRO EDUCATIVO GENIOS ESCALANDO"
            ,"CENTRO EDUCATIVO INFANTIL CHICOS PILOS"
            ,"CENTRO EDUCATIVO PEQUEÑAS MARAVILLAS"
            ,"CENTRO EDUCATIVO INTEGRAL MOMENTOS FELICES"
            ,"CENTRO EDUCATIVO LUCEROS Y ESTRELLAS"
            ,"INSTITUTO CORFERRINI - SEDE ROBLEDO"
            ,"COLEGIO EXTERNADO PATRIA - SEDE CENTRO"
            ,"INSTITUTO CORFERRINI - SEDE LA DIVISA"
            ,"CENTRO EDUCATIVO EL ENCUENTRO"
            ,"CENTRO EDUCATIVO POPEYE"
            ,"CENTRO EDUCATIVO ALTOS DE CALASANZ"
            ,"CENTRO EDUCATIVO SEMILLAS DE VIDA"
            ,"CENTRO EDUCATIVO MIS PRIMERAS IDEAS"
            ,"CENTRO INFANTIL MI EDAD FELIZ"
            ,"CENTRO EDUCATIVO AMARANTO"
            ,"CENTRO EDUCATIVO HOLA NIÑOS"
            ,"CENT PEDAGOGICO GOTICAS DEL SABER"
            ,"CENTRO PEDAGOGICO LA MAGIA DE APRENDER"
            ,"COLEGIO GENTE UNIDA JOVENES POR LA PAZ - LUZ DE ORIENTE"
            ,"COLEGIO LUJAN"
            ,"INSTITUCION EDUCATIVA PEQUEÑA MARIA"
            ,"JARDIN INFANTIL Y PREESCOLAR PAJARILLOS"
            ,"COLEGIO COMBOS COMUNIDADES EDUCATIVAS DE BASE"
            ,"COLEGIO GENTE UNIDA JOVENES POR LA PAZ - SEDE VILLA CAFE"
            ,"INSTITUTO FERRINI - SEDE CENTRO"
            ,"COLEGIO BOLIVARIANO"
            ,"CORPORACION ESCUELA EMPRESARIAL DE EDUCACION"
            ,"COLEGIO EMPRESARIAL EDUCATIVO - CEMPED"
            ,"POLITECNICO MAYOR AGENCIA CRISTIANA DE SERVICIO Y EDUCACION"
            ,"CENTRO EDUCATIVO PEQUEÑOS SALTARINES"
            ,"CENTRO DE CAPACITACION VICENTA MARIA"
            ,"CENTRO EDUCATIVO LAZOS"
            ,"CENTRO INFANTIL EL MAGO DE OZ"
            ,"CENTRO EDUCATIVO SOL NACIENTE"
            ,"CENTRO EDUCATIVO HOGAR SAN RAFAEL"
            ,"CENTRO EDUCATIVO MOMO"
            ,"CENTRO EDUCATIVO NACIONAL"
            ,"COLEGIO GENTE UNIDA JOVENES POR LA PAZ-SANTO DOMINGO"
            ,"CENTRO EDUCATIVO HOGAR JESUS REDENTOR"
            ,"JARDIN INFANTIL CASITA DE ILUSIONES"
            ,"CENTRO EDUCATIVO PARAISOS DE COLOR"
            ,"COLEGIO ANTARES INTELIGENCIAS MULTIPLES"
            ,"COLEGIO NUEVO CERVANTES CONOCER"
            ,"COLEGIO CIENCIA Y VIDA"
            ,"CENTRO EDUCATIVO JUGANDO Y APRENDIENDO"
            ,"CORPORACION DE PROGRAMAS DE EDUCACION SOCIAL - CORPROE"
            ,"COLEGIO COMPUSOCIAL"
            ,"COLEGIO DE DESARROLLO SOCIAL PARA LA ATENCION INTEGRAL AL JOVEN TALITA CUMI"
            ,"CENTRO EDUCATIVO Y CULTURAL SENDEROS DEL SABER"
            ,"CENTRO EDUCATIVO CHISPITAS ALEGRES"
            ,"CENTRO EDUCATIVO APRENDIENDO A APRENDER"
            ,"CENTRO EDUCATIVO LA ABEJITA"
            ,"HOGAR INFANTIL BRISAS DE ROBLEDO"
            ,"CENTRO EDUCATIVO APRENDIENDO JUNTOS"
            ,"COLEGIO LOS ARCANGELES"
            ,"PREESCOLAR POLDI"
            ,"CENTRO EDUCATIVO NUESTRA SEÑORA DE FATIMA"
            ,"CENTRO EDUCATIVO LUIS JAVIER VILLA"
            ,"CENTRO EDUCATIVO CLARA MARIA"
            ,"CENTRO EDUCATIVO SEMILLAS DE ESPERANZA"
            ,"CENTRO EDUCATIVO PASITOS TRAVIESOS"
            ,"JARDIN INFANTIL HUELLITAS DE ANGELES"
            ,"CENTRO EDUCATIVO SOL Y LUNA"
            ,"CENT PRECOZ LA ALEGRIA DEL SABER"
            ,"CENTRO EDUCATIVO CONDUCIENDO LA NIÑEZ"
            ,"CENTRO EDUCATIVO MIS ENCANTOS"
            ,"COLEGIO BASICO CAMINO DE PAZ"
            ,"UNION PROFESIONAL PARA LA EDUCACION Y EL TRABAJO UPET"
            ,"CENTRO INFANTIL ANGELITOS DEL SABER"
            ,"COLEGIO MONSEÑOR ALFONSO URIBE JARAMILLO"
            ,"CENTRO EDUCATIVO INFANTIL MI TESORO"
            ,"CENTRO EDUCATIVO BOTERO"
            ,"CENTRO EDUCATIVO SANTA JUANA"
            ,"CENTRO EDUCATIVO ABEJITAS LABORIOSAS"
            ,"CENTRO EDUCATIVO LOS DELFINES"
            ,"JARDIN INFANTIL LOS LAURELES"
            ,"CENTRO EDUCATIVO PANDORA"
            ,"CENTRO INTEGRAL EDUCATIVO ALEGRES Y TRAVIESOS"
            ,"JARDIN INFANTIL SOLECITOS"
            ,"CENTRO EDUCATIVO CAICEDO"
            ,"CENTRO EDUCATIVO CHISPITAS DEL SABER"
            ,"CENTRO DE ESTUDIOS MULTITECNICO"
            ,"INSTITUCION EDUCATIVA JUAN SEBASTIAN DE CENSA"
            ,"COLEGIO EMPRESARIAL"
            ,"CIBERCOLEGIO UCN"
            ,"CENTRO EDUCATIVO NUEVO AMANECER"
            ,"CENTRO EDUCATIVO HUELLITAS CREATIVAS #1"
            ,"CENTRO EDUCATIVO DE COMPUTO EMPRESARIAL PARA EL TRABAJO - CINDECOMPUTO"
            ,"PREESCOLAR HERMANOS GRIMM´S"
            ,"INSTITUCION EDUCATIVA COLOMBIANITOS"
            ,"JARDIN INFANTIL MAGICO UNIVERSO"
            ,"A.B.C. CENTRO EDUCATIVO"
            ,"INSTITUTO PEDAGOGICO FILADELFIA"
            ,"COLEGIO CENTRO FRATERNAL CRISTIANO"
            ,"CENTRO EDUCATIVO PEQUEÑOS ANGELES"
            ,"CENTRO EDUCATIVO PARA LA FORMACION EN COMPETENCIAS COMPUCEC"
            ,"CENTRO EDUCATIVO INTEGRAL CAMPESTRE SENDEROS DE PAZ"
            ,"CENTRO EDUCATIVO HOLA BEBE"
            ,"CENTRO EDUCATIVO MI SEGUNDO HOGAR"
            ,"CENTRO EDUCATIVO ESCOLARTE"
            ,"CENTRO EDUCATIVO LUZ DE MEDIA LUNA"
            ,"COLEGIO PILARES DEL CASTILLO"
            ,"CENTRO EDUCATIVO PELICANOS"
            ,"CENTRO EDUCATIVO GIMNASIO CANTABRICO"
            ,"CENTRO EDUCATIVO PACHAMAMA"
            ,"LA CASA CENTRO INFANTIL Y DESARROLLO HUMANO"
            ,"CENTRO EDUCATIVO PALETA DE COLORES"
            ,"PREESCOLAR Y CENTRO DE ESTIMULACION GRANDES EXPLORADORES"
            ,"CENTRO INFANTIL ALEGRES PERSONITAS"
            ,"CENTRO DE DESARROLLO INFANTIL LA CASA DE LOS SUEÑOS"
            ,"CENTRO EDUCATIVO AMIGUITOS CREATIVOS"
            ,"PREESCOLAR GEPETTO"
            ,"CENTRO EDUCATIVO NUEVOS LIDERES"
            ,"CENTRO EDUCATIVO EL CASTILLO DE MICKEY"
            ,"CENTRO EDUCATIVO CRECER SOÑANDO"
            ,"CENTRO EDUCATIVO FORJADORES DEL MAÑANA"
            ,"PREESCOLAR AMIGOS DE LA CIENCIA"
            ,"INSTITUCION EDUCATIVA ANDREAS PETER HAURI"
            ,"CENTRO INFANTIL AVANZA"
            ,"CENTRO EDUCATIVO PEQUEÑOS FORMADORES"
            ,"CENTRO EDUCATIVO INTERNACIONAL LA SABIDURIA"
            ,"CENTRO EDUCATIVO VENUSITOS"
            ,"COLEGIO BASICO SANTA MARIA DE LA CRUZ"
            ,"COLEGIO LUIS AMIGO Y FERRER"
            ,"CENTRO EDUCATIVO MUNDO NUEVO"
            ,"CENTRO EDUCATIVO MUNDO DE ALEGRIAS"
            ,"CENTRO EDUCATIVO LA ALEGRIA DE EMPEZAR"
            ,"CENTRO EDUCATIVO MI CASITA ENCANTADA"
            ,"CENTRO INFANTIL PREESCOLAR MI MUNDO ALEGRE"
            ,"CENTRO EDUCATIVO MI PEQUEÑA JUNGLA"
            ,"CENTRO EDUCATIVO AMIGUITOS PENSADORES"
            ,"CENTRO EDUCATIVO LUNITAS"
            ,"CENTRO EDUCATIVO PEQUEÑOS TRIUNFADORES"
            ,"CENTRO EDUCATIVO INFANTIL ARLEQUIN"
            ,"CENTRO EDUCATIVO PEQUEÑOS EXPLORADORES"
            ,"JARDIN INGLES CAMPESTRE"
            ,"JARDIN INFANTIL MAÑANITAS"
            ,"PREESCOLAR MI MUNDO MAGICO"
            ,"COLEGIO VERMONT MEDELLIN"
            ,"INSTITUCION EDUCATIVA PREVIA"
            ,"GUARDERIA Y PREESCOLAR CASTILLO DE COLORES"
            ,"SEMILLITAS DE MOSTAZA CENTRO DE DESARROLLO INFANTIL"
            ,"INSTITUTO DE EDUCACION FORMAL Y NO FORMAL ALIANZA ACADEMICA"
            ,"CENTRO INFANTIL MIS PEQUEÑINES"
            ,"COLEGIO NACIONAL DE CAPACITACION ACADEMICA Y CULTURAL CENCAL"
            ,"CENTRO EDUCATIVO YARAGUA"
            ,"PREESCOLAR CAMINANTES"
            ,"MUNDO MAGICO CENTRO EDUCATIVO"
            ,"CENTRO EDUCATIVO MIS PINGUINOS"
            ,"JARDIN INFANTIL OSO CURIOSO"
            ,"CENTRO EDUCATIVO PASOS DE AMOR"
            ,"CENTRO EDUCATIVO LAS COMETAS"
            ,"CENTRO EDUCATIVO MIS PRIMERAS AVENTURA"
            ,"COLEGIO FORMARTE"
            ,"CENTRO EDUCATIVO DESCUBRIENDO JUNTOS"
            ,"CENTRO EDUCATIVO LOS CHICOS DE HARVARD"
            ,"CENTRO EDUCATIVO EL CASTILLO DE SIMON"
            ,"JARDIN INFANTIL TRAZOS DE COLORES"
            ,"CENTRO EDUCATIVO RIN RIN RENACUAJO"
            ,"JARDIN INFANTIL MUNDO DE SUEÑOS"
            ,"CENTRO EDUCATIVO CHIKIAVENTURAS"
            ,"CENTRO INFANTIL ALEGRIAS Y CRAYOLAS"
            ,"PREESCOLAR MIS GARABATOS"
            ,"ESCUELA POPULAR EUCARISTICA SANTA ANGELA"
            ,"COLEGIO COOPERATIVO SAN ANTONIO DE PRADO"
            ,"COLEGIO DE BTO COLEGIATURA COLOMBIANA"
            ,"CENTRO EDUCATIVO MI LINDO CARRUSEL"
            ,"JARDIN INFANTIL CAPULLOS DE SEDA"
            ,"COLEGIO EDIFICANDO VIDAS"
            ,"JARDIN INFANTIL APRENDER"
            ,"CENTRO EDUCATIVO CAMPESTRE HEIDELBERG"

        ];

        $documentos = [
            "Cédula de ciudadanía",
            "Tarjeta de identidad",
            "Pasaporte",
            "Permiso Especial de permanencia",
            "Documento extranjero",
        ];

        $comunas = [
            "Comuna 1 - Popular",
            "Comuna 2 - Santa Cruz",
            "Comuna 3 - Manrique",
            "Comuna 4 - Aranjuez",
            "Comuna 5 - Castilla",
            "Comuna 6 - Doce de Octubre",
            "Comuna 7 - Robledo",
            "Comuna 8 - Villa Hermosa",
            "Comuna 9 - Buenos Aires",
            "Comuna 10 - La Candelaria",
            "Comuna 11 - Laureles",
            "Comuna 12 - La América",
            "Comuna 13 - San Javier",
            "Comuna 14 - El Poblado",
            "Comuna 15 - Guayabal",
            "Comuna 16 - Belén",
            "Comuna 50 - Palmitas",
            "Comuna 60 - San Cristobal",
            "Comuna 70 - Altavista",
            "Comuna 80 - San Antonio de Prado",
            "Comuna 90 - Corregimiento de Santa Elena"
        ];

        $barrios = [
            "Santo Domingo Savio No.2",
            "La Esperanza No.2",
            "Aldea Pablo VI",
            "Carpinelo",
            "Moscú No.2",
            "Santo Domingo Savio No.1",
            "La Avanzada",
            "Villa Guadalupe",
            "Granizal",
            "El Compromiso",
            "San Pablo",
            "Popular",
            "Pablo VI",
            "Villa del Socorro",
            "Santa Cruz",
            "La Rosa",
            "La Isla",
            "La Frontera",
            "La Francia",
            "Andalucía",
            "Villa Niza",
            "Playón de Los Comuneros",
            "Moscú No.1",
            "Versalles No.1",
            "Las Granjas",
            "Manrique Oriental",
            "Manrique Central No.2",
            "El Pomar",
            "Oriente",
            "María Cano-Carambolas",
            "San José La Cima No.1",
            "El Raizal",
            "Santa Inés",
            "La Cruz",
            "San José La Cima No.2",
            "La Salle",
            "Versalles No.2",
            "Campo Valdés No.2",
            "Miranda",
            "Campo Valdés No.1",
            "Aranjuez",
            "Bermejal-Los Álamos",
            "Universidad de Antioquia",
            "Brasilia",
            "Berlín",
            "Moravia",
            "Manrique Central No.1",
            "Sevilla",
            "Las Esmeraldas",
            "San Pedro",
            "Palermo",
            "Jardín Botánico",
            "San Isidro",
            "Parque Norte",
            "La Piñuela",
            "Toscana",
            "Francisco Antonio Zea",
            "Oleoducto",
            "Boyacá",
            "Terminal de Transporte",
            "Alfonso López",
            "Caribe",
            "Tejelo",
            "Plaza de Ferias",
            "Tricentenario",
            "El Progreso",
            "Belalcázar",
            "Las Brisas",
            "Girardot",
            "Florencia",
            "Cementerio Universal",
            "Héctor Abad Gómez",
            "Castilla",
            "Mirador del Doce",
            "El Triunfo",
            "La Esperanza",
            "Picachito",
            "Pedregal",
            "Doce de Octubre No.1",
            "Kennedy",
            "Picacho",
            "Doce de Octubre No.2",
            "San Martín de Porres",
            "Santander",
            "Progreso No.2",
            "Ecoparque Cerro El Volador",
            "Universidad Nacional",
            "El Diamante",
            "Palenque",
            "Fuente Clara",
            "Villa Flora",
            "Facultad de Minas",
            "Monteclaro",
            "Olaya Herrera",
            "Facultad Veterinaria y Zootecnia U.de.A.",
            "Cucaracho",
            "La Pilarica",
            "Aures No.1",
            "Robledo",
            "Altamira",
            "Nueva Villa de La Iguaná",
            "Bosques de San Pablo",
            "Bello Horizonte",
            "Pajarito",
            "B. Cerro El Volador",
            "Santa Margarita",
            "San Germán",
            "Córdoba",
            "Aures No.2",
            "López de  Mesa",
            "Facultad de Minas U. Nacional",
            "Enciso",
            "Las Estancias",
            "El Pinal",
            "Llanaditas",
            "Trece de Noviembre",
            "Villa Hermosa",
            "La Mansión",
            "San Antonio",
            "La Sierra",
            "Los Mangos",
            "La Libertad",
            "Villa Lilliam",
            "San Miguel",
            "Villa Turbay",
            "Batallón Girardot",
            "Villatina",
            "La Ladera",
            "Sucre",
            "Barrios de Jesús",
            "Buenos Aires",
            "Gerona",
            "Loreto",
            "Juan Pablo II",
            "Ocho de Marzo",
            "Miraflores",
            "Cataluña",
            "Alejandro Echavarría",
            "Asomadera No.3",
            "Los Cerros El Vergel",
            "La Milagrosa",
            "El Salvador",
            "Barrio Caicedo",
            "Asomadera No.1",
            "Bomboná No.2",
            "Asomadera No.2",
            "La Alpujarra",
            "Corazón de Jesús",
            "Prado",
            "Jesús Nazareno",
            "Calle Nueva",
            "Los Ángeles",
            "San Benito",
            "Hospital San Vicente de Paúl",
            "Boston",
            "Perpetuo Socorro",
            "El Chagualo",
            "Guayaquil",
            "San Diego",
            "Villa Nueva",
            "Las Palmas",
            "La Candelaria",
            "Barrio Colón",
            "Estación Villa",
            "Bomboná No.1",
            "Centro Administrativo",
            "U.P.B",
            "U.D. Atanasio Girardot",
            "Bolivariana",
            "El Velódromo",
            "Lorena",
            "Cuarta Brigada",
            "Las Acacias",
            "La Castellana",
            "Carlos E. Restrepo",
            "Laureles",
            "Los Conquistadores",
            "Naranjal",
            "Batallón Cuarta Brigada",
            "Suramericana",
            "Los Colores",
            "San Joaquín",
            "Florida Nueva",
            "Estadio",
            "Los Pinos",
            "Santa Teresita",
            "La América",
            "Calasanz",
            "Simón Bolívar",
            "Santa Mónica",
            "Santa Lucía",
            "La Floresta",
            "El Danubio",
            "Calasanz Parte Alta",
            "Barrio Cristóbal",
            "Ferrini",
            "Campo Alegre",
            "Nuevos Conquistadores",
            "Betania",
            "Los Alcázares",
            "Belencito",
            "San Javier No.2",
            "El Corazón",
            "Metropolitano",
            "Juan XXIII La Quiebra",
            "Veinte de Julio",
            "Santa Rosa de Lima",
            "El Pesebre",
            "Las Independencias",
            "La Pradera",
            "El Salado",
            "Eduardo Santos",
            "Antonio Nariño",
            "Blanquizal",
            "San Javier No.1",
            "El Socorro",
            "Altos del Poblado",
            "Barrio Colombia",
            "La Aguacatala",
            "Patio Bonito",
            "El Diamante No.2",
            "Las Lomas No.1",
            "El Tesoro",
            "La Florida",
            "Astorga",
            "Alejandría",
            "Los Naranjos",
            "Las Lomas No.2",
            "San Lucas",
            "Lalinde",
            "El Castillo",
            "El Poblado",
            "Castropol",
            "Santa María de Los Ángeles",
            "Los Balsos No.1",
            "Villa Carlota",
            "Los Balsos No.2",
            "Manila",
            "Campo Amor",
            "Tenche",
            "Santa Fé",
            "Cristo Rey",
            "Parque Juan Pablo II",
            "El Rodeo",
            "Trinidad",
            "La Colina",
            "Guayabal",
            "Cerro Nutibara",
            "El Nogal-Los Almendros",
            "Rosales",
            "La Mota",
            "La Hondonada",
            "Nueva Villa del Aburrá",
            "La Loma de Los Bernal",
            "Fátima",
            "Diego Echavarría",
            "El Rincón",
            "Belén",
            "Las Mercedes",
            "La Gloria",
            "Miravalle",
            "La Palma",
            "San Bernardo",
            "Las Violetas",
            "Las Playas",
            "Granada",
            "Los Alpes",
            "Altavista",
            "Urquitá",
            "Potrera Miserenga",
            "Palmitas Sector Central",
            "La Sucia",
            "La Aldea",
            "La Frisola",
            "Volcana Guayabal",
            "La Suiza",
            "Boquerón",
            "El Carmelo",
            "La Ilusión",
            "Área de Expansión Pajarito",
            "La Loma",
            "Yolombo",
            "El Picacho",
            "La Cuchilla",
            "El Llano",
            "San José de La Montaña",
            "El Uvito",
            "Travesías",
            "Pedregal Alto",
            "El Patio",
            "Área de Expansión San Cristóbal",
            "Cabecera Urbana Corregimiento San Cristóbal",
            "Aguas Frías",
            "Altavista Sector Central",
            "Buga Patio Bonito",
            "El Jardín",
            "Área de Expansión El Noral",
            "El Corazón El Morro",
            "Área de Expansión Altavista",
            "Área de Expansión Belén Rincón",
            "San José del Manzanillo",
            "La Verde",
            "Montañita",
            "San Antonio de Prado",
            "San José",
            "El Astillero",
            "Potrerito",
            "Área de Expansión San Antonio de Prado",
            "Yarumalito",
            "Media Luna",
            "Barro Blanco",
            "Piedra Gorda",
            "El Placer",
            "El Plan",
            "El Llano SE",
            "El Cerro",
            "Mazo",
            "Piedras Blancas - Matasano",
            "Santa Elena Sector Central",

        ];

        return view('welcome', [
            'steps' => $steps,
            'finalForm' => $finalForm,
            'responses' => $responses,
            'instituciones' => $instituciones,
            'documentos' => $documentos,
            'comunas' => $comunas,
            'barrios' => $barrios,
        ]);
    }
}
