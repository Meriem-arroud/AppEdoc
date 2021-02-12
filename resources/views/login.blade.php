<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login Page</h1>

<form action="users" method="POST">
@csrf<!--to protect the app from cross-site requests-->
<span style="color:red">@error('username'){{$message}}@enderror</span><br><br>
<input type="text" name="username" value= "{{old ('username')}}" placeholder="Enter your username"/><br><br>
<span style="color:red">@error('password'){{$message}}@enderror</span><br><br>
<input type="password" name="password" placeholder="Enter your password"/><br><br>
<button type="submit">Login</button>
</form>
    
</body>
</html>
