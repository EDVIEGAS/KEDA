<?php

function check_already_login()
{
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id_usuario');
	if ($user_session) {
		redirect('dashboard');
	}
}

function check_not_login()
{
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id_usuario');
	if (!$user_session) {
		redirect(base_url());
	}
}

?>