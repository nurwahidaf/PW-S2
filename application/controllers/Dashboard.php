<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index() {
		$data['page_title']='Dashboard';
		$data['message']='Welcome to our project!';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('layout/footer');
	}
}
