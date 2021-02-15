<form action="/loginadmin" method="post" >
@csrf
  
    <label>Email address</label>
    <input type="email"  name="email"  placeholder="j.doe@gmail.com" >

  
    <label >Password</label>
    <input type="password"   name="pass"  placeholder="Password" >
   
  
  <button type="submit" >Sign in</button>&nbsp&nbsp&nbsp
<button type="reset" c>Cancel</button>
</form>