<!DOCTYPE html>
<html lang="en">
<head>
    <base href="'.BASE_URL.'">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solo Hidraulica</title>
    <link rel="stylesheet" href="{BASE_URL}/style/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<header>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a  class="alogo" href="{BASE_URL}home"><img src="{BASE_URL}/imagenes/logo.png" class="logo" alt="logo"></a>
    <a class="iniciarsesion">Iniciar sesion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENU</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{BASE_URL}home">Home</a>
          </li>
           
            <a class="iniciarsesionmenu">Iniciar sesion</a>
           
          
      <div>
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="{BASE_URL}categoria/Cremalleras">Cremalleras</a></li>
              <li><a class="dropdown-item" href="{BASE_URL}categoria/Bombas">Bombas</a></li>
              <li><a class="dropdown-item" href="{BASE_URL}categoria/Retenes">Retenes</a></li>
              <li><a class="dropdown-item" href="{BASE_URL}categoria/Bujes">Bujes</a></li>
              <li><a class="dropdown-item" href="{BASE_URL}categoria/Extremos">Extremos</a></li>
      </div>
      <a  href="{BASE_URL}iracargarnuevopr"class="iniciarsesionmenu">Cargar un nuevo producto</a>
    </div>
  </div>
</nav>
</header>
    
      