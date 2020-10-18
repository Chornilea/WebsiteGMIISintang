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
  <link href="<?php echo base_url(); ?>assets/css/plugins/summernote/summernote.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
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
              <a href="user/setting"><i class="fa fa-th-large"></i> <span class="nav-label">setting</span> <span class="fa arrow"></span></a>
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
