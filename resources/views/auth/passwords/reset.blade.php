@extends('layouts.app')

@section('content-pag')
<div class="col m8 offset-m2 s12">
        <br>
        <form class="col s12" role="form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <fieldset>
            <legend><h5>Resetear Contraseña</h5></legend>
              <div class="row">

                @if (session('status'))
                        <div class="card-panel teal lighten-2">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="input-field col m8 offset-m2 s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>
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
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <br>

                <div class="col m3 offset-m2 s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Cambiar Contraseña
                    </button>
                </div>   
                            
            </fieldset>
        </form>
        <br>
    </div>
@endsection
