@extends('layouts.app')

@section('contenido')
    <section class="row d-flex justify-content-center">
		 <div class="col-md-6 col-sm-12 content-margin">
		 	<form method="GET" action="{{ route('') }}">
            @csrf 
           <div class="form-group text-center mt-4">
               <label for="email">Ingrese cedula de la persona que desea pertenecer al proyecto:</label>
               <input id="username" type="text" class="buscar-cedula col-sm-6 form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                @if ($errors->has('username'))
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('username') }}</strong>
                       </span>
                 @endif
           </div>

                 <div class="form-group row mb-5">
                    <div class="col-md-8 offset-md-4">                                
                        <button class="btn btn-success" type="submit">Ingresar</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
                </div>
             </form>
           </div>
        </div>
	</section>
@endsection