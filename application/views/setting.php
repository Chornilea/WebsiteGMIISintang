<div id="wrapper">
  <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="side-menu">
        <li class="nav-header">

          <div class="logo-element">
            IN+
          </div>
        </li>
        <li class="active">
          <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li class="active"><a href="<?php echo base_url(); ?>user">User</a></li>
            <li ><a href="<?php echo base_url(); ?>user/setting">Setting Aplikasi</a></li>
            <li ><a href="<?php echo base_url(); ?>user/berita">Tabel Berita</a></li>
            <li ><a href="<?php echo base_url(); ?>user/event">Tabel Event</a></li>
            <li ><a href="<?php echo base_url(); ?>user/peserta">Daftar Peserta</a></li>
            <li ><a href="<?php echo base_url(); ?>admin/logout">Keluar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

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
        <small>Silahkan untuk mengelola data konten anda</small>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="wrapper wrapper-content">
          <div class="row">
            <div class="col-lg-12">
              <div class="ibox float-e-margins">

                <div class="modal inmodal" id="editsetting" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <i class="fa fa-laptop modal-icon"></i>
                        <h4 class="modal-title">Edit Data Settingan</h4>
                        <small class="font-bold">Form ini adalah untuk mengubah data setingan utama dari aplikasi website</small>
                      </div>
                      <div class="modal-body">
                        <div class="form form-horizontal">
                          <?php echo form_open_multipart('user/updatesetting');?>
                          <div class="form-group"><label class="col-sm-4 control-label">Nama Web</label>
                            <div class="col-sm-8"><input type="text" id="ednamaweb" name="ednamaweb" placeholder="placeholder" class="form-control"><input type="text" id="idsetting" name="idsetting" placeholder="placeholder" class="hidden"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Alamat Kantor</label>
                            <div class="col-sm-8"><input type="text" id="edalamat" name="edalamat" placeholder="placeholder" class="form-control"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Telepon</label>
                            <div class="col-sm-8"><input type="text" id="edtelepon" name="edtelepon" placeholder="placeholder" class="form-control"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Logo Web</label>
                            <div class="col-sm-8"><input type="file" id="edlogoweb" name="edlogoweb" placeholder="placeholder" class="form-control"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Gambar Header Slide 1 ( Corosal 1)</label>
                            <div class="col-sm-8"><input type="file" id="edcorosal1" name="edcorosal1" placeholder="placeholder" class="form-control"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Gambar Header Slide 2 ( Corosal 2)</label>
                            <div class="col-sm-8"><input type="file" id="edcorosal2" name="edcorosal2" placeholder="placeholder" class="form-control"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Gambar Header Slide 3 ( Corosal 3)</label>
                            <div class="col-sm-8"><input type="file" id="edcorosal3" name="edcorosal3" placeholder="placeholder" class="form-control"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Konsep</label>
                            <div class="col-sm-8"><textarea id="edkonsep" name="edkonsep" placeholder="placeholder" class="form-control"></textarea></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Visi-misi</label>
                            <div class="col-sm-8"><textarea id="edvisimisi" name="edvisimisi" placeholder="placeholder" class="form-control"></textarea></div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label">Tujuan</label>
                            <div class="col-sm-8"><textarea id="edtujuan" name="edtujuan" placeholder="placeholder" class="form-control"></textarea></div>
                          </div>
                          <div class="form-group mt-2 text-right">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubaha</button>
                          </div>
                        </form>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ibox-content">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <td>No</td>
                          <td>Nama Web</td>
                          <td>Logo Web</td>
                          <td>Gambar1</td>
                          <td>Gambar2</td>
                          <td>Gambar3</td>
                          <td>Alamat</td>
                          <td>Telepon</td>
                          <td>Status</td>
                          <td>Action</td>

                        </tr>
                      </thead>
                      <tbody>
                        <div ><?php echo $this->session->flashdata('message'); ?> </div>
                        <?php $no=1; ?>
                        <?php foreach($setting as $rows): ?>
                          <tr class="odd gradeX">
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $rows['namaweb']; ?></td>
                            <td><img height="300px" width="350px" src="<?php echo base_url(); ?>image/setting/th/<?php echo $rows['logoweb']; ?>" class="img-thumbnail "></td>
                            <td><img height="300px" width="350px" src="<?php echo base_url(); ?>image/setting/th/<?php echo $rows['corosal1']; ?>" class="img-thumbnail "></td>
                            <td><img height="300px" width="350px" src="<?php echo base_url(); ?>image/setting/th/<?php echo $rows['corosal2']; ?>" class="img-thumbnail "></td>
                            <td><img height="300px" width="350px" src="<?php echo base_url(); ?>image/setting/th/<?php echo $rows['corosal3']; ?>" class="img-thumbnail "></td>
                            <td><?php echo $rows['alamat']; ?></td>
                            <td><?php echo $rows['telepon']; ?></td>
                            <td><?php echo $rows['status']; ?></td>
                            <td><input type="button" class="btn btn-info btn-sm editsetting"
                              data-kodesetting="<?php echo $rows['kode']; ?>"
                              data-namaweb="<?php echo $rows['namaweb']; ?>"
                              data-alamat="<?php echo $rows['alamat']; ?>"
                              data-telepon="<?php echo $rows['telepon']; ?>"
                              data-konsep="<?php echo $rows['konsep']; ?>"
                              data-visimisi="<?php echo $rows['visimisi']; ?>"
                              data-tujuan="<?php echo $rows['tujuan']; ?>"

                               value="Edit Data" data-toggle="modal" data-target="#editsetting"></td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="ibox-content">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Konsep</label>
                      <div class="col-sm-10"><textarea type="text" class="form-control" readonly><?= $rows['konsep']; ?></textarea></div>
                    </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Visi-Misi</label>
                    <div class="col-sm-10"><textarea type="text" class="form-control" readonly><?= $rows['visimisi']; ?></textarea></div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tujuan</label>
                    <div class="col-sm-10"><textarea type="text" class="form-control" readonly><?= $rows['tujuan'];  ?></textarea></div>
                  </div>
                </form>
                </div>
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
