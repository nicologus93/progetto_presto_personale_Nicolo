<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Un utente ha chiesto di diventare revisore</h1>
    <h3>{{$user->name}}</h3>
    <p>{{$user->email}}</p>
    <p>{{$messaggio}}</p>
    <p>Se vuoi renderlo revisore clicca qui</p>
    <a href="{{route('make_revisor', compact('user'))}}">Rendi revisore</a>
</body>
</html>