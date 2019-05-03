<?php

//Rutas de Principales
Route::get('/','Web\InicioController@index')->name('inicio');

Route::get('historia','Web\InicioController@historia')->name('historia');

Route::get('objetivos','Web\InicioController@objetivos')->name('objetivos');

Route::get('valores','Web\InicioController@valores')->name('valores');

Route::get('contacto','Web\InicioController@contacto')->name('contacto');

Route::get('solicitud-cita','Web\InicioController@terminos')->name('terminos');

Route::get('/solicitud-cita/buscar-cedula','Web\InicioController@buscarCedula')->name('buscar_cedula');


//Inicio de Sesión
Auth::routes();

//Rutas de Administrador



