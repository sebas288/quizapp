<div class="{{ $display }} mt-5" id="parentTab">
    <div class="container">
        <div class="row justify-content-center mt-4 align-items-baseline ml-3">
            <div class="col-md-10 d-flex ">
                <h3 id="counter"></h3>
                <h3>
                    <span id="minDisplay"></span>
                    <span id="safeTimerDisplay"></span>
                </h3>
            </div>
        </div>
    </div>
    <form class="mb-4">
        <div class="content row justify-content-center text-center">
            @foreach ($steps as $field)
                <div
                    class="col-md-8 _step {{ $field["show"] }}"
                    id="{{ $field["id"] }}"
                >
                    <h1>{{ $field["title"] }}</h1>
                    <div class="row text-center mt-5 ">
                        @foreach ($field["fields"] as $input)
                        @switch($input["type"])
                            @case("text")
                            @case("email")
                            @case("date")
                            @case("phone")
                                <div class="col-md-6">
                                    <div class="form-group form-check">
                                        <label
                                            class=""
                                            for="exampleCheck1"
                                        >{{ $input["label"] }}</label>
                                        <input
                                            type="{{ $input["type"] }}"
                                            class="form-control {{ $input["class"] }}"
                                            id="{{ $input["field"] }}"
                                            name="{{ $input["field"] }}"
                                            data-step="{{ $field["id"] }}"
                                            data-title="{{ $field["title"] }}"
                                            data-value="{{ $input["data"] }}"
                                            data-label="{{ $input["label"] }}"
                                        >
                                    </div>
                                </div>
                                @break
                            @default
                            <div class="col-md-6">
                                <div class="form-group form-check">
                                    <input
                                        type="{{ $input["type"] }}"
                                        class="form-check-input {{ $input["class"] }}"
                                        id="{{ $input["field"] }}"
                                        name="{{ $input["field"] }}"
                                        data-step="{{ $field["id"] }}"
                                        data-title="{{ $field["title"] }}"
                                        data-value="{{ $input["data"] }}"
                                        data-label="{{ $input["label"] }}"
                                    >
                                    <label
                                        class="form-check-label"
                                        for="exampleCheck1"
                                    >{{ $input["label"] }}</label>
                                </div>
                            </div>
                        @endswitch
                        @endforeach
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center justify-content-center mt-5">
                                @if ($field["changeSteps"])
                                    <button
                                        type="submit" class="btn btn-pink back mr-2"
                                        id="{{ $field["id"] }}"
                                    >Atras</button>
                                    <button
                                        type="submit"
                                        class="btn btn-pink next"
                                        id="{{ $field["id"] }}"
                                    >Siguiente</button>
                                @endif
                                @if ($field["btnEnd"])
                                <button
                                    type="submit"
                                    class="btn btn-pink end-questions ml-2"
                                    id="end-questions"
                                >Terminar</button>

                                @endif
                            </div>
                        </div>
                    </div>
                    <?php
                        if(array_key_exists("description", $field)){
                            echo "<hr/>";
                            echo $field["description"];
                        }
                    ?>
                </div>
            @endforeach
        </div>
    </form>
</div>
