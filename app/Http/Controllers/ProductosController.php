<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    //no emplear comandos sql-db

use App\ProductosModel; //diagonal invertida (libreria)se va a copiar el nombre de la clase del modelo

use App\Http\Requests\ValidaRequest; //libreria de validar

class ProductosController extends Controller {

    public function Productoshome() {

        $comp = \DB::select('SELECT * FROM tb_productos');
        //$usus = \DB:: table('tb_productos')->get();
        //$usus = productosModel::all();                //las tres lineas realizan lo mismo

        return view('content.Productoshome')
        ->with(['comp'=> $comp]);
    }
    public function perfil($id){

        $usu = ProductosModel::find($id);
        //$usu = \DB::select('SELECT * FROM tb_productos');

        return view("content.Productosperfil")
        ->with(['usu' => $usu]);
    }

 
    //----------------------------------alta 2 con imgen
    public function ProductosAlta(){
        return view("content.ProductosAlta");
    }
    public function guardar2(Request $request){

        //-----------------para la imgen/archivo----------------
            //Indica los datos del archivo (file)
            $file = $request->file('img');

        //--Obtenemos el nombre del archivo (file)
            $img = $file->getClientOriginalName();
        //$img = $request->file('img')->getClienteOriginalName();

        //--Creamos y obtenemos fecha y hora para el nombre del archivo (file)
            $ldate = date('Ymd_His_');  //Fecha y hora
            $img2 = $ldate . $img;    // nuevo nombre del archivo (file)

        //Indicamos donde queremos almacenar el archivo (file) y con que nombre
            \Storage::disk('local')->put($img2, \File::get($file));
        //------------------------------------------------

        $usu = ProductosModel::create(array(
            'nombre'=>$request->input('nombre'),
            'precio'=>$request->input('precio'),
            'descripcion'=>$request->input('descripcion'),
            'img'=>$img2,
            'id_categoria'=>$request->input('id_categoria'),

        ));

        return redirect()->route('Productoshome');
    }
 
    public function borrar($id){
        $id = ProductosModel::find($id);
           $id->delete();
        return redirect()->route('Productoshome');
        //return view("content.nuevo2");
    }
    //--------------------------------------------------------------------------------
   
    //-----------------------------------modificar 2----------------
    public function Productoseditar(ProductosModel $id){
        return view("content.Productoseditar")
        ->with(['usu' =>$id]);
    }
    public function salvar2(ProductosModel $id, ValidaRequest $request){

        if($request->file('img1') !=''){
        //-----------------para la imgen/archivo----------------
            //Indica los datos del archivo (file)
            $file = $request->file('img1');

        //--Obtenemos el nombre del archivo (file)
            $img = $file->getClientOriginalName();
        //$img = $request->file('img')->getClienteOriginalName();

        //--Creamos y obtenemos fecha y hora para el nombre del archivo (file)
            $ldate = date('Ymd_His_');  //Fecha y hora
            $img2 = $ldate . $img;    // nuevo nombre del archivo (file)

        //Indicamos donde queremos almacenar el archivo (file) y con que nombre
            \Storage::disk('local')->put($img2, \File::get($file));
        //------------------------------------------------
        }
        else{
                $img2 = $request -> img2;
        }
        
        $con = ProductosModel::find($id->id_producto);
            $con -> nombre =$request->input('nombre');
            $con -> precio =$request->input('precio');
            $con -> descripcion =$request->input('descripcion');
            $con -> img =$img2;
        $con-> save();
        
            return redirect()->route('Productoshome',['id' => $id ->id_producto]);
  

    }
}
