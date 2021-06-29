@extends('layouts.app')

@section('content')
<div class="container">
   <h2>Lista de usuarios registrados <a href="usuarios/create"> <button type="button" class="btn btn-success float-right">Agregar usuario</button></a></h2>
    <h6>
      @if($search)
        <div class="alert alert-primary" role="alert">
          Resultados de la búsqueda '{{$search}}' son: 
        </div>
      @endif
    </h6>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo</th>
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
          <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            <form action="{{route('usuarios.destroy',$user->id)}}" method="POST">
              <a href="{{route('usuarios.show',$user->id)}}"><button type="button" class="btn btn-primary">Ver</button></a>
              <a href="{{route('usuarios.edit',$user->id)}}"><button type="button" class="btn btn-secondary">Editar</button></a>
                @csrf
                @method('DELETE')
              <button type="submit" class="btn btn-warning">Eliminar</button>
            </form>
          </td>
          </tr>
      @endforeach
    </tbody>
  </table>
  <div class="row">
    <div class="mx-auto">
      {{$users->links()}}
    </div>
  </div>
</div>
@endsection