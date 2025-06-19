<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Detalhes da estabelecimento
        
        </h1>

        <div class="card">
            <div class="card-section">
                <h2>Estabelecimento:</h2>
                <p>{{ $estabelecimento->nome }}</p>
            </div>

            <div class="card-section">
                <h2>Cidade:</h2>
                <p>{{ $estabelecimento->cidade ?? '---' }}</p>
            </div>

            <div class="form-actions">
                <a href="{{ route('estabelecimentos.edit', $estabelecimento) }}" class="btn yellow">Editar</a>
                <a href="{{ route('estabelecimentos.index') }}" class="btn gray">Voltar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
