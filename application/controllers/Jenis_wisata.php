<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_wisata extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CRUD_model');
        $this->load->model('Insert_model');
        $this->load->model('Delete_model');
    }

	public function index()
	{
		$data['page_title']='Kelola Jenis Wisata';
        $data['jenis_wisata'] = $this->CRUD_model->getAll('jenis_wisata');

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('jenis_wisata/jenis_wisata', $data);
		$this->load->view('layout/footer');
	}

	public function tambah_data() {
		$data['page_title']='Tambah Data';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('jenis_wisata/create');
		$this->load->view('layout/footer');
	}

	public function add_data() {
		$this->Insert_model->insert_jenis_wisata();
		redirect('Jenis_wisata/index');
	}

	public function delete_data($id) {
		$this->Delete_model->delete_jenis_wisata($id);
		redirect('Jenis_wisata/index');
	}
}
?>