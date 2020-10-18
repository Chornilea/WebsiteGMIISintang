

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
    <div class="col-lg-12">
      <div class="wrapper wrapper-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h3> TABEL DATA PESERTA REGISTRASI </h3>
                <div class=""><?php echo $this->session->flashdata('flash'); ?></div>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <td>No</td>
                        <td>Foto </td>
                        <td>Nama Peserta</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Tanggal Lahir</td>
                        <td>Alamat</td>
                        <td>Email</td>
                        <td>Telepon</td>
                        <td>Validasi Transaksi</td>
                        <td>Action</td>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php foreach($pengguna as $rows): ?>
                        <tr class="odd gradeX">
                          <td><?php echo $no++; ?></td>
                          <td><img class="img-thumbnail fotogallery" height="100" width="150" src="<?php echo base_url(); ?>image/peserta/<?php echo $rows['foto']; ?>"></td>
                          <td><?php echo $rows['nama']; ?></td>
                          <td><?php echo $rows['username']; ?></td>
                          <td><?php echo $rows['password']; ?></td>
                          <td><?php echo $rows['tgllahir']; ?></td>
                          <td><?php echo $rows['alamat']; ?></td>
                          <td><?php echo $rows['email']; ?></td>
                          <td><?php echo $rows['telepon']; ?></td>
                          <td><a href="<?php echo base_url();?>user/adtransaksi/<?php echo $rows['kode']; ?>" type="button" class="btn btn-sm btn-info hapusberita">Lihat Transaksi</a></td>
                          <td><a href="<?php echo base_url();?>user/hapuspeserta/<?php echo $rows['kode']; ?>" type="button" class="btn btn-sm btn-danger hapusberita">hapus</a></td>

                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <i class="fa fa-laptop modal-icon"></i>
                <h4 class="modal-title">Tambah Berita</h4>
                <small class="font-bold">Form ini berfungsi untuk menambahkan berita-berita terbaru untuk ditampilkna dihalaman web</small>
              </div>
              <div class="modal-body">
                <div class="form-horizontal">
                  <?php echo form_open_multipart('user/tambahberita');?>
                  <div class="form-group"><label class="col-sm-4 control-label">Judul Berita</label>
                    <div class="col-sm-8"><input type="text" id="judul" name="judul" placeholder="judul berita max 50 Karakter" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Jenis Berita</label>
                    <div class="col-sm-8"><input type="text" id="jenis" name="jenis" placeholder="Isi judul unik" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Headline</label>
                    <div class="col-sm-8"><textarea type="text" id="headline" name="headline" placeholder="Head line max 100 karakter" class="form-control"></textarea></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Isi Berita</label>
                    <div class="col-sm-8"><textarea type="text" id="isi" name="isi" placeholder="Isi Berita" class="form-control"></textarea></div>
                  </div>
                  <div class="form-group"><label class="col-sm-4 control-label">Foto / Gambar</label>
                    <div class="col-sm-8"><input type="file" id='foto' name='foto' class="form-control"></div>
                  </div>
                  <div class="mt-3 text-right">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer">

            </div>
          </div>
        </div>
      </div>
      <div class="modal inmodal" id="editberita" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content animated bounceInRight">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <i class="fa fa-laptop modal-icon"></i>
              <h4 class="modal-title">Edit Berita</h4>
              <small class="font-bold">Form ini berfungsi untukMengupdate berita-berita terbaru untuk ditampilkan dihalaman web</small>
            </div>
            <div class="modal-body">
              <div class="form-horizontal">
                <?php echo form_open_multipart('user/updateberita');?>
                <div class="form-group"><label class="col-sm-4 control-label">Jenis Berita</label>
                  <div class="col-sm-8"><input type="text" id="edjenis" name="edjenis" placeholder="Isi judul unik" class="form-control"></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label mt-2">Judul Berita</label>
                  <input type="text" id="kode"  name="kode" value="" class="hidden">
                  <div class="col-sm-8"><input type="text" id="edjudul" name="edjudul" placeholder="judul berita max 50 Karakter" class="form-control" value=""></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label mt-3">Headline</label>
                  <div class="col-sm-8"><textarea type="text" id="edheadline" name="edheadline" placeholder="Head line max 100 karakter" class="form-control"></textarea></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Isi Berita</label>
                  <div class="col-sm-8"><textarea type="text" id="edisi" name="edisi" placeholder="Isi Berita" class="form-control"></textarea></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Foto / Gambar</label>
                  <div class="col-sm-8"><input type="file" id="edfoto" name="edfoto" placeholder="Isi Berita" class="form-control"></div>
                </div>
                <div class="form-group text-right">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="pull-right">
        Times Rending <strong>0.008</strong> sec.
      </div>
      <div>
        <strong>Design by</strong> RCA &copy; 2017
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
