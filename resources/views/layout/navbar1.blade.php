<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.s0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    @yield('scripts')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('image/malai.jpg')}}" style="border-radius: 50%" alt="Malai"
                height="180" width="180">
        </div>
        <nav class="main-header navbar navbar-expand navbar-dark"
            style="background-image: linear-gradient(15deg, #C853B7 50%, #2B0325  100%); ">
            {{-- style="background-image: linear-gradient(15deg, #e25311 0%, #f8d166 100%); --}}
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../home" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Logout</a>
                </li>
                </li>



            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-secondary elevation-4 "
            style="background-image: linear-gradient(15deg,  #2B0325 20%,  #C853B7 100%);">

            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <!-- <img src="AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"> -->
                <img src="{{asset('image/malai.jpg')}}" class="brand-image img-circle elevation-3" alt="logo">

                <span class="brand-text font-weight-light">Malai</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('image/Niloy.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Shahoriar Niloy</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2" >
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        {{-- 
                        <li class="nav-item">
                            <a href="admission" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>Dashboard

                                </p>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="../product/index" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Products

                                </p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="{{route('customer.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Customers
                                </p>
                            </a>
                        </li>



                        <li class="nav-item">
                            {{-- menu-open --}}
                            <a href="#" class="nav-link"> 
                                {{-- active --}}
                                <i class="nav-icon fas fa-poll"></i>
                                <p >
                                    Sales
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview"  style="background-image: linear-gradient(15deg,  #2B0325 20%,  #C853B7 100%); ">
                                <li class="nav-item">
                                    <a href="{{route('invoice.index')}}" class="nav-link">
                                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                        <p>Invoices</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('designation.index')}}" class="nav-link">
                                        {{-- active --}}
                                        <i class="nav-icon fas fa-file-invoice"></i>
                                        <p>Orders  x</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            {{-- menu-open --}}
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>
                                    Employees
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="background-image: linear-gradient(15deg,  #C853B7 10%,  #460a3d 100%);">
                                <li class="nav-item">
                                    <a href="{{route('employee.index')}}" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>Employees</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('designation.index')}}" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>Designations</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('approval.index')}}" class="nav-link">
                                        <i class="nav-icon fas fa-check-circle"></i>
                                        <p>Approvals</p>
                                    </a>
                                </li>
                            </ul>
                        </li>






                        {{-- 
                        <li class="nav-item">
                            <a href="{{route('invoice.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Invoices
                        </p>
                        </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('invoiceproduct.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Invoice Products
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('invoiceproduct.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Orders x
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('invoiceproduct.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Order Products x
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('invoiceproduct.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Stock Products x
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('transaction.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice"></i>
                                <p>Transactions
                                </p>
                            </a>
                        </li> --}}

                        <li class="nav-item ">
                            {{-- menu-open --}}
                            <a href="{{route('branch.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-code-branch"></i>
                                <p>Branches
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>





    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
    {{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
    <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
    <script src="{{asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>





    <div class="content-wrapper">
        {{-- style="background-image:url('{{asset('image/malaibg.png')}}');background-blend-mode: overlay;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;" --}}
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="../home">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                            
                            
                        </ol>
                        <span class="float-right">@yield('button')</span>

                    </div>
                    <!-- <div class="col-sm-6">
                            
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12 col sm-12 12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </div>



    </div>
</body>
@yield('footer')

</html>
