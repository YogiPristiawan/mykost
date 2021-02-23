<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function index()
	{
		// jika bukan admin redirect 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}
		$data['title'] = 'Halaman admin';
		$this->load->view('layouts/header', $data);
		$this->load->view('admin/home/index');
		$this->load->view('layouts/footer');
	}
}
