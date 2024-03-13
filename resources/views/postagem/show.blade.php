@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>

                <div class="card-body">

                    <strong>Categoria:</strong>          {{ $postagem->categoria->nome }}<br>
                    <strong>Titulo:</strong>             {{ $postagem->titulo }}<br>
                    <strong>Autor:</strong>              {{ $postagem->user->name }}<br>
                    <strong>Conteudo:</strong>           {{ $postagem->conteudo }}<br>
                    <strong>Criação:</strong>            {{ $postagem->created_at }}<br>
                    <strong>Atualização:</strong>        {{ $postagem->updated_at }}<br>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
