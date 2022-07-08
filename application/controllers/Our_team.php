<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_team extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('CRUD_model');
    }

	public function index()
	{
		$data['page_title']='Our Team';
        $data['our_team'] = $this->CRUD_model->getAll('our_team');

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('our_team/our_team', $data);
		$this->load->view('layout/footer');
	}
}
?>