<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class Selecao extends CI_Controller
{
	function __construct(){
        parent::__construct();
    }

    
  public function novo()
  {

    if ($this->session->userdata('valida')):
        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
      
        $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

        $this->template->load('template','ver/verSelecao.php',$data);

    else:
      redirect(base_url());
    endif;
  }

    function consultarSelecao(){

    }
}

?>
