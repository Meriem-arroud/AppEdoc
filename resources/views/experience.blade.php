<html >
<head>
    <meta charset="utf-8">

   
    <link href="{{ asset('js/vue.js') }}" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

<div class="container">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="j.doe@gmail.com">
  </div>
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"   name="pass" placeholder="Password" >
  </div>
  <button type="submit" class="btn btn-primary ">Sign in</button>&nbsp&nbsp&nbsp
<button type="reset" class="btn btn-default ">Cancel</button>


</form>

</div>

</div>
<div>
</body>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>