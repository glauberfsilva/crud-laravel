<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Nomes</title>
</head>
<body>
    <h1>Listagem de Nomes</h1>

    <a href="{{ route('names.create') }}">Adicionar Novo Nome</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        @foreach ($names as $name)
        <tr>
            <td>{{ $name->id }}</td>
            <td>{{ $name->name }}</td>
            <td>
                <a href="{{ route('names.show', $name->id) }}">Visualizar</a>
                <a href="{{ route('names.edit', $name->id) }}">Editar</a>
                <form action="{{ route('names.destroy', $name->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
