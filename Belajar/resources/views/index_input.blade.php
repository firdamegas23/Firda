<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input BL</title>
    <meta name="description" content="Input BL">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/datatable/dataTables.bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('assets/scss/style.css') }}">
    <link href="{{ asset('assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body style="font-size: 14px">



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
                        <a href="{{ route('index_input') }}"> <i class="menu-icon fa fa-briefcase"></i>Input BL </a>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/Profil.png" alt="User Avatar" style="width: 30px; height:30px">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>  Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>  Settings</a>

                            <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>  Logout
                            </a>
                                
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
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
                        <h1>Input BL</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li>
                                <a href="add_input" class="btn btn-info btn-sm">
                                    <i class="fa fa-plus"></i>  Add New
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-8"> <!-- content table -->
            <div class="animated fadeIn"> <!-- .animated -->
                <div class="row"> <!-- div row -->
                    <div class="card-body" style="background-color: #fff;">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead class="text-center"> <!-- Judul Kolom -->
                                <tr class="text-center">
                                    <th style="vertical-align: middle">No</th>
                                    <th style="vertical-align: middle">Nama BL</th>
                                    <th style="vertical-align: middle">Brand</th>
                                    <th style="vertical-align: middle">Kategori</th>
                                    <th style="vertical-align: middle">Kode Item</th>
                                    <th style="vertical-align: middle">Tipe Program</th>
                                    <th style="vertical-align: middle">Kode Program</th>
                                    <th style="vertical-align: middle">Nama Program</th>
                                    <th style="vertical-align: middle">Tanggal Mulai</th>
                                    <th style="vertical-align: middle">Tanggal Selesai</th>
                                    <th style="vertical-align: middle">Qty</th>
                                    <th style="vertical-align: middle">Currency</th>
                                    <th style="vertical-align: middle">Incentive</th>
                                    <th style="vertical-align: middle">Notes</th>
                                    <th style="vertical-align: middle">Option</th>
                                </tr>
                            </thead> <!-- Judul Kolom -->
                            <tbody> <!-- Isi Kolom -->
                                @foreach ( $Vendor_Rebate as $Vendor_Rebate )
                                <tr>
                                    <td class="text-center" style="vertical-align: middle">{{ $loop->iteration }}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->BL_Name}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Brand}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Category}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Item_Code}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Program_Type}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Program_Code}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Program_Name}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Start_Date}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->End_Date}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Qty}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Currency}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Incentive}}</td>
                                    <td style="vertical-align: middle">{{ $Vendor_Rebate->Notes}}</td>
                                    <td class="text-center" style="vertical-align: middle">
                                        <a href="/edit_input/{{ $Vendor_Rebate->Program_Code }}" class="" style="color: green">
                                            <i class="fa fa-pencil"></i> 
                                        </a> 
                                        &nbsp;
                                        <a href="/delete_input/{{ $Vendor_Rebate->Program_Code }}" style="color: red" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">
                                            <i class="fa fa-trash"></i> 
                                        </a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> <!-- Isi Kolom -->
                        </table>
                    </div>
                </div> <!-- div row -->
            </div> <!-- .animated -->
        </div> <!-- content table -->

    </div><!-- /#right-panel -->

    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


    <script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/datatables-init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
</body>
</html>