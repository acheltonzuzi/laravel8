<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Detalhe</title>
</head>
<body>
    <a href="/showAll">Ver Todos</a>
    <main>
        <div class="foto">
            <p>Foto</p>
        </div>
        <div class="dados">
            <p>{{$dados->id}}</p>
            <p>{{$dados->name}}</p>
            <p>{{$dados->email}}</p>
            
        </div>
    </main>
    
</body>
</html>