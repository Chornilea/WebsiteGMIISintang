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

<div class="wrapper wrapper-content">
  <div class="g">
    <div class="modal-content animated bounceInRight">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <i class="fa fa-laptop modal-icon"></i>
        <h4 class="modal-title">Edit Berita</h4>
        <small class="font-bold">Form ini berfungsi untukMengupdate berita-berita terbaru untuk ditampilkan dihalaman web</small>
      </div>
      <div class="">
        <div class="form-horizontal">
          <?php echo form_open_multipart('user/updateberita');?>
          <div class="form-group mt-3"><label class="col-sm-2 control-label mt-3">Kode Event</label>
            <div class="col-sm-8"><input type="text" id="kodeberita" name="kodeberita" placeholder="Head line max 100 karakter" class="form-control" value="<?php echo $edberita['kode']; ?>" readonly></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Kategori Berita</label>
            <div class="col-sm-8">
              <select class="form-control" id="edjenis" name="edjenis" >
                <option Value="AA">Berita Utama</option>
                <option Value="AB">Berita tambahan</option>
              </select></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label mt-2">Judul Berita</label>
            <input type="text" id="kode"  name="kode" value="" class="hidden">
            <div class="col-sm-8"><input type="text" id="edjudul" name="edjudul" placeholder="judul berita max 50 Karakter" class="form-control" value="<?php echo $edberita['judulberita']; ?>"></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label mt-3">Headline</label>
            <div class="col-sm-8"><textarea type="text" id="edheadline" name="edheadline" placeholder="Head line max 100 karakter" class="form-control"><?php echo $edberita['kontent']; ?></textarea></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Isi Berita</label>
            <div class="col-sm-8"><textarea type="text" id="edisi" name="edisi" placeholder="Isi Berita" class="form-control edisi"><p><?php echo $edberita['isiberita']; ?></p></textarea></div>
          </div>
          <div class="form-group"><label class="col-sm-2 control-label">Foto / Gambar</label>
            <div class="col-sm-8"><input type="file" id="edfoto" name="edfoto" placeholder="Isi Berita" class="form-control"></div>
          </div>
          <div class="form-group text-right">
            <div class="col-sm-11">
            <button type="submit" class="btn btn-sm btn-primary">Update Data</button>
            <a href="<?php echo base_url(); ?>user/berita" class="btn btn-warning btn-sm">Batal</a>
          </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
