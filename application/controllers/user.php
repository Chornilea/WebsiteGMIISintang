<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');

  }

public function index()
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['users']=$this->db->get('tb_admin')->result_array();
  $this->load->view('dashboard',$data);
  $this->load->view('admin/footer');
}
public function setting()
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['setting']=$this->db->get('tb_setting')->result_array();
  $this->load->view('setting',$data);
  $this->load->view('admin/footer');
}
public function updatesetting()
{
  $id = $this->input->post('idsetting',true);
  $data = array(
    'namaweb' => $this->input->post('ednamaweb',true),
    'alamat' => $this->input->post('edalamat',true),
    'telepon' => $this->input->post('edtelepon',true),
    'konsep' => $this->input->post('edkonsep',true),
    'visimisi' => $this->input->post('edvisimisi',true),
    'tujuan' => $this->input->post('edtujuan',true)

  );
  $uploadimage = $_FILES['edlogoweb']['name'];
  $c1 = $_FILES['edcorosal1']['name'];
  $c2 = $_FILES['edcorosal2']['name'];
  $c3 = $_FILES['edcorosal3']['name'];
  $us['setting']=$this->db->get_where('tb_setting', array('kode' => '1'))->row_array();
  if ($uploadimage){
    $config['upload_path']          = './image/setting/';
    $config['allowed_types']        = 'jpg|jpeg';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('edlogoweb')){

      $old_logo = $us['setting']['logoweb'];
      if($old_logo){
        unlink(FCPATH . 'image/img/' . $old_logo);
        //var_dump($data);
        //die;
      }
      $namabaru = $this->upload->data('file_name');
      $conf['image_library']    ='gd2';
      $conf['source_image']     ='./image/setting/' . $namabaru;
      $conf['create_thumb']   =FALSE;
      $conf['maintain_ratio']   =FALSE;
      $conf['quality']          = '50%';
      $conf['width']            = 600;
      $conf['height']            = 600;
      $conf['new_image']            = './image/setting/th/' . $namabaru;
      $this->load->library('image_lib', $conf);
      $this->image_lib->resize();
      unlink(FCPATH . 'image/setting/' . $namabaru);
      $this->db->set('logoweb', $namabaru);
      $this->session->set_flashdata('message','Data sudah disimpan');
    }else {
      echo $this->upload->display_errors();
    }
  }
  //var_dump($data);
  //die;
  if ($c1){
    $config['upload_path']          = './image/setting/';
    $config['allowed_types']        = 'jpg|jpeg';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('edcorosal1')){
      $old_corosal1 = $us['setting']['corosal1'];
      if($old_corosal1){
        unlink(FCPATH . 'image/img/' . $old_corosal1);
        //var_dump($data);
        //die;
      }
      $namabaru = $this->upload->data('file_name');
      $conf['image_library']    ='gd2';
      $conf['source_image']     ='./image/setting/' . $namabaru;
      $conf['create_thumb']   =FALSE;
      $conf['maintain_ratio']   =FALSE;
      $conf['quality']          = '50%';
      $conf['width']            = 1914;
      $conf['height']            = 460;
      $conf['new_image']            = './image/setting/th/' . $namabaru;
      $this->load->library('image_lib', $conf);
      $this->image_lib->resize();
      //unlink(FCPATH . 'image/setting/' . $namabaru);
      $this->db->set('corosal1', $namabaru);
    }else {
      echo $this->upload->display_errors();
    }
  }
  if ($c2){
    $config['upload_path']          = './image/setting/';
    $config['allowed_types']        = 'jpg|jpeg';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('edcorosal2')){
      $old_corosal2 = $us['setting']['corosal2'];
      if($old_corosal2){
        unlink(FCPATH . 'image/img/' . $old_corosal2);
        //var_dump($data);
        //die;
      }
      $namabaru = $this->upload->data('file_name');
      $conf['image_library']    ='gd2';
      $conf['source_image']     ='./image/setting/' . $namabaru;
      $conf['create_thumb']   =FALSE;
      $conf['maintain_ratio']   =FALSE;
      $conf['quality']          = '50%';
      $conf['width']            = 1914;
      $conf['height']            = 460;
      $conf['new_image']            = './image/setting/th/corosal2.jpg';
      $this->load->library('image_lib', $conf);
      $this->image_lib->resize();
      //unlink(FCPATH . 'image/setting/' . $namabaru);
      $this->db->set('corosal2', 'corosal2.jpg');
    }else {
      echo $this->upload->display_errors();
    }
  }
  if ($c3){
    $config['upload_path']          = './image/img/';
    $config['allowed_types']        = 'jpg|jpeg';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('edcorosal3')){
      $old_corosal3 = $us['setting']['corosal3'];
      if($old_corosal2){
        unlink(FCPATH . 'image/img/' . $old_corosal3);
        //var_dump($data);
        //die;
      }
      $namabaru = $this->upload->data('file_name');
      $this->db->set('corosal3', $namabaru);
    }else {
      echo $this->upload->display_errors();
    }
  }
  //var_dump($data);
  //die;
  $this->db->where('kode', $id);
  $this->db->update('tb_setting', $data);
  redirect('user/setting');
  echo '<script>alert " Data Berhasil Ditambahkan"</script>';

}
public function berita()
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['berita']=$this->db->get('tb_berita')->result_array();
  $this->load->view('berita',$data);
  $this->load->view('admin/footer');
}
public function tambahberita()
{
  $data = array(
    'kategori' => $this->input->post('jenis',true),
    'judulberita' => $this->input->post('judul',true),
    'kontent' => $this->input->post('headline',true),
    'isiberita' => $this->input->post('isi',true),
    'tanggal' => date("d-m-Y"),
  );
  $uploadimage = $_FILES['foto']['name'];
  if ($uploadimage){
    $config['upload_path']          = './image/berita/';
    $config['allowed_types']        = 'jpg|jpeg|JPG';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('foto')){

      //$old_logo = $us['setting']['logoweb'];
      //  if($old_logo){
      //  unlink(FCPATH . 'image/img/' . $old_logo);
      //var_dump($data);
      //die;
      }
      $namabaru = $this->upload->data('file_name');
      $this->db->set('foto', $namabaru);
      $this->session->set_flashdata('message','Data sudah disimpan');
    }else {
      echo $this->upload->display_errors();
    }
  //var_dump($data);
  //die;
  $this->db->insert('tb_berita', $data);
  redirect('user/berita');
  echo '<script>alert " Data Berhasil Ditambahkan"</script>';
}
public function updateberita()
{
  $id = $this->input->post('kodeberita',true);
  //var_dump($id);
  //die;
  $us['berita']=$this->db->get_where('tb_berita', array('kode' => $id))->row_array();
  $data = array(
    'kategori' => $this->input->post('edjenis',true),
    'judulberita' => $this->input->post('edjudul',true),
    'kontent' => $this->input->post('edheadline',true),
    'isiberita' => $this->input->post('edisi',true),
    'tanggal' => date("d-m-Y")
  );
  $uploadimage = $_FILES['edfoto']['name'];
  if ($uploadimage){
    $config['upload_path']          = './image/berita/';
    $config['allowed_types']        = 'jpg|jpeg|JPG|JPEG';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('edfoto')){

      $old_berita = $us['berita']['foto'];
        if($old_berita){
        unlink(FCPATH . 'image/berita/' . $old_berita);
      //var_dump($data);
      //die;
    }
      $namabaru = $this->upload->data('file_name');
      $conf['image_library']    ='gd2';
      $conf['source_image']     ='./image/berita/' . $namabaru;
      $conf['create_thumb']   =FALSE;
      $conf['maintain_ratio']   =FALSE;
      $conf['quality']          = '50%';
      $conf['width']            = 600;
      $conf['height']            = 400;
      $conf['new_image']            = './image/berita/th/' . $namabaru;
      $this->load->library('image_lib', $conf);
      $this->image_lib->resize();
      unlink(FCPATH . 'image/berita/' . $namabaru);
      $this->db->set('foto', $namabaru);
    }else {
      echo $this->upload->display_errors();
    }
}
  //var_dump($data);
  //die;
  $this->db->where('kode', $id);
  $this->db->update('tb_berita', $data);
  redirect('user/berita');
  echo '<script>alert " Data Berhasil Ditambahkan"</script>';
}
public function hapusberita($id)
{

  $this->db->where('kode', $id);
  $this->db->delete('tb_berita');
  redirect('user/berita');
}
public function event()
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['event']=$this->db->get('tb_event')->result_array();

  $this->load->view('event',$data);
  $this->load->view('admin/footer');
}
public function hapusevent($id )
{
  $this->db->where('kode', $id);
  $this->db->delete('tb_event');
  redirect('user/event');

}
public function tambahevent()
{
  $data = array(
    'kategori' => $this->input->post('jenise',true),
    'judulevent' => $this->input->post('judule',true),
    'kontent' => $this->input->post('headlinee',true),
    'isiberita' => $this->input->post('isie',true),
    'tanggal' => date("d-m-Y"),
    'foto' => 'ssss'
  );
  $this->db->insert('tb_event', $data);
  redirect('user/event');
  echo '<script>alert " Data Berhasil Ditambahkan"</script>';
}
public function updateevent()
{
  $id = $this->input->post('kodee',true);
  $us['event']=$this->db->get_where('tb_event', array('kode' => $id))->row_array();
  $data = array(
    'kategori' => $this->input->post('edjenise',true),
    'judulevent' => $this->input->post('edjudule',true),
    'kontent' => $this->input->post('edheadlinee',true),
    'isiberita' => $this->input->post('edisie',true),
    'tanggal' => date("d-m-Y h:i:s")
  );
  $uploadimage = $_FILES['edfotoe']['name'];
  if ($uploadimage){
    $config['upload_path']          = './image/event/';
    $config['allowed_types']        = 'jpg|jpeg|JPG|JPEG';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('edfotoe')){
      $old_event = $us['event']['foto'];
        if($old_event){
        unlink(FCPATH . 'image/event/th/' . $old_event);
      //var_dump($data);
      //die;
    }
    $namabaru = $this->upload->data('file_name');
    $conf['image_library']    ='gd2';
    $conf['source_image']     ='./image/event/' . $namabaru;
    $conf['create_thumb']   =FALSE;
    $conf['maintain_ratio']   =FALSE;
    $conf['quality']          = '50%';
    $conf['width']            = 600;
    $conf['height']            = 400;
    $conf['new_image']            = './image/event/th/' . $namabaru;
    $this->load->library('image_lib', $conf);
    $this->image_lib->resize();
    unlink(FCPATH . 'image/event/' . $namabaru);
    $this->db->set('foto', $namabaru);
  }else {

  }
}
  $this->db->where('kode', $id);
  $this->db->update('tb_event', $data);
  redirect('user/event');
  echo '<script>alert " Data Berhasil Ditambahkan"</script>';

}

public function tambahfasilitaseven()
{
  $data = array(
    'kode' => $this->input->post('kodef',true),
    'fasilitas' => $this->input->post('jenisfas',true),
    'jenis' => $this->input->post('pilihitem',true),
  );
  $uploadimage = $_FILES['fotofas']['name'];
  if ($uploadimage){
    $config['upload_path']          = './image/event/fasilitas/';
    $config['allowed_types']        = 'jpg|jpeg|JPG|JPEG';
    $this->load->library('upload', $config);
    if ( $this->upload->do_upload('fotofas')){
      $namabaru = $this->upload->data('file_name');
      $conf['image_library']    ='gd2';
      $conf['source_image']     ='./image/event/fasilitas' . $namabaru;
      $conf['create_thumb']   =FALSE;
      $conf['maintain_ratio']   =FALSE;
      $conf['quality']          = '50%';
      $conf['width']            = 600;
      $conf['height']            = 400;
      $conf['new_image']            = './image/event/fasilitas/th/' . $namabaru;
      $this->load->library('image_lib', $conf);
      $this->image_lib->resize();
      unlink(FCPATH . 'image/event/fasilitas' . $namabaru);
    }

    $this->db->set('foto', $namabaru);
  }else {

  }
  $this->db->insert('tb_detil', $data);
  redirect('user/event');
}

public function peserta()
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['pengguna']=$this->db->get('tb_pengguna')->result_array();
  $this->load->view('daftarpeserta',$data);
  $this->load->view('admin/footer');
}
public function hapuspeserta($id)
{
  $this->db->where('kode', $id);
  $this->db->delete('tb_pengguna');
  redirect('user/peserta');
}
public function editor($id)
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['edevent']=$this->db->get_where('tb_event', array('kode'=>$id))->row_array();
    $this->load->view('editor',$data);
    $this->load->view('admin/footer');
}
public function editberita($id)
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['edberita']=$this->db->get_where('tb_berita', array('kode'=>$id))->row_array();
  $this->load->view('editberita',$data);
  $this->load->view('admin/footer');
}
public function adtransaksi()
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['transaksi']=$this->db->select('tb_transaksi.*,tb_event.*,tb_pengguna.*');
	$data['transaksi']=$this->db->from('tb_transaksi');
	$data['transaksi']=	$this->db->join('tb_event', 'tb_transaksi.id_event = tb_event.kode');
	$data['transaksi']=	$this->db->join('tb_pengguna', 'tb_transaksi.id_pengguna = tb_pengguna.kode');
  $data['transaksi']=	$this->db->order_by('tanggalorder','DESC');
	$data['transaksi'] = $this->db->get()->result_array();
  $this->load->view('adtransaksi',$data);
  $this->load->view('admin/footer');
}
public function validasi($id)
{
  $this->load->view('admin/header');
  $data['user']=$this->db->get_where('tb_admin', ['nama'=>$this->session->userdata('nama')])->row_array();
  $data['nama']=$data['user']['nama'];
  $data['edberita']=$this->db->get_where('tb_berita', array('kode'=>$id))->row_array();
  $this->load->view('editberita',$data);
  $this->load->view('admin/footer');
}
}
