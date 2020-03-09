<?php 
 //menghubungkan codeignitor dgn database
class M_data extends CI_Model{
	//mengambil data yg ditangkap pada controller yg memanggil function ambil_data()
	function ambil_data(){
		return $this->db->get('user');
	}
}