<x-layouts.app :title="__('Editar estabelecimento')" :dark-mode="auth()->user()->pref_dark_mode">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Editar estabelecimento</h1>

        <form action="{{ route('estabelecimentos.update', $estabelecimento) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="total">Descrição</label>
                <input
                    type="text"
                    name="total"
                    id="total"
                    value="{{ old('total', $estabelecimento->total) }}"
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
                >{{ old('descricao', $estabelecimento->descricao) }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit">Atualizar</button>
                <a href="{{ route('estabelecimentos.show', $estabelecimento) }}" class="btn gray">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>