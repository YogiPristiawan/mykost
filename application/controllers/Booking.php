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

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/booking/index');
		$this->load->view('admin/layouts/footer');
	}

	//  hapus data booking
	public function delete($produk_id = '', $booking_id = '')
	{

		//  jika yang mengakses bukan admin redirect 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}

		$this->db->db_debug = FALSE;
		$this->db->trans_start();
		$this->booking->delete($booking_id);
		$this->produk->update($produk_id, ['status' => '0']);
		$this->db->trans_complete();

		if ($this->db->trans_status() === FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger m-auto" role="alert">Data booking gagal dihapus.</div>');
			redirect(base_url('booking'));
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success m-auto" role="alert">Data booking berhasil dihapus.</div>');
			redirect(base_url('booking'));
		}
	}
}
