

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
              <div class="">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <input type="button" class="btn btn-info btn-sm tambah" value="Tambah Data" data-toggle="modal" data-target="#event">
                      <div class="alert alert-danger"><?php echo $this->session->flashdata('flash'); ?></div>
                  </div>
                  <div class="ibox-content">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <td>No</td>
                            <td> Image </td>
                            <td>Kategori Event</td>
                            <td>judul Event</td>
                            <td>Headline</td>
                            <td>Isi Berita</td>
                            <td>Tanggal</td>
                            <td>Info</td>
                            <td>Action</td>
                            <td>Editor</td>

                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                          <?php foreach($event as $rows): ?>
                            <tr class="odd gradeX">
                              <td><?php echo $no++; ?></td>
                              <td><img class="img-thumbnail" src="<?php echo base_url(); ?>image/event/th/<?php echo $rows['foto']; ?>"></td>
                              <td><?php echo $rows['kategori']; ?></td>
                              <td><?php echo $rows['judulevent']; ?></td>
                              <td><?php echo $rows['kontent']; ?></td>
                              <td><?php echo $rows['isiberita']; ?></td>
                              <td><?php echo $rows['tanggal']; ?></td>
                              <td><input type="button" class="btn  btn-sm btn-info fasilitas"
                                data-kodef="<?php echo $rows['kode']; ?>"
                                value="Fasilitas" data-toggle="modal" data-target="#fasilitas"></td>
                                <td><a href="<?php echo base_url();?>user/editor/<?= $rows['kode'];?>"class="btn btn-info btn-sm editor">Editor</a></td>
                              <td><a href="<?php echo base_url();?>user/hapusevent/<?php echo $rows['kode']; ?>" type="button" class="btn btn-sm btn-danger hapusevent" onclick="ConfirmDialog();">hapus</a></td>
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
      <div class="modal inmodal" id="event" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <i class="fa fa-laptop modal-icon"></i>
                  <h4 class="modal-title">Tambah Event</h4>
                  <small class="font-bold">Form ini berfungsi untuk menambahkan Event terbaru untuk ditampilkna dihalaman web</small>
                </div>
                <div class="modal-body">
                  <div class="form-horizontal">
                    <?php echo form_open_multipart('user/tambahevent');?>
                    <div class="form-group"><label class="col-sm-4 control-label">Judul Event</label>
                      <div class="col-sm-8"><input type="text" id="judule" name="judule" placeholder="judul berita max 50 Karakter" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-4 control-label">Jenis Event</label>
                      <div class="col-sm-8"><input type="text" id="jenise" name="jenise" placeholder="Isi judul unik" class="form-control"></div>
                    </div>
                    <div class="form-group"><label class="col-sm-4 control-label">Headline</label>
                      <div class="col-sm-8"><textarea type="text" id="headlinee" name="headlinee" placeholder="Head line max 100 karakter" class="form-control"></textarea></div>
                    </div>
                    <div class="form-group"><label class="col-sm-4 control-label">Isi Berita</label>
                      <div class="col-sm-8"><textarea type="text" id="isie" name="isie" placeholder="Isi Berita" class="form-control"></textarea></div>
                    </div>
                    <div class="form-group"><label class="col-sm-4 control-label">Foto / Gambar</label>
                      <div class="col-sm-8"><input type="file" class="form-control"></div>
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
      <div class="modal inmodal" id="fasilitas" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content animated bounceInRight">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <i class="fa fa-laptop modal-icon"></i>
              <h4 class="modal-title">Tambah Fasilitas dan Lomba Untuk Event</h4>
              <small class="font-bold">Form ini berfungsi untuk Menambah Fasulitas Dan lomba Apa saja yang tersedia dalam Event</small>
            </div>
            <div class="modal-body">
              <div class="form-horizontal">
                <?php echo form_open_multipart('user/tambahfasilitaseven');?>
                <div class="form-group"><label class="col-sm-4 control-label">Kode Event</label>
                  <div class="col-sm-8"><input type="text" id="kodef" name="kodef" placeholder="Nama Fasilitas" class="form-control" readonly></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Pilih Item</label>
                  <div class="col-sm-8"><select type="text" id="pilihitem" name="pilihitem" class="form-control">
                    <option value="Fasilitas">Fasilitas</option>
                    <option value="Lomba">Lomba</option>
                  </select></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Keterangan</label>
                  <div class="col-sm-8"><textarea type="text" id="jenisfas" name="jenisfas" placeholder="Nama Fasilitas" class="form-control"></textarea></div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label">Foto / Gambar</label>
                  <div class="col-sm-8"><input type="file" id="fotofas" name="fotofas" class="form-control"></div>
                </div>
                <div class="form-group text-right">
                  <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Tambah Data</button>
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
