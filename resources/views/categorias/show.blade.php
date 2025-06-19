<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Detalhes da categoria
        
        </h1>

    <div class="card">
        <div class="card-section">
            <h2>Categoria:</h2>
            <p>{{ $categoria->nome }}</p>
            </div>

    <div class="card">
        <div class="card-section">
        <h2>Descrição:</h2>
        <p>{{ $categoria->descricao }}</p>
    </div>


    <div class="card-section">
        <h2>Total:</h2>
        <p>{{ $categoria->total ?? '---' }}</p>
    </div>


            
            <div class="form-actions">
                <a href="{{ route('categorias.edit', $categoria) }}" class="btn yellow">Editar</a>
                <a href="{{ route('categorias.index') }}" class="btn gray">Voltar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
