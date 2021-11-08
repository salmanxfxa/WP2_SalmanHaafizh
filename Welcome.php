<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "Selamat datang ... selamat belajar di Programing";
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Mmodel');

		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Mmodel->jumlah($n1,$n2);

		$this->load->view('welcome_message',$data);
	}
	
}
