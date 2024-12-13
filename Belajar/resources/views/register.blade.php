<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <link href="{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">NE Group</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>    
                    <li>
                        <a href="{{ route('index_input') }}"> <i class="menu-icon fa fa-briefcase"></i>Input </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <h6>{{ auth()->user()->username }}</h6>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/Profil.png" alt="User Avatar" style="width: 30px; height:30px">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i>   My Profile</a>

                            <a class="dropdown-item" href="#"><i class="fa fa-asterisk"></i>   Settings</a>
                            

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fa fa-power-off"></i>   Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Register Akun Baru</h1>
                    </div>
                </div>
            </div>
        </div>   

        <div class="content mt-3">
            <div class="animated fadeIn">
                @if (session('Success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('Success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <p>Tambahkan Pengguna Baru Disini</p>
                        <form action="{{ route('add_register') }}" method="POST" class="register">
                            @csrf
                            <div class="form-group">
                                <strong>Username</strong>
                                <br><br>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>

                            <div class="form-group">
                                <strong>Password</strong>
                                <br><br>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary" value="Submit">
                                    <li class="fa fa-file-text"></li>  Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

    <!-- Right Panel -->

    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script src="{{ asset('assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
</body>
</html>
