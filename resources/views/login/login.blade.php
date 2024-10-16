@extends('layouts.default')
@section('content')

@if($mensagem = Session::get('erro'))
    {{ $mensagem}}
@endif

@if ($errors->any())

    @foreach($errors->all() as $error)
        {{ $error }} <br>
    @endforeach

@endif
<div class="login">
    <div class="form-container">
        <div class="form-card">
            <h1>Login</h1>
            <p>Digite suas informações de cadastro e faça login no nosso site!</p>
            <div class = "form">
                <form action="{{ route('login.auth') }}" method="POST">
                    @csrf
                    <div class = "input-form">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email">
                    </div>

                    <div class = "input-form">
                        <label for="password">Senha</label>
                        <input id="password" type="passowrd" name="passowrd" placeholder="Digite sua senha">
                    </div>
                    <button class="form-button" type="submit">Entrar</button>
                </form>
            </div>
        </div>

    </div>

</div>


@stop
