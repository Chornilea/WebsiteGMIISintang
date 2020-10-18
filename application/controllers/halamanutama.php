<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamanutama extends CI_Controller {
	function __construct(){
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('form_validation');
}
public function index()
	{
		$data['berita']=$this->db->get('tb_berita')->result_array();
		$data['event']=$this->db->get('tb_event')->result_array();
		$data['setting']=$this->db->get('tb_setting')->result_array();
		$data['headlin']=$this->db->get_where('tb_berita',array('kategori'=>'headline'))->result_array();
		$this->template->display('home',$data);
	}
public function login()
{
	$data['setting']=$this->db->get('tb_setting')->result_array();
	$this->load->view('login',$data);
}
public function auth()
{
		$this->form_validation->set_rules('username','Username','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == false){
			$this->load->view('login');
		}else{
			$this->_login();
		}
}
private function  _login()
{
	$username = $this->input->post('username');
	$pass = $this->input->post('password');
	$pengguna = $this->db->get_where('tb_pengguna',['email'=> $username])->row_array();
// var_dump($pengguna); die;//untuk menguji array dtbase jalan gk
	if($pengguna){
					if($pengguna['notransaksi'] <> "") {
						if($pass == $pengguna['password']){
							$data = [
								'nama' => $pengguna['nama'],
								'status' =>$pengguna['status']
							];
							$this->session->set_userdata($data);
								$this->session->set_flashdata('messages','<div class="alert alert-info" role="alert"><h3>Selamat datang Dihalaman Peserta, Anda Berhasil Login </h3></div>');
							redirect('halamanutama/pilihevent');
						}else{
							$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">Password Masih Kosong Atau Password Anda Salah</div>');
							redirect('halamanutama/login');
						}
					}else{
						$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">email belum aktiv</div>');
						redirect('halamanutama/login');
					}
	}else{
		$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">email belum daftar</div>');
		redirect('halamanutama/login');
	}
}
public function registrasi()
{
	$data['setting']=$this->db->get('tb_setting')->result_array();
	$this->load->view('registrasi',$data);
}
public function tambahpengguna()
{
	$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
	$this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[tb_pengguna.username]');
	$this->form_validation->set_rules('password', 'Password', 'required|trim|max_length[8]');
	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_pengguna.email]');
	if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('registrasi');
                }
                else
                {
									$data = array(
										'nama' => $this->input->post('nama',true),
										'username' => $this->input->post('username',true),
										'password' => $this->input->post('password',true),
										'tgllahir' => $this->input->post('tgllahir',true),
										'email' => $this->input->post('email',true),
										'alamat' => $this->input->post('alamat',true),
										'telepon' => $this->input->post('telepon',true),
										'notransaksi' => '1',
									);
									$uploadimage = $_FILES['image']['name'];
									if ($uploadimage){
										$config['upload_path']          = './image/peserta/';
										$config['allowed_types']        = 'jpg|jpeg|JPG';
										$this->load->library('upload', $config);
										if ( $this->upload->do_upload('image')){

											//$old_logo = $us['setting']['logoweb'];
											//  if($old_logo){
											//  unlink(FCPATH . 'image/img/' . $old_logo);
											//var_dump($data);
											//die;
											}
											$namabaru = $this->upload->data('file_name');
											$this->db->set('foto', $namabaru);
											$this->session->set_flashdata('message','<div class="alert alert-success role="alert"> Data Berhasil Disimpan </div>');
										}else {
											echo $this->upload->display_errors();
										}
									//var_dump($data);
									//die;

									$this->db->insert('tb_pengguna', $data);
									$this->session->set_flashdata('messages','<div class="alert alert-success role="alert"> Registrasi Sukses, Silahkan login </div>');
									redirect('halamanutama/login');
                }

}
public function newsupdate($kode)
{
	$data['detil'] = $this->db->get_where('tb_berita',array('kode' => $kode))->result_array();
	$this->load->view('agenda',$data);
}
public function pilihevent()
{

	$data['pengguna']=$this->db->get_where('tb_pengguna', ['nama'=>$this->session->userdata('nama')])->row_array();
	$data['setting']=$this->db->get('tb_setting')->result_array();
	$data['event'] = $this->db->get('tb_event')->result_array();
		$data['fasilitas']=$this->db->select('tb_event.*,tb_detil.*');
		$data['fasilitas']=$this->db->from('tb_event');
		$data['fasilitas']=	$this->db->join('tb_detil', 'tb_event.kode = tb_detil.kode');
		$data['fasilitas']=$this->db->where('jenis', 'fasilitas');
		$data['fasilitas']=$this->db->group_by('tb_event.kode');
		$data['fasilitas'] = $this->db->get()->result_array();
	$this->load->view('pilihevent',$data);
}
public function detilevent($kode)
{
	$data['pengguna']=$this->db->get_where('tb_pengguna', ['nama'=>$this->session->userdata('nama')])->row_array();
	$data['detil'] = $this->db->get_where('tb_event',array('kode' => $kode))->result_array();
	$data['fasilitas'] = $this->db->get_where('tb_detil',array('kode' => $kode,'jenis' => 'Fasilitas'))->result_array();
	$data['lomba'] = $this->db->get_where('tb_detil',array('kode' => $kode,'jenis' => 'Lomba'))->result_array();
	$this->load->view('detilevent',$data);
}
public function detilevent1($kode)
{
	$data['detil'] = $this->db->get_where('tb_event',array('kode' => $kode))->result_array();
	$data['fasilitas'] = $this->db->get_where('tb_detil',array('kode' => $kode,'jenis' => 'Fasilitas'))->result_array();
	$data['lomba'] = $this->db->get_where('tb_detil',array('kode' => $kode,'jenis' => 'Lomba'))->result_array();
	$this->load->view('detilevent1',$data);
}
public function ikutievent()
{
	$datanya = array(
		'id_event' => $this->input->post('kodeevent',true),
		'id_pengguna' => $this->input->post('pengguna',true),
		'harga' => $this->input->post('biaya',true),
		'aksi' => "0",
		'buktitransfer' => "blank.jpg",
		'tanggalorder' => date('d-m-y m:s'),
		'kodetransaksi' => "INV".date('dmyms'),

	);
	$berhasil = $this->db->insert('tb_transaksi', $datanya);
	if($berhasil){
		$data['setting']=$this->db->get('tb_setting')->result_array();
		$data['event'] = $this->db->get('tb_event')->result_array();
		$this->session->set_flashdata('pesan','<div class="alert alert-success role="alert"> Data Berhasil Ditambahkan </div>');
		redirect('halamanutama/pilihevent');
	}else{
			$this->session->set_flashdata('pesan','<div class="alert alert-success role="alert"> Data Gagal Disimpan </div>');
	}


}
public function invoice($id)
{
	$data['setting']=$this->db->get('tb_setting')->result_array();
	$data['transaksi']=$this->db->select('tb_transaksi.*,tb_event.*,tb_pengguna.*');
	$data['transaksi']=$this->db->from('tb_transaksi');
	$data['transaksi']=	$this->db->join('tb_event', 'tb_transaksi.id_event = tb_event.kode');
	$data['transaksi']=	$this->db->join('tb_pengguna', 'tb_transaksi.id_pengguna = tb_pengguna.kode');
	$data['transaksi']=	$this->db->where('kodetransaksi',$id);
	$data['transaksi'] = $this->db->get()->result_array();
	$this->load->view('invoice',$data);
}
public function transaksi($id)
{
	$data['pengguna']=$this->db->get_where('tb_pengguna', ['nama'=>$this->session->userdata('nama')])->row_array();
	$data['setting']=$this->db->get('tb_setting')->result_array();
	$data['event'] = $this->db->get('tb_event')->result_array();

		$data['transaksi']=$this->db->select('tb_transaksi.*,tb_event.*');
		$data['transaksi']=$this->db->from('tb_event');
		$data['transaksi']=	$this->db->join('tb_transaksi', 'tb_event.kode = tb_transaksi.id_event');
		$data['transaksi']=	$this->db->where('id_pengguna',$id);
		$data['transaksi']=	$this->db->order_by('tb_transaksi.tanggalorder','DESC');
		$data['transaksi'] = $this->db->get()->result_array();
	$this->load->view('transaksi',$data);
}

}
