<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Payment_model', 'payment');
	}

	// menampilkan semua riwayat pembayaran
	public function index()
	{
		// jika bukan admin redirect 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}
		$data['title'] = 'Riwayat Pembyaran';
		$data['payment'] = $this->payment->getAll();

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/payment/index');
		$this->load->view('admin/layouts/footer');
	}

	// tampilkan detail pembayaran
	public function detail($invoice)
	{
		// jika bukan admin redirect 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}

		$data['title'] = 'Detail pembayaran';
		$data['payment'] = $this->payment->getByInvoice($invoice);

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/payment/detail');
		$this->load->view('admin/layouts/footer');
	}
}
