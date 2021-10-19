<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
    //Listado de Usuario parte 2 del video
    public function list(){
        $data['users'] = Usuario::paginate(3);

         return view('usuarios.list', $data);

    }

>>>>>>> 19168f4 (primer commit listar)
>>>>>>> 7143f45 (commit listar)
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
<<<<<<< HEAD
      
=======
<<<<<<< HEAD
      
=======

>>>>>>> 19168f4 (primer commit listar)
>>>>>>> 7143f45 (commit listar)
    $userdata = request()->except('_token');
     Usuario::insert($userdata);

        return back()->with('usuarioGuardado','Usuario Guardado');
<<<<<<< HEAD
       
    }
}
=======
<<<<<<< HEAD
       
    }
}
=======

    }
}
>>>>>>> 19168f4 (primer commit listar)
>>>>>>> 7143f45 (commit listar)
