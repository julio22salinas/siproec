@extends('principal')
@section('secciones')

<div class="card" style="width:100%">
  
  <div class="card-body">
    <h5 class="card-title">Iniciar Sesion
</h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>

    <div class="container my-4">
{!! Form::open(['route'=>['users.show', $user],'method'=>'get'])!!}

    <div class="form-group">
    {!!Form::label('id','Usuario')!!}
    {!!Form::text('id', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su ID','required'] )!!}
    </div>
<div class="form-group">
    {!!Form::label('password','Contraseña')!!}
    {!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'*************','required'])!!}
    </div>
    {!!Form::submit('INICIAR',['class'=>'btn btn-primary'])!!}

{!! Form::close()!!}
</div>
</div>

@endsection
