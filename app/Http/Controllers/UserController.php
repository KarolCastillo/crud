<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listado de Usuario
    public function list(){
        $data['users'] = Usuario::paginate(3);

        return view('usuarios.list', $data);

    }

    //Formulario de usuarios
    public function userform(){
        return view('usuarios.userform');
    }

    //Guardar usuarios
    public function save(Request $request){

        $validator = $this->validate($request, [
            'nombre'=> 'required|string|max:255',
            'email'=> 'required|string|max:255|email|unique:usuarios'
        ]);

        $userdata = request()->except('_token');
        Usuario::insert($userdata);

        return back()->with('usuarioGuardado','Usuario Guardado');
    }

    //Eliminar Usuarios
    public function delete($id){
        Usuario::destroy($id);

        return back()->with('usuarioEliminado','Usuario Eliminado');
    }
}
