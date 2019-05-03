@extends('layouts.app')

@section('contenido')
    <section class="row d-flex justify-content-center">
		 <div class="col-md-6 col-sm-12">
            <img src="img/terminos.png" alt="" class="img-fluid">
            <div class="form-check form-check-inline d-flex justify-content-center">
  				<input class="form-check-input" type="checkbox" name="terminos" id="inlineCheckbox1" value="acepto">
  				<label class="form-check-label btn btn-default " for="inlineCheckbox1">Acepto los Términos y condiciones</label>
			</div>
        </div>
	</section>
@endsection
@section('scripts')
	<script>
		$(document).ready(function(){
			$('#inlineCheckbox1').change(function(e){
				e.preventDefault();
				window.location='solicitud-cita/buscar-cedula';
			});
		});
	</script>
@endsection