<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CRUD_model');
        $this->load->model('Insert_model');
        $this->load->model('Delete_model');
    }

	public function index()
	{
		$data['page_title']='Kelola Kecamatan';
        $data['kecamatan'] = $this->CRUD_model->getAll('kecamatan');

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('kecamatan/kecamatan', $data);
		$this->load->view('layout/footer');
	}

	public function tambah_data() {
		$data['page_title']='Tambah Data';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('kecamatan/create');
		$this->load->view('layout/footer');
	}

	public function add_data() {
		$this->Insert_model->insert_kecamatan();
		redirect('Kecamatan/index');
	}

	public function delete_data($id) {
		$this->Delete_model->delete_kecamatan($id);
		redirect('Kecamatan/index');
	}
}
?>