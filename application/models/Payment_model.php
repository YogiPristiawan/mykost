<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment_model extends CI_Model
{
	// tampilkan semua riwayat pembayaran
	public function getAll()
	{
		return $this->db->get('payment')->result_array();
	}

	// tampilkan detail pembayaran berdasarkan invoice
	public function getByInvoice($invoice)
	{
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->where('invoice', $invoice);

		return $this->db->get()->row_array();
	}

	// delete data pembayaran
	public function delete($invoice)
	{
		return $this->db->delete('payment', ['invoice' => $invoice]);
	}
}
