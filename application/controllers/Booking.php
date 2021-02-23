<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Booking_model', 'booking');
		$this->load->model('Produk_model', 'produk');
		$this->load->model('Payment_model', 'payment');
	}

	// menampilkan daftar booking
	public function index()
	{
		// jika bukan admin redirect 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}

		$data['title'] = 'Daftar Booking';
		$data['booking'] = $this->booking->getAll();

		$this->load->view('layouts/header', $data);
		$this->load->view('admin/booking/index');
		$this->load->view('layouts/footer');
	}

	//  hapus data booking
	public function delete()
	{

		//  jika tidak ada data yang dikirimkan dan yang mengakses bukan admin redirect 404 Not Found
		if (empty($this->input->post()) || !isAdmin()) {
			return $this->err_404();
		}

		$produk_id = $this->input->post('produk_id');
		$booking_id = $this->input->post('booking_id');

		$this->db->db_debug = FALSE;
		$this->db->trans_start();
		$this->booking->delete($booking_id);
		$this->produk->update($produk_id, ['status' => '0']);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->session->set_flashdata('message', 'Booking gagal dibatalkan!');
			redirect(base_url('booking'));
		} else {
			$this->session->set_flashdata('message', 'Booking berhasil dibatalkan!');
			redirect(base_url('booking'));
		}
	}
}
