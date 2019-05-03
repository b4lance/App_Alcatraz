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
        $this->validate($request,[
            'nacionalidad'=>'required',
            'cedula'=>'required|numeric'
        ]);

        if($request->cedula){
            return 'ok';
        }else{
            return view('web.buscar_cedula');
        }
    }

    /*public function prueba(){
          if($date == \Carbon\Carbon::today()->format('d/m/Y')){
            return 'ok';
            }   
    }*/
}
