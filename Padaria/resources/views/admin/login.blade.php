@extends('home')
@section('titulo','Login')

@section('conteudo')

    <div class="container">
        <div class="wrapper">
            <form action={{route('login')}} method="POST" class="form-signin">

                <h2 class="form-login-heading text-center"> <img src="/img/logo-0.png" class="img-responsive-lg"> </h2>
                <hr class="colorgraph"><br>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-mail: </label>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login" type="email" class="form-control" name="email" placeholder='Ex: valtidisney@hotmail.com' required autofocus>
                    </div>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">Senha: </label>

                    <div class="input-group ">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" required>
                    </div>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-lg btn-primary btn-block"> Entrar </button>
            </form>
        </div>
    </div>
@endsection