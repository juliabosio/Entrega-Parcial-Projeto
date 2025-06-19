<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Detalhes da forma de pagamento
        
        </h1>

        <div class="card">
            <div class="card-section">
                <h2>Forma de Pagamento:</h2>
                <p>{{ $pagamento->nome }}</p>
            </div>

            <div class="card-section">
                <h2>Descrição:</h2>
                <p>{{ $pagamento->descricao ?? '---' }}</p>
            </div>

            <div class="form-actions">
                <a href="{{ route('pagamentos.edit', $pagamento) }}" class="btn yellow">Editar</a>
                <a href="{{ route('pagamentos.index') }}" class="btn gray">Voltar</a>
            </div>
        </div>
    </div>
</x-layouts.app>
