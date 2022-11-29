<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class teste extends CI_Controller{

    public function ver(){
       $this->template->load('template','Supplier/supplier_data');
    }

    public function estar(){
        $this->template->load('template','formulario');
    }
}