<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;   //libreria autentifica y valida

use App\UsuariosModel;

class LoginController extends Controller {

    public function login(){
        return view('login.login');

    }
    public function validar(Request $request){
        $correo = $request->input('correo');
        $pass = $request->input('pass');

        $consulta = UsuariosModel::Where('email', '=', $correo)
            ->where('pass', '=', $pass)
            ->get();
        
            if(count($consulta)==0){
                return view('login.login');
            }
            else{
                // -------------------------------crea las sessiones
                $request-> session()->put('session_id', $consulta[0]->id_usuario);
                $request-> session()->put('session_name', $consulta[0]->nombre);
                $request-> session()->put('session_tipo_usuario', $consulta[0]->id_tipo_usuario);
            
                //-------------------consulta las sessiones
                $session_id =$request->session()->get('session_id');
                $session_name =$request->session()->get('session_name');
                $session_tipo_usuario =$request->session()->get('session_tipo_usuario');

                if($session_tipo_usuario == 1){ return view('nivel.administrador'); }
                else{
                      if($session_tipo_usuario == 3){ return view('nivel.cliente'); }
                        else{
                           return view('nivel.cliente');
                        
                    }
                }
             }

        }
        public function logout(Request $request){
            //----------------destruye las session
            $request-> session()->forget('session_id');
            $request-> session()->forget('session_name');
            $request-> session()->forget('session_tipo');

            return view('login.login');
        }

        //--------------------------------------registro


        public function nuevo2(){
            return view("login.nuevo2");
        }
        public function guardar2(Request $request){
    
            //-----------------para la imgen/archivo----------------
                //Indica los datos del archivo (file)
               // $file = $request->file('img');
    
            //--Obtenemos el nombre del archivo (file)
                // $img = $file->getClientOriginalName();
            //$img = $request->file('img')->getClienteOriginalName();
    
            //--Creamos y obtenemos fecha y hora para el nombre del archivo (file)
               // $ldate = date('Ymd_His_');  //Fecha y hora
               // $img2 = $ldate . $img;    // nuevo nombre del archivo (file)
    
            //Indicamos donde queremos almacenar el archivo (file) y con que nombre
               // \Storage::disk('local')->put($img2, \File::get($file));
            //------------------------------------------------
    
            $usu = UsuariosModel::create(array(
                'nombre'=>$request->input('nombre'),
                'primer_apellido'=>$request->input('primer_apellido'),
                'segundo_apellido'=>$request->input('segundo_apellido'),
                'telefono'=>$request->input('telefono'),
                'email'=>$request->input('email'),
                'pass'=>$request->input('pass'),
    
            ));
    
            return redirect()->route('login');
        }
    
}
