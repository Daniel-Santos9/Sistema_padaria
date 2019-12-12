@extends('home')

@section('titulo','Controle de Funcionários')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Controle de Funcionários</div>
                    <div class="panel-body">
                        <div class="row col-md-10 col-md-offset-1 custyle">

                            @if(session('inser') == true)
                                <div class="alert alert-success col-md-10 col-md-offset-1">
                                    <strong>Sucesso!</strong>
                                    O Funcionário {{ old("func") }} foi adicionado.
                                </div>
                            @endif

                            @if(session('delete') == true)
                                <div class="alert alert-success col-md-10 col-md-offset-1">
                                    <strong>Sucesso!</strong>
                                    O Funcionário {{ session('nome') }} foi removido.
                                </div>
                            @endif

                            @if(empty($funcio))
                                <div class="alert alert-danger btn-lg col-md-10 col-md-offset-1 danger">
                                    Você não possui nenhum funcionário cadastrado.
                                </div>

                                <a href="{{route('funcionario.create')}}" >
                                    <button type="button" class="btn btn-primary btn-lg btn-create col-md-3 col-md-offset-4">
                                        <span class="glyphicon glyphicon-plus"></span> Funcionários
                                    </button>
                                </a>
                            @else
                                <table class="table table-striped bunitu">
                                    <thead>
                                    <div class="col col-xs-12 text-right">
                                        <a href="{{route('funcionario.create')}}" >
                                            <button type="button" class="btn btn-sm btn-primary btn-create">
                                                <span class="glyphicon glyphicon-plus"></span> Funcionários
                                            </button>
                                        </a>
                                    </div>
                                    <tr>
                                        <th>Funcionário</th>
                                        <th>Cargo</th>
                                        <th>Salário</th>
                                        <th class="text-center">Ação</th>
                                    </tr>
                                    </thead>
                                    @foreach($funcio as $func)
                                        <tr>
                                            <td>{{$func->nome}}</td>
                                            <td> {{$func->cargo->nome}}</td>
                                            <td>{{$func->cargo->sal}}</td>
                                            <td class="text-center">
                                                <a class='btn btn-info btn-xs' href="../editar/funcionario/{{$func->id}}">
                                                    <span class="glyphicon glyphicon-edit"></span> Editar
                                                </a>
                                                <a onclick="return confirm('Deseja excluir esse registro?')" href="../deletar/funcionario/{{$func->id}}" class="btn btn-danger btn-xs">
                                                    <span class="glyphicon glyphicon-remove" ></span> Excluir
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection