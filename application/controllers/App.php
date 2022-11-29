<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    function __construct(){
    		parent::__construct();
    		$this->load->model('Menu_model');
    		$this->load->library('form_validation');
    		$this->load->helper('form');
    		$this->load->helper('funcoes');
	  }

    public function index()
    {
    		if($this->session->userdata('valida') == true){
    			redirect('dashboard');
    		}else{
    			$this->load->view('Login');
    		}

    }

    public function entrar()
	  {

	 $this->load->library('form_validation');
	 $this->load->helper('form');
	 $this->form_validation->set_rules('user','user', 'required', array('required' => 'O campo %s nao deve estar vazio.'));
	 $this->form_validation->set_rules('senha','senha', 'required', array('required' => 'O campo %s nao deve estar vazio'));

	 if ($this->form_validation->run() == FALSE)
	 {
		$dados['titulo'] = "KEDA";
		$this->load->view('login', $dados);
	 }else{

		$dados = array('user' => $this->input->post('user'),'senha'=> $this->input->post('senha'));
		$result = $this->formando->entrar($dados);
		if ($result->id_role != null) {
			$role = $this->formando->role($result->id_role);

			if ($result != 0) :
			   if ($result->status == "Activo") {
				   $this->session->set_userdata('valida', TRUE);
				   $this->session->set_userdata('id_usuario', $result->id_usuario);
				   $this->session->set_userdata('nome', $result->nome);
				   $this->session->set_userdata('username', $result->username);
				   $this->session->set_userdata('senha', $result->senha);
				   $this->session->set_userdata('imagem', $result->imagem);
				   $this->session->set_userdata('role', $role->nome_role);
				   $this->session->set_userdata('id_role', $result->id_role);
				   $this->session->set_userdata('ultimo_log', date('Y/m/d H:i:s'));
				   $this->session->set_userdata('ctrl', 'true');

				   $this->log_Entrar();

			 	   redirect('dashboard');
			   }else{
	    	      $this->session->set_flashdata('error','<div class="alert alert-success alert-dismissible bg-red-lighter" style="border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Esse User nao tem permissao para aceder ao Sistema.</h6></div>');
                  redirect(base_url());
	            }
	        else:
	        	$this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible bg-red-lighter" style="border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-lock"></i> Senha ou conta esta errado.</h6></div>');
		     	redirect(base_url());
	        endif;
	    }else{
	    	    $this->session->set_flashdata('error','<div class="alert alert-danger alert-dismissible bg-red-lighter" style="border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-lock"></i> Senha ou conta errada.</h6></div>');
	    	    redirect(base_url());
		}

 }
}

public function dashboard()
{
	if($this->session->userdata('valida') == true){
		$dados['titulo'] = 'KEDA';
		$this->load->model('Atleta_Model','total');
    $this->load->model("send_notificationModel");
    $this->load->model('mestre_model','mestre');

		$dados['total'] = $this->total->totalAtleta();
		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
		$dado['total_unread_notifications'] = $this->send_notificationModel->receiveNotification();
    $dados['mestre'] = $this->mestre->getAllMestre();


		$this->template->load('template','dashboard', $dados);

	}else{
		redirect(base_url());
	}

	$this->session->unset_userdata('ctrl');

}

public function log_Sair(){
	$id_usuario2 = $this->session->userdata('id_usuario');
	$data_sair = date('Y/m/d H:i:s');

	$dado2 = [
		'horaLogout' => $data_sair
	];

	$this->formando->login_utilizador3($id_usuario2, $dado2);
}

public function sair()
{
	$this->log_Sair();
	$this->session->unset_userdata('valida');
	$this->session->unset_userdata('id_usuario');
	$this->session->unset_userdata('nome');
	$this->session->unset_userdata('username');
	$this->session->unset_userdata('senha');
	$this->session->unset_userdata('ultimo_log');

	redirect(base_url());
}

public function log_Entrar(){

	//$ultimo_log3 = $this->session->userdata('ultimo_log');

	$id_usuario2 = $this->session->userdata('id_usuario');
	$ultimo_log2 = $this->session->userdata('ultimo_log');

	$dado3 = [
		'dataLogin' => $ultimo_log2
	];

	$dado2 = [
		'id_utilizador' => $id_usuario2,
		'horaLogin' => $ultimo_log2
	];

	$this->formando->login_utilizador2($id_usuario2,$dado3);
	$this->formando->login_utilizador($dado2);
}

public function getMunicipio()
{

	$id_provincia1 = $this->input->post('id_provincia');

	$municipios = $this->db->query('SELECT * FROM municipio m WHERE m.id_provincia_f='.$id_provincia1)->result();

	foreach ($municipios as $municipio) {
		echo "<option value='{$municipio->nome_municipio}'>$municipio->nome_municipio</option>";
	}

}

public function getEstilo(){
	$id_estilo = $this->input->post('id_academia');

	$sql = 'select * from academia inner join estilo_jujitsu on academia.idestilo = estilo_jujitsu.id_estilo where id_academia = ?';
	$nome_estilo1 = $this->db->query($sql,array($id_estilo))->result()[0];

	$estilo_final = $nome_estilo1->nome_estilo;

	echo ($estilo_final);
}

}
