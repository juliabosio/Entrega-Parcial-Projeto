<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Detalhes da carteira
        
        </h1>

        <div class="card">
            <div class="card-section">
                <h2>Título:</h2>
                <p>{{ $carteira->titulo }}</p>
            </div>

            <div class="card-section">
                <h2>carteira:</h2>
                <p>{{ $carteira->carteira->nome ?? '-' }}</p>
            </div>

            <div class="card-section">
                <h2>Descrição:</h2>
                <p>{{ $carteira->descricao ?? '---' }}</p>
            </div>

            <div class="form-actions">
                <a href="{{ route('carteiras.edit', $carteira) }}" class="btn yellow">Editar</a>
                <a href="{{ route('carteiras.index') }}" class="btn gray">Voltar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
