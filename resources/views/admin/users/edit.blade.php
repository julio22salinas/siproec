@extends ('principal')

@section('seccion1','Editar a: '.$user->name." ".$user->ape)
<br/>


@section('seccion_edit')
<div class="card" style="width: 100%">
  <div class="card-body">
    <h5 class="card-title">Editar Usuarios</a></h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
<br/>


{!! Form::open(['route'=>['users.update',$user],'method'=>'PUT'])!!}

    <div class="form-group">
    {!!Form::label('doc','Documento')!!}
    {!!Form::text('doc', $user->doc, ['class'=>'form-control', 'placeholder'=>'Numero de Documento','required'] )!!}
    </div>
    <div class="form-group"> 
    {!!Form::label('name','Nombres')!!}
    {!!Form::text('name',$user->name, ['class'=>'form-control', 'placeholder'=>'Nombres','required'])!!}
    </div>
    <div class="form-group">
    {!!Form::label('ape','Apellidos')!!}
    {!!Form::text('ape',$user->ape, ['class'=>'form-control', 'placeholder'=>'apellidos','required'])!!}
    </div>

    <div class="form-group"> 
    {!!Form::label('type','Rol')!!}
    {!! Form::select('type',[''=>'Seleccione Rol','Participante' => 'Participante', 'CoordinadorSem' => 'Coordinador de Seminarios', 'CoordinadorRec'=>'Coordinador de Recursos'],$user->type, ['class'=>'form-control']) !!} 

    </div>
    
    <div class="form-group"> 
    {!!Form::label('celular','Celular')!!}
    {!!Form::number('celular',$user->celular, ['class'=>'form-control', 'placeholder'=>'Numero de celular','required'])!!}
    </div>
    <div class="form-group"> 
    {!!Form::label('email','Email')!!}
    {!!Form::text('email',$user->email, ['class'=>'form-control', 'placeholder'=>'Ingrese su email','required'])!!}
    </div>
    <div class="form-group">
    {!!Form::label('estado','Estado')!!}
    {!! Form::select('estado',[''=>'Seleccione Estado','Habilitado' => 'Habilitado', 'Deshabilitado' => 'Deshabilitado'],$user->estado, ['class'=>'form-control']) !!}
    </div>
    {!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}


{!! Form::close()!!}
</div>
</div>

@endsection()
