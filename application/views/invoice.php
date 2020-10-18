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
                        <ul class="nav navbar-nav navbar-right">
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama/pilihevent">HOME</a></li>
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama/transaksi">Transkasi</a></li>
                          <li><a class="page-scroll" href="<?= base_url();?>halamanutama">log Out</a></li>
                        </ul>
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
          <h1>INVOICE</h1>
          <p>Sebagai Bukti Kepesertaan</p>
        </div>
      </div>
      <div class="row m-b-lg">
        <?php foreach ($transaksi as $rtransaksi): ?>
        <div class="panel panel-success">
					<div class="panel-heading text-center">
            <?php
                 
                  if($rtransaksi['aksi'] == 0){
                   $header =  " <h3> Silahkan Upload Bukti Transfer </h3>";
                   $keterangan =  " <div class='text-center col-md-6 col-lg-offset-3'>
                    <h3> Upload Bukti transfer  </h3>
                    <div class='form-group'>
                    <input type='file' class='form-control' id='inputPassword2' placeholder='Password'>
                    </div>
                    <button type='submit' class='btn btn-primary mb-2'>Upload Dokumen</button>
                  </div>";
                  }else{
                    $header =  " <h3> Kartu Kepesertaan </h3>";
                    $keterangan =  " <div class='text-center col-md-8 col-lg-offset-2'>
                    <h4> Transaksi Sukses dan Invoice Ini Adalah Sebagai Bukti Kepesertaan yang sah  </h4><br>
                    
                    <button type='submit' class='btn btn-primary mb-2'>Cetak Kartu / Invoice</button>
                    <div class='form-group'>
                    </div>
                    
                  </div>";
                  }
             ?>
						<h3> <?php echo $header; ?> </h3>
					</div>
    					<div class="panel-body">
                
    						<div class="row">
                  <div class="col-sm-6">
                      <h5>Data Peserta</h5>
                      <address>
                          <strong><?php echo $rtransaksi['nama']; ?></strong><br>
                          081257389999<br>
                          Pontianak<br>
                      </address>
                  </div>
                  <div class="col-sm-6 text-right">
                      <h4>Kode Invoice</h4>
                      <h4 class="text-navy"><?php echo $rtransaksi['kodetransaksi']; ?></h4>

                      <address>
                          <strong>Tanggal Order</strong><br>
                           <?php echo $rtransaksi['tanggalorder']; ?><br>
                      </address>
                  </div>
                </div>
                  <table class="table invoice-table">
                    <tr>
                      <td>No</td>
                      <td>Nama Event</td>
                      <td>harga</td>
                    </tr>
                    <tr>
                      <td><?php $no=1; echo $no++ ?></td>
                      <td><?php echo $rtransaksi['judulevent']; ?> </td>
                      <td>Rp. <?php echo number_format($rtransaksi['harga'],0,',','.') ?></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Jumlah</td>
                      <td>Rp. <?php echo number_format($rtransaksi['harga'],0,',','.') ?></td>
                    </tr>
                  </table>
                  <?php echo $keterangan; ?>
                <?php endforeach ?>
    					</div>
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
