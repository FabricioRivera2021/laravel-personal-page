<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Mensaje desde Laravel 10</h1>
    <p>Nombre: {{$data['name']}}</p>
    <p>Organización {{$data['org']}}</p>
    <p>Email {{$data['email']}}</p>
    <p>Asunto {{$data['subject']}}</p>
    <p>Mensaje {{$data['msg']}}</p>
</body>
</html>