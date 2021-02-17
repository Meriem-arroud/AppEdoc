<link href="{{ asset('js/app.js') }}" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/styleaddfile.css') }}" rel="stylesheet">
    <script type="text/javascript">
    function Message() {
      msg="it's added ";
      
       
       alert(alertDiv);}
  
   </script>

<h1>addfile</h1>
<<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5" >
<form  action="addfile" method="post"  enctype="multipart/form-data">
<h1 class="text-center">Add File</h1>
@csrf
<div  class="form-group">
  <label for="formFile" class="form-label">input file</label>
  <input class="form-control" type="file"name="fichier" id="formFile">
</div>
<div class="form-group">
<label>departement</label><br>
<select class="form-select" class="form-control" name="depart">
  <option selected> select departement</option>
  @foreach ($departement as $departe)
<option value="{{$departe->name_departement}}">{{$departe->name_departement}}</option>
@endforeach
</select></div>
<div class="form-group">
<label>type</label><br>
<select class="form-select" class="form-control" name="type"aria-label="Default select example">
  <option selected> select type of file</option>
  @foreach ($type as $tp)
<option value="{{$tp->type}}">{{$tp->type}}</option>
@endforeach

</select></div>
<button type="submit" onClick="Message()" class="btn btn-success">Add File</button>
<button type="reset" class="btn btn-danger">Cancel</button>
</form>
</div >
</div >
</div >

