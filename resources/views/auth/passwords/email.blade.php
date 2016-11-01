@extends('auth.templates.template')

<!-- Main Content -->
@section('content-form')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

        <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">

        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-padrao">
            <i class="fa fa-btn fa-envelope"></i> Enviar Email de Recuperação
        </button>
    </div>
</form>
@endsection
