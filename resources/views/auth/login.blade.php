@extends('layouts.app')

@section('content-pag')
    <div class="col m8 offset-m2 s12">
        <br>
        <form class="col s12" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <fieldset>
            <legend><h5>Login</h5></legend>
              <div class="row">

                <div class="input-field col m8 offset-m2 s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
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
                <br>
                <div class="col m8 offset-m2 s12">
                    <div class="row">
                        <div class="col m4 s6">
                        <input type="checkbox" class="filled-in" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                        <label for="remember">Recordarme</label>
                    </div>
                    </div>
                </div>

                <div class="col m3 offset-m2 s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Login
                    </button>
                </div>   
                <div class="col m7 s12">
                    <a class="waves-effect waves-light btn" href="{{ route('password.request') }}">
                        Olvidaste tu Contraseña?
                    </a>
                </div>    
                            
            </fieldset>
        </form>
        <br>
    </div>
@endsection
