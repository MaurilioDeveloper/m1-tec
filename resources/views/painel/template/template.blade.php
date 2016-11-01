<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>{{$titulo or 'Painel M1 Transportes'}}</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">

        <!-- Optional theme -->
        <link rel="stylesheet" href="{{url('/assets/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">

        <link rel="stylesheet" href="{{url('/assets/css/style2.css')}}">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('/assets/plugins/tables/datatables/css/datatables.min.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{url('/assets/plugins/tables/datatables/css/dataTables.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{url('/assets/plugins/tables/datatables/css/autoFill.bootstrap.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{url('/assets/plugins/tables/datatables/css/buttons.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{url('/assets/plugins/tables/datatables/css/colReorder.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{url('/assets/plugins/tables/datatables/css/fixedColumns.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{url('/assets/plugins/tables/datatables/css/fixedHeader.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{url('/assets/plugins/tables/datatables/css/keyTable.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{url('/assets/plugins/tables/datatables/css/responsive.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css"
                  href="{{url('/assets/plugins/tables/datatables/css/rowReorder.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{url('/assets/plugins/tables/datatables/css/scroller.bootstrap.min.css')}}"/>
            <link rel="stylesheet" type="text/css" href="{{url('/assets/plugins/tables/datatables/css/select.bootstrap.min.css')}}"/>
            <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
            <!--<link rel="stylesheet" href="{{url('/assets/DataTables/dataTable-User.css')}}" />-->

      
        <script
            src="https://code.jquery.com/jquery-2.2.2.min.js"
            integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI="
        crossorigin="anonymous"></script>

        @stack('styles-header')
        
    </head>
    <body class='skin-blue sidebar-mini'>

        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="/produtos" class="logo">
                    <span class="logo-lg"><img src="{{url("/assets/imgs/logo.png")}}" style="margin-left: -32%;" width="90" height="38"></span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="{{url("/assets/imgs/user.png")}}" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">{{ auth()->user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="{{url("/assets/imgs/user.png")}}" class="img-circle" alt="User Image">

                                        <p>
                                            {{ auth()->user()->name }} - Administrador
                                            <small></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sair</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar" style="height: auto;">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{url("/assets/imgs/user.png")}}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{{ auth()->user()->name }}</p>
                        </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                        
                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header"><i class="fa fa-dashboard"></i>&nbsp;MENU DE NAVEGAÇÃO</li>
                        <!-- Optionally, you can add icons to the links -->
                        <li class="treeview">
                            <a href="#"><i class="fa fa-user-plus"></i> <span>Dados do Usuário</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-user"></i>Meu perfil</a></li>
                                <li><a href=""><i class="fa fa-edit"></i>Editar dados</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-user"></i> <span>Pessoa</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-user"></i> <span>Pessoa Física</span> <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{url("/pessoa/create")}}"><i class="fa fa-plus"></i>Novo</a></li>
                                        <li><a href=""><i class="fa fa-search"></i>Consultar</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#"><i class="fa fa-briefcase"></i> <span>Pessoa Jurídica</span> <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="{{url("/pessoa/create")}}"><i class="fa fa-plus"></i>Novo</a></li>
                                        <li><a href=""><i class="fa fa-search"></i>Consultar</a></li>
                                    </ul>
                                </li>
                            </ul> 
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-user-plus"></i> <span>Usuário</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-plus"></i>Novo</a></li>
                                <li><a href=""><i class="fa fa-search"></i>Consultar</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- /.sidebar-menu -->
                </section>  
            </aside>

            <div class='content-wrapper' style='min-height: 1178px'>
                 @yield('content')
            </div>
            @include('painel.includes.include')

            @yield('scripts-footer')    
            <script src="{{url('/assets/plugins/tables/datatables/js/datatables.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/jszip.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/pdfmake.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/vfs_fonts.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.autoFill.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/autoFill.bootstrap.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.buttons.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/buttons.bootstrap.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/buttons.colVis.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/buttons.flash.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/buttons.html5.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/buttons.print.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.colReorder.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.fixedColumns.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.fixedHeader.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.keyTable.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.responsive.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/responsive.bootstrap.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.rowReorder.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.scroller.min.js')}}"></script>
            <script src="{{url('/assets/plugins/tables/datatables/js/dataTables.select.min.js')}}"></script>
            <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
       
            <!-- Latest compiled and minified JavaScript -->
            <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
            <script src="{{url('/assets/js/script.js')}}"></script>
    </body>
</html>