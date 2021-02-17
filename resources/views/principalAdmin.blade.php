<h1>welcome here</h1>
<div >
         <form  action="results" method="get" enctype="multipart/form-data">
         @csrf
         <input  name="text" type="search" placeholder="Search for documents"/>
         <button type="submit">search</button>
         </form>
</div>
<table border="2">
<tr>
<th>nom</th>
<th>type</th>
<th>taille</th>
<th>département</th>
<th>date </th>
<th>update </th>
<th>delete</th>

</tr>
@foreach($downoald as $down)

<tr>
<td>{{$down->name}}</td>
<td><img src="{{$down->type}}"></td>
<td>{{$down->taille}}</td>
<td>{{$down->departement}}</td>
<td>{{$down->date}}</td>
<td><a href="{{url('edit/'.$down->id)}}"><button type="button">modifier</button></a></td>
<td><a href="{{url('delete/'.$down->id)}}"><button type="button">delete</button></a></td>

@endforeach
</table>
