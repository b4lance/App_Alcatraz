@extends('layouts.app')

@section('contenido')
    <section class="row d-flex justify-content-center">
		 <div class="col-md-6 col-sm-12 content-margin">
		 	<form method="GET" action="{{ route('buscar_cedula') }}">
            @csrf 
           <div class="form-group text-center mt-4">
               <label for="email">Ingrese cedula de la persona que desea pertenecer al proyecto:</label>
               <div class="input-group my-group">
                <select id="lunch" class="form-control" style="width: 15%;" name="nacionalidad">
                   <option value="V">V</option>
                   <option value="E">E</option>
               </select> 
                <input id="cedula" type="text" style="width:85%;" class="buscar-cedula form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" name="cedula" value="{{ old('cedula') }}"  autofocus>
               </div> 
                @if ($errors->has('cedula'))
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $errors->first('cedula') }}</strong>
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