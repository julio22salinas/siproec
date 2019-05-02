@extends ('principal')
@section('secciones')

<div class="card" style="width: 100%">
  <div class="card-body">
    <h5 class="card-title">Cursos de Formación</h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <table class="table table-responsive table-striped table ">
    <thead class="table table-dark">
    <th>ID_Curso</th>
    <th>Nombre</th>
    <th>ID_Profesor</th>
    <th>Cupos</th>
    <th>Horario</th>
    <th>Salon</th>
    <th>Estado</th>
    <th>Accion</th>
    </thead>

    <tbody >
    @foreach($cursos as $item)
    <tr>
      <th scope="row">{{$item->id_curso}}</th>
      <td>{{$item->name_curso}}</td>
      <td>{{$item->id_profesor}}</td>
      <td>{{$item->cupos_restantes}}</td>
      <td>{{$item->horario}}</td>
      <td>{{$item->salon}}</td>
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
      <a href="{{route('admin.users.eliminarcurso', $item->id)}}" onclick="return confirm('¿Desea Eliminar Este Diplomado?')"><img src="https://img.icons8.com/color/48/000000/cancel.png" height="30" width="30"></a>
      </td>
     

    </tr>
        @endforeach()
    </tbody>

</table>
    
  </div>
</div>



@endsection()