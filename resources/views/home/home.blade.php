@extends('layouts.app')

@section('titulo-pagina')
    <h1>Lista de senhas</h1>
@endsection

@section('content')
    <div class="row">
        <div class="container">
            <button class="btn  btn-primary float-right mb-1" onclick="window.location='{{ URL::route('senha.create') }}'">Nova senha</button>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Nivel de segurança</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Cartão Caixa</td>
                    <td>http://127.0.0.1:8000/home#</td>
                    <td>(badge nivel)</td>
                    <td>(select)</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Cartão Nubank</td>
                    <td>http://127.0.0.1:8000/home#</td>
                    <td>(badge nivel)</td>
                    <td>(select)</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Senha email</td>
                    <td>http://127.0.0.1:8000/home#</td>
                    <td>(badge nivel)</td>
                    <td>(select)</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}

{{--<script src="home/home.js"></script>--}}
