<?php

function isAdmin() // cek apakah yang login admin atau bukan
{
	$CI = &get_instance();
	if ($CI->session->userdata('username') == 'admin') {
		return TRUE;
	} else {
		return FALSE;
	}
}

function is_login() // cek apakah user login atau belum
{
	$CI = &get_instance();

	if (!empty($CI->session->userdata('username'))) {
		return TRUE;
	} else {
		return FALSE;
	}
}
