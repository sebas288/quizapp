<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
    <body>
        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container-fluid">
                @include('components.navbar')
                @include('components.start')
                @include('components.tabs', [
                    'id' => "parentTab",
                    'display' => "d-none",
                    'steps' => $steps
                ])
                {{-- Formulario con datos básicos --}}
                <div class="d-none" id="contactForm">

                </div>
                {{-- Vista con el título y el resultado --}}
                <div class="d-none" id="finalForm">
                    <div class="container mb-4">

                         {{-- formulario para enviar el correo --}}
                         <form id="send_data_content">
                             <div class="content row justify-content-center text-left my-5">
                                <div class="col-md-11 text-center mt-5 mb-3">
                                    <h1>Ahora cuentanos más sobre ti !</h1>
                                </div>
                                <div class="col-md-5 mb-3 background-form">
                                    <label class="mt-2">Nombres y Apellidos</label>
                                    <br>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="names"
                                        name="names" />
                                </div>
                                <div class="col-md-5 mb-3 background-form ml-4">
                                    <label class="mt-2">Número celular</label>
                                    <br>
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="celular"
                                        name="celular" />
                                </div>
                                <div class="col-md-5 mb-3 background-form">
                                    <label class="mt-2">Comuna de residencia</label>
                                    <br>
                                    <select name="comunas" id="comunas" class="form-control">
                                        @foreach ( $comunas as $co)
                                            <option value="{{ $co}}">{{ $co}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5 mb-3 background-form ml-4">
                                    <label class="mt-2">Barrio</label>
                                    <br>
                                    <select name="barrio" id="barrio" class="form-control">
                                        @foreach ( $barrios as $br)
                                            <option value="{{ $br }}">{{ $br }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5 mb-3 background-form">
                                    <label class="mt-2">Institución Educativa</label>
                                    <br>
                                    <select name="institucion" id="institucion" class="form-control">
                                        @foreach ( $instituciones as $it)
                                            <option value="{{ $it }}">{{ $it }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5 mb-3 background-form ml-4">
                                    <label for="other" class="mt-2">Otro</label>
                                    <br>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="other"
                                        name="other" />
                                </div>
                                <div class="col-md-5 mb-3 background-form">
                                    <label class="mt-2">Fecha de nacimiento</label>
                                    <br>
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="date"
                                        name="date" />
                                </div>
                                <div class="col-md-5 mb-3 background-form ml-4">
                                    <label class="mt-2">Tipo de documento</label>
                                    <br>
                                    <select name="tipo_documento" id="tipo_documento" class="form-control">
                                        @foreach ( $documentos as $dc)
                                            <option value="{{ $dc }}">{{ $dc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5 mb-3 background-form">
                                    <label class="mt-2">Documento de identidad</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="dni"
                                        name="dni" />
                                </div>
                                <div class="col-md-5 mb-3 background-form ml-4">
                                    <label for="email" class="mt-2">Correo Electronico</label>
                                    <br>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email" />
                                </div>
                                <div class="col-md-10 my-4">

                                    <button id="endBackend" class="endBackend btn btn-sm btn-block btn-pink mt-2">¿Qué personaje PREA soy?
                                    </button>
                                    {{-- <button id="endBackend" class="endBackend btn btn-sm btn-block btn-primary mt-2">Enviar respuestas al correo.
                                    </button> --}}
                                    <p id="loading"></p>
                                    <button id="see_responses" class="see_responses btn btn-sm btn-dark d-none">Ver respuestas</button>
                                </div>
                            </div>
                        </form>

                        @foreach ($responses as $key => $value)
                        <div class="content row justify-content-center text-center my-3 d-none" id="resp_{{ $key }}">
                            <div class="col-md-12">
                                <h2 class="text-center">Tu personaje PREA es:</h2>
                                <div class="mt-5 d-none men">{!! $responses[$key]["titulo"][0] !!}</div>
                                <div class="mt-5 d-none woman">{!! $responses[$key]["titulo"][1] !!}</div>
                                <div class="mt-5 d-none otro">{!! $responses[$key]["titulo"][2] !!}</div>
                                <img src="{{ $responses[$key]["image"][0] }}" class="mb-2 mt-5 d-none men" width="30%" />
                                <img src="{{ $responses[$key]["image"][1] }}" class="mb-2 mt-5 d-none woman" width="30%" />
                                <img src="{{ $responses[$key]["image"][2] }}" class="mb-2 mt-5 d-none otro" width="30%" />
                                <div class="text-justify mt-5">{!! $responses[$key]["texto"] !!}</div>
                                {{--  <h3 class="mt-5 text-start">El titulo aquel</h3> --}}
                                <div class="mt-5">{!! $responses[$key]["recordatorio"] !!}</div>
                                <div class="d-flex mt-5">
                                    <ul class="list-r">
                                        @foreach ($responses[$key]["politicas"] as $item)
                                            <li><strong>❌ {{$item}}</strong></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-md-5 mt-5 text-left d-none" id="sendemail-content">
                            <p for="email">¿Quieres recibir las respuestas al correo electronico?</p>
                            {{-- <input type="text" id="mail" class="form-control" value="" /> --}}
                            <button class="email btn btn-sm btn-primary btn-block mt-2">Enviar</button>
                         </div>

                    </div>


                   {{--  @include('components.tabs', [
                        'id' => "finalForm",
                        'display' => "d-block",
                        'steps' => $finalForm
                    ]) --}}
                </div>

            </div>
        </div>
        @include('components.footer')
    </body>
    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <!-- select to jquery -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/js/index.js"></script>
    <script>
        $(document).ready(() => {
            $("#institucion").select2();
            $("#barrio").select2();
        })
    </script>
</html>
