
<!DOCTYPE html>
<html>
 <head> <!-- Style -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="/css/admin.css" rel="stylesheet">
  <link rel="stylesheet"  type="text/css" href="/css/designe.css"/>
   <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
 </head>
 <body>
  <!--Navbar-->
  <x-navbar />
   <!--Sidebar-->
   <x-sidebar />
  <!--Main content-->
  <div class="mainContent">
        <div class="title padding-15">
            <h2>Ajouter document</h2>
        </div>
        <!--section-->
   <section class="section">
<form action="addfileAdmin" method="post" enctype="multipart/form-data">
@csrf
<div class="container"> 
   <div class="row100">
    <div class="col">
     <div class="inputBox">
     <input type="file" id="file" name="fichier" >
     <span class="text">Choisir un fichier</span>
     <span class="line">
     @error('fichier')
       <center> <span class="form-text text-danger" style="size:40px;color: red;">{{$message}}</span></center>
      @enderror
     </span>
     </div>
    </div>
   </div>
   <div class="row100">
    <div class="col">
     <div class="inputBox">
     <select name="depart">
       @foreach ($departement as $departe)
      <option value="{{$departe->name_departement}}">{{$departe->name_departement}}</option>
       @endforeach
     </select>
     <span class="text">Choisir un département</span>
     <span class="line"></span>
     </div>
    </div>
    </div>
    <div class="row100">
    <div class="col">
     <div class="inputBox">
     <select name="type">
       @foreach ($type as $tp)
         <option value="{{$tp->type}}">{{$tp->type}}</option>
      @endforeach
    </select>
     <span class="text">Choisir un type</span>
     <span class="line"></span>
     </div>
    </div>
    </div>
   <div class="row100">
   <div class="col">
   <input type="submit" value="Ajouter">
   </div>
   </div>
</div>
</section>
</div>
</form>
</div>

 </body>
 @if(Session::has('succes_added'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_added')!!}"),{
  button:"OK",
   }
 </script>
  @endif
 
</html>

