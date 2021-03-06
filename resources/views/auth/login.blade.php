@extends('layouts.app')

@section('contenido')
 <section class="row mt-5 justify-content-center">
    <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-3"><img src="{{asset('img/sesion.png')}}" alt=""> Iniciar Sesión</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}:</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}:</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">                                
                                    <a class="btn btn-link" href="#">
                                        {{ __('Recuperar Password') }}
                                    </a>
                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">                                
                                <button class="btn btn-success" type="submit">Ingresar</button>
                                <button class="btn btn-danger" type="reset">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
@endsection
