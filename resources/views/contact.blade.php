<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action='' method='post' enctype="multipart/form-data">
    @csrf
  Email: <input type="text" name="email" /></br>
  Subject : <input type="text" name="subject" /></br>
  Message : <input type="text" name="message" /></br>
  <input type="file" name="docx"/></br>
  <button type="submit">Envoyee</button>

</form>
</body>
</html>