<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event Camp GMII | Admin Home</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url(); ?>assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url(); ?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/style2.css" rel="stylesheet">

</head>

    <body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="<?php echo base_url(); ?>user">User</a></li>
                            <li ><a href="<?php echo base_url(); ?>user/setting">Setting Aplikasi</a></li>
                            <li ><a href="<?php echo base_url(); ?>user/berita">Tabel Berita</a></li>
                            <li ><a href="<?php echo base_url(); ?>user/event">Tabel Event</a></li>
                            <li ><a href="<?php echo base_url(); ?>user/peserta">Daftar Peserta</a></li>
                            <li ><a href="<?php echo base_url(); ?>admin/logout">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">

            </ul>
        </nav>
        </div>
            <div class="row  border-bottom white-bg dashboard-header">
                <div class="col-sm-5">
                    <h2>Welcome <?php echo $user['email']; ?></h2>
                    <small>Silahkan untuk mengelola data konten anda</small>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <input type="button" class="btn btn-info btn-sm tambah" value="Tambah Data">
                                </div>
                                <div class="ibox-content">
                                    <div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<td>No</td>
													<td>User Name</td>
													<td>Password</td>
													<td>Nama Lengkap</td>
													<td>Telepon</td>
                          <td>Action</td>

												</tr>
											</thead>
											<tbody>
												<?php $no=1; ?>
												<?php foreach($users as $rows): ?>
												<tr class="odd gradeX">
													<td><?php echo $no++; ?></td>
													<td><?php echo $rows['userid']; ?></td>
													<td><?php echo $rows['nama']; ?></td>
													<td><?php echo $rows['email']; ?></td>
													<td><?php echo $rows['pasword']; ?></td>
                          <td>edit</td>

												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer">
                    <div class="pull-right">
                        Times Rending <strong>0.008</strong> sec.
                    </div>
                    <div>
                        <strong>Design by</strong> RCA &copy; 2017
                    </div>
                </div>
            </div>
        </div>

        </div>


    </div>
    <div class="modal inmodal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" align="center">
    </div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
</body>
<script>
$("#myModal").load('<?php echo site_url('index.php/welcome/tambahuser')?>');
$(".tambah").click(function(){
        $("#myModal").modal()
    });


</script>
</html>
