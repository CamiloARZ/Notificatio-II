<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('sendemail', function(){
    
    $data = array('name' => "Hola hola",
                 );
    
    Mail::send('emails.welcome', $data, function($message){
        
        $message->from('dcurrutia@ing.ucsc.cl', 'Prueba correo');
        
        $message->to('dcurrutia@ing.ucsc.cl')->subject('Hola negrito');
        
        
    });
    
    return "Tú email ha sido enviado correctamente";
});
