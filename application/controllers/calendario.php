<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class calendario extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function actividadePDF(){
		// $retorno = $this->trazeTodos();
		$this->load->model('crud_model','actividade');

		$dado['actividade'] = $this->actividade->get_calendario_actividade(date('Y'));
	
		$this->load->view('pdfs/actividade', $dado);
	}
	
	public function GerarPDF()
	{
	  //$retorno = $this->trazeTodos();
		$this->actividadePDF();
		$this->load->library('pdf');
	
		//$this->load->view('Inputs/input_atleta.php');
	
		//$this->output->get_output();
		$this->dompdf->loadHtml('<h1>ola mundo</h1>');
		ob_start();
		$this->load->view('pdfs/actividade.php');
	
		$this->dompdf->loadHtml(ob_get_clean());
	
		$this->dompdf->setPaper('A4');
	
		$this->dompdf->render();
	
		$this->dompdf->stream('welcome.pdf', array('Attachment' => false));
	}

    public function calendario()
	{
		
		$dados['titulo'] = 'KEDA';
		$this->load->model('Calendario_Model','calendario');
		// $dados['actividade'] = $this->calendario->getAllEvento();
		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

		$descricao = $this->session->userdata('nome');
  		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();
		
		if(!empty($query)){

			$id_associacao_pro = $query[0]->id_associacao_pro;
			$dados['actividade'] = $this->calendario->get_calendario_actividade(date('Y'), $id_associacao_pro);

		}else{
			$dados['actividade'] = $this->calendario->get_calendario_actividade(date('Y'));
		}

		$estado = [
			0 => [
				'descricao' => 'EM ANDAMENTO',
				'cor' => '#dc3545'
			],
			1 => [
				'descricao' => 'ORGANIZANDO',
				'cor' => '#007bff'
			],
			2 => [
				'descricao' => 'FINALIZADO',
				'cor' => '#28a745'
				]
		   ];

		$dados['estado_actividade'] = $estado;

		if ($this->session->userdata('valida')):
				
			$this->template->load('template','ver/calendario',$dados);
			
		endif;
	}

	public function getEventos()
	{   
		$this->load->model('Calendario_Model','calendario');

		$descricao = $this->session->userdata('nome');
  		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();
		
		if(!empty($query)){

			$id_associacao_pro = $query[0]->id_associacao_pro;
			$dados = $this->calendario->getAllActividade(date('Y'), $id_associacao_pro);

		}else{
			$dados = $this->calendario->getAllActividade(date('Y'));
		}
		
		// $dados = $this->calendario->getAllActividade();
		 echo json_encode($dados);
	
	}

	public function novo($id = null)
	{
		set_dashboard('cadastrar Usuario');
		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','calendario');
		$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
		// $data['calendario'] = $this->calendario->getCalendario($id);
        
		if ($this->session->userdata('valida')):
			$this->template->load('template','formularios/form_actividade',$data);
		endif;
	}

	public function cadastrarEvento()
	{
        $data_start = str_replace('/','-', $this->input->post('start'));
		$data_start_conv = date("Y-m-d H:i:s",strtotime($data_start));

		$data_end = str_replace('/','-', $this->input->post('end'));
		$data_end_conv = date("Y-m-d H:i:s",strtotime($data_end));

		$dado = [
			'nome_actividade' => $this->input->post('title'),
			'data_inicio' => $data_start_conv,
			'data_fim' => $data_end_conv,
			'color' => $this->input->post('color')
			// 'local' => $this->input->post('nome_local')
		];

		$this->load->model('crud_model','crud');

		$resposta = $this->crud->insert_actividade($dado);

		if($resposta == true) {
			$this->session->set_flashdata('sucesso_evento', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.Evento Cadastrado.</h6></div>');
		}else{
			$this->session->set_flashdata('sucesso_academia', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');
			redirect('actividade/listar/' . $this->input->post('ano'));
		}
	
	}

	function listar($ano = NULL)
	{
		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$dados['actividade'] = $this->actividade->get_calendario_actividade(date('Y'));
		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
		
		if ($this->session->userdata('valida')):
			$this->template->load('template','listar/listar_actividade',$dados);
		endif;
	    
	}

	function listar_calendario()
	{

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','calendario');
		$dados['calendario'] = $this->calendario->listar_calendario();
		$dados['control'] = $this->calendario->control();

		if ($this->session->userdata('valida')):
			$this->load->view('Parts_Pages/header3');
			$this->load->view('Parts_Pages/Page_Top_Menu');
			$this->load->view('Parts_Pages/Page_Sidebar');
			$this->load->view('Parts_Pages/Page_Content');
			$this->load->view('listar/listar_calendario',$dados);
			$this->load->view('Parts_Pages/footer3');
		endif;
	}

	function adicionar_ano_calendario($id = null)
	{
		$ano = date('Y');

		$dado = [
			'ano' => $ano,
			'data_criacao' => date('Y-m-d')
		];

		$this->load->model('crud_model','crud');
		$verifica = $this->crud->Verificar_Calendario($ano);

		if ($verifica == 2) {
			
			$resposta = $this->crud->insert_calendario($dado);

			if($resposta != 0) {
				return $resposta;
			}else{
				return 0;
			}
		}else{
			return $this->crud->Verificar_Calendario2($ano);
		}

	}

	public function Editar_Actividade($id = NULL)
	{

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$data['actividade'] = $this->actividade->getActividade($id);
		$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

		// var_dump($data['actividade']);

		if ($this->session->userdata('valida')):
			$this->template->load('template','editar/editar_actividade',$data);
		endif;
	}

	public function Editar_Actividade1()
	{
        $this->load->model('crud_model','actividade');
		$id_actividade = $this->input->post('id_actividade');
		$ano = $this->actividade->getCalendario_ano($id_actividade);

		$dado = [
			'nome_actividade' => $this->input->post('nome_actividade'),
			'data_inicio' => $this->input->post('data_inicio'),
			'data_fim' => $this->input->post('data_fim'),
			'local' => $this->input->post('local')
		];

		$this->load->model('crud_model','crud');
		$resposta = $this->crud->AtualizarAtividade1($id_actividade,$dado);
		if($resposta == 1) {
			echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Actividade alterada com sucesso.</h6></div>';
			redirect('actividade/listar/');

		}else{
			echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>';
			redirect('actividade/listar_calendario');
		}

	}

	public function excluirEvento($id = NULL){

		$this->load->model('Calendario_Model','calendario');

		if($this->session->userdata('valida')):
			$dados['titulo'] = "SEDICE";

			if($id != NULL):
				$ctrl = $this->calendario->excluirEvento($id);
				if($ctrl == true):
					$this->session->set_flashdata('sucesso_evento', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Evento eliminado.</h6></div>');
					redirect('calendario/calendario');
				else:
					
				endif;
			else:
				$this->load->view('listar_atleta',$dados);
			endif;
		else:
			redirect(site_url());
		endif;
	}

}

?>