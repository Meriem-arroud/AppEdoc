<link href="{{ asset('js/app.js') }}" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/styleaddfile.css') }}" rel="stylesheet">
    <script type="text/javascript">
    function Message() {
      msg="it's added ";
      var text1 = document.getElementById('text1');
       text1.innerHTML="your file is added";

       
       text1.style.fontWeight = 'bold';
    text1.style.color="green";
    }
   </script>


<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5" >
<form  action="addfile" method="post"  enctype="multipart/form-data">
<h1 class="text-center">Add File</h1>
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
<button type="submit" onClick="Message()" class="btn btn-success">Add File</button>
<button type="reset" class="btn btn-danger">Cancel</button>
</form>
</div >
</div >
</div >

