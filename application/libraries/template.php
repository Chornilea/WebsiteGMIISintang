<?php
class Template {
	protected $_ci;
	function __construct(){
		$this->_ci = &get_instance();
	}
	function display($template,$data=NULL){
		$data ['_content']=$this->_ci->load->view($template,$data,TRUE);
		$data ['_header']=$this->_ci->load->view('template/header',$data,TRUE);
		$data ['_menu']=$this->_ci->load->view('template/menu',$data,TRUE);
		$data ['_footer']=$this->_ci->load->view('template/footer',$data,TRUE);
		$this->_ci->load->view('utama',$data);
	}
}
?>