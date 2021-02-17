
<link href="{{ asset('js/app.js') }}" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


<div class="container">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-5" >
<form action="/login" method="post" >
  <h1>E-Doc</h1>
@csrf
<h3>log your account</h3>


 
<input type="email" class="form-control"  onkeypress="myFunction()" id="email" name="email"  placeholder="j.doe@gmail.com" >
<input type="password" class="form-control"  onkeypress="myFunction()"  id="pass"  name="pass"  placeholder="Password" >
<button type="submit" class="btn btn-primary ">Sign in</button>
 
</form>
</div >
</div >
</div >



