@extends('principal')
@section('secciones')
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Tabla de Usuarios</h5>
    
    <div class="container my-4">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  
  <tbody>
  @foreach($notas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->nombre}}</td>
      <td>{{$item->descripcion}}</td>
      <td></td>
    </tr>
    @endforeach()
    
  </tbody>
</table>
    <!--<a href="admin/users/inicio" class="btn btn-primary">Go somewhere</a>-->
  </div>
</div>


@endsection
