<x-layouts.app :title="__('Editar carteira')" :dark-mode="auth()->user()->pref_dark_mode">
    <style>
        /* Mesmas regras de estilo do create */
        .container {
            max-width: 600px;
            margin: 2rem auto;
            padding: 1rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        input.form-control,
        textarea.form-control {
            padding: 0.5rem;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 6px;
            transition: border-color 0.3s;
        }

        input.form-control:focus,
        textarea.form-control:focus {
            border-color: #3b82f6;
            outline: none;
        }

        .error {
            color: #dc2626;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            border: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }

        .btn-primary:hover {
            background-color: #2563eb;
        }

        .btn-secondary {
            background-color: #e5e7eb;
            color: #374151;
        }

        .btn-secondary:hover {
            background-color: #d1d5db;
        }

        img {
            max-width: 150px;
            border-radius: 8px;
            margin-top: 0.5rem;
        }
    </style>

    <div class="container">
        <h1>Editar carteira</h1>

        <form action="{{ route('carteiras.update', $carteira) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome</label>
                <input
                    type="text"
                    name="nome"
                    id="nome"
                    value="{{ old('nome', $carteira->nome) }}"
                    required
                    class="form-control"
                >
                @error('nome')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="saldo">Saldo</label>
                <input
                    type="number"
                    step="0.01"
                    name="saldo"
                    id="saldo"
                    value="{{ old('saldo', $carteira->saldo) }}"
                    required
                    class="form-control"
                >
                @error('saldo')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="imagem">Imagem (JPEG, PNG, GIF)</label>
                <input
                    type="file"
                    name="imagem"
                    id="imagem"
                    accept="image/*"
                    class="form-control"
                >
                @if($carteira->imagem)
                    <p>Imagem atual:</p>
                    <img src="{{ asset('storage/' . $carteira->imagem) }}" alt="Imagem da carteira">
                @endif
                @error('imagem')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="{{ route('carteiras.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-layouts.app>
