<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formularios</title>
</head>
<body>
    <form action="pegar" method="post">
        @csrf
        <input type="text" name="nome" placeholder="insere o seu nome"><br><br>
        <input type="password" name="senha" placeholder="insere o seu nome">
        <button type="submit">Entrar</button>
    </form>
    
</body>
</html>