@extends('layouts.app')

@section('contenido')
    <section class="row d-flex justify-content-center">
		 <div class="col-md-6 col-sm-12">
		 	<form action="{{route('buscar_cedula')}}" method="POST" id="form-terminos">
		 	@csrf
            <img src="img/terminos.png" alt="" class="img-fluid">

            <div class="form-check form-check-inline d-flex justify-content-center">
  				<input class="form-check-input" type="checkbox" name="terminos" id="inlineCheckbox1" value="acepto">
  				<label class="form-check-label btn btn-default " for="inlineCheckbox1">Acepto los Términos y condiciones</label>

  				@if($errors->has('terminos'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('terminos') }}</strong>
                     </span>
                @endif
			</div>

            </form>
        </div>
	</section>
@endsection
@section('scripts')
	<script>
		$(document).ready(function(){
			$('#inlineCheckbox1').change(function(e){
				e.preventDefault();
				$('#form-terminos').submit();
			});
		});
	</script>
@endsection