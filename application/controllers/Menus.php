<?php

    require_once APPPATH.'core/CI_Menus.php';

    class Menus extends CI_Menus
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Menu_model');
        }

        public function Index()
        {
            $data['conteudo'] = 'menus';
            $data['menus'] = $this->Menu_model->listarMenus(); 
            $this->load->view('plantilha',$data);
        }
    }


?>