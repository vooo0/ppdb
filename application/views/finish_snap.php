<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
		<base href="<?php echo base_url();?>"/>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
    <title>PPDB NAMA SEKOLAH</title>
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link href="assets/kitkat/assets/css/style.css" rel="stylesheet">
    <link href="assets/kitkat/assets/css/theme.css" rel="stylesheet">
    <link href="assets/kitkat/assets/css/ui.css" rel="stylesheet">
    <link href="assets/kitkat/assets/css/custom.css" rel="stylesheet">
    <link href="assets/kitkat/assets/plugins/font-awesome-animation/font-awesome-animation.min.css" rel="stylesheet">
    <link href="assets/kitkat/assets/input/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE STYLE -->
    <link href="assets/kitkat/assets/plugins/step-form-wizard/css/step-form-wizard.min.css" rel="stylesheet">
    <!-- END PAGE STYLE -->
    <script src="assets/kitkat/assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="<CLIENT-KEY>"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </head>
  <!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
  <!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
  <!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
  <!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
  <!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
  <!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
  <!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
  <!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
  <!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

  <!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
  <!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->

  <!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
  <!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
  <!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
  <!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
  <!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
  <!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
  <!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
  <!-- BEGIN BODY -->
  <style>
    #pesan_komentar{font-weight: bold;color:red;}
  </style>
  <body class="fixed-topbar theme-sdtl color-green  sidebar-hover">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section>

        <div class="main-content">
        <!-- BEGIN TOPBAR -->
            <div class="topbar" style="background-color:#2B589C;color:#fff;">
                <div class="header-left">
                    <div class="col-sm-12">
                        <div style="margin-top:-8px;">
                            <h2>
								<strong class="text-primary">
									<a href=""><img src="img/logo.png" alt="Logo" width="30" style="position:absolute;margin-top:-3px;"> <span style="margin-left:35px;color:#fff;">PPDB Online</span></a>
								</strong>
							</h>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="header-menu nav navbar-nav">
                    <!-- BEGIN USER DROPDOWN -->
                    <li class="dropdown" id="language-header">
                        <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span style="color:#ddd;">PPDB Tahun Ajaran <b class="text-danger" style="color:#fff;"><?php echo date('Y'); ?>-<?php echo date('Y')+1; ?></b></span>
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        
        <!-- END TOPBAR -->
        <!-- BEGIN PAGE CONTENT -->
        <div class="page-content page-wizard">

            <div class="header" style="margin-top:-20px;">
            <h2>Form Pembayaran Pendaftaran PPDB Online <strong> NAMA SEKOLAH</strong></h2>
            <hr style="margin-top:5px;">

          </div>
          <div class="row" style="margin-top:-30px;">
            <div class="col-lg-12">

                <div class="tabs tabs-linetriangle">

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2><strong class="text-success" style="color:#eee;">Pembayaran Pendaftaran</strong></h2>
                    </div>
                    <div class="panel-body">
                        <fieldset class="content-group">
                        <legend class="text-bold"><i class="icon-user"></i> Confirmation</legend>
                        
                        <table>
                            <tr>
                                <td>Nama</td>
                                <td>: <?php echo $finish->nama_lengkap; ?></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>: <?php echo $finish->no_telepon; ?></td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>: <?php echo $finish->jurusan; ?></td>
                            </tr>
                            <tr>
                                <td>nisn</td>
                                <td>: <?php echo $finish->nisn; ?></td>
                            </tr>
                            <tr>
                                <td>Status Code</td>
                                <td>: <?php echo $finish->status_code; ?></td>
                            </tr>
                            <tr>
                                <td>Status Message</td>
                                <td>: <?php echo $finish->status_message; ?></td>
                            </tr>
                            <tr>
                                <td>Order Id</td>
                                <td>: <?php echo $finish->order_id; ?></td>
                            </tr>
                            <tr>
                                <td>Transaction Status</td>
                                <td>: <?php echo $finish->transaction_status; ?></td>
                            </tr>
                            <tr>
                                <td>Biller Key</td>
                                <td>: 
                                    <?php 
                                        if(isset($finish->bill_key)){
                                            echo $finish->bill_key;
                                        } else {
                                            echo '-';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Biller Code</td>
                                <td>: 
                                    <?php 
                                        if(isset($finish->bill_code)){
                                            echo $finish->bill_code;
                                        } else {
                                            echo '-';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Bank</td>
                                <td>: 
                                    <?php 
                                        if(isset($finish->va_numbers[0]->bank)){
                                            echo $finish->va_numbers[0]->bank;
                                        } else {
                                            echo '-';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>VA Number</td>
                                <td>: 
                                    <?php 
                                        if(isset($finish->va_numbers[0]->va_number)){
                                            echo $finish->va_numbers[0]->va_number;
                                        } else {
                                            echo '-';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>VA Permata</td>
                                <td>: 
                                    <?php 
                                        if(isset($finish->permata_va_number)){
                                            echo $finish->permata_va_number;
                                        } else {
                                            echo '-';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Payment Guide</td>
                                <td>: <a href=<?php echo $finish->transaction_status; ?>> Download </a></td>
                            </tr>
                            </table>
                        
                        </fieldset>
                        
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- /dashboard content -->

    
    <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright &copy; <a href="http://www.sman1belitang.sch.id" target="_blank">NAMA SEKOLAH</a> <?php echo date('Y'); ?> | IT Development</span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="" class="m-r-10"><i class="fa fa-home"></i> Beranda </a> | <a href="#" class="m-l-10 m-r-10" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-legal"></i>Ketentuan & Syarat PPDB</a></span>
              </p>
            </div>
          </div>
        </div>
        <!-- END PAGE CONTENT -->
      </div>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN BUILDER -->

      <!-- END BUILDER -->
    </section>
    <!-- BEGIN QUICKVIEW SIDEBAR -->

    <!-- END QUICKVIEW SIDEBAR -->
    <!-- BEGIN SEARCH -->

    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->

    <!-- END PRELOADER -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="margin-top:5px;">
    <div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      	<?php $this->load->view('web/step/1'); ?>
      </div>
    </div>
  </div>
</div>

    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
    <script src="assets/kitkat/assets/plugins/jquery/jquery-1.11.1.min.js"></script>

    <script src="assets/kitkat/assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/kitkat/assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
    <script src="assets/kitkat/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="assets/kitkat/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/kitkat/assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="assets/kitkat/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="assets/kitkat/assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
    <script src="assets/kitkat/assets/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="assets/kitkat/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="assets/kitkat/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="assets/kitkat/assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="assets/kitkat/assets/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="assets/kitkat/assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
    <script src="assets/kitkat/assets/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="assets/kitkat/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="assets/kitkat/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="assets/kitkat/assets/plugins/charts-chartjs/Chart.min.js"></script>
    <script src="assets/kitkat/assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script>
    <script src="assets/kitkat/assets/plugins/multidatepicker/multidatespicker.min.js"></script>
    <script src="assets/kitkat/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/kitkat/assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>
   <!-- <script src="assets/kitkat/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="assets/kitkat/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="assets/kitkat/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="assets/kitkat/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="assets/kitkat/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="assets/kitkat/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="assets/kitkat/assets/js/pages/search.js"></script> <!-- Search Script -->
    <script src="assets/kitkat/js/cust.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="assets/kitkat/assets/plugins/step-form-wizard/plugins/parsley/parsley.min.js"></script> <!-- OPTIONAL, IF YOU NEED VALIDATION -->
    <script src="assets/kitkat/assets/plugins/step-form-wizard/js/step-form-wizard.js"></script> <!-- Step Form Validation -->
    <script src="assets/kitkat/assets/js/pages/form_wizard.js"></script>
    <script src="assets/kitkat/assets/input/js/fileinput.js" type="text/javascript"></script>
    <script>

            $("#foto").fileinput({
                allowedFileExtensions : ['jpg'],
                showPreview : false,
                showUpload: false,
                browseClass: "btn btn-primary",
                elErrorContainer: "#errorBlock",
                maxFileSize: 2000,
                removeLabel: "Hapus",
                removeClass: "btn btn-danger",
                removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> "
           });
    </script>

    <script type="text/javascript">
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
    </script>
    <!-- END PAGE SCRIPTS -->

    <script type="text/javascript">
  
      $('#pay-button').click(function (event) {
        event.preventDefault();
        $(this).attr("disabled", "disabled");
      
        $.ajax({
          url: '<?=site_url()?>/snap/token',
          cache: false,

          success: function(data) {
            //location = data;

            console.log('token = '+data);
            
            var resultType = document.getElementById('result-type');
            var resultData = document.getElementById('result-data');

            function changeResult(type,data){
              $("#result-type").val(type);
              $("#result-data").val(JSON.stringify(data));
              //resultType.innerHTML = type;
              //resultData.innerHTML = JSON.stringify(data);
            }

            snap.pay(data, {
              
              onSuccess: function(result){
                changeResult('success', result);
                console.log(result.status_message);
                console.log(result);
                $("#payment-form").submit();
              },
              onPending: function(result){
                changeResult('pending', result);
                console.log(result.status_message);
                $("#payment-form").submit();
              },
              onError: function(result){
                changeResult('error', result);
                console.log(result.status_message);
                $("#payment-form").submit();
              }
            });
          }
        });
      });
    </script>
</body>
</html>
