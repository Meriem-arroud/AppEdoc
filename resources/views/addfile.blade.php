<x-barre-navig />

<link rel="stylesheet"  type="text/css" href="/css/affichage.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  
   <!-- Fontawesome -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
 @if(Session::has('succes_add'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_add')!!}"),{
  button:"OK",
   }
 </script>
  @endif
<style>

h1{
  margin-top:20px;
  margin-bottom:30px;
  margin-right:50px;
  color:#FF7F41FF;
}

.btn-success{
border-color:#FF7F41FF;
  background-color:#FF7F41FF;
}
.btn-outline-dark{
  border-color:#DCDCDC;
  background-color:#DCDCDC;
}
.size{
  font-size:16px;
  color: #302e4d;
}
</style>

<div class="section-title">
          <h2>Ajouter document </h2>
        </div>

<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5" >
<form  action="addfile" method="post"  enctype="multipart/form-data">

@csrf

  
<div class="input-group mb-3">
  
<div class="custom-file">
    <input type="file" name="fichier"  class="custom-file-input" id="inputGroupFile03">
    <label class="custom-file-label" for="inputGroupFile03">Choisisssez un document</label>
  </div>
</div>
<div class="form-group">
<select class="form-control form-control-lg size"  name="depart">
<option class="size" selected>Sélectionnez un département</option>
  @foreach ($departement as $departe)
<option class="size" value="{{$departe->name_departement}}">{{$departe->name_departement}}</option>
@endforeach
</select></div>
<div class="form-group">
<select class="form-control form-control-lg size" name="type">
<option class="size" selected>Sélectionnez un type du document</option>
  @foreach ($type as $tp)
<option class="size" value="{{$tp->type}}">{{$tp->type}}</option>
@endforeach
</select></div>
<div id="text1"></div>
<button type="submit"  class="btn btn-success">Ajouter</button>

<button type="reset" class="btn btn-outline-dark">Annuler</button>
</form>
</div >
</div >
</div >
</body>
 @if(Session::has('succes_added'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_added')!!}"),{
  button:"OK",
   }
 </script>
  @endif
<div style="height:10px"></div>
<x-services/>   

<x-smallfooter />