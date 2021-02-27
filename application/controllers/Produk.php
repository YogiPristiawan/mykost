<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Produk_model', 'produk');
		$this->load->model('Booking_model', 'booking');
		$this->load->model('Payment_model', 'payment');
		$this->load->model('Tipe_model', 'tipe');
	}

	// halaman admin produk
	public function index()
	{
		// jika bukan admin tampilkan halaman 404 Not Found
		if (!isAdmin()) {
			return redirect(base_url('err_404'));
		}

		$data['title'] = 'Produk';
		$data['produk'] = $this->produk->getAll();

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/produk/index');
		$this->load->view('admin/layouts/footer');
	}

	// menampilkan detail produk
	public function detail($id = '')
	{

		if (isAdmin()) {

			// jika admin yang akses
			$data['title'] = 'Detail produk';
			$data['produk'] = $this->produk->getById($id);

			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/produk/detail');
			$this->load->view('admin/layouts/footer');
		} else {

			// jika user yang akses
			$data['title'] = 'Detail produk';
			$data['produk'] = $this->produk->getById($id);

			// jika produk dipesan tampilkan detail pemesanan
			if ($data['produk']['status'] == '1') {
				$data['booking'] = $this->booking->detail($id);
			}

			$this->load->view('layouts/header', $data);
			$this->load->view('pages/produk/detail');
			$this->load->view('layouts/footer');
		}
	}

	// tambah data produk
	public function tambah()
	{
		// jika bukan admin yang redirect ke halaman 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}

		//  produk_id, nama_produk, tipe, harga, deskripsi, gambar, status

		$this->form_validation->set_rules('nama_produk', 'Nama Produk', ['required']);
		$this->form_validation->set_rules('harga', 'Harga', ['required', 'numeric']);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', ['required']);

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Tambah data produk';
			$data['tipe'] = $this->tipe->getAll();

			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/produk/tambah');
			$this->load->view('admin/layouts/footer');
		} else {

			$data['nama_produk'] = $this->input->post('nama_produk');
			$data['tipe'] = $this->input->post('tipe');
			$data['harga'] = $this->input->post('harga');
			$data['deskripsi'] = $this->input->post('deskripsi');
			$data['gambar'] = $this->produk->uploadImage($data['nama_produk']);

			if ($data['gambar'] === FALSE) {
				return redirect('produk/tambah');
			}

			if ($this->produk->add($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success m-auto" role="alert">Data produk berhasil ditambahkan.</div>');
				redirect('produk');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger m-auto" role="alert">Data produk gagal ditambahkan.</div>');
				redirect('produk');
			}
		}
	}

	// tampilkan halaman edit data produk
	public function edit($id = '')
	{
		// jika bukan admin tampilkan halaman 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}

		$this->form_validation->set_rules('nama_produk', 'Nama Produk', ['required']);
		$this->form_validation->set_rules('tipe', 'Tipe', ['required']);
		$this->form_validation->set_rules('harga', 'Harga', ['required', 'numeric']);
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', ['required']);

		if ($this->form_validation->run() === FALSE) {
			$data['title'] = 'Edit produk';
			$data['produk'] = $this->produk->getById($id);
			$data['tipe'] = $this->tipe->getAll();

			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/produk/edit');
			$this->load->view('admin/layouts/footer');
		} else {

			$data['produk_id'] = $this->input->post('produk_id');
			$data['nama_produk'] = $this->input->post('nama_produk');
			$data['tipe'] = $this->input->post('tipe');
			$data['harga'] = $this->input->post('harga');
			$data['deskripsi'] = $this->input->post('deskripsi');

			// jika melakukan edit gambar
			if (!empty($_FILES['gambar']['name'])) {
				$data['gambar'] = $this->produk->uploadImage($data['produk_id']);
				if ($data['gambar'] === FALSE) {
					return redirect(base_url('produk/edit/' . $data['produk_id']));
				}
			}

			if ($this->produk->update($data['produk_id'], $data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success m-auto" role="alert">Data produk berhasil diubah.</div>');
				redirect(base_url('produk'));
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger m-auto" role="alert">Data produk gagal ditambahkan.</div>');
				redirect(base_url('produk'));
			}
		}
	}

	// melakukan hapus data produk
	public function delete($id = '')
	{
		// jika bukan admin redirect halaman 404 Not Found
		if (!isAdmin()) {
			return $this->err_404();
		}

		$produk = $this->produk->getByid($id);

		$this->db->db_debug = FALSE;

		if ($this->produk->delete($id)) {

			// jika berhasil
			unlink('uploads/produk/' . $produk['gambar']);  // hapus foto yang ada di folder uploads
			$this->session->set_flashdata('message', '<div class="alert alert-success m-auto" role="alert">Data produk berhasil dihapus.</div>');
			redirect(base_url('produk'));
		} else {

			// jika gagal (produk masih berada di daftar booking);
			$this->session->set_flashdata('message', '<div class="alert alert-danger m-auto" role="alert">Data produk gagal dihapus.</div>');
			redirect(base_url('produk'));
		}
	}


	// MELAKUKAN BOOKING & PEMBAYARAN PRODUK
	public function booking()
	{
		// jika admin maka redirect ke 404 Not Found, untuk mencegah admin melakukan booking
		if (isAdmin()) {
			return $this->err_404();
		}

		$payment['invoice'] = $this->input->post('invoice');
		$payment['tanggal'] = $this->input->post('tanggal');
		$payment['nama_produk'] = $this->input->post('nama_produk');
		$payment['nama_pemesan'] = $this->input->post('nama_pemesan');
		$payment['alamat'] = $this->input->post('alamat');
		$payment['no_telp'] = $this->input->post('no_telp');
		$payment['jumlah'] = $this->input->post('jumlah');
		$payment['bukti_tf'] = $this->booking->uploadImage($payment['invoice']);

		$booking['booking_at'] = $this->input->post('tanggal');
		$booking['produk_id'] = $this->input->post('produk_id');
		$booking['pay_invoice'] = $this->input->post('invoice');

		// jika gagal upload gambar
		if ($payment['bukti_tf'] === FALSE) {
			redirect('home');
		} else {

			// $this->db->db_debug = FALSE;

			$this->db->trans_start();
			$this->payment->add($payment);
			$this->booking->add($booking);
			$this->produk->update($booking['produk_id'], ['status' => '1']);
			$this->db->trans_complete();

			if ($this->db->trans_status() === FALSE) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger m-auto" role="alert">Gagal melakukan booking.</div>');
				redirect('home');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-success m-auto" role="alert">Berhasil melakukan booking.</div>');
				redirect('home');
			}
		}
	}
}
