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

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/cs-skin-elastic.css')); ?>">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/scss/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lib/chosen/chosen.min.css')); ?>">

    <!-- page specific plugin styles -->
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery-ui.custom.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-datepicker3.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-timepicker.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/daterangepicker.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('eassets/css/bootstrap-datetimepicker.min.css')); ?>" />
	<link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap-colorpicker.min.css')); ?>" />

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
                        <a href="<?php echo e(route('index_input')); ?>"><i class="menu-icon fa fa-list-ul"></i>Item</a>
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
                                <?php echo csrf_field(); ?>
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
                        <h1>Add New Input</h1>
                    </div>
                </div>
            </div>
        </div>   

        <div class="content mt-3"> <!-- content table -->
            <div class="animated fadeIn"> <!-- .animated -->

                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route ('insert_input')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <strong>Nama BL</strong>
                                <br><br>
                                <input type="text" class="form-control" name="BL_Name" autofocus required>
                                <hr />

                                <strong>Brand</strong>
                                <br><br>
                                <select data-placeholder="--Pilih Brand--" class="standardSelect" tabindex="1" id="merk" autofocus required>
                                    <option value=""></option>
                                    <?php $__currentLoopData = $merks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($merk->Merk); ?>"><?php echo e($merk->Merk); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <hr />

                                <strong>Kategori</strong>
                                <br><br>
                                <label for="nama">Pilih Nama</label>
                                <select data-placeholder="-- Pilih Nama --" class="standardSelect" tabindex="1" id="nama" autofocus required>
                                    <option value="">-- Pilih Nama --</option>
                                </select>
                                <hr />

                                <strong>Kode Item</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Item_Code" autofocus required>
                                <hr />

                                <strong>Tipe Program</strong>
                                <br><br>
                                <select data-placeholder="--Pilih Program--" class="standardSelect" tabindex="1" name="Program_Type" autofocus required>
                                    <option value=""></option>
                                    <option value="Fix">Fix</option>
                                    <option value="Sell Out">Sell Out</option>
                                    <option value="Invoice">Invoice</option>
                                    <option value="Rebate">Rebate</option>
                                </select>
                                <hr />

                                <strong>Kode Program</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Program_Code" autofocus required>
                                <hr />

                                <strong>Nama Program</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Program_Name" autofocus required>
                                <hr />

                                <div class="col-lg-6 form-group">
                                    <strong>Tanggal Mulai</strong>
                                    <br><br>
                                    <input type="date" class="form-control" id="Start_Date" name="Start_Date" autofocus required>
                                    <hr />
                                </div>

                                <div class="col-lg-6 form-group">
                                    <strong>Tanggal Selesai</strong>
                                    <br><br>
                                    <input type="date" class="form-control" id="End_Date" name="End_Date" autofocus required>
                                    <hr />
                                </div>

                                <strong>Qty</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Qty" autofocus required>
                                <hr />

                                <strong>Currency</strong>
                                <br><br>
                                <select data-placeholder="--Pilih Currency--" class="standardSelect" tabindex="1" name="Currency" autofocus required>
                                    <option value=""></option>
                                    <option value="IDR">IDR</option>
                                    <option value="USD">USD</option>
                                </select>
                                <hr />

                                <strong>Incentive</strong>
                                <br><br>
                                <input type="text" class="form-control" name="Incentive" autofocus required>
                                <hr />

                                <strong>Notes</strong>
                                <br><br>
                                <textarea name="Notes" id="Notes" cols="5" rows="4" class="form-control"></textarea>
                                <hr />

                            </div>

                            <div class="text-right">
                                <button type="submit" name="userSubmit" class="btn btn-primary" value="Submit">
                                    <li class="fa fa-file-text"></li>  Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                

            </div><!-- .animated -->
        </div><!-- .content table -->
    </div><!-- /#right-panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
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

<script>
    $(document).ready(function() {
        $('#merk').change(function() {
            var merk = $(this).val();
            if (merk) {
                $.ajax({
                    url: "<?php echo e(route('get-nama')); ?>",
                    type: "GET",
                    data: { merk: merk },
                    success: function(data) {
                        $('#nama').empty();
                        $('#nama').append('<option value="">-- Pilih Nama --</option>');
                        $.each(data, function(key, value) {
                            $('#nama').append('<option value="'+ value +'">'+ value +'</option>');
                        });
                    }
                });
            } else {
                $('#nama').empty();
                $('#nama').append('<option value="">-- Pilih Nama --</option>');
            }
        });
    });
</script>

    
</body>
</html><?php /**PATH D:\laragon\www\Belajar\resources\views/add_input.blade.php ENDPATH**/ ?>