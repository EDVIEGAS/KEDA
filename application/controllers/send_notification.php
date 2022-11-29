<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// include_once(APPPATH.'controllers/Qr_code_generate.php');
// require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';
//
// use Dompdf\Dompdf;
// use Dompdf\Options;
//este controlador vai gerir tudo que tem haver com o atleta;

class send_notification extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->helper('funcoes');

  }

  public function sendNotication(){

    $this->load->model("send_notificationModel");

    $dado = [
      'user_id' => $this->input->post('user_id'),
      'user_idReceive' => $this->input->post('user_idReceive'),
      'message' => $this->input->post('message'),
      'conteudo' => $this->input->post('conteudo'),
      'is_read' => 0
    ];

    return $this->send_notificationModel->sendNotication($dado);

  }

  public function receiveNotification(){
      $this->load->model("send_notificationModel");

      $retorno = $this->send_notificationModel->receiveNotification();

      echo $retorno;
  }

  public function AllNotification(){
      $this->load->model("send_notificationModel");

      $retorno = $this->send_notificationModel->AllNotification();

			echo json_encode($retorno);

  }

  public function read_notification(){
      $this->load->model("send_notificationModel");

      $retorno = $this->send_notificationModel->read_notification($this->input->post("id"));

  }

  public function read_conteudo(){
      $this->load->model("send_notificationModel");

      $retorno = $this->send_notificationModel->conteudo($this->input->post("id"));
      echo $retorno;
  }

  public function validar_trocaAtleta(){
      $this->load->model("send_notificationModel");

			$descricao = $this->input->post("nome");

			$query = $this->db->query("SELECT id_associacao_pro FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result()[0];
			$dado = [
				'id_associacao_pro' => $query->id_associacao_pro
			];

      $retorno = $this->send_notificationModel->validar_trocaAtleta($this->input->post("idmestre"),$dado);

      echo $retorno;
  }

	public function verMensagem($id = NULL,$idmestre = null)
	{
		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

		$dados['titulo'] = 'KEDA';
		$this->load->model("send_notificationModel");
		$this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);

		$dado['mestre'] = $this->Atleta->getIdAtletaInfTecn($idmestre);
		$dado['mensagem'] = $this->send_notificationModel->verMensagem($id);
		$dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
		// var_dump($dado['mestre']);

		if ($this->session->userdata('valida')):
			$this->template->load('template','ver/verMessagem',$dado);
		endif;
	}

	public function caixaDeEntrada()
	{
		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

		$dados['titulo'] = 'KEDA';
		$this->load->model("send_notificationModel");
		$this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);

		// $dado['mestre'] = $this->Atleta->getIdAtletaInfTecn($idmestre);
		$dado['caixaEntrada'] = $this->send_notificationModel->AllNotificationcaixa();
		$dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
		// var_dump($dado['mestre']);

		if ($this->session->userdata('valida')):
			$this->template->load('template','ver/caixaDeEntrada',$dado);
		endif;
	}

	public function caixaDeSaida()
	{
		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

		$dados['titulo'] = 'KEDA';
		$this->load->model("send_notificationModel");
		$this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);

		// $dado['mestre'] = $this->Atleta->getIdAtletaInfTecn($idmestre);
		$dado['caixaEntrada'] = $this->send_notificationModel->AllNotificationcaixaSaida();
		$dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
		// var_dump($dado['mestre']);

		if ($this->session->userdata('valida')):
			$this->template->load('template','ver/caixaSaida',$dado);
		endif;
	}

	public function criarMensagem()
	{
		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

		$dados['titulo'] = 'KEDA';
		$this->load->model("send_notificationModel");
		$this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);

		// $dado['mestre'] = $this->Atleta->getIdAtletaInfTecn($idmestre);
		// $dado['caixaEntrada'] = $this->send_notificationModel->AllNotificationcaixa();
		$dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
		// var_dump($dado['mestre']);

		if ($this->session->userdata('valida')):
			$this->template->load('template','ver/criarMensagem',$dado);
		endif;
	}

}

?>
