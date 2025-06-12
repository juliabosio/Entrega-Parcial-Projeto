<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Detalhes da estabelecimento
        
        </h1>

        <div class="card">
            <div class="card-section">
                <h2>Título:</h2>
                <p>{{ $estabelecimento->titulo }}</p>
            </div>

            <div class="card-section">
                <h2>estabelecimento:</h2>
                <p>{{ $estabelecimento->estabelecimento->nome ?? '-' }}</p>
            </div>

            <div class="card-section">
                <h2>Descrição:</h2>
                <p>{{ $estabelecimento->descricao ?? '---' }}</p>
            </div>

            <div class="form-actions">
                <a href="{{ route('estabelecimentos.edit', $estabelecimento) }}" class="btn yellow">Editar</a>
                <a href="{{ route('estabelecimentos.index') }}" class="btn gray">Voltar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
