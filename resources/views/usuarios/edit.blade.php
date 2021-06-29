@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Editar usuario: {{$user->name}}</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
<form action="{{ route('usuarios.update',$user->id) }}" method="POST">
    @method('PATCH')
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Ingresa tu nombre">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Ingresa tu correo">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
        </div>
    </div>
</div>

@endsection