@extends('home')

@section('titulo','Cadastrar Boletos')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastrar Boleto</div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-10 col-md-offset-1" role="form" action="{{route('boleto.store')}}" method="post">
                            {{ csrf_field() }}

                            <div class="form-group col-md-10{{ $errors->has('nf') ? ' has-error' : '' }}">
                                <label for="nf" class="control-label">Nota Fiscal: </label>

                                <input id="nf" type="text" class="form-control" name="nf" value="{{ old('nf') }}">

                                @if ($errors->has('nf'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('nf') }}</strong>
                                        </span>
                                @endif

                            </div>

                            <div class="form-group col-md-10{{ $errors->has('des') ? ' has-error' : '' }}">
                                <label for="des" class="control-label">Descrição: </label>

                                <input id="des" type="text" class="form-control" name="des" value="{{ old('des') }}" placeholder="Ex: Compra de farinha ">

                                @if ($errors->has('des'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('des') }}</strong>
                                        </span>
                                @endif

                            </div>

                            <div class="form-group col-md-10{{ $errors->has('valor') ? ' has-error' : '' }}">
                                <label for="valor" class="control-label"> Valor: </label>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                    <input id="valor" type="text" class="form-control" name="valor" value="{{ old('valor') }}">
                                </div>
                                @if ($errors->has('valor'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('valor') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <div class="form-group col-md-10{{ $errors->has('data') ? ' has-error' : '' }}">
                                <label for="data" class="control-label">Vencimento: </label>

                                <input id="data" type="date" class="form-control" name="data" value="{{ old('data') }}">

                                @if ($errors->has('data'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('data') }}</strong>
                                        </span>
                                @endif

                            </div>

                            <div class="form-group col-md-10">
                                {!! csrf_field() !!}
                                <button type="submit" class="control-label btn btn-primary">Cadastrar</button>
                                <a class="control-label btn btn-danger" href="{{route('admin')}}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection