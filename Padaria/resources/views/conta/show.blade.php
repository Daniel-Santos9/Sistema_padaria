@extends('home')

@section('titulo','Controle de Contas')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Controle de Contas</div>
                    <div class="panel-body">
                        <div class="row col-md-10 col-md-offset-1 custyle">

                            @if(session('inser') == true)
                                <div class="alert alert-success col-md-10 col-md-offset-1">
                                    <strong>Sucesso!</strong>
                                    A conta N° {{ old("nc") }} do {{old("bc")==0 ? "Banco do Brasil" : "Banco do Bradesco"}} foi adicionada.
                                </div>
                            @endif

                            @if(empty($contas))
                                <div class="alert alert-danger btn-lg col-md-10 col-md-offset-1 danger">
                                    Você não possui nenhuma conta cadastrada.
                                </div>

                                <a href="{{route('conta.create')}}" >
                                    <button type="button" class="btn btn-primary btn-lg btn-create col-md-3 col-md-offset-4">
                                        <span class="glyphicon glyphicon-plus"></span> Conta
                                    </button>
                                </a>
                            @else
                                <table class="table table-striped bunitu">
                                    <thead>
                                    <div class="col col-xs-12 text-right">
                                        <a href="{{route('conta.create')}}" >
                                            <button type="button" class="btn btn-sm btn-primary btn-create">
                                                <span class="glyphicon glyphicon-plus"></span> Conta
                                            </button>
                                        </a>
                                    </div>
                                    <tr>
                                        <th>N° da Conta</th>
                                        <th>Tipo</th>
                                        <th>Agência</th>
                                        <th>Banco</th>
                                        <th>Saldo</th>
                                        <th class="text-center">Ação</th>
                                    </tr>
                                    </thead>
                                    @foreach($contas as $conta)
                                        <tr>
                                            <td>{{$conta->numero}}</td>
                                            <td>{{$conta->tipo==0 ? "Corrente" : "Poupança"}}</td>
                                            <td>{{$conta->agencia}} </td>
                                            <td>{{$conta->banco}}</td>
                                            <td>{{$conta->saldo}} </td>
                                            <td class="text-center">
                                                <a class='btn btn-info btn-xs' href="#">
                                                    <span class="glyphicon glyphicon-edit"></span> Editar
                                                </a>
                                                <a onclick="return confirm('Deseja excluir esse registro?')" href="#" class="btn btn-danger btn-xs">
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