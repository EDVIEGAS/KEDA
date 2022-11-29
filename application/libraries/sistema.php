<?php

class sistema{
	protected $ci;
	public $tema = array();

	public function __construct(){
		$this->ci =& get_instance();
		$this->ci->load->helper('funcoes');
	}
}

?>