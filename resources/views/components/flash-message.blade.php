@if (session('Sucesso'))
    <div class="container">
        <div class="alert alert-success d-flex align-items-center" role="alert"> 
            <div>{{session('Sucesso')}}</div>
        </div>
    </div>
@endif

@if (session('Excluir'))
    <div class="container">
        <div class="alert alert-danger d-flex align-items-center" role="alert"> 
            <div>{{session('Excluir')}}</div>
        </div>
    </div>
@endif