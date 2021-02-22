
<!DOCTYPE html>
<html>
 <head>
  <link rel="stylesheet"  type="text/css" href="/css/affichage.css"/>
  <link rel="stylesheet"  type="text/css" href="/css/designe.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="/css/admin.css" rel="stylesheet">
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
        <!--section-->
        <section class="section">
        <div class="title padding-15">
                <h2>Modifier document</h2>
        </div>
   <section class="section">
<form  action="{{url('updatefile/'.$id->id)}}" method="post" enctype="multipart/form-data">
@csrf
<div class="container"> 
   <div class="row100">
    <div class="col">
     <div class="inputBox">
     <input type="text" name="name" placeholder="saisir un nom..." value="{{$id->name}}">
     <span class="text">Nom du document</span>
     <span class="line">
     @error('name')
          <center><small class="form-text text-danger" style="color: red;">{{$message}}</small></center>
     @enderror
     </span>
     </div>
    </div>
   </div>
   <div class="row100">
    <div class="col">
     <div class="inputBox">
     <select  name="depart">
              @foreach ($departement as $departe)
            <option  value="{{$departe->name_departement}}" {{$departe->name_departement==$id->departement ? 'selected' : ''}} >{{$departe->name_departement}}</option>
              @endforeach
     </select>
     <span class="text">Département</span>
     <span class="line"></span>
     </div>
    </div>
    </div>
    <div class="row100">
    <div class="col">
     <div class="inputBox">
     <select  name="type">
     <option  value="" selected disabled hidden> </option>
              @foreach ($type as $tp)
                    <option value="{{$tp->type}}">{{$tp->type}}</option>
               @endforeach
     </select>
     <span class="text">Type</span>
     <span class="line">
     @error('type')
       <center> <small class="form-text text-danger" style="color: red;">{{$message}}</small></center>
      @enderror
     </span>
     </div>
    </div>
    </div>
   <div class="row100">
   <div class="col">
   <input type="submit" value="modifier">
   </div>
   </div>
</div>
</section>
</div>
</form>
</section>
</div>

 </body>
 @if(Session::has('succes_update'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_update')!!}"),{
  button:"OK",
   }
 </script>
  @endif
  
</html>

