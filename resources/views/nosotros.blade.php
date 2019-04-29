@extends('plantilla')

@section('seccion')
<h1>Nosotros</h1>
<h2>Este es mi equipo de trabajo</h2>


@foreach($equipo as $item)
<a href="{{route('nosotro', $item)}}" class="h4 text-danger">{{$item}}</a><br>
@endforeach

@if(!empty($nombre))


@switch($nombre)


@case($nombre=='Julio')
<h2 class="mt-5">El nombre es {{$nombre}}: </h2>
<p>{{$nombre}} Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dignissimos cupiditate, architecto cum sequi, eligendi magnam quod a tempore, quisquam aperiam corporis consectetur eius ducimus nam quaerat veritatis pariatur. Placeat.</p>

@break

@case($nombre=='Estefannia')
<h2 class="mt-5">El nombre es {{$nombre}}: </h2>
<p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quos perspiciatis hic autem debitis, laboriosam distinctio, delectus obcaecati, aspernatur culpa tempore asperiores sed eligendi dicta at atque. Aut, rerum qui.</p>

@break

@case($nombre=='Eliana')
<h2 class="mt-5">El nombre es {{$nombre}}: </h2>
<p>{{$nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, sequi quia repellendus, itaque sit et quis atque veritatis ab doloribus voluptatem sapiente. Libero ratione sunt nesciunt delectus temporibus placeat! Fuga.</p>

@break


@endswitch
@endif



@endsection

