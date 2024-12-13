<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Currency</title>
    <meta name="description" content="Add New Currency NEV2">
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
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chosen/chosen.min.css') }}">

    <!-- page specific plugin styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker3.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-timepicker.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/daterangepicker.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('eassets/css/bootstrap-datetimepicker.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-colorpicker.min.css') }}" />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


</head>
<body style="font-size: 13px">
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">NEV2</a>
                <a class="navbar-brand hidden" href="./"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="{{ route('index_input') }}"><i class="menu-icon fa fa-list-ul"></i>Item</a>
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
                            <img class="user-avatar rounded-circle" src="style/images/profil.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i>   My Profile</a>

                            <form action="#" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="fa fa-power-off"></i>   Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Input</h1>
                    </div>
                </div>
            </div>
        </div>   

        <div class="content mt-3"> <!-- content table -->
            <div class="animated fadeIn"> <!-- .animated -->

                <div class="card">
                    <div class="card-body">
                        @foreach ( $Vendor_Rebate as $Vendor_Rebate )
                        <form action="{{ route('update_input') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <strong>Nama BL</strong>
                                <br><br>
                                <input type="text" class="form-control" name="BL_Name" value="{{ $Vendor_Rebate->BL_Name }}" autofocus required>
                                <hr />

                                <strong>Brand</strong>
                                <br><br>
                                <select data-placeholder="{{ $Vendor_Rebate->Brand }}" class="standardSelect" tabindex="1" name="Brand" autofocus required>
                                    <option value="{{ $Vendor_Rebate->Brand }}" type="hidden"></option>
                                    <option value="ACE POWER">Ace Power</option>
                                    <option value="AMD">AMD</option>
                                    <option value="Asus">Asus</option>
                                </select>
                                <hr />

                                <strong>Kategori</strong>
                                <br><br>
                                <select data-placeholder="{{ $Vendor_Rebate->Category }}" class="standardSelect" tabindex="1" name="Category">
                                    <option value="{{ $Vendor_Rebate->Category }}" type="hidden"></option>
                                    <option value="Kategori 1">Kategori 1</option>
                                    <option value="Kategori 1">Kategori 1</option>
                                    <option value="Kategori 1">Kategori 1</option>
                                </select>
                                <hr />

                                <strong>Kode Item</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Item_Code" value="{{ $Vendor_Rebate->Item_Code }}" autofocus required>
                                <hr />

                                <strong>Tipe Program</strong>
                                <br><br>
                                <select data-placeholder="{{ $Vendor_Rebate->Program_Type }}" class="standardSelect" tabindex="1" name="Program_Type">
                                    <option value="{{ $Vendor_Rebate->Program_Type }}" type="hidden"></option>
                                    <option value="Fix">Fix</option>
                                    <option value="Sell Out">Sell Out</option>
                                    <option value="Invoice">Invoice</option>
                                    <option value="Rebate">Rebate</option>
                                </select>
                                <hr />

                                <strong>Kode Program</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Program_Code" value="{{ $Vendor_Rebate->Program_Code }}" autofocus required>
                                <hr />

                                <strong>Nama Program</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Program_Name" value="{{ $Vendor_Rebate->Program_Name }}" autofocus required>
                                <hr />

                                <div class="col-lg-6 form-group">
                                    <strong>Tanggal Mulai</strong>
                                    <br><br>
                                    <input type="date" class="form-control" id="Start_Date" name="Start_Date" value="{{ $Vendor_Rebate->Start_Date }}" autofocus required>
                                    <hr />
                                </div>

                                <div class="col-lg-6 form-group">
                                    <strong>Tanggal Selesai</strong>
                                    <br><br>
                                    <input type="date" class="form-control" id="End_Date" name="End_Date" value="{{ $Vendor_Rebate->End_Date }}" autofocus required>
                                    <hr />
                                </div>

                                <strong>Qty</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Qty" value="{{ $Vendor_Rebate->Qty }}" autofocus required>
                                <hr />

                                <strong>Currency</strong>
                                <br><br>
                                <select data-placeholder="{{ $Vendor_Rebate->Currency }}" class="standardSelect" tabindex="1" name="Currency" autofocus required>
                                    <option value="{{ $Vendor_Rebate->Currency }}"></option>
                                    <option value="IDR">IDR</option>
                                    <option value="USD">USD</option>
                                </select>
                                <hr />

                                <strong>Incentive</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Incentive" value="{{ $Vendor_Rebate->Incentive }}" autofocus required>
                                <hr />

                                <strong>Notes</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Notes" value="{{ $Vendor_Rebate->Notes }}" autofocus required>
                                <!-- <textarea name="Notes" id="Notes" cols="5" rows="4" class="form-control" value="{{ $Vendor_Rebate->Notes }}"></textarea>-->
                                <hr />

                            </div>

                            <div class="text-right">
                                <button type="submit" name="userSubmit" class="btn btn-primary" value="Submit">
                                    <li class="fa fa-file-text"></li> Update
                                </button>
                            </div>
                        </form>
                        @endforeach
                        
                    </div>
                </div>
                

            </div><!-- .animated -->
        </div><!-- .content table -->
    </div><!-- /#right-panel -->

    <script src="{{ asset('assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chosen/chosen.jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-ui.custom.min.j') }}s"></script>
    <script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- <script src="assets/js/chosen.jquery.min.js"></script> -->
    <script src="assets/js/spinbox.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/jquery.knob.min.js"></script>
    <script src="assets/js/autosize.min.js"></script>
    <script src="assets/js/jquery.inputlimiter.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/bootstrap-tag.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });

            //datepicker plugin
				//link
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});

            

        });
    </script>

    
</body>
</html>