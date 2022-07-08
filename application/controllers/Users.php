<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CRUD_model');
        $this->load->model('Insert_model');
        $this->load->model('Delete_model');
        $this->load->model('Edit_model');
    }

	public function index()
	{
		$data['page_title']='Kelola Users';
        $data['users'] = $this->CRUD_model->getAll('users');

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('users/users', $data);
		$this->load->view('layout/footer');
	}

	public function tambah_data() {
		$data['page_title']='Tambah Data';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('users/create');
		$this->load->view('layout/footer');
	}

	public function add_data() {
		$this->Insert_model->insert_users();
		redirect('Users/index');
	}

	public function delete_data($id) {
		$this->Delete_model->delete_users($id);
		redirect('Users/index');
	}

	public function id_users($id) {
		$data['page_title']='Edit Data';
		$data['tempat_wisata'] = $this->Edit_model->id_users($id);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('users/update', $data);
		$this->load->view('layout/footer');
	}

	public function edit_data_users($id) {
		$this->Edit_model->edit_users($id);
		redirect('Users/index');
	}

	public function id_detail_data($id) {
		$data['page_title']='Detail Data';
		$data['users'] = $this->CRUD_model->id_detail_users($id);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('users/detail', $data);
		$this->load->view('layout/footer');
	}

	public function detail_data_users($id) {
		$this->CRUD_model->detail_users($id);
		redirect('Users/detail');
	}
}
?>