@extends('layouts.app')

@section('content-pag')
<main>
<div class="row container">
  <div class="col m8 offset-m2 s12">
        <br>
        <form class="col s12" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <fieldset>
            <legend><h5>Registrar</h5></legend>
              <div class="row">

                <div class="input-field col m8 offset-m2 s12">
                  <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                  <label for="name">Nombre</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col m8 offset-m2 s12">
                  <select id="tipo" name="tipo" required>
                    <option value="" disabled selected>Escoge una Opción</option>
                    <option value="Admin">Admin</option>
                    <option value="Miembro">Miembro</option>
                  </select>
                  <label for="tipo">Tipo de Usuario</label>

                  <script>
                    $(document).ready(function() {
                        $('select').material_select();
                    });
                  </script>
                </div>

                <div class="input-field col m8 offset-m2 s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email" data-error="Escriba un e-mail correctamente" data-success="válido">Email</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col m8 offset-m2 s12">
                  <input id="password" type="password" class="validate" name="password" required>
                  <label for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-field col m8 offset-m2 s12">
                  <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                  <label for="password-confirm">Confirmar Password</label>
                </div>
                <br>

                <div class="col m3 offset-m2 s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Registrar
                    </button>
                </div>   
                            
            </fieldset>
        </form>
        <br>
    </div>
</div>
</main>
@endsection
