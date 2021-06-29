@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
<form action="/usuarios" method="POST">
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Correo</label>
    <input type="email" class="form-control" name="email" placeholder="Ingresa tu correo">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Cancelar</button>
</form>
        </div>
    </div>
</div>

@endsection