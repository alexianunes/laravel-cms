@extends('adminlte::page')
    
@section('title', 'Painel Administrativo')

@section('content_header')
    <h1>Personagens</h1>
    <a href="{{ route('characters.create') }}" class="btn btn-sm btn-success">Novo Personagem </a>
@endsection

@section('content')

    @if(session('warning'))
            <div class="alert alert-success">
                {{session('warning')}}
            </div>
    @endif

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr>
                        <th scope="row">{{$character->id}}</th>
                        <td>{{$character->descricao}}</td>
                        <td>
                            <a href="{{route('characters.edit', ['character' => $character->id])}}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('characters.destroy', ['character' => $character->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Remover</button>
                           </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


{{$characters->links()}}

@endsection