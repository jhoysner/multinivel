@extends('layouts.app')

@section('content')
<div class="container login-section">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <span class="md-display-1">{{ config('app.name', 'Laravel') }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <md-input-container class="{{ $errors->has('email') ? 'md-input-invalid' : '' }}">
                    @if ($errors->has('email'))
                        <label>{{ $errors->first('email') }}</label>
                    @else
                        <label>Correo Electrónico</label>
                    @endif
                    <md-input name="email" type="email" maxlength="30" value="{{ old('email') }}" required></md-input>
                </md-input-container>

                <md-input-container md-has-password class="{{ $errors->has('password') ? 'md-input-invalid' : '' }}">
                    @if ($errors->has('password'))
                        <label>{{ $errors->first('password') }}</label>
                    @else
                        <label>Contraseña</label>
                    @endif
                    
                    <md-input name="password" type="password" maxlength="30" required></md-input>
                </md-input-container>
                <md-toolbar class="md-transparent">
                    <md-button type="submit" class="md-raised md-primary">Ingresar</md-button>
                    <md-button href="{{ route('password.request') }}" class="md-raised md-warn">Olvidaste tu contraseña?</md-button>
                </md-toolbar>
            </form>
        </div>
    </div>
</div>
@endsection
