@extends('home')

@section('titulo','Controle de Cheques')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-heading">Controle de Cheques</div>
                    <div class="panel-body">
                        <div class="row col-md-12 col-md-offset-0 custyle">

                            @if(session('inser') == true)
                                <div class="alert alert-success col-md-10 col-md-offset-1">
                                    <strong>Sucesso!</strong>
                                    O Cheque N° {{ old("nc") }} foi adicionado.
                                </div>
                            @endif

                            @if(empty($cheques))
                                <div class="alert alert-danger btn-lg col-md-10 col-md-offset-1 danger">
                                    Você não possui nenhum Cheque cadastrado.
                                </div>

                                <a href="{{route('cheque.create')}}" >
                                    <button type="button" class="btn btn-primary btn-lg btn-create col-md-3 col-md-offset-4">
                                        <span class="glyphicon glyphicon-plus"></span> Cheque
                                    </button>
                                </a>
                            @else
                                <table class="table table-striped bunitu">
                                    <thead>
                                    <div class="col col-xs-12 text-right">
                                        <a href="{{route('cheque.create')}}" >
                                            <button type="button" class="btn btn-sm btn-primary btn-create">
                                                <span class="glyphicon glyphicon-plus"></span> Cheque
                                            </button>
                                        </a>
                                    </div>
                                    <tr >
                                        <th class="text-center">N° do Cheque</th>
                                        <th class="text-center">Valor</th>
                                        <th class="text-center">Vencimento</th>
                                        <th class="text-center">Descrição</th>
                                        <th class="text-center">Status do Vencimento</th>
                                        <th class="text-center">Ação</th>
                                    </tr>
                                    </thead>
                                    @foreach($cheques as $cheque)

                                        @php($diferenca = strtotime($cheque->pagamento->vencimento) - strtotime(date('Y/m/d', strtotime('+0 days'))) )
                                        @php($dias = floor($diferenca / (60 * 60 * 24)) )

                                        @if($dias >=2 and $dias <=10)
                                            @php($classe = "info")
                                            @php($dias = $dias." dias")
                                        @elseif ($dias == 0)
                                            @php($status = 0)
                                            @php($classe = "danger")
                                            @php($dias = "Hoje")
                                        @elseif($dias < 0)
                                            @php($classe = "warning")
                                            @php($dias = "Já venceu")
                                        @else
                                            @php($classe = "")
                                            @php($dias = $dias." dias")
                                        @endif

                                        <tr class="{{$classe}}">
                                            <td class="text-center">{{$cheque->numero}}</td>
                                            <td class="text-center">{{$cheque->pagamento->valor}}</td>
                                            <td class="text-center">{{date_format(new DateTime($cheque->pagamento->vencimento), "d-m-Y")}}</td>
                                            <td class="text-center">{{$cheque->pagamento->descricao}}</td>
                                            <td class="text-center">{{$dias}}</td>
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
                            @if(isset($status))
                                <h4>
                                    <span class=" alert alert-danger  pull-right col-xs-4 well-sm text-center">
                                        <span class="glyphicon glyphicon-alert"> Vencimento(s) do(s) cheque(s) é(são) hoje </span>
                                    </span>
                                </h4>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
