<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('welcome_message');
	}

	function ambil_nama_siswa($id=null){

		if($id==1){

			echo "NAMA : PRAS";
		}
		else if($id==2){

			echo "NAMA : SLAMET";
		}
		else{

			echo "TIDAK ADA ID yang Diinput";
		}
	}
}
