html<!DOCTYPE html>
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
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama/pilihevent">HOME</a></li>
						  <li><a class="page-scroll" href="<?= base_url();?>halamanutama/transaksi">Transkasi</a></li>
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama">log Out</a></li>
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
          <h1><u> DAFTAR TRANSAKSI</u> </h1>
          <p>Halaman Ini menampilkan data transaksi yang pernah anda lakukan, <p>Silahkan Lakukan Transaksi Paling Lambat 1 x 24 Jam
          Jika lewat maka transaksi akan otomatids dibatalkan</p>
        </div>
      </div>
			<?php echo $this->session->flashdata('messages'); ?>
			<?php echo $this->session->flashdata('pesan'); ?>
      <div class="row m-b-lg col-lg-8 col-lg-offset-2">
				<?php foreach ($transaksi as $rtransaksi): ?>
					<?php echo form_open_multipart('halamanutama/invoice/'.$rtransaksi['kodetransaksi']);?>
        <div class="panel panel-violet">
					<div class="panel-heading">
						<h4>Kode Transkasi : <?= $rtransaksi['kodetransaksi']; ?></h4>
					</div>
					<div class="panel-body">
						<table class="table table-responsive">
							<tr>
								<td>Nama Transaksi</td>
								<td>:</td>
								<td><?= $rtransaksi['judulevent']; ?> </td>
							</tr>
							<tr>
								
								<?php
                  $valid= $rtransaksi['aksi'];
									$tgl_sekarang=date("Y-m-d");//tanggal sekarang
									$tgl_mulai= $rtransaksi['tanggalorder']; // tanggal launching aplikasi
									$jangka_waktu = strtotime('+1 days', strtotime($tgl_mulai));// jangka waktu + 365 hari
									$tgl_exp=date("Y-m-d",$jangka_waktu);//tanggal expired
									if ($tgl_sekarang >=$tgl_exp )
									{
									$keterangan =  "Transaksi Sudah Kadaluarsa";
									$tombol =  "Transaksi Sudah Kadaluarsa";
									}
									else if($valid==1)
                  {
                    $keterangan =  "<a href=''><strong class='text-danger'>Transaksi Sukses</strong></a>";
                    $tombol =  "<button type='submit' class='btn btn-sm btn-warning'>Cetak Bukti Transaksi</button>";
                  }else
									{
									$keterangan =  "<a href=''>Menunggu Transfer</a>";
									$tombol =  "<button type='submit' class='btn btn-sm btn-info'>Upload Bukti Transaksi</button>";
									
									}?>
							
								<td>Tanggal Order</td>
								<td>:</td>
								<td><?= $rtransaksi['tanggalorder']; ?> </td>
							</tr>
							<tr>
								<td>Jumlah Transfer</td>
								<td>:</td>
								<td>Rp. <?php echo number_format($rtransaksi['harga'],0,',','.') ?></td>
							</tr>
							<tr>
								<td>Status Transaksi</td>
								<td>:</td>
								<td><label><small class="text-warning"><?php echo $keterangan; ?></small></label></td>
							</tr>
						</table>
						<div class="text-center">
							<small>Silahkan lakukan Pembayaran di rekening dibawah ini</small>
							<li class="text-info">BNI : 100 123 123 a/n Chornilia Mortiningsih</li>
                      		<li class="text-info">Mandiri : 147 000 111 2 a/n Chornilia Mortiningsih</li>
						</div>
					</div>
					<div class="panel-footer">
						<div class="text-right">
							<?php echo $tombol; ?>
						</div>
					</div>
				</div>
				</form>
			<?php endforeach ?>
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
