<h1>Editar Dados</h1>
<form action="/update" method="post">
    @csrf
    <input type="hidden" value="{{$dados->id}}" name="id">
    <input type="text" placeholder="escreva seu nome" name="nome" value="{{$dados->name}}"><p></p>
    <input type="text" placeholder="escreva seu email" name="email"value="{{$dados->email}}"><p></p>
    <input type="password" placeholder="escreva sua senha" name="senha" value="{{$dados->password}}"><p></p>
    <button>Actualizar</button><p></p>
    <a href="/showAll">ver todos</a>
</form>