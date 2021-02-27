<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users_model extends CI_Model
{
	// tampilkan semua user
	public function getAll()
	{
		return $this->db->get('users')->result_array();
	}

	// tampikan user berdasarkan email
	public function getByEmail($email)
	{
		return $this->db->get_where('users', ['email' => $email])->row_array();
	}
}
