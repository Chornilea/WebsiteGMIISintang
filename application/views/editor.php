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
    <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-content">
                <div class="form form-horizontal">
                  <?php echo form_open_multipart('user/updateevent');?>
                    <div class="ibox-title">
                        <h5>Isi Kontent Berita</h5>
                    </div>
                    <div class="ibox-content no-padding"><br>
                      <div class="form-group mt-3"><label class="col-sm-2 control-label mt-3">Kode Event</label>
                        <div class="col-sm-8"><input type="text" id="kodee" name="kodee" placeholder="Head line max 100 karakter" class="form-control" value="<?php echo $edevent['kode']; ?>" readonly></div>
                      </div>
                      <div class="form-group mt-3"><label class="col-sm-2 control-label mt-3">Kategori</label>
                        <div class="col-sm-8">
                          <select class="form-control" id="edjenise" name="edjenise" >
                            <option Value="BA">Event Baru</option>
                            <option Value="BB">Event Mingguan</option>
                          </select></div>
                      </div>
                      <div class="form-group mt-3"><label class="col-sm-2 control-label mt-3">Nama Event</label>
                        <div class="col-sm-8"><input type="text" id="edjudule" name="edjudule" placeholder="Head line max 100 karakter" class="form-control" value="<?php echo $edevent['judulevent']; ?>"></div>
                      </div>
                        <textarea class="summernote" id="edisie" name="edisie">
                            <div class="rata"><?php echo $edevent['isiberita']; ?>
                        </textarea>
                        <hr>
                        <div class="form-group  text-right">
                          <div class="col-sm-11"><input type="submit" class="btn btn-info btn-sm" value="update data"><a href="<?php echo base_url(); ?>user/event" class="btn btn-warning btn-sm">Batal</a></div>
                        </div>
                    </div>
                </form>
              </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>
