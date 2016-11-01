<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <title>{{$titulo or 'Login | M1 Transportes'}}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">        
        <link rel="stylesheet" href="{{url('/assets/css/estilo.css')}}">
        <link rel="icon" type="image/png" href="">
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <style>
            .login{ 
                        -webkit-box-shadow: 0px 0px 0px #222d32;
                        -moz-box-shadow: 0px 0px 0px #222d32;
                        box-shadow: 5px 5px 5px #222d32;
                        background-color: #fff;
                    }
        </style>
    </head>
    <body class="bg-padrao">
        <header>
            <h1 class="oculta">Login | M1 Transportes</h1>     
        </header>

        <section class="login  login-shadow">
            <div class="topo-login">
                <h1 class="titulo-login">M1 Transportes</h1>
            </div>
            <div class="conteudo-login">
                @yield('content-form')
               <!--
                <form action="" class="form-padrao" name="form_login" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Usuário" name="usuario" class="form-control " required="required" value/>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="password" class="form-control " required="" value/>

                    </div>
                    
                    <a href="" class="recupera-senha" data-toggle="modal" data-target="#recuperarSenha">Esqueceu a Senha?</a>
                   
                   
                    <br> <br>
                    <img src="img/486.GIF" class="load" alt="Carregando" style="display: none; width: 50px; height: 50px;"/>

                    <button  type="submit"  class="btn btn-padrao btn-lg">
                        <i class="glyphicon glyphicon-lock"></i>  Entrar
                    </button>


                 
                </form>
                <center><img src="{{url('/assets/imgs/244.GIF')}}" id="load" alt="Carregando" style="display: none; "/></center>
                    -->

            </div>
        </section>
        
        <!-- Modal Recupera Senha-->
        <!--
        <div class="modal fade" id="recuperarSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-padrao2">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Recuperar Senha</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-padrao" >

                            <h5 class="center">Por Favor, Informe seu email:</h5>
                            <div class="form-group">
                                <input type="text" placeholder="E-mail" name="email" class="form-control " required="required" value/>
                            </div>
                            <!--
                            <button  type="reset" name="btn-enviar" class="btn btn-danger btn-lg">
                                <span class="glyphicon glyphicon-remove"></span> <b>Limpar</b>
                            </button>
                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Recuperar</button>
                    </div>
                </div>
            </div>
        </div>
-->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
