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

Route::get('/', function () { return view('welcome');});
//--------------------proyecto------------
Route::name('index')->get('index/', 'SistemController@index');
Route::name('indexU')->get('indexU/', 'SistemController@indexU');
Route::name('indexA')->get('indexA/', 'SistemController@indexA');
Route::name('about')->get('about/', 'SistemController@about');
Route::name('agent')->get('agent/', 'SistemController@agent');
Route::name('agents')->get('agents/', 'SistemController@agents');
Route::name('blogGrid')->get('blogGrid/', 'SistemController@blogGrid');
Route::name('blogSingle')->get('blogSingle/', 'SistemController@blogSingle');
Route::name('contact')->get('contact/', 'SistemController@contact');
Route::name('contactU')->get('contactU/', 'SistemController@contactU');
Route::name('footer')->get('footer/', 'SistemController@footer');
Route::name('propertyGrid')->get('propertyGrid/', 'SistemController@propertyGrid');
Route::name('propertySingle')->get('propertySingle/', 'SistemController@propertySingle');
Route::name('header')->get('header/', 'SistemController@header');
Route::name('headerU')->get('headerU/', 'SistemController@headerU');
Route::name('headerA')->get('headerA/', 'SistemController@headerA');

Route::name('cliente')->get('cliente/', 'SistemController@cliente');


//Route::name('cliente')->get('cliente/', 'SistemController@cliente');
//Route::name('administrador')->get('administrador/', 'SistemController@administrador');


Route::name('login')->get('login/', 'LoginController@login');
Route::name('validar')->post('validar/', 'LoginController@validar'); 
Route::name('logout')->get('logout/', 'LoginController@logout'); 
//---------------------alta
Route::name('nuevo2')->get('nuevo2/', 'LoginController@nuevo2');
Route::name('guardar1')->post('guardar1/', 'LoginController@guardar1');
//----------------------correo

Route::name('correo')->get('correo/', 'CorreoController@correo'); 
Route::name('enviar1')->get('enviar1/', 'CorreoController@enviar1');
Route::name('enviar2')->post('enviar2/', 'CorreoController@enviar2');


//----------------------------Alta2----------------------------------
Route::name('alta')->get('alta/', 'UsuariosController@alta1');
Route::name('guardar1')->post('guardar1/', 'UsuariosController@guardar1');
//-------------------------------Borrar------------------------------
Route::name('borrar1')->get('borrar1/{id}', 'UsuariosController@borrar1');   //para links metodo get
Route::name('Borrar1')->delete('borrar1/{id}', 'UsuariosController@borrar1');   //para formulario es un metodo delet


//---------------------------modificar2--------------------------------
Route::name('editar')->get('editar/{id}', 'UsuariosController@editar1');         //vista de editar
Route::name('salvar1')->put('salvar1/{id}', 'UsuariosController@salvar1');        
Route::name('detalle')->get('detalle/{id}', 'UsuariosController@perfil1');
Route::name('home')->get('home/', 'UsuariosController@home1');

//------------------productos-----------------
//----------------------------Alta2----------------------------------
Route::name('ProductosAlta')->get('ProductosAlta/', 'ProductosController@ProductosAlta');
Route::name('guardar2')->post('guardar2/', 'ProductosController@guardar2');
//-------------------------------Borrar------------------------------
Route::name('borrar')->get('borrar/{id}', 'ProductosController@borrar');   //para links metodo get
Route::name('Borrar')->delete('borrar/{id}', 'ProductosController@borrar');   //para formulario es un metodo delet

//----------------------------modificar----------------------------------
Route::name('Productoseditar')->get('Productoseditar/{id}', 'ProductosController@Productoseditar');         //vista de editar
Route::name('salvar2')->put('salvar2/{id}', 'ProductosController@salvar2');        
Route::name('profil')->get('profil/{id}', 'ProductosController@perfil');
Route::name('Productoshome')->get('Productoshome/', 'ProductosController@Productoshome');

Route::name('reporte')->get('reporte/', 'UsuariosController@reporte');
Route::name('excel01')->get('excel01/', 'ExcelController@excel01');
Route::name('excel02')->get('excel02/', 'ExcelController@excel02');
Route::name('excel03')->get('excel03/', 'ExcelController@excel03');