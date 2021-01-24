@extends('layouts.app')
@section('menu')
    <ul class="nav nav-tabs" id="tabGeral" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tabGeral" role="tab" aria-controls="tabCadastros" aria-selected="true">Geral</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tabCadastros" role="tab" aria-controls="tabCadastros" aria-selected="false">Cadastros</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tabAndamentos" role="tab" aria-controls="tabAndamentos" aria-selected="false">Acompanhamento</a>
        </li>
    </ul>
    <div class="tab-content" id="tabConteudo">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Sem conteudo</div>
        <div class="tab-pane fade" id="tabCadastros" role="tabpanel" aria-labelledby="profile-tab">Sem conteudo</div>
        <div class="tab-pane fade" id="tabAndamentos" role="tabpanel" aria-labelledby="contact-tab">Sem conteudo</div>
    </div>
@endsection
