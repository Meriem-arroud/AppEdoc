<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action='contact' method='post'>
    @csrf
  Email: <input type="text" name="email" /></br>
  Subject : <input type="text" name="subject" /></br>
  Message : <input type="text" name="message" /></br>
  <input type="submit" name="envoyer" />
</form>

</body>
</html>