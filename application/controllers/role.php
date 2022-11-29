<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class role extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->model('crud_model','cru');
  }

  public function Cadastrar1()
  {
    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');

    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header2', $dados);
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('inputs/form_role');
      $this->load->view('Parts_Pages/footer2');
    endif;
  }

  public function modalDetalheRole()
  {
    if(isset($_POST['id_role'])){
      $this->load->model('crud_model','crud');

     $role = $this->crud->getRole($this->input->post('id_role'));

     $conteudo ='';
     $conteudo .= '<dl class="row" style="font-size: 14px">';

     $conteudo .= '<dt class="col-sm-3">Perfil:</dt>';
     $conteudo .= '<dd class="col-sm-9">'.$role[0]->nome_role.'</dd>';

     $conteudo .= '<dt class="col-sm-3">Sigla:</dt>';
     $conteudo .= '<dd class="col-sm-9">'.$role[0]->sigla.'</dd>';

     $conteudo .= '<dt class="col-sm-3">Data de Criacao:</dt>';
     $conteudo .= '<dd class="col-sm-9">'.$role[0]->data_criacao.'</dd>';
     $conteudo .= '</dl>';


     echo $conteudo;

    }else{
      echo "ta mal mano";
    }
  }

  public function cadastrar()
  {
    if($this->session->userdata('valida')){

          $data_hora = date('Y/m/d H:i:s');
          $nome_role1 = $this->input->post('Nome');
          $dado = [
            'nome_role' => $nome_role1,
            'sigla' => $this->input->post('Sigla'),
            'data_criacao' => $data_hora
          ];

      $this->load->model('crud_model','crud');
      if ($this->crud->insert_role($dado)) {
      // $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h5></div>');
      //  redirect('role/listar');
      echo $data_hora;
     }else{
      // $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h5></div>');
      //  redirect('role/listar');
     }
   }
  }

  public function editar()
  {

		$this->auth->check_logged(6,$this->router->class , $this->router->method);

    if($this->session->userdata('valida')){

          $data_hora = date('Y/m/d H:i:s');
          $nome_role1 = $this->input->post('Nome');
          $id_role = $this->input->post('id');
          $dado = [
            'nome_role' => $nome_role1,
            'sigla' => $this->input->post('Sigla')
            // 'data_criacao' => $data_hora
          ];

      $this->load->model('crud_model','crud');
      if ($this->crud->AtualizarRole($id_role,$dado)) {
      // $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h6></div>');
      //  redirect('role/listar');
      echo $data_hora;
     }else{
      // $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h5></div>');
      //  redirect('role/listar');
     }
   }
  }

  public function atualizar()
  {

		$this->auth->check_logged(6,$this->router->class , $this->router->method);

	  if($this->session->userdata('valida')){
	     $this->form_validation->set_rules('Nome','Nome','required', array('trim','required' => 'O campo %s nao deve estar vazio.'));
	     $this->form_validation->set_rules('Sigla','Sigla','required', array('trim','required' => 'O campo %s nao deve estar vazia.'));

	     if ($this->form_validation->run() == FALSE)
	     {
	      redirect('role/Cadastrar1');
	    }else{
	      $data_hora = date('d/m/Y H:i:s');
	      $dado = [
	        'nome_role' => $this->input->post('Nome'),
	        'sigla' => $this->input->post('Sigla')
	      ];

	      $this->load->model('crud_model','crud');
	      if ($this->crud->AtualizarRole($this->input->post('id'),$dado)) {
	      $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h6></div>');

	       redirect('role/listar');
	     }else{
	      $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h5></div>');
	       redirect('role/listar');
	     }
	   }
	 }
  }

  public function excluir($id = null)
  {

			$this->auth->check_logged(6,$this->router->class , $this->router->method);

      $this->load->model('crud_model','crud');
      if ($id == null) return 0;
      if($this->crud->Excluir_role($id)==1){
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados Eliminado.</h6></div>');
        redirect('role/listar');
      }else{
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h5></div>');
        redirect('role/listar');
      }
  }

  public function listar()
  {
		// $this->auth->check_logged(6,$this->router->class , $this->router->method);

      $dados['titulo'] = 'KEDA';
      $this->load->model('crud_model','cru');
      $dados['roles'] = $this->cru->role();
      $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

      if ($this->session->userdata('valida')):
          $this->template->load('template','listar/listar_role',$dados);
      endif;
  }

}
?>
