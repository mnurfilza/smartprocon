@extends('dashboard.layout.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('') }}">Smartprocon Dashboard</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*regional') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('regional') }}"><i class="fa fa-building-o fa-fw"></i> Regional</a>
                                </li>
                                <li {{ (Request::is('*user') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('user') }}"><i class="fa fa-user fa-fw"></i> User</a>
                                </li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fa fa-sign-out fa-fw"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li {{ (Request::is('*customer') ? 'class="active"' : '') }}>
                            <a href="{{ url ('customer') }}"><i class="fa fa-photo fa-fw"></i> Customer</a>
                        </li>

                        <li {{ (Request::is('*modules') ? 'class="active"' : '') }}>
                            <a href="{{ url ('modules') }}"><i class="fa fa-photo fa-fw"></i> Module</a>
                        </li>
                       
                        <li {{ (Request::is('*ongkir') ? 'class="active"' : '') }}>
                            <a href="{{ url ('ongkir') }}"><i class="fa fa-money fa-fw"></i> Ongkir</a>
                        </li>


                        <li {{ (Request::is('*ongkos_pasang') ? 'class="active"' : '') }}>
                            <a href="{{ url ('ongkos_pasang') }}"><i class="fa fa-money fa-fw"></i> Ongkos Pasang</a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-database fa-fw"></i> Data Master<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*type_barang') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('type_barang') }}"><i class="fa fa-archive fa-fw"></i> Type Barang</a>
                                </li>
                                <li {{ (Request::is('*product') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('product') }}"><i class="fa fa-money fa-fw"></i> Barang</a>
                                </li>
                                <li {{ (Request::is('*solution') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('solution') }}"><i class="fa fa-building-o fa-fw"></i> Solution</a>
                                </li>
                                <li {{ (Request::is('*type_object') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('type_object') }}"><i class="fa fa-building-o fa-fw"></i> Object</a>
                                </li>
                                <li {{ (Request::is('*solutions_package') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('solutions_package') }}"><i class="fa fa-building-o fa-fw"></i> Solution Package</a>
                                </li>
                                <li {{ (Request::is('*SubSolutionPackage') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('sub_solution_package') }}"><i class="fa fa-building-o fa-fw"></i> Sub Solution Package</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    @yield('section')
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

