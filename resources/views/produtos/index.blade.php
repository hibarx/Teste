<x-layout title='Produtos'>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;"><b>Produtos em Estoque</b></h1>
        </div>

        @include('components/flash-message')

        <div class="card-body" style="text-align: center;">
            <a href="{{route('Teste.create')}}"><button type="buttom" class="btn btn-success">Cadastrar Produto</button></a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Imagem do Produto</th>
                            <th>Nome do Produto</th>
                            <th>Preço</th>
                            <th>CEP</th>
                            <th>Editar Produto</th>
                            <th>Excluir Produto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{$produto->id}}</td>
                                <td><img src="{{$produto->imagem_produto}}" style="max-width:50px;max-height:50px;width: auto;height: auto;"></td>
                                <td>{{$produto->nome_produto}}</td>
                                <td>{{$produto->preco_produto}}</td>
                                <td>{{$produto->cep}}</td>
                                <td><a href="{{route('Teste.edit', $produto->id)}}"><button type="buttom" class="btn btn-primary">Editar</button></a></td>
                                <td>
                                    <form action="{{route('Teste.destroy', $produto->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</x-layout>