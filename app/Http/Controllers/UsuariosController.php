<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    //no emplear comandos sql-db

use App\UsuariosModel; //diagonal invertida (libreria)se va a copiar el nombre de la clase del modelo

use App\Http\Requests\ValidaRequest; //libreria de validar

class UsuariosController extends Controller {

    public function home1() {

        $comp = \DB::select('SELECT * FROM tb_Usuarios');
        //$usus = \DB:: table('tb_Usuarios')->get();
        //$usus = UsuariosModel::all();                //las tres lineas realizan lo mismo

        return view('content.home')
        ->with(['comp'=> $comp]);
    }
    public function perfil1($id){

        $usu = UsuariosModel::find($id);
        //$usu = \DB::select('SELECT * FROM tb_Usuarios');

        return view("content.perfil")
        ->with(['usu' => $usu]);
    }

    //----------------------------alta-------------------------------------------------------
 //   public function nuevo(){
 //       return view("content.nuevo");
 //   }
 //   public function guardar(ValidaRequest $request){
//
 //       //$validated = $request->validated();
 //        /*
 //       $this->validate($request, [
 //           'matricula' => 'required|min:2|max:10',
 //           'nombre' => 'required|min:3|max:20',
 //           'app' => 'regex:/^[a-z]+$/',
 //           'apm' => 'required',
 //           'fn' => 'required|date',
 //           'gen' => 'required',
 //           'tel' => 'required|umeric',
 //           'img' => 'required',
 //           'email' => 'required',
 //           'pass' => 'required|min:3|max:20',//rango de 8 a 15 que solo asepte _ - @ # y que tenga un numero y una mayuscula no aceptar ñ o 
 //           'grupo' => 'required',
 //           'activo' => 'required'
 //       ]);*/
//
 //       $usu = UsuariosModel::create($request->only( 'matricula','nombre','app','apm',
 //       'fn', 'gen', 'tel','img','email','pass','grupo','activo'));
//
 //       return redirect()->route('layout');
 //   }
    //----------------------------------alta 2 con imgen
    public function alta1(){
        return view("content.alta");
    }
    public function guardar1(Request $request){

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
            'id_tipo_usuario'=>$request->input('id_tipo_usuario')

        ));

        return redirect()->route('home');
    }



 
    public function borrar1($id){
        $id = UsuariosModel::find($id);
           $id->delete();
        return redirect()->route('home');
        //return view("content.nuevo2");
    }
    //--------------------------------------------------------------------------------
    //---------------------------------------modificar1-----------------------------
    /*public function editar(UsuariosModel $id){
        return view('content.editar')
            ->with(['usu' => $usu]);
    }*/
    
    //-----------------------------------modificar 2----------------
    public function editar1($id){
        $usu =  UsuariosModel::find($id);
        return view('content.editar2')
            ->with([ 'usu' => $usu ]);
    } 
    public function salvar1(UsuariosModel $id, Request $request){
    $id->update($request->only('nombre','apellido_paterno','apellido_materno','telefono','email','pass'));

    return redirect()->route('home', ['id' => $id->id_usuario]);
    }

  
    ///------------------------
    public function reporte(Request $request){
        $data = [
            "reporte" => "0",
            "buscar" => "",
        ];
        $usuarios = UsuariosModel::Buscar($request->get('buscar'))
            ->orderBy('id_usuario')
            ->paginate(1);

            if($request->all() !=null){
                $data = [
                    "reporte" => "1",
                    "buscar" => $request->get('buscar')
                ];
            }

        return view("excel.reporte")
            ->with($data)
            ->with(["usus" => $usuarios]);
    }
}




