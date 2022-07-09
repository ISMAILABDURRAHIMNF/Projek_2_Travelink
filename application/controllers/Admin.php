<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model','admin');
        if($this->session->userdata('role') != "administrator"){
            echo '<script>
                    alert("Anda tidak memiliki akses");
                    window.location.href = "'.base_url('login').'";
                </script>';
        }
    }

    public function index(){

		$list_wisata = $this->admin->getAll();
        // $list_prodi = $this->admin->getAllProdi();
        // $list_komentar = $this->admin->getAllKomentar();

        // $data['list_komentar'] = $list_komentar;
        // $data['list_prodi'] = $list_prodi;
        $list_jenis = $this->admin->getAllJenis();
        $list_kecamatan = $this->admin->getAllKecamatan();

        $data['list_kecamatan'] = $list_kecamatan;
        $data['list_jenis'] = $list_jenis;
		$data['list_wisata'] = $list_wisata;
		$this->load->view('admin/index',$data);
	}

    public function create(){
        $this->load->view('admin/create');
    }

    public function save(){
        $datainsert = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'latlong' => $this->input->post('latlong'),
            'jenis_id' => $this->input->post('jenis_id'),
            'skor_rating' => $this->input->post('skor_rating'),
            'harga_tiket' => $this->input->post('harga_tiket'),
            'kecamatan_id' => $this->input->post('kecamatan_id'),
            'website' => $this->input->post('website'),
            'fasilitas' => $this->input->post('fasilitas'),
        ];
        $this->admin->save($datainsert);
        redirect('admin','refresh');
    }

    public function edit(){
        $id = $this->input->get('id');
        $data['wstedit'] = $this->admin->getDetail($id);
        $this->load->view('admin/edit',$data);
    }

    public function update(){
            $id = $this->input->post('id');
            $dataedit = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'latlong' => $this->input->post('latlong'),
                'jenis_id' => $this->input->post('jenis_id'),
                'skor_rating' => $this->input->post('skor_rating'),
                'harga_tiket' => $this->input->post('harga_tiket'),
                'kecamatan_id' => $this->input->post('kecamatan_id'),
                'website' => $this->input->post('website'),
                'fasilitas' => $this->input->post('fasilitas'),
            ];
            $this->admin->update($dataedit,$id);
            redirect('admin','refresh');

    }

    public function delete(){
        $id = $this->input->get('id');
        $this->admin->delete($id);
        redirect('admin','refresh');
    }

    public function upload1(){
        $id = $this->input->get('id');
        $data['wstedit'] = $this->admin->getDetail($id);
        $this->load->view('admin/upload1',$data);
    }

    public function upload2(){
        $id = $this->input->get('id');
        $data['wstedit'] = $this->admin->getDetail($id);
        $this->load->view('admin/upload2',$data);
    }

    public function upload3(){
        $id = $this->input->get('id');
        $data['wstedit'] = $this->admin->getDetail($id);
        $this->load->view('admin/upload3',$data);
    }

    public function upload_foto1(){

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1920;
        $config['overwrite']            = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload('foto1')){
            $id = $this->input->post('id');
            $foto = $this->upload->data();
            $nama_foto = $foto['file_name'];
            
            $foto1 = [
                'foto1' => $nama_foto,
            ];

            $this->admin->upload1($foto1,$id);
            redirect('admin','refresh');
        }else{
            echo $this->upload->display_errors();
        }
    }

    public function upload_foto2(){

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1920;
        $config['overwrite']            = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload('foto2')){
            $id = $this->input->post('id');
            $foto = $this->upload->data();
            $nama_foto = $foto['file_name'];
            
            $foto2 = [
                'foto2' => $nama_foto,
            ];

            $this->admin->upload2($foto2,$id);
            redirect('admin','refresh');
        }else{
            echo $this->upload->display_errors();
        }
    }

    public function upload_foto3(){

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']             = 5000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1920;
        $config['overwrite']            = TRUE;

        $this->load->library('upload',$config);
        if($this->upload->do_upload('foto3')){
            $id = $this->input->post('id');
            $foto = $this->upload->data();
            $nama_foto = $foto['file_name'];
            
            $foto3 = [
                'foto3' => $nama_foto,
            ];

            $this->admin->upload3($foto3,$id);
            redirect('admin','refresh');
        }else{
            echo $this->upload->display_errors();
        }
    }


	public function filterJenis(){
        $jenis_id = $this->input->get('id');
        $data['list_wisata'] = $this->admin->findByJenis($jenis_id);
        $list_jenis = $this->admin->getAllJenis();
        $list_kecamatan = $this->admin->getAllKecamatan();
        // $list_komentar = $this->admin->getAllKomentar();

        // $data['list_komentar'] = $list_komentar;
        

        $data['list_kecamatan'] = $list_kecamatan;
        $data['list_jenis'] = $list_jenis;

        $this->load->view('admin/index',$data);
    }

    public function filterKecamatan(){
        $kecamatan_id = $this->input->get('id');
        $data['list_wisata'] = $this->admin->findByKecamatan($kecamatan_id);
        $list_kecamatan = $this->admin->getAllKecamatan();
        $list_jenis = $this->admin->getAllJenis();
        // $list_komentar = $this->admin->getAllKomentar();

        // $data['list_komentar'] = $list_komentar;
        $data['list_jenis'] = $list_jenis;
        $data['list_kecamatan'] = $list_kecamatan;
        $this->load->view('admin/index',$data);
    }


    // public function komentar(){
    //     $this->load->view('admin/komentar');
    // }

    // public function komentar_save(){
    //     $datainsert = [
    //         'username' => $this->session->userdata('username'),
    //         'rating' => $this->input->post('rating'),
    //         'komentar' => $this->input->post('komentar')
    //     ];
    //     $this->admin->komentar_save($datainsert);
    //     redirect('admin','refresh');
    // }


	// public function index()
	// {
    //     $this->load->model('admin_model','mhs1');
    //     $this->mhs1->id= 1 ;
    //     $this->mhs1->id= '010001';
    //     $this->mhs1->nama='Faiz Fikri';
    //     $this->mhs1->gender= 'L';
    //     $this->mhs1->ipk= 3.85 ;
    //     $this->load->model('admin_model','mhs2');

    //     $this->mhs2->id= 2 ;
    //     $this->mhs2->id= '020001';
    //     $this->mhs2->nama= 'Pandan Wangi';
    //     $this->mhs2->gender= 'P';
    //     $this->mhs2->ipk= 3.35;

    //     $list_mhs = [$this->mhs1, $this->mhs2];
    //     $data['list_mhs']=$list_mhs;
        
	// 	$this->load->view('view_admin',$data);
	// }
}
