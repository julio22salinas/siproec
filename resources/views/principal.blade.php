<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Educont</title>
  <body style="background-color:#F7FCB">
    <div class="container" style="margin:; text-align:right ">
  <div class="page-header" style="background-color:indigo; width:100%; height:100px">
  <button type="button" class="btn btn-default" style="position:right"><img src="https://img.icons8.com/color/48/000000/facebook.png" style="width:35px"></button>
  <button type="button" class="btn btn-default"><img src="https://img.icons8.com/color/48/000000/twitter.png" style="width:35px"></button>
  <button type="button" class="btn btn-default"><img src="https://img.icons8.com/color/48/000000/instagram-new.png" style="width:35px"></button>
</div>
</div>

<div class="container">
 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%; padding:14px">
  <a class="navbar-brand"  href="">SIPROEC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="{{route('users.index')}}">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Universidad</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Prepárate con Nosotros
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('admin.users.diplomado')}}">Diplomado</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('admin.users.seminarios')}}">Seminarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('admin.users.cursos')}}">Cursos de Formación</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="false">Bienestar Universitario</a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">Contáctanos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-1" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go!</button>
    </form>
  </div>
</nav>
</div>

    <div class="container" style="padding:opx; font-family:'Times New Roman', Times, serif" >
    @include('flash::message')
    @yield('secciones')
      <div class="container" style="padding:1px; color:black;font-family:'Times New Roman', Times, serif; font-size:110%; font-weight:900; white-space:pre-line">
        @yield('seccion1')
      </div>
    @yield('seccion_edit')
    </div>
    
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  
</html>
