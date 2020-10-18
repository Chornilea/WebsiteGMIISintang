<section id="ff" class="container services">
    <div class="row">
    </div>
</section>
<section id="homes" class="homes">
  <div id="inSlider" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#inSlider" data-slide-to="0" class="active"></li>
      <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="container">
          <div class="carousel-caption">
            <h1>Selamat Datang<br/> Dilayanan Event Kami</h1>
              Di website Event GMII<br/>

            </h3>
            <p></p>

          </div>
          <div class="carousel-image wow zoomIn">
            <img src="" alt="laptop"/>
          </div>
        </div>
        <!-- Set background for slide in css -->
        <div class="header-back one"></div>

      </div>
      <div class="item">
        <div class="container">
          <div class="carousel-caption blank">
            <h1>Kegiatan ibadah<br/> Dengan Konsep Event</h1>
            <p>Kami hadir untuk mewujudkan impian anda </p>
            <p><a class="btn btn-lg btn-primary" href="#pricing" role="button">selengkapnya</a></p>
          </div>
        </div>
        <!-- Set background for slide in css -->
        <div class="header-back two"></div>
      </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span></a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span></a>
  </div>
  <div class="row">
      <div class="col-lg-12 text-center">
          <div class="violet-line"></div>
          <h1></h1>
          <p></p>
      </div>
  </div>
  <div class="container features-block">
    <div classs="row">
      <?php foreach($headlin as $rowb): ?>
      <div class="col-lg-12 features-text">
        <div class="col-lg-4">
          <img class="img-thumbnail" src="<?php echo base_url(); ?>image/berita/<?php echo $rowb['foto']; ?>">
        </div>
        <div class="col-lg-8">
          <small><?= $rowb['kategori']; ?></small>
          <h4><?= $rowb['judulberita'];  ?></h4>
          <p><?= $rowb['kontent'] ?></p>
          <a href="<?php echo base_url(); ?>halamanutama/agenda" class="btn btn-violet">Learn more</a>
        </div>
      </div>
    <?php endforeach ?>
    </div>
</section>
<section id="features" class="features">
    <div class="">
      <section  class="violet-section testimonials">
              <div class="row">
                  <div class="col-lg-12 text-center wow zoomIn">
                      <i class="fa fa-comment big-icon"></i>
                      <h1>
                          Berita Update saat ini
                      </h1>
                      <div class="testimonials-text">
                          <i>"Informasi menarik yang dapat kami sajikan untuk keseruan dari setiap event yang kami lakukan."</i>
                      </div>
                  </div>
              </div>
      </section>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="violet-line"></div>
                <h1></h1>
                <p></p>
            </div>
        </div>
        <div class="row">
          <?php foreach($berita as $rberita): ?>
            <a href="<?php echo base_url(); ?>halamanutama/newsupdate/<?= $rberita['kode'];  ?>">
            <div class="col-lg-4 col-lg-offset-1 features-text">
                <div class="col-lg-4"><img class="img-thumbnail" src="<?php echo base_url(); ?>/image/berita/<?php echo $rberita['foto']; ?>"></div>
                <div class="col-lg-8">
                <small><?php echo $rberita['tanggal']; ?></small>
                <h2><?php echo $rberita['judulberita']; ?></h2>
                <i class="fa fa-bar-chart big-icon pull-right"></i>
                <p><?= $rberita['kontent']; ?></p>
              </div>
            </div>
          </a>
          <?php endforeach ?>
        </div>
    </div>
</section>
<section id="pricing" class="pricing">
  <section  class="violet-section testimonials">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center wow zoomIn">
                  <i class="fa fa-comment big-icon"></i>
                  <h1>
                      Event Yang tersedia saat ini
                  </h1>
                  <div class="testimonials-text">
                      <i>"Berbagai Event yang kami selenggarakan dapat anda lihat, dan untuk menjadi peserta disarankan anda segera bergabung untuk mengisi form registrasi."</i>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <div class="container">
      <?php foreach($event as $revent): ?>
        <div class="row features-block">
            <div class="col-lg-4 col-lg-offset-1 wow zoomIn">
              <div class="wow fadeInRight">
                <a href="<?php echo base_url(); ?>halamanutama/detilevent/<?= $revent['kode'];  ?>" ><img src="<?php echo base_url(); ?>image/event/th/<?= $revent['foto']; ?>" alt="dashboard" class="img-responsive pull-right"></a>
              </div>
          </div>
          <div class="col-lg-4 col-lg-offset-1 wow zoomIn">
                <div class="wow fadeInRight">
                <small class="label label-primary"><i class="fa fa-clock-o"></i> <?= $revent['kategori']; ?></small>
                <h2><?= $revent['judulevent']; ?></h2>
                <p><?= $revent['kontent']; ?></p>
                <div class="col-lg-9" id="collapse" style="display:none"><p><?php echo $revent['isiberita']; ?></p></div>
      					<a href="<?php echo base_url(); ?>halamanutama/detilevent/<?= $revent['kode'];  ?>" class="nav-toggle">Read More</a>
              </div>
          </div>
        </div>
        <?php endforeach ?>
        <div class="row m-t-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">

            </div>
        </div>
    </div>
</section>
<section id="team" class="gray-section team">
  <div class="container">
    <div class="row m-b-lg">
      <div class="col-lg-12 text-center">
        <div class="violet-line"></div>
        <h1>Tentang Kami</h1>
        <p>Hal yang perlu di ketahui menegenai dari sistem informasi GMII Berbasis web </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 wow fadeInLeft">
        <div class="team-member">
          <img src="<?php echo base_url(); ?>image/logo.jpg" class="img-responsive img-circle img-small" alt="">
          <?php foreach ($setting as $konsep): ?>
          <h4><span class="violet">Konsep</span> Event Camp</h4>
          <p><?= $konsep['konsep'];  ?></p>
          <h4><span class="violet">Visi-Misi</span> Event Camp</h4>
          <p>
            <?= $konsep['visimisi']; ?>
          </p>
          <h4><span class="violet">Tujuan </span> Even Camp</h4>
          <p><?= $konsep['tujuan']; ?></p>
        </div>
      </div>


    </div>
  <?php endforeach ?>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
      
      </div>
    </div>
  </div>
</section>
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script>
//$(document).ready(function(){
//  $('.nav-toggle').click(function(){
//    var collapse_content_selector=$(this).attr('href');
//    var toggle_switch = $(this);
//    $(collapse_content_selector).toggle(function(){
//      if($(this).css('display')=='none'){
//        toggle_switch.html('Read More');
//      }else{
//        toggle_switch.html('Read less');
//      }
//    });
//  });
//});
</script>
