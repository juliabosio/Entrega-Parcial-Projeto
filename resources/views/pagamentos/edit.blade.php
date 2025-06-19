<x-layouts.app :title="__('Editar forma de pagamento')" :dark-mode="auth()->user()->pref_dark_mode">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <h1>Editar forma de pagamento</h1>

        <form action="{{ route('pagamentos.update', $pagamento) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome</label>
                <input
                    type="text"
                    name="nome"
                    id="nome"
                    value="{{ old('nome', $pagamento->nome) }}"
                    required
                >
                @error('nome') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input
                    type="text"
                    name="descricao"
                    id="descricao"
                    value="{{ old('descricao', $pagamento->descricao) }}"
                    required
                >
                @error('descricao') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-actions">
                <button type="submit">Atualizar</button>
                <a href="{{ route('pagamentos.show', $pagamento) }}" class="btn gray">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>
