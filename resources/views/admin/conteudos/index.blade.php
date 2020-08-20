@extends('adminlte::page')
    
@section('title', 'Painel Administrativo')

@section('content_header')
    <h1>Configurações</h1>
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
            <form action="{{route('conteudos.save')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @method('PUT')
                @csrf 

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Background superior</label>
                    <div class="col-sm-10">
                    <input type="file" name="backgroundSuperior" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Background superior atual:</label>
                    <div class="col-sm-10">
                    <img src="{{URL::to('/').'/'.$conteudo['backgroundSuperior']}}" class="img-fluid">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Texto Destaque Tema</label>
                    <div class="col-sm-10">
                        <input type="text" name="txtDestaqueTema" value="{{$conteudo['txtDestaqueTema']}}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome do Jogo</label>
                    <div class="col-sm-10">
                        <input type="text" name="nomeJogo" value="{{$conteudo['nomeJogo']}}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Frase</label>
                    <div class="col-sm-10">
                        <input type="text" name="frase" value="{{$conteudo['frase']}}" class="form-control" />
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Descrição Formulário</label>
                    <div class="col-sm-10">
                        <input type="text" name="descricao_formulario" value="{{$conteudo['descricao_formulario']}}" class="form-control" />
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