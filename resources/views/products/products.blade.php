<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Produtos</title>
</head>
<body>
    <!-- Pega pelo nome da rota ->name('nome_da_rota') -->
    <div class="container mt-5">
        <h1 class="text-center">Produtos</h1>
        <a href="{{ route('create') }}" class="add text-align btn btn-primary mb-3">Adicionar Produto</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Custo</td>
                    <td>Preço</td>
                    <td>Quantidade</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @if ($products)
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>
                                {{ $product->cost }}
                            </td>
                            <td>
                                {{ $product->price }}
                            </td>
                            <td>
                                {{ $product->quantity }}
                            </td>
                            <td>
                                <a class="edit" href="produtos/editar/{{$product->id}}"><i class="fa fa-pencil-alt"></i></a>
                                <a class="delete" href="produtos/excluir/{{$product->id}}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>Nenhum produto encontrado.</p>
                @endif
            </tbody>
        </table>
    </div>
</body>
</html>