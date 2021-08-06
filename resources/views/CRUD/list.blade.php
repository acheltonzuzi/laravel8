<h1>Todos Membros({{$contador}})</h1>
<table border=1>
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Senha</td>
        <td>Operação</td>
    </tr>
    @foreach ($dados as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td> 
        <td>{{$item->password}}</td>
        <td>
            <a href="/deletar/{{$item->id}}" style="color: red">Deletar</a>
            <a href="/editar/{{$item->id}}" style="color: green">Editar</a>
            <a href="/detalhe/{{$item->id}}" style="color: indigo">Detalhe</a>
        </td>
    </tr>
    @endforeach
</table>
<a href="/cadTemplate">Add Usuario</a>
<span>
    {{$dados->links()}}
</span>

<style>
    .w-5{
        display: none;
    }
</style>