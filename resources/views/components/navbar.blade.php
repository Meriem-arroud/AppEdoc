@php
use \App\Http\Controllers\UserController;
@endphp
<div>
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
</div>