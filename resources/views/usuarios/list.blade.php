@extends('layouts.base')
@section('content')

 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5" > Lista de Usuarios</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form')}}">Agregar Usuario</a>
            <!-- esto es el mensaje flash-->
            @if(session('usuarioEliminado'))
                <div class="alert alert-success">
                    {{ session ('usuarioEliminado')}}
                </div>
            @endif
            <table class="table table-bordered table-striped text-center ">
                <thead >
                  <tr>
                      <th>Foto</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>


                 </tr>
                </thead>

                <tbody class="">
                    @foreach($users as $user)
                    <tr>
                       
                         <td class="border border-secondary" >
                 
                             <img src="{{ asset('imagen').'/'.$user->imagen}}" class="img-fluid img-thumbnail"  width="70px">
                        </td>
                       <td>{{ $user->nombre }}</td>
                       <td>{{ $user->email }}</td>
                        <td>{{$user->descripcion}}</td>
                        <td>
                            <div class="btn-group">
                            <a href = "{{ route ('editform', $user->id) }}">
                                <i class=" fas fa-pencil-alt btn btn-outline-primary mr-3 mb-2"></i>

                            </a>

                            <form action="{{route('delete', $user->id)}}" method="post">
                                @csrf @method('DELETE')

                                <button type="submit" onclick="return confirm('Eliminar Registro de Usuario');" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </button>


                            </form>
                            </div>
                        </td>

                     </tr>
                    @endforeach

                </tbody>

            </table>
            {{ $users->links() }}

        </div>

    </div>
 </div>
@endsection
