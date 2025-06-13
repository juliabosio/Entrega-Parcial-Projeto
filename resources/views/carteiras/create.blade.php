<x-layouts.app>
<body>
<div class="container">
    <h1>Nova Carteira</h1>
<form action="{{ route('carteiras.store') }}" method="POST" anctype="multipart/form-data">
    <!-- Token CSRF para proteção contra ataques CSRF -->
    @csrf
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
    </div>
    <div class="form-group">
        <label for="total">Saldo:</label>
        <input type="number" name="saldo">
    </div>
    <div class="form-group">
        <label for="total">Imagem:</label>
        <input type="file" name="imagem" accept="image/*">
    </div>
   
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('carteiras.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
</div>
</body>


</x-layouts.app>