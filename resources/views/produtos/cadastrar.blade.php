<x-layout title='Cadastrar Produtos'>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 style="text-align: center;"><b>Cadastro dos Produtos em Estoque</b></h1>
        </div>
        <div class="card-body">
            <form action="{{route('Teste.store')}}" method="POST">
                @csrf

                <div class="input-group mb-3">
                    
                </div>
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Imagem do Produto</span>
                    <input type="text" class="form-control" name="imagem_produto" id="imagem_produto" placeholder="Insira o link da imagem do produto."  maxlength="255" required>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nome do Produto</span>
                            <input type="text" class="form-control" name="nome_produto" id="nome_produto" placeholder="Insira o nome do produto." required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">R$</span>
                            <input type="text" class="form-control" name="preco_produto" id="preco_produto" placeholder="Insira o preço do produto." required>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">CEP do Galpão</span>
                            <input type="text" class="form-control" name="cep" id="cep" onblur="pesquisacep(this.value);" maxlength="9" placeholder="Insira o CEP do galpão do produto." required>
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

                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </form>
            <br>
            <a href="{{route('Teste.index')}}"><button type="buttom" class="btn btn-warning">Voltar</button></a>
        </div>
    </div>
</div>

</x-layout>