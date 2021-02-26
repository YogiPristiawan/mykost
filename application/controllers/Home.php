<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produk_model', 'produk');
	}

	public function index()
	{
		// jika admin maka redirect ke halaman 404 Not Found, ini untuk mencegah admin melakukan booking
		if (isAdmin()) {
			return $this->err_404();
		}

		$data['title'] = 'Mykost';
		$data['produk'] = $this->produk->getAll();

		// $this->load->view('layouts/header', $data);
		$this->load->view('pages/home/index', $data);
		// $this->load->view('layouts/footer');
	}
}
