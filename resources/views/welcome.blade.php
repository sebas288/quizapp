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
                    @include('components.tabs', [
                        'id' => "finalForm",
                        'display' => "d-block",
                        'steps' => $finalForm
                    ])
                </div>

            </div>
        </div>
        @include('components.footer')
    </body>
    <script src="/js/index.js"></script>
</html>
