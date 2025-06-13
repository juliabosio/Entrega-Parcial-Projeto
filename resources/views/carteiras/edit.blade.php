<x-layouts.app :title="__('Editar carteira
')" :dark-mode="auth()->user()->pref_dark_mode">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Editar carteira
            
        </h1>

        <form action="{{ route('carteira
        s.update', $carteira
        ) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="total">Descrição</label>
                <input
                    type="text"
                    name="total"
                    id="total"
                    value="{{ old('total', $carteira
                    ->total) }}"
                    required
                >
                @error('total') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea
                    name="descricao"
                    id="descricao"
                    rows="4"
                >{{ old('descricao', $carteira
                    ->descricao) }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit">Atualizar</button>
                <a href="{{ route('carteira
                s.show', $carteira) }}" class="btn gray">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>