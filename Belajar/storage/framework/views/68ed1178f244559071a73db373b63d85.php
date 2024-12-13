<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NJT</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/cs-skin-elastic.css')); ?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/scss/style.css')); ?>">
    <link href="<?php echo e(asset('assets/css/lib/vector-map/jqvmap.min.css')); ?>" rel="stylesheet">

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
                        <a href="Profil Perusahaan"> <i class="menu-icon fa fa-briefcase"></i>Profil Perusahaan </a>
                    </li>
                    <li>
                        <a href="Struktur Organisasi"> <i class="menu-icon fa fa-group (alias)"></i>Struktur Organisasi</a>
                    </li>
                    <li>
                        <a href="Daftar Karyawan"> <i class="menu-icon fa fa-list-alt"></i>Daftar Karyawan</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil-square-o"></i>Pengajuan Izin</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">Izin Kerja</a></li>
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">Cuti</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file"></i>Dokumen</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">Kontrak Kerja</a></li>
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">Slip Gaji</a></li>
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">Pajak</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-calendar"></i>Kalender Perusahaan</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Informasi Perusahaan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">SOP</a></li>
                            <li><i class="fa fa-caret-right"></i><a href="ui-buttons.html">Kebijakan Internal</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"> <i class="menu-icon fa fa-bell"></i>Pemberitahuan</a>
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
                    <div class="header-left">
                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/Profil.png" alt="User Avatar" style="width: 30px; height:30px">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
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
                        <h1>Struktur Organisasi</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3 d-flex justify-content-center"> <!-- .content -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title mb-3">Struktur Organisasi</strong>
                    </div>
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <h5 class="text-sm-center mt-2 mb-1">" Lorem ipsum dolori siamet "</h5>
                        </div>
                    </div>      
                </div>

                <div class="card-header">
                    <strong class="card-title mb-3"></strong>
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="<?php echo e(asset('assets/js/vendor/jquery-2.1.4.min.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>


    <script src="<?php echo e(asset('assets/js/lib/chart-js/Chart.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/widgets.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\laragon\www\Belajar\resources\views/struktur_organisasi.blade.php ENDPATH**/ ?>