@extends('layouts.sesion')

@section('title', 'Mercomax - Registrar')

@section('contenido')

<div class="form-dt">
    <div class="form-inpts checout-address-step">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-title"><h6>{{ __('Registrarse') }}</h6></div>
                <div class="form-group pos_rel">
                    <input id="name" name="name" type="text" placeholder="Nombre" class="form-control lgn_input @error('name') is-invalid @enderror" value="{{ old('name') }}" required="" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="uil uil-user-circle lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="apellidos" name="apellidos" type="text" placeholder="Apellidos" class="form-control lgn_input @error('apellidos') is-invalid @enderror" required=""  value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>
                    @error('apellidos')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="uil uil-user-circle lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="email" name="email" type="email" placeholder="Correo electrónico" class="form-control lgn_input @error('email') is-invalid @enderror" required="" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="uil uil-envelope lgn_icon"></i>
                </div>
{{--                 <div class="form-group pos_rel">
                    <input id="direccion" name="direccion" type="text" placeholder="Dirección de residencia" class="form-control lgn_input" required="">
                    <i class="uil uil-home lgn_icon"></i>
                </div> --}}
                <div class="form-group pos_rel">
                    <input id="telefono" type="text" name="telefono" placeholder="Número de teléfono" class="form-control lgn_input @error('telefono') is-invalid @enderror" required="" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                    @error('telefono')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="uil uil-mobile-android-alt lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="password" name="password" type="password" placeholder="Nueva contraseña" class="form-control lgn_input @error('password') is-invalid @enderror" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="uil uil-padlock lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="password-confirm" name="password_confirmation" type="password" placeholder="Nueva contraseña" class="form-control lgn_input" required autocomplete="new-password">
                    <i class="uil uil-padlock lgn_icon"></i>
                </div>
                <button class="login-btn hover-btn" type="submit">{{ __('Register') }}</button>
        </form>
    </div>
    <div class="signup-link">
        <p>¿Tengo una cuenta? - <a href="{{route('login')}}">Inicia sesión</a></p>
    </div>
</div>

@endsection