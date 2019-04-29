@extends ('principal')
@section('secciones')
<br/>
<div class="card" style="width: 100%">
  <div class="card-body">
    <h5 class="card-title">Lista de Usuarios</h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <table class="table table-responsive table-striped table ">
    <thead class="table table-dark">
    <th>ID</th>
    <th>Documento</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>Rol</th>
    <!--<th>Contraseña</th>-->
    <th>Celular</th>
    <th>Email</th>
    <th>Estado</th>
    <th>Accion</th>
    </thead>

    <tbody >
        @foreach($users as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->doc}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->ape}}</td>
      <td>{{$item->type}}</td>
      <td>{{$item->celular}}</td>
      <td>{{$item->email}}</td>
      
      <td>

        <!--{{$item->estado}}-->
        @if($item->estado == "Habilitado" )
        <span class="progress-bar progress-bar-striped bg-success">{{$item->estado}}</span>
        @else
        <span class="progress-bar progress-b  ar-striped bg-danger">{{$item->estado}}</span>

        @endif()
         
      </td>
      <td>
      <a href="{{route('users.edit', $item->id)}}" ><img src="https://img.icons8.com/color/48/000000/edit.png" height="30" width="30"></a>
      <a href="{{route('admin.users.destroy', $item->id)}}" onclick="return confirm('¿Desea Eliminar Este Registro?')"><img src="https://img.icons8.com/color/48/000000/cancel.png" height="30" width="30"></a>
      </td>
     

    </tr>
        @endforeach()
    </tbody>

</table>

{!! $users -> render() !!}
<a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a>

    
  </div>
</div>



@endsection()