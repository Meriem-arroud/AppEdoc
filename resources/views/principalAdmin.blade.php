
<!DOCTYPE html>
<html>
 <head>
  <title>Search</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet"  type="text/css" href="/css/affichage.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
<div class="container">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Chercher des fichiers ...." />
     </div>
      <h3>Total du fichiers : <span id="total_records"></span></h3>
<table >
<thead>
<tr>
<th>Nom de fichier</th>
<th>Type</th>
<th>Taille</th>
<th>Département</th>
<th>Date </th>
<th>Modifier </th>
<th>Supprimer</th>
<th>Arrchiver</th>
</tr>
</thead>
       <tbody>
       </tbody>
</table>   
</div>
</body>
@if(Session::has('succes_delete'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_delete')!!}"),{
  button:"OK",
   }
 </script>
  @endif
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_search.search') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});

</script>
