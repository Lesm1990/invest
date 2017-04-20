@extends('layouts.app')

@section('content-pag')
<main>
<div class="row container">
<div class="col m8 offset-m2 s12">
        <br>
        <form class="col s12" role="form" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <fieldset>
            <legend><h5>Resetear Contraseña</h5></legend>
              <div class="row">

                @if (session('status'))
                    <div class="card-panel teal lighten-2">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="input-field col m8 offset-m2 s12">
                  <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                  <label for="email" data-error="Escriba un e-mail" data-success="válido">Email</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <br>

                <div class="col m8 offset-m2 s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Restablecer Contraseña
                    </button>
                </div>   
                            
            </fieldset>
        </form>
        <br>
    </div>
</div>
</main>
@endsection
