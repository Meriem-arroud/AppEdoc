
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet"  type="text/css" href="/css/designe.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <link href="/css/admin.css" rel="stylesheet">
   <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
 </head>
 <body>
  <!--Navbar-->
  <x-navbar />
   <!--Sidebar-->
   <x-sidebar />
<div class="mainContent">
   <section class="section">
<form action="addfile" method="post" enctype="multipart/form-data">
@csrf
<div class="container"> 
<h3>Ajouter un document</h3>
   <div class="row100">
    <div class="col">
     <div class="inputBox">
     <input type="file" id="file" name="fichier" >
     <span class="text">Choisir une département</span>
     <span class="line">
     @error('fichier')
       <center> <small class="form-text text-danger" style="color: red;">{{$message}}</small></center>
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
     <span class="text">Choisir une département</span>
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

 </body>
 @if(Session::has('succes_added'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_added')!!}"),{
  button:"OK",
   }
 </script>
  @endif
</html>

