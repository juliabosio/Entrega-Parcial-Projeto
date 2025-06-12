<x-layouts.app :title="__('Editar categoria')" :dark-mode="auth()->user()->pref_dark_mode">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Editar categoria</h1>

        <form action="{{ route('categorias.update', $categoria) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="total">Descrição</label>
                <input
                    type="text"
                    name="total"
                    id="total"
                    value="{{ old('total', $categoria->total) }}"
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
                >{{ old('descricao', $categoria->descricao) }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit">Atualizar</button>
                <a href="{{ route('categorias.show', $categoria) }}" class="btn gray">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>