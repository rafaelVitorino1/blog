@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - EDITAR</div>

                <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form method="POST" action="{{ url('/postagem/' . $postagem->id . '/edit') }}">
                        @csrf
                        @method('PUT')

                        <label for="fname">Categoria:</label><br>
                        <select class="form-control" name="categoria_id">

                            @foreach($categorias as $value)

                                @if($postagem->categoria_id === $value->id)
                                    <option selected value={{ $value->id }}>{{ $value->nome }}</option>
                                @else
                                    <option value={{ $value->id }}>{{ $value->nome }}</option>
                                @endif

                            @endforeach

                          </select>

                          <br><br>

                        <label for="fname">Titulo:</label><br>
                        <input type="text" class="form-control" value="{{ $postagem->titulo }}" name="titulo"><br><br>

                        <label for="fname">Conteudo:</label><br>
                        <input type="text" class="form-control" value="{{ $postagem->conteudo }}" name="conteudo"><br><br>

                        <input type="submit" class="form-control" value="ENVIAR">

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
