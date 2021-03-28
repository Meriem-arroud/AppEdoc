<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMAC-e-DOC</title>
    <link rel="shortcute icon" type="image/png" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&amp;display=swap"/>
    </noscript>
    <link href="/css/main2.css?ver=1.2.0" rel="stylesheet">
    <link href="/css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="/css/main.css?ver=1.2.0" rel="stylesheet">
    <!--============For live search==============================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--============For table==============================-->
	<link rel="stylesheet" type="text/css" href="/tabledesign/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="/tabledesign/maintable.css">
     <!-- Style -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
    <noscript>
      <style>
        .tf-header {
          background: url('/images/1-hero-image.jpg') no-repeat center center;
        }
      </style>
    </noscript>
    <style>
         .navbar{
            margin-bottom:50px
        }
        #logoutBtn{
        margin-left:150px;
        padding: 10px;
        border: 2px solid #ff7f41;
        border-radius: 50px;
        background-color: #ff7f41;
        color: #fff;
        }
        #logoutBtn:hover{
        background-color: #fff;
        color: #ff7f41;
        }
    </style>
  </head>
  <body id="top"> 
   <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="logo" width="100px" height="100px"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
      <li style="padding-right:20px" class="nav-item">
          <a class="nav-link" href="/home"> <i style="padding-right:10px" class="fas fa-home"></i>Accueil</a>
        </li>
        <li style="padding-right:20px" class="nav-item">
          <a class="nav-link" href="#"> <i style="padding-right:10px" class="fas fa-user-tie"></i>Bonjour {{ session('user')->nom}} {{ session('user')->prenom}}</a>
        </li>
        <li class="nav-item">
          <a id="logoutBtn" class="nav-link" href="logout"><i style="padding-right:20px" class="fas fa-sign-out-alt"></i>Se déconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->
    

 