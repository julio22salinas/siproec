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
  
        
    Route::resource('users','UsersController');
   
    Route::get('users/{id}/destroy', [
       'uses' => 'UsersController@destroy',
       'as'   => 'admin.users.destroy'
   ]);
 
  
 
});

//Route::view('about','nosotros')->name('nosotro');
