<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
	<title>Selamat Datang</title>
	</head>
<body id="page-top">
  <div class="navbar-wrapper">
          <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container">
                  <div class="navbar-header page-scroll">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><b>Event Camp GMII</b> </a>
                  </div>
                   <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a class="page-scroll" href="<?= base_url();?>">HOME</a></li>
                          <li><a class="page-scroll" href="#contact">Hubungi Kami</a></li>
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama/login">Login</a></li>
                      </ul>
                  </div>
              </div>
          </nav>
  </div>

  <section id="team" class="gray-section team">
    <div class="container">
      <div class="row m-b-lg">
        <div class="col-lg-12 text-center">
          <div class="violet-line"></div>
          <h1>Login Peserta</h1>
          <p>untuk mendaftar menjadi peserta dalam event yang kami sediakan silahkan lakukan login untuk mendapatkan tiket</p>
        </div>
      </div>
      <div class="row m-b-lg">
        <div class="col-lg-12 wow fadeInLeft text-center">
					<?php echo $this->session->flashdata('messages'); ?>
          <div class="team-member">
            <div class="col-lg-6 col-lg-offset-3 text-center m-t-lg m-b-lg">
            <form role="form" action="<?php echo base_url(); ?>halamanutama/auth" method="post">
                <div class="form-group"><label>Username</label> <input type="text" id="username" name="username" placeholder="Enter username" class="form-control" value="<?php echo set_value('username');?>"></div>
                <div class="form-group"><label>Password</label> <input type="password" id="password" name="password" placeholder="Password" class="form-control" value=""></div>
                <div>
                    <button class="btn btn-sm btn-primary pull-right " type="submit"><small>Log in</small></button>
                </div>
            </form>
          </div>
          <div class="col-lg-6 col-lg-offset-3 text-center m-t-lg m-b-lg">
            <div class="form-group">
              <p>Jika anda belum memiliki user akses silahkan melakukan regisatrasi terlebih dahulu</p>
            <label><a href="<?= base_url(); ?>halamanutama/registrasi">Lupa Password</a></label> | <label><a href="<?= base_url(); ?>halamanutama/registrasi">Registrasi</a></label>
          </div>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section>
		<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/pace.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/classie.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/animasiheader.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/inspina.js"></script>
    <?php foreach ($setting as $rsetting): {
    $namaweb = $rsetting['namaweb'];
    $alamat = $rsetting['alamat'];
    $telepon = $rsetting['telepon'];

      // code...
     ?>
    <section id="contact" class="gray-section contact">
        <div class="container">
            <div class="row m-b-lg">
                <div class="col-lg-12 text-center">
                    <div class="navy-line"></div>
                    <h1>Contact Us</h1>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
            <div class="row m-b-lg">
                <div class="col-lg-3 col-lg-offset-3">
                    <address>
                        <strong><span class="navy"></span></strong><br/>
                        <?= $namaweb; ?><br/>
                        <?= $alamat; ?><br/>
                        <abbr title="Phone">P:</abbr> <?= $telepon; ?>
                    </address>
                </div>
                <div class="col-lg-4">
                    <p class="text-color">
                        Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="mailto:test@email.com" class="btn btn-violet">Send us mail</a>
                    <p class="m-t-sm">
                        Or follow us on social platform
                    </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                    <p><strong>&copy; <?= $namaweb; ?></strong><br/> <?php echo $alamat; ?>, <?php echo $telepon; ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php } endforeach ?>

</body>
</html>
