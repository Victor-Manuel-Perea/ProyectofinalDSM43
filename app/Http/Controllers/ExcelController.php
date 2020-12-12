<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\UsuariosModel;

class ExcelController extends Controller{
    //
    public function excel01(Request $request){
        Excel::create('laravel_Excel_01', function($excel) use($request){
            $excel->sheet('Todos', function($sheet) use ($request){
                $usuarios = UsuariosModel::all();
                $sheet->fromArray($usuarios);
            });
        })->export('xls');
    }
    public function excel02( $id){
        $id = array('id'=> $id);
        Excel::create('laravel_Excel_02', function($excel) use($id){
            $excel->sheet('ID Usuario', function($sheet) use ($id){
                $usuarios = UsuariosModel::find($id);
                $sheet->fromArray($usuarios);
            });
        })->export('xls');
    }
    public function excel03(Request $request){
        $buscar =$request->get('buscar');
        $usuarios = UsuariosModel::Buscar($buscar)
            ->orderBy('id_usuario')
            ->get();
        Excel::create('laravel_Excel_03', function($excel) use($usuarios){
            $excel->sheet('nombre', function($sheet) use ($usuarios){
                $sheet->fromArray($usuarios);
            });
        })->export('xls');
   }
}