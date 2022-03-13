<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quiz app</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Boostrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Custom css -->
        <link rel="stylesheet" href="/css/index.css">
    </head>
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
                <div class="nav row">
                    <div class="col-md-6">
                        <ul>
                            <li><a href="">Cuestionarios</a></li>
                            <li><a href="">Informes</a></li>
                            <li><a href="">Ofertas</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6"></div>
                </div>

                <div class="container">
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="container p-0">
                                <h1>Actividad de autoevaluación</h1>
                                <h3>Afianzando saberes</h3>
                                <i>Tipo de actividad: Opción múltiple</i>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-items-center justify-content-end">
                            <img src="https://unidadvirtual.itm.edu.co/Leidy/Unidad2/recursos/img/imagen-actividad-5.png" alt="" width="70%">
                        </div>
                    </div>
                </div>
                
                <form>
                    <div class="content row justify-content-center">
                        @foreach ($steps as $field)
                            <div 
                                class="col-md-8 _step {{ $field["show"] }}" 
                                id="{{ $field["id"] }}"
                            >
                                <h1>{{ $field["title"] }}</h1> <hr />
                                <div class="row">
                                    @foreach ($field["fields"] as $input)
                                    <div class="col-md-6">
                                        <div class="form-group form-check">
                                            <input 
                                                type="{{ $input["type"] }}" 
                                                class="form-check-input {{ $input["class"] }}" 
                                                id="{{ $input["field"] }}" 
                                                name="{{ $input["field"] }}"
                                            >
                                            <label 
                                                class="form-check-label" 
                                                for="exampleCheck1"
                                            >{{ $input["label"] }}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-end justify-content-end">
                                            <button 
                                                type="submit" class="btn btn-primary back mr-2" 
                                                id="{{ $field["id"] }}"
                                            >Atras</button>
                                            <button 
                                                type="submit" 
                                                class="btn btn-primary next" 
                                                id="{{ $field["id"] }}"
                                            >Siguiente</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </form>
                <footer>
                    <small>Todos los derechos reservados</small>
                </footer>
            </div>
        </div>
    </body>
    <script src="/js/index.js"></script>
</html>
