<h1>welcome here</h1>
Hi{{ session('user')->nom}}
<table border="2">
<tr>
<th>nom</th>
<th>type</th>
<th>taille</th>
<th>département</th>
<th>date </th>
<th>file </th>
<th>plus</th>
</tr>
@foreach($downoald as $down)

<tr>
<td>{{$down->name}}</td>
<td><img src="{{$down->type}}"></td>
<td>{{$down->taille}}</td>
<td>{{$down->departement}}</td>
<td>{{$down->date}}</td>
<!--<td><a href="uploadedfile/{{$down->file}}"><button type="button">downoald</button></a></td>-->
<td><a href="dar/{{$down->file}}">downoald</button></td>
<td>
<a href="files/{{$down->file}}">view</a>
</td>
</tr>
@endforeach
</table>