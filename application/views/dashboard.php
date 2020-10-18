

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
      <small>Silahkan untuk mengelola data Berita di konten anda</small>
    </div>
  </div>
  <div class="row">

            <div class="col-lg-4">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">Jumlah Berita</h1>

                        <h1 class="font-bold no-margins text-center">
                            4
                        </h1>
                        <small>Berita yang di tampilkan adalah berita yang diupdate harian</small>
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-default" value="Lihat data">
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">jumlah Event</h1>

                        <h1 class="font-bold no-margins text-center">
                            4
                        </h3>
                        <small>Event Yang tampil adalah Event yang akan berlangsung.</small>
                        <br/>
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-default" value="Lihat data">
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs">Jumlah Peserta</h1>

                        <h1 class="font-bold no-margins text-center">
12
                        </h3>
                        <small>Jumlah Peserta di Event Yang Berlangsung</small>
                    </div>
                    <div class="text-center">
                        <input type="button" class="btn btn-default" value="Lihat data">
                    </div>
                    <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
</div>
