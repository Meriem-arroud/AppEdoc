<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des documents archives</title>
     <!-- Style -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="/css/admin.css" rel="stylesheet">
  <link rel="stylesheet"  type="text/css" href="/css/affichage.css"/>
   <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/cbb8fa204a.js" crossorigin="anonymous"></script>
</head>
<body>
     <!--Navbar-->
   <x-navbar />
   <!--Sidebar-->
   <x-sidebar />
  <!--Main content-->
  <div class="mainContent">
        <!--section-->
        <section class="section">
        <div class="title padding-15">
                <h2>Documents archivés</h2>
        </div>
     <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
        <input type="text" name="search" id="search" class="form-control" placeholder="Chercher un document archivé...." aria-label="Username" aria-describedby="addon-wrapping">
     </div>

      <table align="center" style="width:950px" >
      <thead >
      <tr>
      <th>Nom du document</th>
      <th>Type</th>
      <th>Taille</th>
      <th>Département</th>
      <th>Date </th>
      <th>Voir</th>
      <th>Supprimer</th>
      </tr>
      </thead>
            <tbody>
            </tbody>
      </table>
</section>
</div>
<!-- Javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

@if(Session::has('succes_delete'))
 <script>
   swal("Bien fait!","{!! Session::get('succes_delete')!!}"),{
  button:"OK",
   }
 </script>
  @endif
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('SearchArchivedDocs.search') }}",
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>
