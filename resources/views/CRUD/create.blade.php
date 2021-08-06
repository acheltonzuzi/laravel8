<h1>Cadastrar</h1>
<form action="/save" method="post">
    @csrf
    @if (session("nome"))
        <h3>{{session("nome")}} cadastrado(a) com sucesso!</h3>
    @endif
    <input type="text" placeholder="escreva seu nome" name="nome"><p></p>
    <input type="text" placeholder="escreva seu email" name="email"><p></p>
    <input type="password" placeholder="escreva sua senha" name="senha"><p></p>
    <button>Cadastrar</button><p></p>
    <a href="/showAll">ver todos</a>
</form>