
<?php include("../material/core/core.php"); ?>
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

        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
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
                                              <a href="index.php" class="dropdown-item notify-item">
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

                          <div class="left side-menu">
                              <div class="sidebar-inner slimscrollleft">
                                  <!--- Divider -->
                                  <div id="sidebar-menu">
                                      <ul>

                                          <li class="text-muted menu-title">Navigation</li>

                                          <li class="has_sub">
                                              <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span> <span class="menu-arrow"></span></a>
                                              <ul class="list-unstyled">
                                                  <li><a href="media.php" class="md md-accessibility"> Home</a></li>
                                                  <li><a href="page-sppd.php" class="md md-location-city"> SPPD Dalam Negeri</a></li>
                                                  <li><a href="page-bahan.php" class="md md-settings"> Bahan</a></li>
                                                  <li><a href="page-lembur.php" class="md md-group"> Lembur Pegawai</a></li>
                                                  <li><a href="page-sewa.php" class="md md-drive-eta"> Sewa Kendaraan</a></li>
                                                  <li><a href="page-perlengkapan.php" class="md md-work"> Perlengkapan Kerja</a></li>
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
                                    <h4 class="m-t-0 header-title">PENGELUARAN ANGGARAN SPPD PT. SUCOFINDO (PERSERO) CIREBON</h4>
                                    <a href="add-sewa.php" class="pull-right btn btn-inverse btn-sm waves-effect waves-light">Add</a>
                                    <p class="text-muted font-13 m-b-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                      <?php if(isset($_GET['status'])): ?>
                                          <p>
                                              <?php
                                                  if($_GET['status'] == 'sukses'){
                                                      echo "Tambah data baru berhasil!";
                                                  } else {
                                                      echo "Tambah data gagal!";
                                                  }
                                              ?>
                                          </p>
                                      <?php endif; ?>
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Variabel</th>
                                            <th>Jenis Usaha</th>
                                            <th>Daerah</th>
                                            <th>Kode</th>
                                            <th>Tahun</th>
                                            <th>Pengeluaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        		<?php
                                        			 $no=0;
                                        			 $sql = "SELECT * FROM sewa";
                                        			 $query = mysqli_query($db, $sql);


                                        			 while($data = mysqli_fetch_array($query)){
                                        				 $no++;
                                                 $pengeluaran = $data['pengeluaran'];
                                                   echo "<tr>";

                                        					 echo "<td>".$no."</td>";
                                        					 echo "<td>".$data['nama_variabel']."</td>";
                                                   echo "<td>".$data['daerah']."</td>";
                                        					 echo "<td>".$data['jns_usaha']."</td>";
                                        					 echo "<td>".$data['kode']."</td>";
                                        					 echo "<td>".$data['tahun']."</td>";
                                        					 echo "<td>".$data['pengeluaran']."</td>";

                                                   echo "<td>";
                                                   echo "<a href='edit-sewa.php?id=".$data['id']."'> Edit </a> |";
                                                   echo "<a href='delete-sewa.php?id=".$data['id']."'> Hapus </a>";
                                                   echo "</td>";


                                        					 echo "</tr>";
                                        			 }
                                               ?>
																				</tbody>
                                        <tfoot>
                                          <tr>
                                              <td colspan="8">

                                                                                  <?php
                                                                                  $sql = mysqli_query($db, "SELECT sum(pengeluaran) AS pengeluaran FROM sewa")or die(mysqli_error($db));
                                                                                  while($data=mysqli_fetch_assoc($sql)):
                                                                                  ?>

                                                                                  <?php
                                                                                  $pengeluaran = $data['pengeluaran'];
                                                                                  function pengeluaran($pengeluaran){

                                                                                   $hasil_rupiah = "Total : Rp " . number_format($pengeluaran,2,',','.');
                                                                                   return $hasil_rupiah;

                                                                                  }

                                                                                  echo pengeluaran($pengeluaran);
                                                                                  ?>

                                                                                  <!-- <p>Total : <?= $data['pengeluaran'] ?> </p> -->
                                                                                 <?php endwhile; ?></td>
                                          </tr>
                                        </tfoot>
                                    </table>
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
