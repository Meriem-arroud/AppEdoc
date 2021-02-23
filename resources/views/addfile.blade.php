<x-header />

<link rel="stylesheet"  type="text/css" href="/css/affichage.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
  
   <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
<script type="text/javascript">
    
   </script>
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
    <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
  </div>
</div>
<div class="form-group">
<select class="form-control form-control-lg"  name="depart">
<option selected> select departement</option>
  @foreach ($departement as $departe)
<option value="{{$departe->name_departement}}">{{$departe->name_departement}}</option>
@endforeach

</select></div>

<div class="form-group">
<select class="form-control form-control-lg" name="type">
<option selected> select type of file</option>
  @foreach ($type as $tp)
<option value="{{$tp->type}}">{{$tp->type}}</option>
@endforeach




</select></div>
<div id="text1"></div>
<button type="submit"  class="btn btn-success">Add File</button>

<button type="reset" class="btn btn-outline-dark">Cancel</button>
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
 
<x-footer />