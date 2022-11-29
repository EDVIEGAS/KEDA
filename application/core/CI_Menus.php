<?php

class CI_Menus extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Menu_model');
        $this->menus=$this->Menu_model->obterMenus($role);
    }  
}


?>