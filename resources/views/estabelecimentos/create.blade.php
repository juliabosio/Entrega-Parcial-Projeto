<x-layouts.app>
<body>
<div class="container">
    <h1>Novo Estabelecimento</h1>
<form action="{{ route('estabelecimentos.store') }}" method="POST">
    <!-- Token CSRF para proteção contra ataques CSRF -->
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="total">Cidade:</label>
        <input type="text" name="cidade">
    </div>
   
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('estabelecimentos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>


</x-layouts.app>