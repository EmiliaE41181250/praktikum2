<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//memanggil helper download
		$this->load->helper(array('url','download'));				
	}
 
	public function index(){
		//memanggil function v_download pada view
		$this->load->view('v_download');
	}
 
	public function lakukan_download(){		
		//membuat download file yg file nya sudah tersedia(tinggal download)		
		force_download('gambar/hoshi.jpg',NULL);
	}	
 
}