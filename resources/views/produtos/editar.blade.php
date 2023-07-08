<x-layout title='Editar Produto'>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;"><b>Editar Produto em Estoque</b></h1>
        </div>
        <div class="card-body">
            <form action="{{route('Teste.update', $Teste->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="input-group mb-3">
                    
                </div>
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Imagem do Produto</span>
                    <input type="text" class="form-control" name="imagem_produto" id="imagem_produto" value="{{$Teste->imagem_produto}}" maxlength="255" required>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome do Produto</span>
                            <input type="text" class="form-control" name="nome_produto" id="nome_produto" value="{{$Teste->nome_produto}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">R$</span>
                            <input type="text" class="form-control" name="preco_produto" id="preco_produto" value="{{$Teste->preco_produto}}" required>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">CEP do Galpão</span>
                            <input type="text" class="form-control" name="cep" id="cep" value="{{$Teste->cep}}" onblur="pesquisacep(this.value);" maxlength="9" placeholder="Insira o CEP do galpão do produto." required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Endereço</span>
                            <input type="text" class="form-control" name="endereco-p" id="endereco-p"  disabled="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Bairro</span>
                            <input type="text" class="form-control" name="bairro-p" id="bairro-p"  disabled="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Cidade</span>
                            <input type="text" class="form-control" name="cidade-p" id="cidade-p"  disabled="">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Editar Produto</button>
            </form>
            <br>
            <a href="{{route('Teste.index')}}"><button type="buttom" class="btn btn-warning">Voltar</button></a>
        </div>
    </div>
</div>

</x-layout>