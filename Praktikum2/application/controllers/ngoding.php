<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Ngoding extends CI_Controller {
	//memanggil atau membuka terlebih dahulu library malasngoding
	function index(){
        $this->load->library('malasngoding');
    //menggunakan method ini ke dalam library yg sudah dibuat
		$this->malasngoding->nama_saya();
                echo "<br/>";
                $this->malasngoding->nama_kamu("Andi");
	}
 
}