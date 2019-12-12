<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('titulo') </title>

        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/home2.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.modif.css')}}"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <script scr="{{asset('js/Auxiliar.js')}}"></script>
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <![endif]-->
    </head>

    <body>
        <div class="container-fluid well-lg">

            @unless (Auth::guest())
                <header class="row container-fluid">
                    <nav class="navbar navbar-inversed nav-justified well-sm ">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="{{route('admin')}}"><img src="/img/logo.png" class="img-responsive-mod"></a>
                            </div>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href={{route('admin')}}> Home </a></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Cadastro <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href={{route('boleto.create')}}>Boleto</a></li>
                                        <li><a href={{route('cheque.create')}}>Cheque</a></li>
                                        <li><a href={{route('conta.create')}}>Conta Corrente</a></li>
                                        <li><a href={{route('folga.create')}}>Folga</a></li>
                                        <li><a href={{route('fluxo.create')}}>Fluxo-Diário</a></li>
                                        <li><a href={{route('funcionario.create')}}>Funcionário</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Controle <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('boleto.show')}}">Boletos</a></li>
                                        <li><a href="{{route('cheque.show')}}">Cheques</a></li>
                                        <li><a href="{{route('conta.show')}}">Contas</a></li>
                                        <li><a href="{{route('fluxo.show')}}">Fluxos-Diários</a></li>
                                        <li><a href="{{route('folga.show')}}">Folgas</a></li>
                                        <li><a href="{{route('funcionario.show')}}">Funcionários</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Configurações</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{route('admin.edit')}}"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->name}} </a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-in"></span> Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            @endunless

            <div class="row">
                @yield('conteudo')
            </div>

            <footer class="container-fluid welld">
                <div class="container">
                    <div class="row col-md-5 pull-left"> &reg; copyright Padaria Ventura 2016-{{date('Y')}}. </div>
                </div>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        </div>
    </body>
</html>