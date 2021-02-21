@php
use \App\Http\Controllers\UserController;
@endphp
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
     <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/admin.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="logo" height="130"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
        </li>  
        <li style="padding-right:25px" class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">{{UserController::count_notifications()}}</span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a style="color:blue" class="dropdown-item" href="{{route('markRead')}}">Marquer Tout Comme Lu</a></li>
            {{ UserController::notification_list() }}
          </ul>
        </li>
        <li style="padding-right:20px" class="nav-item">
          <a class="nav-link" href="#"> <i style="padding-right:10px" class="fas fa-user-tie"></i>Bonjour Admin</a>
        </li>
        <li class="nav-item">
          <a id="logoutBtn" class="nav-link" href="#"><i style="padding-right:10px" class="fas fa-sign-out-alt"></i>Se déconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- SideBar -->
    <div class="sideBar">
      <!--Navigation bar-->
        <ul class="navig">
            <li><a href="#"><i class="fas fa-home"></i>Accueil</i></a></li>
            <li><a href="#"><i class="fas fa-plus-circle"></i>Ajouter Document</i></a></li>
            <li><a href="#"><i class="fas fa-file-alt"></i>Documents</i></a></li>
            <li><a href="#"><i class="fas fa-users"></i>Employés</i></a></li>
            <li><a href="#"><i class="fas fa-file-archive"></i>Documents Archivés</i></a></li>
        </ul>
      <!--Navigation bar end-->
       <!--Copyright-->
       <div class="copyright">
        Copyright 2021&copy;Developed By SMACeDOC Team
      </div>
      <!--Copyright end-->
<!-- End SideBar -->
   

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    
  </body>
</html>