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

//Retornar vistas
Route::get('/', 'UsersController@inicio');
    //informacion controlada por PagesController

Route::group(['prefix'=>'admin'], function(){
    // Route::get('/users/curso','UsersController@curso');
    Route::get('users/diplomado', [
        'uses' => 'UsersController@diplomado',
        'as'   => 'admin.users.diplomado'
    ]);
    Route::get('users/seminarios', [
        'uses' => 'UsersController@seminarios',
        'as'   => 'admin.users.seminarios'
    ]);
    Route::get('users/cursos', [
        'uses' => 'UsersController@cursos',
        'as'   => 'admin.users.cursos'
    ]);
    
    Route::get('users/{id}/eliminardiplo', [
        'uses' => 'UsersController@eliminardiplo',
        'as'   => 'admin.users.eliminardiplo'
    ]);
    Route::get('users/{id}/eliminarcurso', [
        'uses' => 'UsersController@eliminarcurso',
        'as'   => 'admin.users.eliminarcurso'
    ]);
    Route::get('users/{id}/eliminarseminario', [
        'uses' => 'UsersController@eliminarseminario',
        'as'   => 'admin.users.eliminarseminario'
    ]);
        
    Route::resource('users','UsersController');
      
    Route::get('users/{id}/destroy', [
       'uses' => 'UsersController@destroy',
       'as'   => 'admin.users.destroy'
   ]);
  
 
  
 
});

//Route::view('about','nosotros')->name('nosotro');
