@extends('layouts.sesion')

@section('title', 'Mercomax - Iniciar sesión')

@section('contenido')

<div class="form-dt">
    <div class="form-inpts checout-address-step">
        <form>
            <div class="form-title"><h6>Inicia Sesión</h6></div>
                <div class="form-group pos_rel">
                    <input id="phone[number]" name="phone" type="email" placeholder="Ingrese usuario" class="form-control lgn_input" required="">
                    <i class="uil uil-mobile-android-alt lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="password1" name="password1" type="password" placeholder="Ingrese contraseña" class="form-control lgn_input" required="">
                    <i class="uil uil-padlock lgn_icon"></i>
                </div>
                <button class="login-btn hover-btn" type="submit">Iniciar sesión</button>
            
        </form>
    </div>
    <div class="password-forgor">
        <a href="{{route('password')}}">¿Has olvidado tu contraseña?</a>
    </div>
    <div class="signup-link">
        <p>¿No tienes una cuenta? - <a href="{{route('registrar')}}">Regístrate ahora</a></p>
    </div>
</div>
@endsection