<h1>Login page</h1>
<form action="/login" method="post">
@csrf
<label>Email:<label>
<input type="text" placeholer="enter email" name="email"/></br></br>
<label>password:<label>
<input type="password" placeholer="enter password" name="pass"/></br></br>
<button type="submit">login</button>

</form>