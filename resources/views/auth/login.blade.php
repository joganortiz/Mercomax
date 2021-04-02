{{-- @extends('layouts.app') --}}
@extends('layouts.sesion')
{{-- @section('content') --}}
@section('title', 'Mercomax - Iniciar sesión')

@section('contenido')

    <div class="form-dt">
        
                

                <div class="form-inpts checout-address-step">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-title">{{ __('Iniciar sesión') }}</div>
                        <div class="form-group pos_rel">
                            
                            <input id="email" type="email" placeholder="Ingrese usuario (correo)" class="form-control lgn_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        <div class="form-group pos_rel">
                            
                                <input id="password" type="password" placeholder="Ingrese contraseña" class="form-control lgn_input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class="uil uil-padlock lgn_icon"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        
                                <button type="submit" class="login-btn hover-btn">
                                    {{ __('Ingresar') }}
                                </button>

                    </form>
                    @if (Route::has('password.request'))
                                    <div class="password-forgor">
                                        <a class="password-forgor" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                    </div>
                    @endif
                        <div class="signup-link">
                            <p>¿No tienes una cuenta? - <a href="{{route('register')}}">Regístrate ahora</a></p>{{-- Esta ruta despues se cambia por register --}}
                        </div>
                </div>
            
    </div>

@endsection
