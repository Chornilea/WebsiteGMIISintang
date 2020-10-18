<!DOCTYPE html>
<html>
	<head>
	 <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">
	<title>Selamat Datang </title>
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
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama/pilihevent">HOME</a></li>
													<li><a class="page-scroll" href="<?= base_url();?>halamanutama/transaksi/<?php echo $pengguna['kode']; ?>">Transkasi</a></li>
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama"><?php echo $pengguna['nama']; ?></a></li>
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
          <h1>Pilih Event yang akan Diikuti</h1>
          <p>Halaman ini untuk memilih event apa saja yang akan diikuti peserta</p>
        </div>
      </div>
			<?php echo $this->session->flashdata('messages'); ?>
			<?php echo $this->session->flashdata('pesan'); ?>
      <div class="row m-b-lg col-lg-8 col-lg-offset-2">
				<?php foreach ($event as $even): ?>
					<?php echo form_open_multipart('halamanutama/ikutievent');?>
        <div class="panel panel-violet">
					<div class="panel-heading">
						<input type="text" name="kodeevent" value="<?php echo $even['kode']; ?>" hidden>
						<input type="text" name="pengguna" value="<?php echo $pengguna['kode']; ?>" hidden>
						<input type="text" name="biaya" value="<?php echo $even['biaya']; ?>" hidden>
						<h4><?php echo $even['judulevent']; ?></h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<img src="<?php echo base_url(); ?>image/event/th/<?php echo $even['foto']; ?>" class="img-thumbnail" alt="">
							</div>
							<div class="col-md-4">
								<div class="">
                        Biaya Kegiatan : <h1 class="m-xs">Rp. <?php echo number_format($even['biaya'],0,',','.') ?></h1>

                        <h5 class="font-bold no-margins">
                            <?= $even['lamakegiatan']; ?>

                        </h5>

                        <small>
														<a href="<?= base_url();?>halamanutama/detilevent1/<?php echo $even['kode']; ?>" class="text-info"><h4>Detil Event</h4> </a>
												</small>
                  </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart2"></div>
                    </div>
                </div>
							</div>
						</div>
					<div class="panel-footer">
						<div class="text-right">

							<button type="submit" class="btn btn-sm btn-primary">Ikuti</button>
						</div>
					</div>
				</div>
				</form>
			<?php endforeach; ?>
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
