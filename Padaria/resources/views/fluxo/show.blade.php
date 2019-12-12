@extends('home')

@section('titulo','Controle de Fluxos Diários')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Controle de Fluxos Diários</div>
                    <div class="panel-body">
                        <div class="row col-md-10 col-md-offset-1 custyle">

                            @if(session('inser') == true)
                                <div class="alert alert-success col-md-10 col-md-offset-1">
                                    <strong>Sucesso!</strong>
                                    O Fluxo Diário do dia: {{ date_format(new DateTime(old("dia")), "d-m-Y") }} foi adicionado.
                                </div>
                            @endif

                            @if(empty($fluxos))
                                <div class="alert alert-danger btn-lg col-md-10 col-md-offset-1 danger">
                                    Você não possui nenhum fluxo cadastrado.
                                </div>

                                <a href="{{route('fluxo.create')}}" >
                                    <button type="button" class="btn btn-primary btn-lg btn-create col-md-3 col-md-offset-4">
                                        <span class="glyphicon glyphicon-plus"></span> Fluxo-Diário
                                    </button>
                                </a>
                            @else
                                <table class="table table-striped bunitu">
                                    <thead>
                                    <div class="col col-xs-12 text-right">
                                        <a href="{{route('fluxo.create')}}" >
                                            <button type="button" class="btn btn-sm btn-primary btn-create">
                                                <span class="glyphicon glyphicon-plus"></span> Fluxo-Diário
                                            </button>
                                        </a>
                                    </div>
                                    <tr>
                                        <th>Dia</th>
                                        <th>Rendimento</th>
                                        <th>Retira do dia</th>
                                        <th>Total Vendas</th>
                                        <th>Saldo</th>
                                        <th class="text-center">Ação</th>
                                    </tr>
                                    </thead>
                                    @foreach($fluxos as $fluxo)
                                        <tr>
                                            <td>{{date_format(new DateTime($fluxo->dia), "d-m-Y")}}</td>
                                            <td>{{$fluxo->rendimento}}</td>
                                            <td>{{$fluxo->retirada_dia}} </td>
                                            <td>{{$fluxo->total_vendas}}</td>
                                            <td>{{$fluxo->saldo}} </td>
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