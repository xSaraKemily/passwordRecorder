@extends('layouts.app')

{{--@section('titulo-pagina')--}}
{{--    <h1>Cadastro</h1>--}}
{{--@endsection--}}

@section('content')
    <div class="row">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <b>Cadastro de senha</b>
                </div>
                <div class="card-body">
                     <form action="">
                         <div class="row">
                             <div class="form-group col-md-6">
                                 <label for="descricao">Descrição</label>
                                 <input type="text" class="form-control" id="senha" name="descricao" placeholder="Descrição">
                             </div>
                             <div class="form-group col-md-6 mt-custom-30">
                                 <div class="input-group mb-3">
                                     <input type="text" class="form-control" placeholder="senha" aria-describedby="button-addon2" id="senha">
                                     <div class="input-group-append">
                                         <button class="btn btn-danger" type="button" id="btnGerarSenha">Gerar senha</button>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </form>
                </div>
            </div>
        </div>
    </div>
@endsection
