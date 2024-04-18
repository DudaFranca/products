<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    <form action="{{ route('excluir_produto', ['id' => $product->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <label for="">Tem certeza que deseja excluir esse produto?</label> <br>
        <p>{{ $product->name }}</p><br>
        <button>Sim</button>
    </form>
    <a href="/">
        <button>Não</button>
    </a>
</body>
</html>