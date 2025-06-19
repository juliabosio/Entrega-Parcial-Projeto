<x-layouts.app :title="__('Nova carteira')" :dark-mode="auth()->user()->pref_dark_mode">

<style>
    .container {
        max-width: 600px;
        margin: 3rem auto;
        padding: 2rem;
        background: #f9fafb;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.05);
    }

    .container h1 {
        text-align: center;
        font-size: 1.75rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 1.5rem;
    }

    .form-group {
        margin-bottom: 1.25rem;
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #374151;
    }

    .form-group input,
    .form-group textarea {
        padding: 0.75rem 1rem;
        font-size: 1rem;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        color: #111827;
        background: #fff;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59,130,246,0.2);
        outline: none;
    }

    .error {
        color: #dc2626;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
        gap: 1rem;
        margin-top: 2rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        border: none;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s, color 0.3s;
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
</style>


<div class="container">
    <h1 class="form-title">Nova carteira</h1>

    @if ($errors->any())
    <div style="color: red; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('carteiras.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input
                type="text"
                name="nome"
                id="nome"
                value="{{ old('nome') }}"
                required
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
                value="{{ old('saldo') }}"
                required
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
            >
            @error('imagem')
                <span class="error">{{ '' }}</span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('carteiras.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
</x-layouts.app>
