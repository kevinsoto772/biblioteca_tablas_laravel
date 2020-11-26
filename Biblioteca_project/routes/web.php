<?php

use Illuminate\Support\Facades\Route;
use \App\Models\User;
use \App\Models\Role;
use \App\Models\permission;
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::resource('clientes', App\Http\Controllers\clientesController::class);

Route::resource('autors', App\Http\Controllers\autorController::class);

Route::resource('editorials', App\Http\Controllers\editorialController::class);






Route::resource('libros', App\Http\Controllers\librosController::class);

Route::resource('provedores', App\Http\Controllers\provedoresController::class);

Route::resource('pais', App\Http\Controllers\paisController::class);

Route::resource('estados', App\Http\Controllers\estadoController::class);

Route::resource('tiposPrestamos', App\Http\Controllers\tipos_prestamoController::class);

Route::resource('prestamos', App\Http\Controllers\prestamosController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', function (){

/*return permission::create([
'name'=>'list book',
'slug'=>'libros.index',
'descripcion'=>'A user can list permissions',

]);*/
//$user =User::find(1);
//$user->roles()->sync([1,2]);
//return $user->roles;

//$role =Role::find(2);
//$role->permissions()->sync([1,2]);
//return $role->permissions;
});
