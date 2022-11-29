<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;


class actividade extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function atletaPDF2(){
		// $retorno = $this->trazeTodos();
		 $this->load->model('Atleta_Model','Atleta');
	
		$dado['atletas'] = $this->Atleta->getAllAtleta();
	
		return $this->load->view('pdfs/teste', $dado);
	}
	
	public function GerarPDF2()
	{
	 
		$this->load->library('Pdf');
		
		$teste = $this->atletaPDF2();
		
		ob_start();
	
		// $this->dompdf->set_base_path('http://localhost/KEDA/assets');
		$this->load->view('pdfs/teste.php');
	
		$this->dompdf->loadHtml(ob_get_clean());
	
		$this->dompdf->setPaper('A4','landscape');
	
		$this->dompdf->render(); 
	
		$this->dompdf->stream('welcome.pdf', ["Attachment" => false]);
	}

	public function verificarCategoria(){

		$this->load->model('campeonato_model');
		
		$categora_peso = $this->campeonato_model->categoriaPeso3();

	}

	public function BuscaByBilheteMestre()
  	{
        
        $this->load->model('mestre_model');

        $numero = $this->mestre_model->getAllMestreByBilhete($this->input->post('numero'));
        
        // if(empty($numero)){

			// $numero = $this->mestre_model->getAllMestreByBilheteAtleta($this->input->post('numero'));

			// if($numero != null){
			// 	$dado = [
			// 		'id_atleta' => $numero[0]->id_atleta,
			// 		'nome' => $numero[0]->nome,
			// 		'statu' => $numero[0]->statu,
			// 		'peso' => $numero[0]->peso,
			// 		'descricao_associacao' => $numero[0]->descricao_associacao,
			// 		'imagem' => $numero[0]->imagem,
			// 		'data_nascimento' => $numero[0]->data_nascimento,
			// 		'n_bilhete' => $numero[0]->n_bilhete,
			// 		'genero' => $numero[0]->genero,
			// 		'graduacao' => $numero[0]->graduacao
			// 	];
			// 	echo json_encode($dado);
			// }else{            
				echo 7;
			// }

		// }else{
			
		// 		$control_id_competidor = $numero[0] == 1 ? "$id_atleta" : "$id_mestre";

		// 		$dado = [
					
		// 			'id' => $numero[1]->$control_id_competidor,
		// 			'nome' => $numero[1]->nome,
		// 			'statu' => $numero[1]->statu,
		// 			'peso' => $numero[1]->peso,
		// 			'descricao_associacao' => $numero[1]->descricao_associacao,
		// 			'imagem' => $numero[0]->imagem,
		// 			'data_nascimento' => $numero[1]->data_nascimento,
		// 			'n_bilhete' => $numero[1]->n_bilhete,
		// 			'genero' => $numero[1]->genero,
		// 			'graduacao' => $numero[1]->graduacao
		// 		];
				
		// 		echo json_encode($dado);
			
		// }
		
        
  	}

	public function BuscaByBilheteMestreGraduacao()
  	{
        
        $this->load->model('mestre_model');

        $numero = $this->mestre_model->getAllMestreByBilhete($this->input->post('numero'));

		if(empty($numero)){

				$numero = $this->mestre_model->getAllMestreByBilheteAtleta($this->input->post('numero'));

				if($numero != null){
					$dado = [
						'id_mestre' => $numero[0]->id_mestre,
						'nome' => $numero[0]->nome,
						'statu' => $numero[0]->statu,
						'peso' => $numero[0]->peso,
						'descricao_associacao' => $numero[0]->descricao_associacao,
						'imagem' => $numero[0]->imagem,
						'data_nascimento' => $numero[0]->data_nascimento,
						'n_bilhete' => $numero[0]->n_bilhete,
						'genero' => $numero[0]->genero,
						'graduacao' => $numero[0]->graduacao
					];
					echo json_encode($dado);
				}else{            
					echo 7;
				}

		}else{
        
				$dado = [
					'id_mestre' => $numero[0]->id_mestre,
					'nome' => $numero[0]->nome,
					'statu' => $numero[0]->statu,
					'peso' => $numero[0]->peso,
					'descricao_associacao' => $numero[0]->descricao_associacao,
					'imagem' => $numero[0]->imagem,
					'data_nascimento' => $numero[0]->data_nascimento,
					'n_bilhete' => $numero[0]->n_bilhete,
					'genero' => $numero[0]->genero,
					'graduacao' => $numero[0]->graduacao
				];

				echo json_encode($dado);
			
		}
        
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
		$this->load->model('crud_model','calendario');
		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
		
		if ($this->session->userdata('valida')):
				
			$this->template->load('template','ver/calendario',$dados);
			
		endif;
	}

	public function novo($id = null)
	{
		set_dashboard('cadastrar Usuario');
		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','calendario');
		$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
		$data['actividade'] = $this->calendario->getAllTipoActividade();
		// $data['calendario'] = $this->calendario->getCalendario($id);
		$descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		if($query != NULL){
        	$data['id_associacao_pro'] = $query[0]->id_associacao_pro;
        }else{
            $data['id_associacao_pro'] = '';
        }

		if ($this->session->userdata('valida')):
			$this->template->load('template','formularios/form_actividade',$data);
		endif;
	}

	public function cadastrar_actividade()
	{
		
		$id_calendario = $this->adicionar_ano_calendario();

		$id_associacao_pro = $this->input->post('id_associacao_pro') == " " ? 0 : $this->input->post('id_associacao_pro');
        
		$dado = [
			'ano_calendario' => Date('Y'),
			'nome_actividade' => $this->input->post('nome_actividade'),
			'data_inicio' => $this->input->post('data_inicio'),
			'data_fim' => $this->input->post('data_fim'),
			'local' => $this->input->post('nome_local'),
			'id_associacao_pro' => $id_associacao_pro
		];

		$this->load->model('crud_model','crud');

		$resposta = $this->crud->insert_actividade($dado);

		if($resposta == true) {

			$this->session->set_flashdata('sucesso_actividade', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.A actividade foi adicionada.</h6></div>');
			redirect('actividade/listar');
			

		}else{
			$this->session->set_flashdata('sucesso_actividade', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');
			redirect('actividade/listar/' . $this->input->post('ano'));
		}
	
	}

    function modalVisualizar(){

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

    	$this->load->model('crud_model','actividade');

   		if (isset($_POST['id_actividade'])) {
			$mostrar = "";
			   $resultado = $this->actividade->getActividade($this->input->post('id_actividade'));

				$mostrar .= '<dl class="row">';
                $mostrar .= '<dt class="col-sm-5">Nome da Actividade</dt>';
                $mostrar .= '<dd class="col-sm-7">'.$resultado[0]->nome_actividade.'</dd>';
                $mostrar .= '<dt class="col-sm-5">local</dt>';
                $mostrar .= '<dd class="col-sm-7">'.$resultado[0]->local.'</dd>';
                $mostrar .= '<dt class="col-sm-5">Data de Inicio</dt>';
                $mostrar .= '<dd class="col-sm-7">'.$resultado[0]->data_inicio.'</dd>';
                $mostrar .= '<dt class="col-sm-5">Data de Fim</dt>';
                $mostrar .= '<dd class="col-sm-7">'.$resultado[0]->data_fim.'</dd>';
				$mostrar .= '<dt class="col-sm-5">Status</dt>';
				for($i=0;$i <= 3;$i++){
					if($i == $resultado[0]->status){
                		$mostrar .= '<dd class="col-sm-7 status text-bold bg-dark"><span style="color:'.$estado[$i]['cor'].'">'.$estado[$i]['descricao'].'</span></dd>';
					}
				}
                $mostrar .= '</dl>';
			   
   			    echo $mostrar;
   		}
    }

	function listarParticipaanteListaFinalizada($id = null)
	{
		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$this->load->model('seminarios_outros');

		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

		$dados['finalParticipante'] = $this->seminarios_outros->setAllParticipanteSeminario2($id);

		if ($this->session->userdata('valida')):
			$this->template->load('template','listar/listar_listaParticipanteFinalizada',$dados);
		endif;
	    
	}

	function listar($id = null)
	{
		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');

		$descricao = $this->session->userdata('nome');
  		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		if(!empty($query)){

			$id_associacao_pro = $query[0]->id_associacao_pro;
			$dados['actividade'] = $this->actividade->get_calendario_actividade(date('Y'), $id_associacao_pro);
			$dados['id_associacao_pro'] =$query[0]->id_associacao_pro;

		}else{
			
			$dados['id_associacao_pro'] = "";
			$dados['actividade'] = $this->actividade->get_calendario_actividade(date('Y'));

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
			'ano_calendario' => $this->input->post('ano_actividade'),
			'nome_actividade' => $this->input->post('nome_actividade'),
			'data_inicio' => $this->input->post('data_inicio'),
			'data_fim' => $this->input->post('data_fim'),
			'local' => $this->input->post('nome_local')
		];

		$this->load->model('crud_model','crud');

		$resposta = $this->crud->AtualizarAtividade1($id_actividade,$dado);
		if($resposta == 1) {
			$this->session->set_flashdata('sucesso_actividade', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.A actividade foi editada.</h6></div>');
			redirect('actividade/listar');

		}else{
			$this->session->set_flashdata('sucesso_actividade', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.A actividade foi adicionada.</h6></div>');
			redirect('actividade/listar');
		}

	}

	public function excluir($id = NULL){

		$this->load->model('crud_model','actividade');
		$ano = $this->actividade->getCalendario_ano($id);

		if($this->session->userdata('valida')):
			$dados['titulo'] = "SEDICE";

			if($id != NULL):
				$ctrl = $this->actividade->excluirActividade($id);
				if($ctrl == 1):
					$this->session->set_flashdata('sucesso_actividade', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Actividade foi eliminada.</h6></div>');
					redirect('actividade/listar');
		
				else:
					if($ctrl == 3):
						$this->session->set_flashdata('erro', '<div class="callout callout-warning"><h4>IMPORTANTE!</h4><p>Este formando já fez alguns módulos. Deseja Eliminá-lo mesmo assim? &nbsp;<a href="'.site_url('deleteformandoconfirmado'.'/'.$id).'" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Sim</a> (<b>Obs:</b> Apagará todos os módulo que fez) &nbsp;&nbsp;&nbsp; <a href="'.site_url('listar_atleta').'" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Não</a></p></div>');
						redirect('listar_atleta');
					else:
						$this->session->set_flashdata('erro', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> FALHA!</h4>Não foi possível eliminar o formando.</div>');
						redirect('listar_atleta');
					endif;
				endif;
			else:
				$this->load->view('listar_atleta',$dados);
			endif;
		else:
			redirect(site_url());
		endif;
	}

	public function excluirParticipante($id = NULL, $id_actividade = null){

		$this->load->model('crud_model','actividade');
	
		if($this->session->userdata('valida')):
			
			$ctrl = $this->actividade->excluirParticipante($id);

			if($ctrl == 1):
				$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Participante removido.</h6></div>');
				redirect('actividade/gerirEvento/' . $id_actividade);	
			else:
				$this->load->view('listar_atleta',$dados);
			endif;
		else:
			redirect(site_url());
		endif;
	}

	public function gerirEvento($idEvento = null, $idAssociacao = null)
  	{ 

    	if ($this->session->userdata('valida')):

			$dados['titulo'] = 'KEDA';

			$this->load->model('Calendario_Model','calendario');
			
			$this->load->model('Atleta_Model');
			$this->load->model('crud_model','cru');
			$this->load->model('Provincia');
			$this->load->model('campeonato_model');
			$this->load->model('Mandato_model');

			$descricao = $this->session->userdata('nome');

			// var_dump($descricao);

			$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();
			if($query != null){
				$idactividade = $query[0]->id_associacao_pro;
			}else{
				$idactividade = 0;
			}

			$query7 = $this->db->query("SELECT id_campeonato FROM campeonato WHERE fk_actividadeC =".$idEvento)->result();
			
			if(count($query7) != 0){
				$idcampeonato = $query7[0]->id_campeonato;
			}else{
				$idcampeonato = 0;
			}

			// var_dump($idcampeonato);

			$data['provincia'] = $this->Provincia->getAllProv();
			$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
			$data['teste'] = $this->campeonato_model->getcategoriaPeso2($idAssociacao,$idcampeonato,$idEvento);
			$data['sistemaLuta2'] = $this->campeonato_model->getsistemadeluta($idcampeonato);
			$data['participanteEPcamp'] = $this->campeonato_model->setAllParticipante2($idEvento,$idcampeonato);
			$data['layoutClassificacaoFinal'] =$this->campeonato_model->layoutClassificacaoFinal($idcampeonato);
			$data['layoutClassificacaoFinalCertificado'] =$this->campeonato_model->layoutClassificacaoFinal99($idcampeonato);
			// var_dump(json_encode($data['layoutClassificacaoFinal']));
			$data['evento'] = $this->calendario->getActividadeById($idEvento);
			$data['escalao'] = $this->campeonato_model->getEscalao();
			$data['categoriaIdade'] = $this->campeonato_model->getCategoriaIdade();
			$data['sistemaLuta'] = $this->campeonato_model->getSistemaLuta();
			$data['sistemaL666uta'] = $this->campeonato_model->layoutClassificacaoProvinciaFinal(1);
			// var_dump($data['sistemaL666uta']);

			$evento = $this->calendario->getActividadeById($idEvento);

			$palavra1 = explode(' ',trim($evento[0]->nome_actividade));

			$data['controlTI45'] = $this->campeonato_model->getcampeonato($idEvento,$palavra1[0],$idcampeonato);
			
			$data['StatusControl'] = $this->controlTelas($idEvento);
			$id2 = strval($idEvento);
			$data['eventoId'] = $id2;

			if($idcampeonato != 0){
				$data['id_campeonato'] = $this->campeonato_model->getcampeonato2($idEvento,$palavra1[0],$idcampeonato);
			}else{
				$data['id_campeonato'] = null;
			}
			

			if($query != NULL){
				$data['id_associacao_pro'] = $query[0]->id_associacao_pro;
			}else{
				$data['id_associacao_pro'] = 0;
			}

			

			// if($this->pegarStatus($id) == 2){
				$this->template->load('template','ver/gerir_actividade',$data);
			// }else{
			// 	$this->template->load('template','listar/listar_listaParticipanteFinalizada',$data);
			// }
			
			// $this->getCategoria($id);
		else:
			redirect(base_url());
		endif;

  	}

	public function setParticipanteEvento(){

		$dado = [
			'id_mestre' => $this->input->post('id_mestre'),
			'id_evento' => $this->input->post('id_evento')
		];

		$this->load->model('Calendario_Model','calendario');

		$resposta = $this->calendario->addParticipanteEvento($dado);

		if($resposta == 1) {
			$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.O Participante foi adicionado.</h6></div>');
		}else{
			$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');
			redirect('actividade/listar/' . $this->input->post('ano'));
		}
	}

	public function getEvento(){
     
		$this->load->model('Calendario_Model','calendario');

		$retorno = $this->calendario->getEvento($this->input->post('id_evento'));
		echo $retorno;
	}

	public function setSeminario(){
     
		$this->load->model('seminarios_outros');
		

		$dados = [
			'id_actividade' => $this->input->post('id_actividade')
		];

		$retorno = $this->seminarios_outros->setgraduacaofederacao($dados);
		echo $retorno;

	}

	public function setSeminarioTipo(){
     
		$this->load->model('seminarios_outros');
		$this->load->model('campeonato_model','campeonato');

		$dados = $this->input->post('dado');
		
		for($i=0;$i < count($dados) - 1;$i++){

			$dados12 = [
				'id_graduacaofederacao' => $dados[count($dados) - 1],
				'descricao_graduacao' => $dados[$i]
			];

			$retorno = $this->seminarios_outros->setgraduacaofederacaoSeminario($dados12);
	
		}

		// if($retorno == 1){
		// 	$dado = [
		// 	  'status' => 1
		// 	];
  
		// 	$this->campeonato->updateStatusCampeonato_provincial($dados[count($dados)-2],$dado);
		// }
		
		return $retorno;

	}

	public function setSeminarioFaixas(){
     
		$this->load->model('seminarios_outros');
		$this->load->model('campeonato_model','campeonato');

		$dados = $this->input->post('dado');
		$id_actividade = $dados[count($dados) - 1];

		$query = $this->db->query('select id_graduacaofederacao from graduacaofederacao where id_actividade ='.$id_actividade)->result()[0];
		$id_graduacaofederacao = $query->id_graduacaofederacao;
		
		for($i=0;$i < count($dados) - 1;$i++){

			$dados12 = [
				'descricao' => $dados[$i],
				'id_graduacaofederacao' => $id_graduacaofederacao
			];

			$retorno = $this->seminarios_outros->setgraduacaofederacaoFaixas($dados12);
	
		}

		return $retorno;

	}

	public function verSeminarioTipo(){

		$id = $this->input->post('idEvento2');

		$query = $this->db->query('select * from graduacaofederacao where id_actividade='.$id)->result();

		if(empty($query)){
			echo 1;
		}else{
			echo 2;
		}

	}

	public function setAllParticipante($id = null){
		$participantes = $this->db->query('SELECT * FROM participante_campeonato 
		INNER JOIN campeonato ON campeonato.id_campeonato = participante_campeonato.id_campeonato_fk
		WHERE id_campeonato_fk='.$id)->result();
		return $participantes;
	}

	public function getParticipantesSeminario(){

		$this->load->model('seminarios_outros');

		$id = $this->input->post('id_participanteActividade');

		$retorno = $this->seminarios_outros->getParticipantesSeminario($id);

		echo json_encode($retorno);
	}

	public function setVParticipanteEventoGraduacao(){

		$this->load->model('seminarios_outros');

			$dado = [

				'id_actividade' => $this->input->post('id_actividade'),
				'nome_participante' => $this->input->post('nome'),
				'bilhete_identidade' => $this->input->post('bilhete'),
				'dataNascimento' => $this->input->post('data'),
				'genero' => $this->input->post('genero'),
				'provincia' => $this->input->post('provincia'),
				'graduacao' => $this->input->post('graduacao'),
				'tipo' => $this->input->post('tipo')	
				
			];
	
			$resposta = $this->seminarios_outros->setParticipanteGraduacao($dado);
				
	}

	public function getParticipantesEvento(){

		$this->load->model('seminarios_outros');
	
		$id = $this->input->post('idEvento2');
	
		$participantes = $this->seminarios_outros->setAllParticipanteSeminario($id);
	
		$retorno = json_encode($participantes);
		 
		echo ($retorno);
	
	}

	public function getParticipantesEvento7(){

		$this->load->model('seminarios_outros');
	
		$id = $this->input->post('idEvento2');
	
		$participantes = $this->seminarios_outros->setAllParticipanteSeminario2($id);
	
		$retorno = json_encode($participantes);
		 
		echo ($retorno);
	
	}

	public function controlTelas($id = null){

		$query = $this->db->query('SELECT * FROM actividade2 WHERE id_actividade ='.$id)->result()[0];
		
		return $query;
	}

	public function controlTelas2(){

		$query = $this->db->query('SELECT control FROM controltelas')->result()[0];
		$query2 = $query->control;

		echo $query2;
	}

	public function controlTelasEsconder(){

		$this->load->model('seminarios_outros');
		$this->load->model('campeonato_model','campeonato');


		$var = $this->input->post('variavelConrol');
		$var2 = $this->input->post('idEvento5');

		// $dados = [
		// 	'control' => $var
		// ];

		$dados1 = [
			'status' => $var
		];

		// $retorno = $this->seminarios_outros->controlTelasEsconder($dados);

		$this->campeonato->updateStatusCampeonato_provincial($var2,$dados1);

		echo $retorno;
		
	}

	public function controlTelasEsconder56(){

		$this->load->model('seminarios_outros');

		$var = $this->input->post('id_actividade');
	
		$dados = [
			'id_evento' => $var
		];

		$retorno = $this->seminarios_outros->controlTelasEsconder($dados);

		echo $retorno;
		
	}

	public function controlarStatuParticipante(){

		$this->load->model('seminarios_outros');

		$id_participante = $this->input->post('id_participante');
		$statusparticipante = $this->input->post('statusparticipante');

		$dados = [
			'status' => $statusparticipante
		];

		$retorno = $this->seminarios_outros->controlarStatusParticipante($id_participante,$dados);

		echo $retorno;
		
	}

	public function controlarStatuActividade(){

		$this->load->model('seminarios_outros');

		$statusActividade = $this->input->post('statusActividade');
		$actividade = $this->input->post('idEvento2');

		$dados = [
			'status' => $statusActividade
		];

		$retorno = $this->seminarios_outros->controlarStatusActividade($actividade,$dados);

		echo $retorno;
		
	}

	public function pegarStatus($id = null){

		// $id = $this->input->post('idEvento5');

		$query = $this->db->query('SELECT control FROM controltelas')->result()[0];

		return $query->control;
	}
	
	public function OpdateTipoParticipante(){
		$this->load->model('seminarios_outros');

		$dado = [
			'tipo' => $this->input->post('tipo')
		];

		$id = $this->input->post('id_participanteActividade');

		$returno = $this->seminarios_outros->alterarTipoParticipante($id, $dado);

		if($returno == 1){
			echo 1;
		}else{
			echo 2;
		}

	}

	public function eliminarParticipanteActividade(){
		$this->load->model('seminarios_outros');

		$id_participanteActividade = $this->input->post('id_participanteActividade');

		$retorno = $this->seminarios_outros->eliminarParticipanteActividadeT($id_participanteActividade);

		return $retorno;
    

	}

	public function setcategoriaPeso(){

		$this->load->model('campeonato_model');

		$peso = $this->input->post('categoriaPeso');

		$retorno = $this->campeonato_model->setcategoriaPesoModel($peso);

	}

}

?>