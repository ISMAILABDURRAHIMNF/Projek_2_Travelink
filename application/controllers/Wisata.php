<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisata extends CI_Controller {

    public function index(){
		$this->load->model('wisata_model','wisata');
		$list_wisata = $this->wisata->getAll();

		$data['list_wisata'] = $list_wisata;
		$this->load->view('wisata/index',$data);
	}
}