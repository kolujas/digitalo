<?php
    /** @var object[] $validation */
?>

<section id="contacto" class="contacto">
    <h2>Contacto</h2>
    <form action="/contactar"
        method="post"
        class="form-validate"
        data-rules="{{$validation->rules}}"
        data-messages="{{$validation->messages}}">
        @csrf
        <div class="div-group inputs">
            <div class="div-inputs">
                <input type="text"
                    name="nombre"
                    placeholder="nombre"
                    value="{{old('nombre')}}">
                <div
                    @if($errors->has('nombre'))
                        class="invalid-tooltip showed"
                    @else
                        class="invalid-tooltip"
                    @endif>
                    @if($errors->has('nombre'))
                        {{ $errors->first('nombre') }}
                    @endif
                </div>
            </div>
            <div class="div-inputs">
                <input type="email"
                    name="correo"
                    placeholder="email"
                    value="{{old('correo')}}">
                <div
                    @if($errors->has('correo'))
                        class="invalid-tooltip showed"
                    @else
                        class="invalid-tooltip closed"
                    @endif>
                    @if($errors->has('correo'))
                        {{ $errors->first('correo') }}
                    @endif
                </div>
            </div>
        </div>

        <div class="div-group mensaje">
            <textarea name="mensaje"
                cols="30"
                rows="10"
                placeholder="mensaje">{{old('mensaje')}}</textarea>
            <div
                @if($errors->has('mensaje'))
                    class="invalid-tooltip showed"
                @else
                class="invalid-tooltip closed"
                @endif>
                @if($errors->has('mensaje'))
                    {{ $errors->first('mensaje') }}
                @endif
            </div>
        </div>

        <div class="div-submit">
            <button type="submit" class="form-submit">Enviar</button>
        </div>
    </form>
</section>