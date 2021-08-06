<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>HOME</title>
</head>
<body>
    <div>
        <button>Entrar</button>
        <button>Sair</button>
    </div>
    @foreach($lista as $li)
        <p>{{$li}}</p><br>
    @endforeach
    
</body>
</html>