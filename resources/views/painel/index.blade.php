@extends('painel.template.template')

@section('content')
<h1>Hello World</h1>

@include('painel.includes.include', ['teste1'=>123])
<br/>


@if($teste = 3)
    <p>É igual a {{$teste}}</p>
@else
    <p>É diferente de 3</p>
@endif

<hr/>

{{--
@if(count($arrays) == 0)
    <p>Nada a ser exibido</p>
@else
    @foreach($arrays as $array)
        {{$array}}
    @endforeach
@endif
--}}

@forelse($arrays as $array)
    {{$array}}
@empty
    <p>Nada a ser exibido</p>
@endforelse

@push('scripts-footer')
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
@endpush

@endsection