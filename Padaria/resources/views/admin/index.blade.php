@extends('home')

@section('titulo','Home')

@section('conteudo')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Home Administrador</div>
                        <div class="panel-body">
                            <div class="row azul col-md-2 well-sm center-block">
                                <p class="lead"> <img src="/img/usuario.png" class="center-block"/> </p>
                                <p><a class="btn btn-lg btn-primary center-block" href="{{route('funcionario.create')}}" role="button">Cadastrar Funcionário</a></p>
                            </div>

                            <div class="row azul col-md-2 well-sm center-block">
                                <p class="lead"> <img src="/img/boleto.png" class="center-block"/> </p>
                                <p><a class="btn btn-lg btn-primary center-block" href="{{route('boleto.create')}}" role="button">Cadastrar Boleto</a></p>
                            </div>

                            <div class="row azul col-md-2 well-sm center-block">
                                <p class="lead"> <img src="/img/financa.png" class="center-block"/> </p>
                                <p><a class="btn btn-lg btn-primary center-block" href="{{route('fluxo.create')}}" role="button">Cadastrar Fluxo</a></p>
                            </div>

                            <div class="row azul col-md-2 well-sm center-block">
                                <p class="lead"> <img src="/img/DD1.png" class="center-block"/> </p>
                                <p><a class="btn btn-lg btn-primary center-block" href="{{route('conta.create')}}" role="button">Cadastrar Conta</a></p>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
