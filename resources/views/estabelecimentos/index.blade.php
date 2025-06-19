
<x-layouts.app :title="__('Meus estabelecimentos')">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <div class="header">
            <h1>Meus estabelecimentos</h1>
            <a href="{{ route('estabelecimentos.create') }}" class="btn">+ Novo estabelecimento</a>
        </div>

    @if ($estabelecimento->isEmpty())
    <p>Nenhum estabelecimento cadastrado.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estabelecimento as $estabelecimento)
                <tr>
                    <td>{{ $estabelecimento->nome }}</td>
                    <td>{{ Str::limit($estabelecimento->cidade, 80) }}</td>
                    <td>
                        <a href="{{ route('estabelecimentos.show', $estabelecimento) }}" class="link blue">Ver</a>
                        <a href="{{ route('estabelecimentos.edit', $estabelecimento) }}" class="link yellow">Editar</a>
                        <form action="{{ route('estabelecimentos.destroy', $estabelecimento) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn-excluir link red" data-nome="{{ $estabelecimento->nome }}">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</x-layouts.app>
