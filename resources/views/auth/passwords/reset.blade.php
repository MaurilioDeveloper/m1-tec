@extends('auth.templates.template')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
    {{ csrf_field() }}

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ $email or old('email') }}">

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

        <input id="password" placeholder="Senha" type="password" class="form-control" name="password">

        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <input id="password-confirm" placeholder="Confirmar Senha" type="password" class="form-control" name="password_confirmation">

        @if ($errors->has('password_confirmation'))
        <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-padrao">
            <i class="fa fa-btn fa-refresh"></i> Resetar Senha
        </button>
    </div>
</form>
@endsection