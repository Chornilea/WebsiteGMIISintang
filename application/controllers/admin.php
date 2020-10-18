<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
}

	public function index()
	{
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('sandi','Sandi','trim|required');
		if($this->form_validation->run() == false){
			$this->load->view('admin');
		}else{
			$this->_login();
		}
	}
	private function  _login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('sandi');
		$user = $this->db->get_where('tb_admin',['email'=> $email])->row_array();
		//var_dump($user); die; untuk menguji array dtbase jalan gk
		if($user){
						if($user['status'] == 1) {
							if($pass == $user['pasword']){
								$data = [
									'nama' => $user['nama'],
									'status' =>$user['status']
								];
								$this->session->set_userdata($data);
								redirect('user');
							}else{
								$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">password salah</div>');
								redirect('admin');
							}
						}else{
							$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">email belum aktiv</div>');
							redirect('admin');
						}
		}else{
			$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">email belum daftar</div>');
			redirect('admin');
		}
	}
public function logout()
{
	$this->session->unset_userdata('nama');
	$this->session->unset_userdata('nama');

	$this->session->set_flashdata('messages','<div class="alert alert-danger" role="alert">anda telash keluar</div>');
	redirect('admin');
}
}
