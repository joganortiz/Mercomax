@extends('layouts.sesion')

@section('title', 'Mercomax - Registrar')

@section('contenido')

<div class="form-dt">
    <div class="form-inpts checout-address-step">
        <form>
            <div class="form-title"><h6>Registrate</h6></div>
                <div class="form-group pos_rel">
                    <input id="full[name]" name="fullname" type="text" placeholder="Nombre completo" class="form-control lgn_input" required="">
                    <i class="uil uil-user-circle lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="email[address]" name="emailaddress" type="email" placeholder="Correo electrónico" class="form-control lgn_input" required="">
                    <i class="uil uil-envelope lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="direccion" name="direccion" type="text" placeholder="Dirección de residencia" class="form-control lgn_input" required="">
                    <i class="uil uil-home lgn_icon"></i>
                    
                </div>
                <div class="form-group pos_rel">
                    <input id="phone[number]" name="phone" type="text" placeholder="Número de teléfono" class="form-control lgn_input" required="">
                    <i class="uil uil-mobile-android-alt lgn_icon"></i>
                </div>
                <div class="form-group pos_rel">
                    <input id="password1" name="password1" type="password" placeholder="Nueva contraseña" class="form-control lgn_input" required="">
                    <i class="uil uil-padlock lgn_icon"></i>
                </div>
                <button class="login-btn hover-btn" type="submit">Regístrate ahora</button>
        </form>
    </div>
    <div class="signup-link">
        <p>¿Tengo una cuenta? - <a href="{{route('login')}}">Inicia sesión</a></p>
    </div>
</div>

@endsection