<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
    <div class="container" id="terms">
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 d-flex align-items-center">
                    <img src="images/start.png" alt="" width="100%">
            </div>
        </div>
        <h1 class="text-center m-4">Bienvenido al TEST ¿ Qué personaje eres ?</h1>
        <p><strong>Esta actividad te servirá para analizar qué tan cerca o lejos estás de tener un embarazo en tu adolescencia.</strong></p>
        <p>Al final te damos unos TIPS o estrategias básicas para prevenir esta situación.</p>
        <p>Te invitamos a responder con total sinceridad, sólo tú conocerás el resultado.</p>
        <p>Si tienes alguna duda, la puedes resolver con tu profesional de acompañamiento o comunicarte a la línea amiga saludable de la Alcaldía de Medellín (604) 444 44 48 o al 300 723 1123. <a href="https://web.whatsapp.com/send?phone=573007231123" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/2044px-WhatsApp.svg.png" alt="" width="30px"></a></p>
        <br/>
        <p>Para continuar:</p>
        <p class="text-center autorizacion">¿Autoriza al Municipio de Medellín para realizar tratamiento de sus datos personales?</p>
        <div class="d-flex align-items-baseline justify-content-center autorizacion-check">
            <div class="mr-2">
                <input class="autorization" name="si" type="checkbox" >
                <label for="Si">SI</label>
            </div>
            <div>
                <input class="autorization" name="no" type="checkbox" >
                <label for="No">NO</label>
            </div>
        </div>
        <p style="font-size: 14px">De acuerdo con la Ley 1581 de 2012 de protección de los datos personales en Colombia autorizo al
        municipio de Medellín identificado con NIT N.º 890.905.211-1, como Responsable para tratar mis datos
        personales conforme a su Política de Tratamiento de Datos Personales, disponible en
        <a href="www.medellin.gov.co">www.medellin.gov.co</a> , para que sean incluidos en sus bases de datos para los fines descritos en el
        siguiente <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">enlace </a>. </p>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify m-3">
                <p>“Autorizo al Municipio de Medellín para que realice la recolección de los datos personales que suministro de manera veraz y completa, los cuales serán utilizados para participar en el TEST TIPO JUEGO PARA LA VALORACIÓN DE RIESGO DE EMBARAZO ADOLESCENTE, liderado por el Municipio De Medellín, conforme a su Política de Tratamiento de Datos Personales, disponible en www.medellin.gov.co.</p>
                <p>La presente autorización le permitirá almacenar, usar, circular, suprimir, procesar, compilar, intercambiar, dar tratamiento, actualizar y disponer de la información suministrada. Igualmente, autorizo al Municipio De Medellín, para que utilice los datos suministrados con las siguientes finalidades:</p>
                <p>La aplicación de la metodología para diseño y validación del test; en la aplicación y descripción del Método Delphi que se ejecutar en las siguientes etapas: a. Fase 1: Formulación preguntas del test, b. Fase 2: Variables del test preliminar, c. Fase 3. Redacción, revisión de los ítems, d. Fase 4: Sistematización y propuesta de test tipo juego; Análisis de resultados obtenidos; Poner en operación el Juego de Test ¿Que personajes eres? “Yo decido cuando” preguntas preliminares: (i) Propuesta de diseño, (ii) aplicación y (iii) operativización de las variables; en el proceso de aplicación del juego-test; en el plan de análisis puntaje escala para la prueba piloto; todas estas actividades constituyen la finalidad de operación del juego tipo Test. Como una finalidad adicional se procura la formulación de una propuesta para las pruebas estadísticas aplicadas para la validación del test después de la aplicación prueba piloto.</p>
                <p>Declaro que entiendo que los datos relativos a mi salud, sexual y reproductiva son de categoría sensibles, por lo que no estoy obligado/a en autorizar su tratamiento, Sin embargo, de manera libre, expresa y espontánea OTORGO LA AUTORIZACIÓN para el uso destinado a las anteriores finalidades por preservar el mi derecho personal y de interés superior cuando del niño, niña y adolescente se trata.</p>
                <p>Manifiesto que ha sido informado de que tengo derecho a conocer, consultar, actualizar, rectificar y suprimir la información, solicitar prueba de esta autorización y revocarla (cuando ello sea posible y no se requieran los datos en virtud de las funciones legales del Municipio de Medellín), derechos que se me ha informado puedo ejercer a través de los canales: portal web www.medellin.gov.co, línea de atención 4444144, Centro de Servicios a la Ciudadanía (Calle 44 N 52 – 165 la Alpujarra) y sedes externas de la entidad (Casas de Gobierno, MASCERCA y Centros de Servicios al Ciudadano – pueden consultarse en la Línea de Atención).
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">UPS!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify m-3">
                <p>
                    “¡ups! para continuar debes autorizar al municipio de Medellín realizar tratamiento de tus datos”.
                </p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
    </div>
    @include('components.scripts')
</body>
</html>
