<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/adminhome.css" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
  </head>

  <body>
   <!-- Navbar -->
   <x-navbar />
   <!-- Sidebar -->
   <x-sidebar />
   <!-- Main Content -->
   <div class="mainContent">
      <!--Home section-->
      <section class="home section">
                <div class="text">
                  <p>Bienvenue Admin!</p>
                  <p>Commencez à gérer SMAC-e-DOC</p>
                  <p>le coffre-fort numérique professionnel.</p>
                </div>
        </section>
      <!--Home section end-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
