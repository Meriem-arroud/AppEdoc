<h1>addfile</h1>
<form  action="addfile" method="post" enctype="multipart/form-data">
@csrf
choisissez fichier: <input type="file" name="fichier" ></br></br>
<!--type: <input type="file" name="type" ></br></br>-->
<select name="depart">
@foreach ($departement as $departe)
<option value="{{$departe->name_departement}}">{{$departe->name_departement}}</option>
@endforeach
</select></br></br>
<select name="type">
@foreach ($type as $tp)
<option value="{{$tp->type}}">{{$tp->type}}</option>
@endforeach
</select></br></br>
<!--<select name="type">
<option value="pdf">PDF</option>
<option value="word">WORD</option>
<option value="ppt">POWER POINT</option>
</select></br></br>
-->


 
<button type="submit">add file</button>
</form>