<?php

namespace App\Http\Controllers;


use App\Models\Rol;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    //Listado de Usuario
    public function list(){
        $users = DB::table('usuarios')

            ->join('rol', 'usuarios.rol_id', '=', 'rol.id_rol')
            ->select('usuarios.*', 'rol.descripcion')
            ->paginate(5);


        return view('usuarios.list', compact('users'));

    }

    //Formulario de usuarios
    public function userform(){
        $rol = Rol::all();
        return view('usuarios.userform', compact('rol'));
    }

    //Guardar usuarios
   public function save(Request $request){
        /* Validamos los campos */
        $validator = $this->validate($request, [
            'imagen'=> 'required',
            'nombre'=> 'required|string|max:75',
            'email'=> 'required|string|max:45|email|unique:usuarios',
            'rol'=> 'required'

        ]);
       if($request->hasFile('imagen')){
           $validator['imagen'] = $request-> file('imagen')->store('imagen','public');

                }
        /* Guardamos en la Base de datos */
        Usuario::create([
            'imagen' =>$validator['imagen'],
            'nombre'=>$validator['nombre'],
            'email'=>$validator['email'],
            'rol_id'=>$validator['rol']
        ]);
      // return redirect('/')->with('guardar', 'ok');
        return back()->with('usuarioGuardado','Usuario Guardado');
    }

    //Eliminar Usuarios
    public function delete($id){
        Usuario::destroy($id);

        return back()->with('usuUarioEliminado','Usuario Eliminado');
    }

    //Formulario para editar Usuarios
    public function editform($id){
         $rol = Rol::all();
        $usuario=Usuario::findorFail($id);

        return view('usuarios.editform', compact('usuario', 'rol'));
    }

    //Edicion de usuarios
    public function edit(Request $request,$id){
        $datosUsuario = request()->except((['_token', '_method']));

        if($request->hasFile('imagen')){

            $usuario = Usuario::findOrFail($id);
            Storage::delete('public/'.$usuario->imagen);
            $datosUsuario ['imagen'] = $request-> file('imagen')->store('imagen','public');
        };


        Usuario::where('id', '=', $id)->update($datosUsuario);

        return back()->with('usuarioModificado', 'Usuario modificado');
    }


}
