<div class="{{ $display }} mt-5" id="parentTab">
    <form class="mb-4">
        <div class="content row justify-content-center">
            @foreach ($steps as $field)
                <div
                    class="col-md-8 _step {{ $field["show"] }}"
                    id="{{ $field["id"] }}"
                >
                    <h1>{{ $field["title"] }}</h1> 
                    <span id="point"></span>
                    <hr />
                    <div class="row">
                        @foreach ($field["fields"] as $input)
                        @switch($input["type"])
                            @case("text")    
                            @case("email")    
                            @case("date")    
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
                                @if ($field["btnEnd"])
                                <button
                                    type="submit"
                                    class="btn btn-primary end-questions ml-2"
                                    id="end-questions"
                                >Terminar</button>
                                    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>