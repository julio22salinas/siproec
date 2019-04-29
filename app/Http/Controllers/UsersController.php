<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //


    public function inicio(){
        //Trayendo datos de la tabla notas usando modelos
        //Metodo que trae todo
        $notas=App\Nota::all();
        return view('welcome', compact('notas'));
    }

    public function diplomado(){
        return view('admin.users.diplomado');
    }

    public function seminarios(){
        return view('admin.users.seminarios');
    }
    public function cursos(){
        return view('admin.users.cursos');
    }

    public function edit($id){
        $user = User::find($id);   
         
        return view('admin.users.edit')->with('user', $user);
            //return view('admin.users.edit');
        }
        
     public function show(){

    }
    
    public function index(){
        //Paginate = metodo que nos permite traer cierta cantidad de usuarios de nuestra db
        $users = User::orderBy('id','ASC')->paginate(4);

        return view('admin.users.index')->with('users',$users);
        

    }



    public function create(){
        return view('admin.users.create');
    }

    public function store(UserRequest $request){
       //indica todo lo que nos trae del formulario 
       //dd($request->all());
       $user = new User($request->all());
       //Encriptando password
       $user->password=bcrypt($request->password);
       //dd('REGISTRO EXITOSO');
       $user -> save();

       Flash::success("Se ha registrado ".$user->name." de forma exitosa");

       return redirect()->route('users.index');
    }

    
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        Flash::error('Se ha eliminado '.$user->name." ".$user->ape.' de forma exitosa');
        return redirect()->route('users.index');

    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user ->fill($request->all());
        //$user -> doc     = $request ->doc;
        //$user -> name    = $request ->name;
        //$user -> ape     = $request ->ape; 
        //$user -> type    = $request ->type;
        //$user -> celular = $request ->celular;
        //$user -> email   = $request ->email;
        //$user -> estado  = $request ->estado;
        $user -> save();
        Flash::success('Se ha actualizado '.$user->name." ".$user->ape.' de forma exitosa');

        return redirect()->route('users.index');

        //dd($user);



    }



    


    

}
