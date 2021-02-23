<h1>user page </h1>
<h3>  Hi {{ session('user')->nom}} {{ session('user')->prenom}}</h3>


<td><a href="addfile"><button type="button">add file</button></a></td>
<td><a href="getfile"><button type="button">get file</button></a></td>
<a href="logout" >déconnection</a>
