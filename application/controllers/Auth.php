<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model', 'users');
	}

	// menampilkan form login
	public function login()
	{
		if (isset($_POST['submit'])) {
			$this->_login();
		} else {
			$data['title'] = 'Login';

			$this->load->view('admin/layouts/header', $data);
			$this->load->view('pages/login/index');
			$this->load->view('admin/layouts/footer');
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->users->getByEmail($email);

		// jika ada user
		if ($user) {

			// cek kesesuiaian password
			if ($user['password'] === $password) {

				$data['username'] = $user['username'];
				$data['email'] = $user['email'];

				$this->session->set_userdata($data);  // simpan data admin ke dalam session
				redirect(base_url('admin'));
			} else {
				$this->session->set_flashdata('message', 'Password yang anda masukkan salah.');
				redirect(base_url('auth/login'));
			}
		} else {
			$this->session->set_flashdata('message', 'User tidak terdaftar.');
			redirect(base_url('auth/login'));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();

		$this->session->set_flashdata('message', 'Berhasil logout.');
		redirect('home');
	}
}
