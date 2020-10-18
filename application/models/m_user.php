<?php
Class M_user extends CI_Model
{
var $tabel = 'tb_gallery';
function __construct(){
parent::__construct();
}

function simpandata($nmtabel,$data){
	$insert = $this->db->insert($nmtabel,$data);
	return $insert;
	}
	function Qmanual($query){
		$query = $this->db->query("$query");
		return $query->result();
	}
		function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	//fungsi untuk menampilkan semua data dari tabel database
	function get_allimage() {
        $this->db->from($this->tabel);
		$query = $this->db->get();

        //cek apakah ada data
        if ($query->num_rows() > 0) {
            return $query->result();
        }
	}

    //fungsi insert ke database
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function detiberita($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	// Update Query For Selected Student
	function update_($idtabel,$id,$tabel,$data){
		$this->db->where($idtabel, $id);
		$this->db->update($tabel, $data);
		}
}

?>