<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
    <h2>Envoyer de la part de  Mme/M :{{ session('user')->nom}} {{ session('user')->prenom}} </h2>
    <h1>Subject: {{$details['subject'] }}</h1>
    <p>{{$details['message']  }}</p>
    <p>Cordialement</br>--</p>
</body>
</html>