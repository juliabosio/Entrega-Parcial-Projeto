<x-layouts.app>
    <head>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Detalhes da carteira</h1>

        <div class="card">
            <div class="card-section">
                <h2>CARTEIRA</h2>
                <p>{{ $carteira->nome ?? $carteira->titulo ?? '-' }}</p>
            </div>

            <div class="card-section">
                <h2>Saldo</h2>
                <p>R$ {{ number_format($carteira->saldo ?? 0, 2, ',', '.') }}</p>
            </div>

            @if (!empty($carteira->imagem))
            <div class="card-section">
                <h2>Imagem</h2>
                <img src="{{ asset('storage/' . $carteira->imagem) }}" alt="Imagem da carteira" style="max-width: 300px;">
            </div>
            @endif

            <div class="form-actions">
                <a href="{{ route('carteiras.edit', $carteira) }}" class="btn yellow">Editar</a>
                <a href="{{ route('carteiras.index') }}" class="btn gray">Voltar</a>
            </div>
        </div>
    </div>
</x-layouts.app>