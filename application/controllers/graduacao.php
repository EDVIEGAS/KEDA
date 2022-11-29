<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//este controlador vai gerir tudo que tem haver com o atleta;
include_once(APPPATH.'controllers/Qr_code_generate.php');
require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';

// require('Qr_code_generate.php');

use Dompdf\Dompdf;
use Dompdf\Options;

class graduacao extends Qr_code_generate
{
	function __construct()
	{
		parent::__construct();
		 $this->load->library('session');
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

	public function atletaPDF3(){
		// $retorno = $this->trazeTodos();
		 $this->load->model('seminarios_outros');

		$dado['layoutParticipantesAprovadosGraduacao'] = $this->seminarios_outros->setAllParticipanteSeminario2(4);

		return $dado;

	}

	public function GerarPDFCertificado($id)
	{

		$this->load->model('seminarios_outros');

	  $dado['layoutParticipantesAprovadosGraduacao'] = $this->seminarios_outros->setAllParticipanteSeminario2($id);
		$dado['SecretarioPresidente'] =$this->seminarios_outros->setAllSecretarioPresidente();

		// var_dump($dado['layoutParticipantesAprovadosGraduacao']);

		// $teste = $this->atletaPDF($id);
		$options = new Options();
		$options->set('defaultFont', 'Courier');
		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/certificado_graduacao.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4','landscape');

		$dompdf->render();
		$dompdf->stream('certificado.pdf', ["Attachment" => false]);

	}

	public function GerarPDFListaGraduacaoFinal($idactividade)
	{

		$this->load->model('seminarios_outros');

	  $dado['layoutParticipantesAprovadosGraduacao'] = $this->seminarios_outros->setAllParticipanteSeminario2($idactividade);
		                                                 // $this->seminarios_outros->setAllParticipanteSeminario2($idactividade);
		$dado['SecretarioPresidente'] = $this->seminarios_outros->setAllSecretarioPresidente();

		// $teste = $this->atletaPDF($id);
		// $options = new Options();
		// $options->set('defaultFont', 'Courier');
		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/pdfListaPartGraduacao.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		// $dompdf->setPaper('A4','landscape');

		$dompdf->render();
		$dompdf->stream('welcome.pdf', ["Attachment" => false]);

	}

	public function verificarCategoria(){

		$this->load->model('campeonato_model');

		$categora_peso = $this->campeonato_model->categoriaPeso3();

	}

	public function BuscaByBilheteMestre(){

        $this->load->model('mestre_model');

        $numero = $this->mestre_model->getAllMestreByBilhete($this->input->post('numero'));


    if(count($numero[1]) == 0){

				echo 7;

		}else{

				if($numero[0] == 1){
					$dado = [

						'id' => $numero[1][0]->id_mestre,
						'nome' => $numero[1][0]->nome,
						'statu' => $numero[1][0]->statu,
						'peso' => $numero[1][0]->peso,
						'descricao_associacao' => $numero[1][0]->descricao_associacao,
						'imagem' => $numero[1][0]->imagem,
						'data_nascimento' => $numero[1][0]->data_nascimento,
						'n_bilhete' => $numero[1][0]->n_bilhete,
						'genero' => $numero[1][0]->genero,
						'graduacao' => $numero[1][0]->graduacao
					];
				}else{
					$dado = [

						'id' => $numero[1][0]->id_atleta,
						'nome' => $numero[1][0]->nome,
						'statu' => $numero[1][0]->statu,
						'peso' => $numero[1][0]->peso,
						'descricao_associacao' => $numero[1][0]->descricao_associacao,
						'imagem' => $numero[1][0]->imagem,
						'data_nascimento' => $numero[1][0]->data_nascimento,
						'n_bilhete' => $numero[1][0]->n_bilhete,
						'genero' => $numero[1][0]->genero,
						'graduacao' => $numero[1][0]->graduacao
					];
				}

				echo json_encode($dado);

		}


  }


	public function BuscaByBilheteTodos(){

        $this->load->model('mestre_model');

        $numero = $this->mestre_model->getAllMestreByBilhete($this->input->post('numero'));


    if(count($numero) == 0){

				echo 7;

		}else{

				if($numero[0] == 1){
					$dado = [

						'id' => $numero[1][0]->id_mestre,
						'nome' => $numero[1][0]->nome,
						'statu' => $numero[1][0]->statu,
						'peso' => $numero[1][0]->peso,
						'descricao_associacao' => $numero[1][0]->descricao_associacao,
						'imagem' => $numero[1][0]->imagem,
						'data_nascimento' => $numero[1][0]->data_nascimento,
						'n_bilhete' => $numero[1][0]->n_bilhete,
						'genero' => $numero[1][0]->genero,
						'graduacao' => $numero[1][0]->graduacao
					];
				}else{
					$dado = [

						'id' => $numero[1][0]->id_atleta,
						'nome' => $numero[1][0]->nome,
						'statu' => $numero[1][0]->statu,
						'peso' => $numero[1][0]->peso,
						'descricao_associacao' => $numero[1][0]->descricao_associacao,
						'imagem' => $numero[1][0]->imagem,
						'data_nascimento' => $numero[1][0]->data_nascimento,
						'n_bilhete' => $numero[1][0]->n_bilhete,
						'genero' => $numero[1][0]->genero,
						'graduacao' => $numero[1][0]->graduacao
					];
				}

				echo json_encode($dado);

		}


  }

	public function BuscaByBilheteMestreGraduacao(){

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
		$this->load->model('seminarios_outros');

		$dado['actividade'] = $this->actividade->get_calendario_actividade(date('Y'));
		$dado['SecretarioPresidente'] = $this->seminarios_outros->setAllSecretarioPresidente();

		$this->load->view('pdfs/actividade', $dado);
	}

	public function GerarPDF(){
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

  public function calendario(){

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','calendario');
		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

		if ($this->session->userdata('valida')):

			$this->template->load('template','ver/calendario',$dados);

		endif;
	}

	public function novo2($id = null){

		$this->auth->check_logged(0,$this->router->class , $this->router->method);

		set_dashboard('cadastrar Usuario');
		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','calendario');
		$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
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

	//metodo para converter data
	public function convertDate($data){

	  $dataInicial = explode(' ',$data);
		$dateFim2 = explode('/',$dataInicial[0]);
		$dateFim3 = $dateFim2[2] ."-" . $dateFim2[0] . "-" . $dateFim2[1] . " " . $dataInicial[1] . " " . $dataInicial[2];
		// $dateFim3 = $dateFim2[2] ."-" . $dateFim2[0] . "-" . $dateFim2[1];

		return $dateFim3;

	}
	//fim metodo para converter data

	//metodo gerir graduacao..............................................................................................................

	public function gerirGraduacao()
  {

			// $this->auth->check_logged(0,$this->router->class , $this->router->method);

    	if ($this->session->userdata('valida')):

				$dados['titulo'] = 'KEDA';

				$this->load->model('Calendario_Model','calendario');

				$this->load->model('Atleta_Model');
				$this->load->model('crud_model','cru');
				$this->load->model('Provincia');
				$this->load->model('campeonato_model');
				$this->load->model('seminarios_outros');


				$query = $this->db->query("SELECT idGraduacao,controlModal FROM graduacaofederacao_atual")->result()[0];
				$idGraduacao = $query->idGraduacao;

				var_dump($idGraduacao);

				$data['provincia'] = $this->Provincia->getAllProv();
				$data['idCONTROLmodal8934'] = $query->controlModal;

				$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

				$data['valorControl'] = $this->controlTelas99($idGraduacao);

				// $data['participanteEPcamp'] = $this->campeonato_model->setAllParticipante2($idEvento,$idcampeonato);
				$data['layoutClassificacaoFinal'] =$this->campeonato_model->layoutClassificacaoFinal($idGraduacao);
				$data['layoutParticipantesAprovadosGraduacao'] =$this->seminarios_outros->setAllParticipanteSeminario2($idGraduacao);
				$data['totalInfoSeminario'] =$this->seminarios_outros->setAllParticipanteSeminario3($idGraduacao);
				$data['SecretarioPresidente'] =$this->seminarios_outros->setAllSecretarioPresidente();
				// $data['layoutClassificacaoFinalCertificado'] =$this->campeonato_model->layoutClassificacaoFinal99($idGraduacao);
				// var_dump(json_encode($data['totalInfoSeminario']));
				// $data['evento'] = $this->calendario->getActividadeById($idEvento);


				$data['infoGraduacao'] = $this->verSeminarioInfo($idGraduacao);

				$data['id_Graduacao'] = $idGraduacao;


				$this->template->load('template','ver/gerir_graduacao',$data);

		else:
			redirect(base_url());
		endif;

  }
	//metodo gerir graduacao..............................................................................................................

	public function verGraduacao($id = null)
  {

			// $this->auth->check_logged(0,$this->router->class , $this->router->method);

    	if ($this->session->userdata('valida')):

				$dados['titulo'] = 'KEDA';

				$this->load->model('Calendario_Model','calendario');

				$this->load->model('Atleta_Model');
				$this->load->model('crud_model','cru');
				$this->load->model('Provincia');
				$this->load->model('campeonato_model');
				$this->load->model('seminarios_outros');

				$idGraduacao = $id;


				// $query = $this->db->query("SELECT idGraduacao,controlModal FROM graduacaofederacao_atual")->result()[0];
				// $idGraduacao = $query->idGraduacao;

				// $data['provincia'] = $this->Provincia->getAllProv();
				// $data['idCONTROLmodal8934'] = $query->controlModal;

				$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

				// $data['valorControl'] = $this->controlTelas99($idGraduacao);

				// $data['participanteEPcamp'] = $this->campeonato_model->setAllParticipante2($idEvento,$idcampeonato);
				$data['layoutClassificacaoFinal'] =$this->campeonato_model->layoutClassificacaoFinal($idGraduacao);
				$data['layoutParticipantesAprovadosGraduacao'] =$this->seminarios_outros->setAllParticipanteSeminario7($idGraduacao);
				$data['totalInfoSeminario'] =$this->seminarios_outros->setAllParticipanteSeminario3($idGraduacao);
				$data['SecretarioPresidente'] =$this->seminarios_outros->setAllSecretarioPresidente();
				$data['id_Graduacao'] =$idGraduacao;
				// var_dump(json_encode($data['layoutParticipantesAprovadosGraduacao']));
				// $data['evento'] = $this->calendario->getActividadeById($idEvento);


				$data['infoGraduacao'] = $this->verSeminarioInfo($idGraduacao);

				$data['id_Graduacao'] = $idGraduacao;


				$this->template->load('template','ver/verGraduacao',$data);

		else:
			redirect(base_url());
		endif;

  }

	public function controlTelas99($id = null){

		$query = $this->db->query('SELECT controlTela FROM graduacaofederacao where id_graduacaofederacao ='.$id)->result()[0];
		return $query->controlTela;

	}

	//fim metodo gerir graduacao..........................................................................................................

	public function cadastrar_graduacao()
	{
		// $this->auth->check_logged(0,$this->router->class , $this->router->method);
    $this->load->model('crud_model','crud');
    $this->load->model('campeonato_model','campeonato');

		$tipoGraduacaoArray = [];

		if($this->input->post('checkboxPrimary1')){
				array_push($tipoGraduacaoArray, $this->input->post('checkboxPrimary1'));
		}
		if($this->input->post('checkboxDanger1')){
				array_push($tipoGraduacaoArray, $this->input->post('checkboxDanger1'));
		}
		if($this->input->post('checkboxSuccess1')){
				array_push($tipoGraduacaoArray, $this->input->post('checkboxSuccess1'));
		}

    $dado1 =[
      'Pais_campeonato' => $this->input->post('pais'),
      'Cidade_campeonato' => $this->input->post('provincia')
    ];

    $id_local_campeonato = $this->campeonato->setLocal_campeonato($dado1);

		$dado = [
			'dataHoraInicio' => $this->convertDate($this->input->post('data_inicio')),
			'dataHoraFim' => $this->convertDate($this->input->post('data_fim')),
			'localEvento' => $this->input->post('nome_local'),
			'cidadePais' => $id_local_campeonato
		];

		$id_graduacaofederacao = $this->crud->insert_graduacao($dado);


		for ($i=0; $i < count($tipoGraduacaoArray); $i++) {

			$dado = [
				'id_graduacaofederacao' => $id_graduacaofederacao,
				'descricao_graduacao' => $tipoGraduacaoArray[$i]
			];

			$this->crud->tipo_graduacao($dado);

		}

		if($id_graduacaofederacao != 0) {

			$dados4 = [
				'idGraduacao' => $id_graduacaofederacao
			];

			$dados5 = [
				'controlTela' => 1
			];

			$dados9 = [
				'controlModal' => 0
			];

			$this->crud->updateGraduacaoAtual(1,$dados4);
			$this->crud->updateControlTelaGraduacao($id_graduacaofederacao,$dados5);
			$this->crud->updateControlTelaGraduacao2($id_graduacaofederacao,$dados9);

			$this->session->set_flashdata('sucesso_actividade', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.A actividade foi adicionada.</h6></div>');

			redirect('graduacao/gerirGraduacao');

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

	function listarParticipaanteListaFinalizada2($id = null){

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$this->load->model('seminarios_outros');

		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

		$dados = $this->seminarios_outros->setAllParticipanteSeminario2($id);

	}

	function setAllParticipanteSeminario3(){

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$this->load->model('seminarios_outros');

		// $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
		$id = $this->input->post("idGraduacao");

		$query = $this->db->query('select dataHoraFim from graduacaofederacao where id_graduacaofederacao ='.$id)->result()[0];
    $data = $query->dataHoraFim;

		$data1 = explode(" ",$data);
		$data2 = explode("-",$data1[0]);
    $data3 = $data2[0];

		$dados = $this->seminarios_outros->setAllParticipanteSeminario6($id);

		foreach ($dados as $dados) {

			$dado = [
				'graduacao' => $dados->nova_graduacao
			];

			if($dados->nova_graduacao == 0){
        $proxData = (($data2[0])+1) ."-".$data2[1]."-".$data2[2];
			}elseif ($dados->nova_graduacao == 1) {
				$proxData = (($data2[0])+2) ."-".$data2[1]."-".$data2[2];
			}elseif ($dados->nova_graduacao == 2) {
				$proxData = (($data2[0])+3) ."-".$data2[1]."-".$data2[2];
			}elseif ($dados->nova_graduacao == 3) {
					$proxData = (($data2[0])+3) ."-".$data2[1]."-".$data2[2];
			}elseif ($dados->nova_graduacao == 4) {
				$proxData = (($data2[0])+5) ."-".$data2[1]."-".$data2[2];
			}elseif ($dados->nova_graduacao == 5) {
					$proxData = (($data2[0])+6) ."-".$data2[1]."-".$data2[2];
			}else{
				 $proxData = " ";
			}

			$dado10 = [
				'dataProxGraduacao' => $proxData
			];

			$this->seminarios_outros->updateNovaGraduacaoMestre($dados->id_participanteActividade,$dado10);

			$retorno = $this->seminarios_outros->setByBilheteParticipanteSeminario6($dados->bilhete_identidade);

			$this->seminarios_outros->updateInfoGraduacaoMestre($retorno, $dado);

		}

		echo json_encode($dados);

	}

	function listar($id = null)
	{

		// $this->auth->check_logged(0,$this->router->class , $this->router->method);

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$this->load->model('seminarios_outros');
		// $descricao = $this->session->userdata('nome');
  	// $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		// if(!empty($query)){
		//
		// 	$id_associacao_pro = $query[0]->id_associacao_pro;
		// 	$dados['actividade'] = $this->actividade->get_calendario_actividade(date('Y'), $id_associacao_pro);
		// 	$dados['id_associacao_pro'] =$query[0]->id_associacao_pro;
		//
		// }else{
		//
		// 	$dados['id_associacao_pro'] = "";
		$dados['listarGraduacao'] = $this->seminarios_outros->getSeminario();
		//
		// }

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

		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));


		if ($this->session->userdata('valida')):
			$this->template->load('template','listar/listar_graduacao',$dados);
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

	public function Editar($id = NULL)
	{
		$this->auth->check_logged(0,$this->router->class , $this->router->method);

		$dados['titulo'] = 'KEDA';
		$this->load->model('crud_model','actividade');
		$data['actividade'] = $this->actividade->getActividade($id);
		$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

		// var_dump($data['actividade']);

		if ($this->session->userdata('valida')):
			$this->template->load('template','editar/editar_actividade',$data);
		endif;
	}

	public function Editar_Actividade1()
	{
		$this->auth->check_logged(0,$this->router->class , $this->router->method);

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

		$this->auth->check_logged(0,$this->router->class , $this->router->method);

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

	public function novo()
  {

			// $this->auth->check_logged(0,$this->router->class , $this->router->method);

    if ($this->session->userdata('valida')):

			$dados['titulo'] = 'KEDA';

			$this->load->model('Calendario_Model','calendario');

			$this->load->model('Atleta_Model');
			$this->load->model('crud_model','cru');
			$this->load->model('Provincia');
			$this->load->model('campeonato_model');
			$this->load->model('seminarios_outros');

			$descricao = $this->session->userdata('nome');

			// var_dump($descricao);

			// $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();
			// if($query != null){
			// 	$idactividade = $query[0]->id_associacao_pro;
			// }else{
			// 	$idactividade = 0;
			// }

			// $query7 = $this->db->query("SELECT id_campeonato FROM campeonato WHERE fk_actividadeC =".$idEvento)->result();
      //
			// if(count($query7) != 0){
			// 	$idcampeonato = $query7[0]->id_campeonato;
			// }else{
			// 	$idcampeonato = 0;
			// }

			// var_dump($idcampeonato);
			$query = $this->db->query("SELECT * FROM graduacaofederacao_atual")->result()[0];
			$idGraduacao = $query->idGraduacao;

			$query = $this->db->query("select controlTela from graduacaofederacao where id_graduacaofederacao =".$idGraduacao)->result();
			// var_dump($query->controlModal);
			if(!empty($query)){
      	$controlTela = $query[0]->controlTela;
			}else{
				$controlTela = null;
			}

			$data['provincia'] = $this->Provincia->getAllProv();
			// $data['idCONTROLmodal8934'] = $query->controlModal;
			$data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
			// $data['teste'] = $this->campeonato_model->getcategoriaPeso2($idAssociacao,$idcampeonato,$idEvento);

			if($controlTela == 1 || $controlTela == 2 || $controlTela == 3){
				redirect('graduacao/gerirGraduacao');
			}else{
				$this->template->load('template','formularios/form_graduacao.php',$data);
			}

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

	public function getDescricaoGraduacao(){

		// $this->load->model('Calendario_Model','calendario');
		$this->load->model('seminarios_outros');

		$retorno = $this->seminarios_outros->getDescricaoGraduacao($this->input->post('id_graduacao2'));

		foreach ($retorno as $retor) {
			echo "<option value='{$retor->descricao_graduacao }'>$retor->descricao_graduacao</option>";
		}
		// echo $retorno;
	}

	public function BuscarInformGraduacao(){

		// $this->load->model('Calendario_Model','calendario');
		$this->load->model('seminarios_outros');

		$retorno = $this->seminarios_outros->BuscarInformGraduacaoMAX($this->input->post('id_graduacao2'));

		echo json_encode($retorno);
	}

	public function BuscarInformGraduacaoCarencia(){

		// $this->load->model('Calendario_Model','calendario');
		$this->load->model('seminarios_outros');

		$retorno = $this->seminarios_outros->BuscarInformGraduacaoCarencia($this->input->post('numeroBI'));

		echo json_encode($retorno);
	}

	public function setSeminario(){

		$this->load->model('seminarios_outros');


		$dados = [
			'id_actividade' => $this->input->post('id_actividade')
		];

		$retorno = $this->seminarios_outros->setgraduacaofederacao($dados);
		echo $retorno;

	}

	public function getGraduacaoFixasSeminario(){

		$this->load->model('seminarios_outros');

		$id_graduacao = $this->input->post('id_graduacao');
		$graduacao_actual = $this->input->post('graduacao_actual');
		$rest = substr($graduacao_actual, 0);

		$retorno5 = $this->seminarios_outros->BuscarInformGraduacao2($id_graduacao);

    echo '<option value="1000">Escolhe a Graduacao</option>';

		if($graduacao_actual == "Cinturao Castanho"){
				foreach ($retorno5 as $retorno) {

							if ($retorno->descricao == "0") {
								echo '<option value="'.$retorno->descricao.'">Cinturao Negro</option>';
							}else{
								echo '<option value="'.$retorno->descricao.'">'.$retorno->descricao.'ª Dan</option>';
							}

				}
		}else{
				foreach ($retorno5 as $retorno) {
					if($retorno->descricao != $rest[0]){
						if(intval($ret[0]) < intval($retorno->descricao)){
							if ($retorno->descricao == "0") {
								echo '<option value="'.$retorno->descricao.'">Cinturao Negro</option>';
							}else{
								echo '<option value="'.$retorno->descricao.'">'.$retorno->descricao.'ª Dan</option>';
							}
						}
					}
				}
		}

		// echo json_encode($retorno5);

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

		if($retorno == 1){
			$dado = [
			  'status' => 1
			];

			$this->campeonato->updateStatusCampeonato_provincial($dados[count($dados)-2],$dado);
		}

		return $retorno;

	}

	public function setSeminarioFaixas(){

		$this->load->model('seminarios_outros');
		$this->load->model('campeonato_model','campeonato');

		$dados = $this->input->post('dado');
		$idGraduacao = $dados[count($dados) - 1];

		// $query = $this->db->query('select id_graduacaofederacao from graduacaofederacao where id_actividade ='.$id_actividade)->result()[0];
		// $id_graduacaofederacao = $query->id_graduacaofederacao;
      $arrayDouble = [];

			for($i=0;$i < count($dados) - 1;$i++){

        $retornoVerificar = $this->seminarios_outros->verificartipoGraduacao($idGraduacao,$dados[$i]);

				if(count($retornoVerificar) == 0){
						$dados12 = [
							'descricao' => $dados[$i],
							'id_graduacaofederacao' => $idGraduacao
						];

						$retorno = $this->seminarios_outros->setgraduacaofederacaoFaixas($dados12);

			  }else{

					array_push($arrayDouble,$dados[$i]);

				}

			}

			if(!empty($arrayDouble)){
				array_push($arrayDouble,1);
				echo(json_encode($arrayDouble));
			}else{
				echo(json_encode($arrayDouble));
			}

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

	public function updateControlTelaGraduacao(){
		$this->load->model('seminarios_outros');

    if($this->session->userdata('valida')):

			$control = $this->input->post('controlqws');
			$idGraduacao = $this->input->post('idGraduacao');

			$dados = [
				'controlTela' => $control
			];

			$this->seminarios_outros->updateControlTelaGraduacao($idGraduacao,$dados);

		else:
			redirect(base_url());
		endif;
	}

	public function verificarclassificacaoBlankGraduacao(){

		$this->load->model('seminarios_outros');

    if($this->session->userdata('valida')):

			$id_Graduacao = $this->input->post('idGraduacao');


			$retorno = $this->seminarios_outros->geTverificarclassificacaoBlankGraduacao($id_Graduacao);
      if(count($retorno) == 0){
				echo 1;
			}else{
				echo 2;
			}

		else:
			redirect(base_url());
		endif;
	}

	public function verSeminarioInfo($id){

		$this->load->model('seminarios_outros');

		$retorno2 = $this->seminarios_outros->BuscarInformGraduacao($id);
		return $retorno2;

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

				'id_graduacaoFk' => $this->input->post('id_graduacao'),
				'nome_participante' => $this->input->post('nome'),
				'bilhete_identidade' => $this->input->post('bilhete'),
				'dataNascimento' => $this->input->post('data'),
				'genero' => $this->input->post('genero'),
				'provincia' => $this->input->post('provincia'),
				'graduacao' => $this->input->post('graduacao'),
				'tipo' => $this->input->post('tipo')

			];

			$resposta1 = $this->seminarios_outros->verificarBilheteParticipanteGraduacao($this->input->post('id_graduacao'),$this->input->post('bilhete'));

			if(!empty($resposta1)){
				 echo 5;
			}else{
					$resposta = $this->seminarios_outros->setParticipanteGraduacao($dado);
			}

	}

	public function getParticipantesEvento(){

		$this->load->model('seminarios_outros');

		$id_graduacao = $this->input->post('id_graduacao');

		$participantes = $this->seminarios_outros->setAllParticipanteSeminario($id_graduacao);

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

	public function getGDAtual(){

		$this->load->model('seminarios_outros');

		$bilhete = $this->input->post("bilhete");

		$retorno = $this->seminarios_outros->getGraduacaoAtual($bilhete);

		if(empty($retorno)){
			echo 1;
		}else{
			echo 2;
		}

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

	public function controlarStatuParticipante23(){

		$this->load->model('seminarios_outros');

		$id_participante = $this->input->post('id_participante');
		$statusparticipante = $this->input->post('statusparticipante');
		$nova_graduacao = $this->input->post('nova_graduacao');

		$dados = [
			'status' => $statusparticipante,
			'nova_graduacao' => $nova_graduacao
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

	public function setGraduacaoControlModal(){

		$this->load->model('seminarios_outros');

			$dados = [
				'controlModal' => $this->input->post('controlModal')
			];

			$idGraduacao = $this->input->post('idgraduacao');

			$dados7 = [
				'controlTela' => 0
			];

			$retorno = $this->seminarios_outros->setGraduacaoControlModal(1,$dados);
			$retorno = $this->seminarios_outros->updateControlTelaGraduacao($idGraduacao,$dados7);

		return $retorno;


	}


	public function getParticipantesGraduacao(){

		$this->load->model('seminarios_outros');

		$idactividade = $this->input->post('idactividade');

	  $participantes = $this->seminarios_outros->setAllParticipanteSeminario2($idactividade);

		$mostra = "";

					$mostra .=   '<table class="table table-sm">';
					$mostra .=   '<thead class="bg-info">';
					$mostra .=   '<tr>';
					$mostra .=   '<th>Nº</th>';
					$mostra .=   '<th>Nome Completo</th>';
					$mostra .=   '<th>Genero</th>';
					$mostra .=   '<th>Provincia</th>';
					$mostra .=   '<th>Nova Graduacao</th>';
					$mostra .=   '<th>Tipo Exame</th>';
					$mostra .=   '</tr>';
					$mostra .=   '</thead>';
					$mostra .=   '<tbody>';
					 $control = 0;
						foreach($participantes as $participantes){
							$control = $control + 1;
							$mostra .=   '<tr>';
							$mostra .=   '<td>'.($control).'</td>';
							$mostra .=   '<td>'.$participantes->nome_participante.'</td>';
							$mostra .=   '<td>'.$participantes->genero.'</td>';
							$mostra .=   '<td>'.$participantes->provincia.'</td>';
							if ($participantes->nova_graduacao == "" || $participantes->nova_graduacao == null):
										$mostra .=   '<td>----//----</td>';
							else:
									$mostra .=   '<td>'.$participantes->nova_graduacao.'ª DAN</td>';
							endif;

							$mostra .=   '<td>'.$participantes->tipo.'</td>';
							// $mostra .=   '<td>';
							// $mostra .=   '<div class="sparkbar" data-color="#00a65a" data-height="20">'.date('d/m/Y', strtotime(strtoupper($participantes->dataNascimento))).'</div>';
							// $mostra .=   '</td>';
							$mostra .=   '</tr>';
						}
					$mostra .=   '</tbody>';
					$mostra .=   '</table>';

					echo $mostra;


	}

	public function listarParticipaanteListaFinalizada($idGraduacao = null){

		// $dados['titulo'] = 'KEDA';
		// $this->load->model('crud_model','actividade');
		$this->load->model('seminarios_outros');

		$dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

		$idGraduacao = $this->input->post('idGraduacao');

		$dados = $this->seminarios_outros->setAllParticipanteSeminario2($idGraduacao);

		// var_dump($dados);

		foreach ($dados as $dados_parti) {

			$info = [
				'imagem_qr' => $this->print_qr($dados_parti->bilhete_identidade)
			];

			$retorno = $this->seminarios_outros->atribuirQrCode($dados_parti->id_participanteActividade, $info);

		}

	}

	public function listarParticipaanteListaFinalizadaCamp(){

		$dados['titulo'] = 'KEDA';
		// $this->load->model('crud_model','actividade');
		$this->load->model('campeonato_model');

		// $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

		$idCampeonato = $this->input->post('idCampeonato');

		$layoutClassificacaoFinal = $this->campeonato_model->layoutClassificacaoFinal($idCampeonato);

		foreach($layoutClassificacaoFinal as $ClassificacaoFinal){

						foreach($ClassificacaoFinal['generos'] as $genero){

								if(count($genero['categoriaPesos'])!=0){

									foreach($genero['categoriaPesos'] as $categoriaPeso){
										if(count($categoriaPeso['classificacaoFinals'])!=0){
											foreach($categoriaPeso['classificacaoFinals'] as $teste){

												$info = [
													'imagem_qr' => $this->print_qr($teste['bilhete_identidade'])
												];

												$retorno = $this->campeonato_model->atualizarParticipanteCampeonato($teste['id_participante_campeonato'], $info);

											}
										}
								  }
						    }
		        }

		}
	}

	public function listarParticipaanteListaFinalizadaCampeonato(){

		$dados['titulo'] = 'KEDA';
		// $this->load->model('crud_model','actividade');
		$this->load->model('campeonato_model');

		// $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

		$idCampeonato = $this->input->post('idCampeonato');

		$layoutClassificacaoFinal = $this->campeonato_model->getInfoParticipanteCampeonatoLista($idCampeonato);

			foreach($layoutClassificacaoFinal as $ClassificacaoFinal){

						$info = [
							'imagem_qr' => $this->print_qr($ClassificacaoFinal->bilhete_identidade)
						];

						$retorno = $this->campeonato_model->atualizarParticipanteCampeonatoQRcode($ClassificacaoFinal->id_participante_campeonato, $info);

			}

	}

}
