<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class CorreoController extends Controller{
    
    public function correo(){
        return view("mail.formulario");
    }
    public function enviar1(){
        $data = array(
            'ejemplo' =>'Ejemplo-01',
            'nombre' =>'Areli',
            'correo' =>'al2219103330@gmail.com',
            'asunto' =>'Ejemplo de correo 01',
            'mensaje' =>'contexto de ejemplo 01 de correo Estatico....',
        );

        Mail::send('mail.mail',$data, function($message) { //siempre va tener una vista mail
            $message->to('arelihern20@gmail.com', 'Areli')
                ->subject('Ejemplo de correo 01');
            $message->from('al221910333@gmail.com', 'Areli Hernandez Hernandez');
        });

        if(Mail::failures()){
            //return reponse()->Fail('Error: Intente mas tarde !!!');
            //return view("error");
            return "Error";
        }
        else{
            //return reponse()->json('si, se a enviado el Mensaje !!!');
            return view("mail.formulario");
        }
    }
    public function enviar2(Request $request){
        $data = array(
        'ejemplo' =>'Ejemplo-02',
        'nombre' => $request->get('nombre'),
        'correo' =>$request->get('correo'),
        'asunto' =>$request->get('asunto'),
        'mensaje' =>$request->get('mensaje'),
    );
    Mail::send('mail.mail', $data, function($message) use($data){
        $message->from('al221910333@gmail.com', 'Areli Hernandez Hernandez.');
        $message->to($data ['correo'], $data['nombre']);
        $message->subject($data['asunto']);
    });
    if(Mail::failures()){
        //return reponse()->Fail('Error: Intente mas tarde !!!');
        //return view("error");
        return "Error";
    }
    else{
        //return reponse()->json('si, se a enviado el Mensaje !!!');
        return view("mail.formulario");
    }

    }
}
