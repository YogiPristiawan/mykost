<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_model extends CI_Model
{
	// tampilkan semua booking
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('booking');
		$this->db->join('produk', 'produk.produk_id = booking.produk_id');

		return $this->db->get()->result_array();
	}

	// tambah data booking
	public function add($data)
	{
		return $this->db->insert('booking', $data);
	}

	// delete data booking
	public function delete($id)
	{
		return $this->db->delete('booking', ['booking_id' => $id]);
	}

	// melakukan upload bukti transfer
	public function uploadImage($invoice)
	{
		$config = [
			'file_name'       => 'payment_' . $invoice,
			'upload_path'     => './uploads/payment/',
			'allowed_types'   => 'jpg|jpeg|png|JPG|PNG|JPEG',
			'max_size'        => 0,
			'max_width'       => 0,
			'max_height'      => 0,
			'overwrite'       => TRUE,
			'file_ext_tolower' => TRUE
		];

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('bukti_tf')) {
			return $this->upload->data('file_name');
		} else {
			$this->session->set_flashdata('upload_error', $this->upload->display_errors());
			return false;
		}
	}
}
