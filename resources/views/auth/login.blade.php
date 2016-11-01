@extends('auth.templates.template')

@section('content-form')
@if ($errors->has('email'))
    <div class="form-group">
        <div class="alert alert-warning col-lg-12">
            <strong>Dados Inválidos!</strong>
        </div>
    </div>
        @endif

    @if ($errors->has('password'))
    <div class="alert alert-warning">
       <strong>{{ $errors->first('password') }}</strong>
    </div>
   @endif
<form class="form-horizontal" role="form" method="POST" name='form' action="{{ url('/login') }}">
    {{ csrf_field() }}
     
    <div style="display: none;  text-align: center; width: 100%;" class="alert alert-warning" role="alert">Dados Invalidos!</div>
    <div style="display: none; text-align: center; width: 100%;" class="alert alert-success" role="alert">Usuário Logado com Sucesso...</div>

    <div class="form-group">

        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">

    </div>

    <div class="form-group">

        <input id="password" type="password" placeholder="Senha" class="form-control" name="password">

       
    </div>
    <div class='form-group'>
        <a href="{{ url('/password/reset') }}" class="recupera-senha">Esqueceu a Senha?</a>
        <!--<a class="btn btn-link" href="">Forgot Your Password?</a>-->
    </div>

    <div class="form-group">
        <button  type="submit"  class="btn btn-padrao btn-lg">
            <i class="fa fa-sign-in"></i>  Entrar
        </button>
        <center><img src="{{url('/assets/imgs/244.GIF')}}" id="load" alt="Carregando" style="display: none; "/></center>
    </div>
</form>
<script src='{{url('/assets/js/login.js')}}'></script>

@endsection
