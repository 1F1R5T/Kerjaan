<?php

include("core/core.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: page-lembur.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM lembur WHERE id = $id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Kerjaan - Responsive Admin Dashboard Template</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

                <!-- Plugins css-->
                <link href="../plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
                <link href="../plugins/switchery/css/switchery.min.css" rel="stylesheet" />
                <link href="../plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
                <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
                <link href="../plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
                <link href="../plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

                <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/style.css" rel="stylesheet" type="text/css" />


        <script src="assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">


                              <!-- LOGO -->
                              <div class="topbar-left">
                                  <div class="text-center">
                                      <a href="index.html" class="logo"><i class="icon-c-logo">KJN</i><span>Kerjaan</span></a>
                                  </div>
                              </div>

                              <!-- Button mobile view to collapse sidebar menu -->
                              <nav class="navbar-custom">

                                  <ul class="list-inline float-right mb-0">

                                      <li class="list-inline-item notification-list">
                                          <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                              <i class="dripicons-expand noti-icon"></i>
                                          </a>
                                      </li>

                                      <li class="list-inline-item dropdown notification-list">
                                          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                             aria-haspopup="false" aria-expanded="false">
                                              <i class="md md-account-circle noti-icon"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                              <!-- item-->
                                              <div class="dropdown-item noti-title">
                                                  <h5 class="text-overflow"><small>Welcome ! Admin</small> </h5>
                                              </div>

                                              <!-- item-->
                                              <a href="../material/page-login.php" class="dropdown-item notify-item">
                                                  <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                              </a>

                                          </div>
                                      </li>

                                  </ul>

                                  <ul class="list-inline menu-left mb-0">
                                      <li class="float-left">
                                          <button class="button-menu-mobile open-left waves-light waves-effect">
                                              <i class="dripicons-menu"></i>
                                          </button>
                                      </li>
                                      <li class="hide-phone app-search">
                                          <form role="search" class="">
                                              <input type="text" placeholder="Search..." class="form-control">
                                              <a href="#"><i class="fa fa-search"></i></a>
                                          </form>
                                      </li>
                                  </ul>

                              </nav>

                          </div>
                          <!-- Top Bar End -->


                          <!-- ========== Left Sidebar Start ========== -->

                          <div class="left side-menu">
                              <div class="sidebar-inner slimscrollleft">
                                  <!--- Divider -->
                                  <div id="sidebar-menu">
                                      <ul>

                                          <li class="text-muted menu-title">Navigation</li>

                                          <li class="has_sub">
                                              <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                              <ul class="list-unstyled">
                                                  <li><a href="../material/index.php" class="md md-accessibility"> Home</a></li>
                                                  <li><a href="../material/page-sppd.php" class="md md-location-city"> SPPD Dalam Negeri</a></li>
                                                  <li><a href="../material/page-bahan.php" class="md md-settings"> Bahan</a></li>
                                                  <li><a href="../material/page-lembur.php" class="md md-group"> Lembur Pegawai</a></li>
                                                  <li><a href="../material/page-sewa.php" class="md md-drive-eta"> Sewa Kendaraan</a></li>
                                                  <li><a href="../material/page-perlengkapan.php" class="md md-work"> Perlengkapan Kerja</a></li>
                                              </ul>
                                          </li>

                                      </ul>
                                      <div class="clearfix"></div>
                                  </div>
                                  <div class="clearfix"></div>
                              </div>
                          </div>
                          <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Starter</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Kerjaan</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">SPPD</li>
                                </ol>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box table-responsive">
                                  <form action="prosesedit-lembur.php" method="post">
                                    <h4 class="m-t-0 header-title"><b>Form Variabel Add SPDD</b></h4>
                                    <p class="text-muted m-b-15 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />

                                    <div class="form-group m-b-0">
                                      <h5><b>Nama Variabel</b></h5>
                                      <?php $nama_variabel = $data['nama_variabel']; ?>
                                      <select class="selectpicker" name="nama_var" data-style="btn-primary btn-custom">
                                          <option <?php echo ($nama_variabel == 'sppd') ? "selected": "" ?>> Biaya SPPD Dalam Negeri </option>
                                          <option <?php echo ($nama_variabel == 'bahan') ? "selected": "" ?>> Biaya Bahan </option>
                                          <option <?php echo ($nama_variabel == 'lembur') ? "selected": "" ?>> Biaya Lembur Pegawai </option>
                                          <option <?php echo ($nama_variabel == 'sewa') ? "selected": "" ?>> Biaya Sewa Kendaraan </option>
                                          <option <?php echo ($nama_variabel == 'perlengkapan') ? "selected": "" ?>> Biaya Perlengkapan Kerja </option>
                                      </select>
                                    </div>

                                    <div class="form-group m-b-0">
                                      <h5><b>Jenis Usaha</b></h5>
                                      <?php $jns_usaha = $data['jns_usaha']; ?>
                                      <select class="selectpicker" name="jns_usah" data-style="btn-primary btn-custom">
                                          <option <?php echo ($jns_usaha == 'tidak_langsung') ? "selected": "" ?>> BIAYA OPERASI TDK LANGSUNG</option>
                                          <option <?php echo ($jns_usaha == 'usaha') ? "selected": "" ?>> BIAYA USAHA </option>
                                          <option <?php echo ($jns_usaha == 'langsung') ? "selected": "" ?>> BIAYA OPERASI LANGSUNG </option>
                                      </select>
                                    </div>

                                    <div class="form-group m-b-0">
                                      <h5><b>Daerah</b></h5>
                                      <?php $daerah = $data['daerah']; ?>
                                      <select class="selectpicker" name="drh" data-style="btn-primary btn-custom">
                                          <option <?php echo ($daerah == '2') ? "selected": "" ?>> KABID KOM 2 </option>
                                          <option <?php echo ($daerah == '1_3') ? "selected": "" ?>> KABID KOM 1 & 3 </option>
                                          <option <?php echo ($daerah == 'qhse') ? "selected": "" ?>> QHSE </option>
                                          <option <?php echo ($daerah == 'mkt') ? "selected": "" ?>> MKT </option>
                                          <option <?php echo ($daerah == 'kacab') ? "selected": "" ?>> KACAB </option>
                                          <option <?php echo ($daerah == 'keu_adm') ? "selected": "" ?>> KEU & ADM  </option>
                                          <option <?php echo ($daerah == 'pkbl') ? "selected": "" ?>> PKBL </option>
                                          <option <?php echo ($daerah == 'pik') ? "selected": "" ?>> PIK </option>
                                          <option <?php echo ($daerah == 'aebt') ? "selected": "" ?>> AEBT </option>
                                          <option <?php echo ($daerah == 'ind') ? "selected": "" ?>> IND </option>
                                          <option <?php echo ($daerah == 'min') ? "selected": "" ?>> MIN </option>
                                          <option <?php echo ($daerah == 'bara') ? "selected": "" ?>> BARA </option>
                                          <option <?php echo ($daerah == 'serco') ? "selected": "" ?>> SERCO </option>
                                          <option <?php echo ($daerah == 'ksp') ? "selected": "" ?>> KSP </option>
                                          <option <?php echo ($daerah == 'lab') ? "selected": "" ?>> LAB </option>
                                          <option <?php echo ($daerah == 'property') ? "selected": "" ?>> PROPERTY </option>
                                      </select>
                                    </div>

                                    <div class="form-group m-b-0">
                                      <h5><b>Kode</b></h5>
                                      <?php $kode = $data['kode']; ?>
                                      <select class="selectpicker" name="kd" data-style="btn-primary btn-custom">
                                          <option <?php echo ($kode == '12') ? "selected": "" ?>>12</option>
                                          <option <?php echo ($kode == '13') ? "selected": "" ?>>13</option>
                                          <option <?php echo ($kode == '14') ? "selected": "" ?>>14</option>
                                          <option <?php echo ($kode == '41') ? "selected": "" ?>>41</option>
                                          <option <?php echo ($kode == '46') ? "selected": "" ?>>46</option>
                                          <option <?php echo ($kode == '47') ? "selected": "" ?>>47</option>
                                          <option <?php echo ($kode == '48') ? "selected": "" ?>>48</option>
                                          <option <?php echo ($kode == '11_011') ? "selected": "" ?>>11-011</option>
                                          <option <?php echo ($kode == '14_041') ? "selected": "" ?>>14-041</option>
                                          <option <?php echo ($kode == '14_042') ? "selected": "" ?>>14-042</option>
                                          <option <?php echo ($kode == '15_051') ? "selected": "" ?>>15-051</option>
                                          <option <?php echo ($kode == '15_052') ? "selected": "" ?>>15-052</option>
                                          <option <?php echo ($kode == '16_061') ? "selected": "" ?>>16-061</option>
                                          <option <?php echo ($kode == '17_071') ? "selected": "" ?>>17-071</option>
                                          <option <?php echo ($kode == '17_072') ? "selected": "" ?>>17-072</option>
                                          <option <?php echo ($kode == '18_082') ? "selected": "" ?>>18-082</option>
                                          <option <?php echo ($kode == '18_083') ? "selected": "" ?>>18-083</option>
                                          <option <?php echo ($kode == '19_091') ? "selected": "" ?>>19-091</option>
                                          <option <?php echo ($kode == '19_092') ? "selected": "" ?>>19-092</option>
                                          <option <?php echo ($kode == '20_101') ? "selected": "" ?>>20-101</option>
                                          <option <?php echo ($kode == '20_102') ? "selected": "" ?>>20-102</option>
                                          <option <?php echo ($kode == '21-111') ? "selected": "" ?>>21-111</option>
                                      </select>
                                    </div>

                                    <div class="form-group m-b-0">
                                      <h5><b>Tahun</b></h5>
                                      <?php $tahun = $data['tahun']; ?>
                                      <select class="selectpicker" name="th" data-style="btn-primary btn-custom">
                                          <option <?php echo ($tahun == '2018') ? "selected": "" ?>>2018</option>
                                          <option <?php echo ($tahun == '2017') ? "selected": "" ?>>2017</option>
                                          <option <?php echo ($tahun == '2016') ? "selected": "" ?>>2016</option>
                                          <option <?php echo ($tahun == '2015') ? "selected": "" ?>>2015</option>
                                          <option <?php echo ($tahun == '2014') ? "selected": "" ?>>2014</option>
                                      </select>
                                    </div>

                                    <div class="form-group m-b-0">
                                      <h5><b>Pengeluaran</b></h5>
                                      <input type="text" class="form-control" maxlength="25" name="pengelrn" id="defaultconfig" placeholder="287497" value="<?php echo $data['pengeluaran'] ?>"/>
                                    </div>

                                    <br>

                                    <div class="form-group m-b-0">
                                        <button class="btn btn-primary waves-effect waves-light" name="simpan" type="submit">
                                            Update
                                        </button>
                                    </div>
                                  </form>

                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    Copyright (c) 2018 Copyright Holder All Rights Reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


                <!-- Required datatable js -->
                <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
                <!-- Buttons examples -->
                <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
                <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
                <script src="../plugins/datatables/jszip.min.js"></script>
                <script src="../plugins/datatables/pdfmake.min.js"></script>
                <script src="../plugins/datatables/vfs_fonts.js"></script>
                <script src="../plugins/datatables/buttons.html5.min.js"></script>
                <script src="../plugins/datatables/buttons.print.min.js"></script>
                <script src="../plugins/datatables/buttons.colVis.min.js"></script>
                <!-- Responsive examples -->
                <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
                <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>

                <script src="../plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
                <script src="../plugins/switchery/js/switchery.min.js"></script>
                <script type="text/javascript" src="../plugins/multiselect/js/jquery.multi-select.js"></script>
                <script type="text/javascript" src="../plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
                <script src="../plugins/select2/js/select2.min.js" type="text/javascript"></script>
                <script src="../plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
                <script src="../plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
                <script src="../plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
                <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

                <script type="text/javascript" src="../plugins/autocomplete/jquery.mockjax.js"></script>
                <script type="text/javascript" src="../plugins/autocomplete/jquery.autocomplete.min.js"></script>
                <script type="text/javascript" src="../plugins/autocomplete/countries.js"></script>
                <script type="text/javascript" src="assets/pages/autocomplete.js"></script>

                <script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>

                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#datatable').DataTable();

                        //Buttons examples
                        var table = $('#datatable-buttons').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf']
                        });

                        table.buttons().container()
                                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    } );

                </script>

    </body>
</html>
