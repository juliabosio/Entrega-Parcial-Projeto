<x-layouts.app :title="__('Minhas formas de pagamento')">
    <head>
      <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <div class="container">
        <div class="header">
            <h1>Minhas formas de pagamento</h1>
            <a href="{{ route('pagamentos.create') }}" class="btn">+ Nova forma de pagamento</a>
        </div>

        @if ($pagamentos->isEmpty())
            <p>Nenhuma forma de pagamento cadastrada.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pagamentos as $pagamento)
                        <tr>
                            <td>{{ $pagamento->nome }}</td>
                            <td>
                                {{ Str::limit($pagamento->descricao, 80) }}
                            </td>
                            <td>
                                <a href="{{ route('pagamentos.show', $pagamento) }}" class="link blue">Ver</a>
                                <a href="{{ route('pagamentos.edit', $pagamento) }}" class="link yellow">Editar</a>
                                <form action="{{ route('pagamentos.destroy', $pagamento) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="button"
                                        class="btn-excluir link red"
                                        data-nome="{{ $pagamento->nome }}">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layouts.app>
