<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
	//tampilkan semua product
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('tipe', 'tipe.tipe_id = produk.tipe');

		return $this->db->get()->result_array();
	}

	// tampilkan product berdasarkan id
	public function getByid($produk_id)
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('tipe', 'tipe.tipe_id = produk.tipe');
		$this->db->where('produk.produk_id', $produk_id);

		return $this->db->get()->row_array();
	}

	//tambah data product
	public function add($data)
	{
		return $this->db->insert('produk', $data);
	}

	// update data product
	public function update($produk_id, $data)
	{
		return $this->db->update('produk', $data, ['produk_id' => $produk_id]);
	}

	//delete data product
	public function delete($id)
	{
		return $this->db->delete('produk', ['produk_id' => $id]);
	}

	//  melakukan upload gambar
	public function uploadImage($nama_produk)
	{
		$config = [
			'file_name'		  => $nama_produk,
			'upload_path'     => './uploads/produk/',
			'allowed_types'   => 'jpg|jpeg|png|JPG|PNG|JPEG',
			'max_size'        => 0,
			'max_width'       => 0,
			'max_height'      => 0,
			'overwrite'       => TRUE,
			'file_ext_tolower' => TRUE
		];

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar')) {
			return $this->upload->data('file_name');
		} else {
			$this->session->set_flashdata('upload_error', $this->upload->display_errors());
			return false;
		}
	}
}
