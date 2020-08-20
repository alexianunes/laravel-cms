@extends('adminlte::page')
    
@section('title', 'Painel Administrativo')

@section('content_header')
    <h1>Atualizar Personagem</h1>
@endsection

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5>Houve um erro ao editar o(s) itens:</h5>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('warning'))
        <div class="alert alert-success">
            {{session('warning')}}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <form action="{{route('characters.update', ['character' => $character->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @method('PUT')
                @csrf 

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Imagem</label>
                    <div class="col-sm-10">
                    <input type="file" name="imagem" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Imagem atual:</label>
                    <div class="col-sm-10">
                    <img src="{{URL::to('/').'/'.$character['imagem']}}" class="img-fluid">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Descrição</label>
                    <div class="col-sm-10">
                        <textarea name="descricao" class="form-control">{{$character['descricao']}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" value="Salvar" class="btn btn-success" />
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection