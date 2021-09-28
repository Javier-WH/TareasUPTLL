<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de Frameworks</title>
    <link rel="shortcut icon" href="{{ asset('IMG/icon.png')}}" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('CSS/bootstrap.css')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/adjust.css')}}">
    <link rel="stylesheet" href="{{ asset('CSS/new.css')}}">

    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('JS/bootstrap.js') }}" defer></script>
    <!-- <script type="text/javascript" src="{{ asset('JS/new.js') }}" defer></script> -->
    <!-- <script src="JS/bootstrap.js" defer></script>
    <script src="JS/new.js" defer></script> -->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('index')}}"><img src="{{ asset('IMG/icon.png')}}" alt="" id="main-icon">Tareas UPTLL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="{{route('index')}}">Lista</a>
        <a class="nav-link" href="{{route('newTask')}}">Nueva Tarea</a>
        <a class="nav-link" href="{{route('credits')}}">Creditos</a>
      </div>
    </div>
  </div>
</nav>







    @yield("content")
    
</body>
</html>