<h1>Add Member</h1>
<form action="/session" method="post">
    @csrf
    @if (session("nome"))
        {{session("nome")}} cadastrado com sucesso
    @endif
    <input type="text" name="nome" placeholder="escreva seu nome"><p></p>
    <select name="nacionalidade" id="">
        <option value="Angola">Angola</option>
        <option value="Brasil">Brasil</option>
        <option value="Portugal">Portugal</option>
        <option value="Namibia">Namibia</option>
    </select>
    <button>Cadastrar</button>
</form>