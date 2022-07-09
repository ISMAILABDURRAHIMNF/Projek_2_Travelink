<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('Admin_model','admin');
		$data['list_wisata'] = $this->admin->getRandomWisata();
		$data['list_komentar'] = $this->admin->getRandomKomentar();

		$this->load->view('landingPage/index',$data);
	}

	public function main(){
		$this->load->model('LandingPage_model','landingPage');
		$list_wisata = $this->landingPage->getAll();
        $list_jenis = $this->landingPage->getAllJenis();
        $list_kecamatan = $this->landingPage->getAllKecamatan();

        $data['list_kecamatan'] = $list_kecamatan;
        $data['list_jenis'] = $list_jenis;
		$data['list_wisata'] = $list_wisata;
		$this->load->view('landingPage/main',$data);
	}

	public function filterJenis(){
		$this->load->model('LandingPage_model','landingPage');
        $jenis_id = $this->input->get('id');
        $data['list_wisata'] = $this->landingPage->findByJenis($jenis_id);
        $list_jenis = $this->landingPage->getAllJenis();
        $list_kecamatan = $this->landingPage->getAllKecamatan();
        

        $data['list_kecamatan'] = $list_kecamatan;
        $data['list_jenis'] = $list_jenis;

        $this->load->view('landingPage/main',$data);
    }

	public function filterKecamatan(){
		$this->load->model('LandingPage_model','landingPage');
        $kecamatan_id = $this->input->get('id');
        $data['list_wisata'] = $this->landingPage->findByKecamatan($kecamatan_id);
        $list_kecamatan = $this->landingPage->getAllKecamatan();
        $list_jenis = $this->landingPage->getAllJenis();
        // $list_komentar = $this->landingPage->getAllKomentar();

        // $data['list_komentar'] = $list_komentar;
        $data['list_jenis'] = $list_jenis;
        $data['list_kecamatan'] = $list_kecamatan;
        $this->load->view('landingPage/main',$data);
    }

	public function findById(){
		$this->load->model('LandingPage_model','landingPage');
        $id = $this->input->get('id');
		$list_komentar = $this->landingPage->getKomentarById($id);

        $data['list_komentar'] = $list_komentar;
        $data['wisatadetail'] = $this->landingPage->getDetail($id);
        $this->load->view('landingPage/detail',$data);
    }

	public function komentar(){
		$this->load->model('LandingPage_model','landingPage');
		
        $this->load->view('landingPage/komentar');
    }

    
}
