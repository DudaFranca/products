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
    <title>Editar produto</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Editar produto</h1>
        <form action="{{ route('alterar_produto', ['id' => $product->id]) }}" method="POST">
            @csrf <!-- Gera um token único e temporário -->
            <div class="mb-3">
                <label class="form-label" for="">Nome</label>
                <input class="form-control" type="text" name="name" value="{{ isset($product) ? $product->name : '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Custo</label>
                <input class="form-control" type="text" name="cost" value="{{ isset($product) ? $product->cost : '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Preço</label>
                <input class="form-control" type="text" name="price" value="{{ isset($product) ? $product->price : '' }}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Quantidade</label>
                <input class="form-control" type="text" name="quantity" value="{{ isset($product) ? $product->quantity : '' }}">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>
</html>