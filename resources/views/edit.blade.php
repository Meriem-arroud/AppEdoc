
<h1>updatefile</h1>
<form  action="{{url('updatefile/'.$id->id)}}" method="post" enctype="multipart/form-data">
@csrf
<center><table border="2">
            <tr>
                <td> Nom du document  </td>
                <td ><input type="texte" name="name" value="{{$id->name}}"></td>
            </tr>
        
            <tr>
                <td> Nom de departement : </td>
                <td><select name="depart">
                <option value="{{$id->departement}}" selected disabled hidden>{{$id->departement}}</option>
                    @foreach ($departement as $departe)
                        <option value="{{$departe->name_departement}}" >{{$departe->name_departement}}</option>
                    @endforeach
                </select>
               </td>
            </tr>
            <tr>
                <td> type  </td>
                <td><img src="{{$id->type}}"></td>
            </tr>
            <tr>
                <td> taille  </td>
                <td>{{$id->taille}}</td>
            </tr>

         </table>
 </center>
 <center><button type="submit" class="button">modify</button></center>
</form>
