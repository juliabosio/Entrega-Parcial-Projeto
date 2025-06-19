<x-layouts.app>

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

<body>

<div class="container">
    <h1>Nova Forma de pagamento</h1>
<form action="{{ route('pagamentos.store') }}" method="POST">
        <!-- Token CSRF para proteção contra ataques CSRF -->
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao">
    </div>
   
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('pagamentos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>


</x-layouts.app>