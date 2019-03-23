<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InicioController extends Controller
{
    public function index(){
        return view('web.inicio');
    }

    public function historia(){
    	return view('web.historia');
    }

    public function objetivos(){
    	return view('web.objetivos');
    }

    public function valores(){
    	return view('web.valores');
    }

     public function terminos(){
        return view('web.terminos_condiciones');
    }

    public function contacto(){
        return view('web.contacto');
    }

    public function buscarCedula(Request $request){
        $messages=[
            'terminos.required'=>'Para continuar es necesario aceptar los términos y condiciones.'
        ];

        $this->validate($request,[
            'terminos'=>'required'
        ],$messages);

        return view('web.buscar_cedula');
    }

    /*public function prueba(){
          if($date == \Carbon\Carbon::today()->format('d/m/Y')){
            return 'ok';
            }   
    }*/
}
