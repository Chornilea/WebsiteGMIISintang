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
                <h1>Hubungi Kami</h1>
                <p></p>
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

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="m-t-sm">
                    atau tambahkan Flatporm Sosial Media Kami
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
