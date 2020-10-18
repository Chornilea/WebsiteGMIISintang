<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event Camp GMII | Login</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/style2.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div >
            <div>

                <h4 class="logo-name">EVENT GMII ONLINE</h4>

            </div>
            <h3>Selamat Datang</h3>
            <p>Halaman ini hanya bisa diakses oleh bagian yang ditentukan sebagai ADMIN
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Silahkan Login</p>
            <?php echo $this->session->flashdata('messages'); ?>
            <form class="form-horizontal text-sm" action="<?php echo base_url('admin'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Username" required="" valeu="<?= set_value('email'); ?>">
                </div>
                <div class="form-group">
                    <input type="password" id="sandi" name="sandi" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>

</html>
