<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Tempat_wisata extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CRUD_model');
        $this->load->model('Insert_model');
        $this->load->model('Delete_model');
        $this->load->model('Edit_model');
    }

	public function index()
	{
		$data['page_title']='Kelola Tempat Wisata';
        $data['tempat_wisata'] = $this->CRUD_model->join_tempat_wisata('tempat_wisata');

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('tempat_wisata/tempat_wisata', $data);
		$this->load->view('layout/footer');
	}

	public function tambah_data() {
		$data['page_title']='Tambah Data';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('tempat_wisata/create');
		$this->load->view('layout/footer');
	}

	public function add_data() {
		$this->Insert_model->insert_tempat_wisata();
		redirect('Tempat_wisata/index');
	}

	public function delete_data($id) {
		$this->Delete_model->delete_tempat_wisata($id);
		redirect('Tempat_wisata/index');
	}

	// public function edit_data($id) {
	// 	$where = array('id' => $id);
	// 	$data['tempat_wisata'] = $this->Edit_model->edit_data_tempat($where, 'tempat_wisata');
	// 	redirect('Tempat_wisata/index');
	// }

	public function id_data_tempat($id) {
		$data['page_title']='Edit Data';
		$data['tempat_wisata'] = $this->Edit_model->id_tempat_wisata($id)->row();

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('tempat_wisata/update', $data);
		$this->load->view('layout/footer');
	}

	public function edit_data_tempat($id) {
		$data = [
			'nama' => $this->input->post('tempat_wisata'),
			'alamat' => $this->input->post('alamat'),
			'latlong' => $this->input->post('latlong'),
			'jenis_id' => $this->input->post('jenis_wisata'),
			'skor_rating' => $this->input->post('rating'),
			'harga_tiket' => $this->input->post('harga_tiket'),
			'kecamatan_id' => $this->input->post('kecamatan'),
			'website' => $this->input->post('website'),
			'fasilitas' => $this->input->post('fasilitas')
        ];

		if($this->Edit_model->update($data, $id) == TRUE) {
			$this->session->set_flashdata('edit', true);
		} else {
			$this->session->set_flashdata('edit', false);
		}
		// $this->Edit_model->edit_tempat_wisata($id);
		redirect('Tempat_wisata/edit_data_tempat');
	}

	public function id_detail_data($id) {
		$data['page_title']='Detail Data';
		$data['tempat_wisata'] = $this->CRUD_model->findById('tempat_wisata', $id);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('tempat_wisata/detail', $data);
		$this->load->view('layout/footer');
	}

	public function detail_data_tempat($id) {
		$this->CRUD_model->detail_tempat($id);
		redirect('Tempat_wisata/detail_data_tempat');
	}
}
?>