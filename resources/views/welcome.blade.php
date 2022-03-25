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
                <div class="d-none" id="finalForm">

                    <div class="container mb-4">
                        <h3 class="text-center">respuestas</h3>
                        @foreach ($responses as $key => $value)
                        <div class="content row justify-content-center text-center d-none" id="resp_{{ $key }}">
                            <div class="col-md-8">
                                <img src="{{ $responses[$key]["image"] }}" width="100%" />
                                {!! $responses[$key]["texto"] !!}
                                <ul>
                                    @foreach ($responses[$key]["politicas"] as $item)
                                        <li> {{$item}} </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endforeach

                        <form action="">
                            <div class="content row justify-content-center text-center">
                                <div class="col-md-8">
                                    <label for="email">Correo Electronico</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        name="email" />
                                </div>
                                <div class="col-md-8">
                                    <button id="endBackend" class="endBackend btn btn-sm btn-block btn-primary mt-2">Enviar respuestas al correo.
                                    </button>
                                </div>
                            </div>
                        </form>
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
    <script src="/js/index.js"></script>
</html>
