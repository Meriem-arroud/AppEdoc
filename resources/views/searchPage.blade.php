<div >
         <form method="get"  action="{{url('results')}}" enctype="multipart/form-data">
         @csrf
         <input  name="text" type="text" placeholder="Search for documents"/>
         <button  name="button_search">search</button>
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
@foreach($documents as $doc)

<tr>
<td>{{$doc->name}}</td>
<td><img src="{{$doc->type}}"></td>
<td>{{$doc->taille}}</td>
<td>{{$doc->departement}}</td>
<td>{{$doc->date}}</td>
<td><a href="{{url('edit/'.$doc->id)}}"><button type="button">modifier</button></a></td>
<td><a href="{{url('delete/'.$doc->id)}}"><button type="button">delete</button></a></td>

@endforeach
</table>
