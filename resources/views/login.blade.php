<h1>Login page</h1>

<html >
<head>
    <meta charset="utf-8">

   
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<script type="text/javascript">
function myFunction() {

  var collection = document.getElementById('email');
  var collection1 = document.getElementById('pass');
  var text1 = document.getElementById('text1');
text1.innerHTML="";

collection.style.backgroundImage='url()';
collection1.style.backgroundImage='url()';
    collection.style.borderColor="white" ;
    collection1.style.borderColor="white" ;

}
</script>

<div class="container">
<div class="row">
<div class="col-sm-6 col-sm-offset-4">
<form action="/login" method="post" >
@csrf
  <div class="form-group" id="form">
    <label>Email address</label>
    <input type="email" class="form-control"  onkeypress="myFunction()" id="email" name="email"  placeholder="j.doe@gmail.com" >

  </div>
  <div class="form-group" id="form1">
    <label >Password</label>
    <input type="password" class="form-control"   id="pass"  name="pass"  placeholder="Password" required>
   
  </div> 
  <div id="text1"></div>
  <button type="submit" class="btn btn-primary ">Sign in</button>&nbsp&nbsp&nbsp
<button type="reset" class="btn btn-default ">Cancel</button>
</form>
</div>
</div>
<div>

@if(isset($status)  && $status == 'error')

<script type="text/javascript">


    var form=document.getElementById('form')
    var form1=document.getElementById('form1')
  
    var text1=document.getElementById('text1');
    
     text1.innerHTML="your emain or pass";
    text1.style.color="#ff0000";
    form.classList.add('invalid');
    form1.classList.add('invalid');
  

    </script>
   
   
@endif

</body>
</html>