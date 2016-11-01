@extends('painel.template.template')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>CONSULTAR DADOS DAS PESSOAS (FÍSICA E JURÍDICA)
    </h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pessoas</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class='box'>
                <div style="display: none;" id="dialog-confirm" title="Deletar">
                    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:4px 12px 20px 0; "></span>Deseja realmente excluir esse visitante?</p>
                </div>

                <div class='box-header'>Listagem de Dados</div>
                <div class='col-lg-8'>
                <a href='{{url('/painel/pessoas/create')}}' class='btn btn-success'><i class='fa fa-user'></i> Cadastrar Pessoa Fisica</a>
                <a href='{{url('/painel/pessoas/create')}}' class='btn btn-default'><i class='fa fa-user-secret'></i> Cadastrar Pessoa Jurídica</a>
                </div>
                <br/>
                <br/>
                <div class='box-body'>
                    <table class="table table-bordered" id="">
                        <thead>
                            <tr style="background: #005384; color: white">
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Cpf</th>
                                <th>Cnpj</th>
                                <th>Mensagem</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        @foreach($pessoas as $pessoa)
                        <tbody>
                            <tr class='warning'>
                                <td>{{$pessoa->nome}}</td>
                                <td>{{$pessoa->email}}</td>
                                <td>{{$pessoa->telefone}}</td>
                                <td>{{$pessoa->celular}}</td>
                                <td>{{$pessoa->cpf}}</td>
                                <td>{{$pessoa->cnpj}}</td>
                                <td>{{$pessoa->mensagem}}</td>
                                <td style="width: 200px">
                                    <a class="btn btn-primary" href="{{url("/painel/pessoas/$pessoa->id/edit")}}"><i class="fa fa-edit"></i> Editar</a>
                                    <a class="btn btn-danger editor_remove" href="{{url("/painel/pessoas/destroy/$pessoa->id")}}" id-usuario="{{$pessoa->id}}" href=""><i class="fa fa-trash"></i> Deletar</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
@section('scripts-footer')
<script src="{{url('/assets/js/jquery.blockUI.js')}}"></script>
@endsection