<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;
require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';

//este controlador vai gerir tudo que tem haver com o atleta;

class associacao extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->helper('funcoes');

  }

  public function GerarPDF()
  {
    /* use Dompdf\Dompdf;
     require_once ('application/dompdf/autoload.inc.php');

     $dompdf = new DOMPDF();

     $dompdf->load_html('
        <h1> OLA MUNDO </h1>
      ');

     $dompdf->render();

     $dompdf->stream(
        "relatorio.pdf",
        array('Attachment' => false )
     );*/
  }

	public function GerarPDFFichaInscricaoAtleta()
	{

		$this->load->model('mestre_Model','Mestre');

		$bilhete = null;
		//
		// $dado['verMestre'] = $this->Mestre->getIdMestreInfTecn($id);
		// $dado['Mundial_participacao'] = $this->Mestre->getIdMestreInfTecnBilheteMundial($bilhete,$id);
		// $dado['Africano_participaca'] = $this->Mestre->getIdMestreInfTecnBilheteAfricano($bilhete,$id);
		// $dado['historico'] = $this->Mestre->verificarActividade($id);
		// $dado['Nacional_participacao'] = $this->mestre->getIdMestreInfTecnBilheteNacional($NBilhete);
		// $dado['Nacional_participacao'] = $this->Mestre->getIdMestreInfTecnBilheteNacional($id);

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/fichaInscricaoAtleta.php');

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('FichaDeAtleta.pdf', ["Attachment" => false]);

	}

	public function GerarPDFFichaInscricaoAcademia()
	{

		$this->load->model('mestre_Model','Mestre');

		$dado['nomeAssociacao'] = $descricao = $this->session->userdata('nome');

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/fichaInscricaoAcademia.php', $dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('FichaDeAcademia.pdf', ["Attachment" => false]);

	}

  public function mudarEstado()
  {
    $this->load->model('associacao_model','associacao');

    $estado = $this->input->post('estado');
    $id_associacao_pro = $this->input->post('id_associacao');

    if ($this->session->userdata('valida')) {

       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }
		//
       $dado = [
          'statu' => $estado
       ];
		//
       if ($this->associacao->trocarEstado($id_associacao_pro, $dado)==1) {
        $rs=$this->db->query('select statu from associacao_provincia where id_associacao_pro=?',array($id_associacao_pro))->result()[0];
        echo $rs->statu;
      }
    }else{
      redirect('App/index');
    }

  }

  public function Editar($id = NULL)
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $this->load->model('Atleta_Model','Atleta');
    $this->load->model('Provincia');
    $data['descricao'] = $this->cru->getGraduacao();
    $data['categoria'] = $this->cru->get_categoria_atleta();
    $data['nome'] = $this->cru->listar_academia();
    $data['estilo'] = $this->Atleta->getEstilo_juj();
    $data['editarUsuario'] = $this->Atleta->getIdAtletaInfTecn($id);
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia();

    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header2', $dados);
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('editar/editar_Atleta',$data);
      $this->load->view('Parts_Pages/footer2');
    endif;
  }

  public function salvar_Editar()
  {

    if($this->session->userdata('valida')):

        $dados['titulo'] = "KEDA";

        $this->form_validation->set_rules('fullName', 'Nome Completo', 'required',
          array('trim','required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('bilhete', 'Bilhete de Identidade', 'required','numeric',
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('nomePai', 'Nome do Pai', 'required',
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('nomeMae', 'Nome da Mae', 'required',
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('statu', 'statu', 'required',
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('genero', 'genero', 'required',
          array('required' => 'Os %s não deve estar vázia.'));

        if ($this->form_validation->run() == FALSE)
        {
            $dados = array('titulo' => 'KEDA');
            $this->Editar($this->input->post('idAtleta'));
        }else{
            $config['upload_path']    = './uploads/product/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 2048;
            $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload',$config);

            $id = $this->input->post('idAtleta');

            $this->load->model('Atleta_Model','Atleta');

            $imagem = $this->Atleta->getImagem($id);

            $info2 = [
                'peso' => $this->input->post('peso'),
                'Graduacao' => $this->input->post('Graduacao'),
                'mestre' => $this->input->post('mestre'),
                'id_Academia_c' => $this->input->post('Academia'),
                'id_estilo' => $this->input->post('estilo')
            ];

            $info3 = [
              'provincia' => $this->input->post('provincia'),
              'municipio' => $this->input->post('municipio'),
              'destrito' => $this->input->post('Destrito')
            ];

            $id_endereco = $this->Atleta->AddEndereco($info3);

            $id_inf_tecnica = $this->Atleta->addInf_tecnica($info2);
            $nomeAtleta = $this->input->post('fullName');

            if(@$_FILES['arquivo']['name'] != null){
                if ($this->upload->do_upload('arquivo')) {
                    $post['arquivo'] = $this->upload->data('file_name');

                    $info = [
                      'statu' => $this->input->post('statu'),
                      'genero' => $this->input->post('genero'),
                      'nome' => $this->input->post('fullName'),
                      'n_bilhete' => $this->input->post('bilhete'),
                      'data_nascimento' => $this->input->post('data'),
                      'id_tecnica' => $id_inf_tecnica,
                      'nomePai' => $this->input->post('nomePai'),
                      'nomeMae' => $this->input->post('nomeMae'),
                      'telefone' => $this->input->post('telefone'),
                      'telefone2' => $this->input->post('telefone2'),
                      'imagem' => $post['arquivo'],
                      'email' => $this->input->post('email'),
                      'id_endereco_fk1' => $id_endereco
                    ];

                      $this->load->model('Atleta_Model','Atleta');
                      $ultimo_id = $this->Atleta->AtualizarAtleta($id,$info);
                      if( $ultimo_id != 0){

                          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');

                          redirect('Atleta/listar');
                      }else{
                          redirect('Atleta/cadastrar');
                      }
                }else{
                    $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                    redirect('Atleta/Editar/' . $id);
                }
            }else{
               $info = [
                  'statu' => $this->input->post('statu'),
                  'genero' => $this->input->post('genero'),
                  'nome' => $this->input->post('fullName'),
                  'n_bilhete' => $this->input->post('bilhete'),
                  'data_nascimento' => $this->input->post('data'),
                  'id_tecnica' => $id_inf_tecnica,
                  'nomePai' => $this->input->post('nomePai'),
                  'nomeMae' => $this->input->post('nomeMae'),
                  'telefone' => $this->input->post('telefone'),
                  'telefone2' => $this->input->post('telefone2'),
                  'email' => $this->input->post('email'),
                  'id_endereco_fk1' => $id_endereco
                ];

                $this->load->model('Atleta_Model','Atleta');
                $ultimo_id = $this->Atleta->AtualizarAtleta($id,$info);
                if( $ultimo_id != 0){

                   $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');

                  redirect('Atleta/listar');
                }else{
                  redirect('Atleta/cadastrar');
                }
              }
            }
    else:
      redirect(base_url());
    endif;
  }

  public function verAssociacaoAtletasClubes(){
    $this->load->model('associacao_model','associacao');

    $idClube = $this->input->post('id_academia');
    $idAssociacao = $this->input->post('idAssociacao');

    $dados = $this->associacao->verAssociacaoAtletasClubes($idClube, $idAssociacao);

    echo json_encode($dados);
  
    
  }

  public function verAssociacao($id = NULL)
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    $dados['titulo'] = 'KEDA';
    $this->load->model('associacao_model','associacao');

    $control = $this->associacao->controlAss($id);

    if($control==2){
      $dado['orgao_social'] = "";
    }else{
      $dado['orgao_social'] = $this->associacao->getMembroOrgaoSocial($id);
      $dado['PresidenteAssociacao'] = $this->associacao->getPresidenteAssociacao($id);
    }

		// $query = $this->db->query("SELECT id_provincial FROM camp_provincial_atual WHERE id_associacao = ".$id)->result();
		//
		$dado['idAssociacao'] = $id;

    $dado['verAssociacao'] = $this->associacao->getAssociacao($id);
    $dado['verAsAtletas'] = $this->associacao->verAssociacaoAtletas($id);
    $dado['verArbitro'] = $this->associacao->verAssociacaoArbitro($id);
    $dado['verAsClubes'] = $this->associacao->verAssociacaoClubes($id);

    $dado['totalAtletaAss'] = $this->associacao->verAssociacaoAtletasTotal($id);
    
    $dado['totalcademia'] = $this->associacao->totalcademias($id);
    
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/verAssociacao',$dado);
    endif;
  }

  public function gerirDocumento()
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    // $dados['titulo'] = 'KEDA';
    // $this->load->model('associacao_model','associacao');
		//
    // $control = $this->associacao->controlAss($id);
		//
    // if($control==2){
    //   $dado['orgao_social'] = "";
    // }else{
    //   $dado['orgao_social'] = $this->associacao->getMembroOrgaoSocial($id);
    //   $dado['PresidenteAssociacao'] = $this->associacao->getPresidenteAssociacao($id);
    // }

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    // $dado['verAssociacao'] = $this->associacao->getAssociacao($id);
    // $dado['verAsAtletas'] = $this->associacao->verAssociacaoAtletas($id);
    // $dado['verArbitro'] = $this->associacao->verAssociacaoArbitro($id);
    // $dado['verAsClubes'] = $this->associacao->verAssociacaoClubes($id);
    // $dado['totalAtletaAss'] = $this->associacao->verAssociacaoAtletasTotal($id);
    // $dado['totalcademia'] = $this->associacao->totalcademias($id);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/gerir_documentoProvincia',$dado);
    endif;
  }

  public function eliminar($id = NULL){

    $this->load->model('Atleta_Model','Atleta');
    if($this->session->userdata('valida')):
      $dados['titulo'] = "SEDICE";

      if($id != NULL):
        $ctrl = $this->Atleta->excluirAtleta($id);
        if($ctrl == 1):
          $this->session->set_flashdata('sucesso_delete_formando', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');

          redirect('listar_atleta');
        else:
          if($ctrl == 3):
            $this->session->set_flashdata('erro_delete_formando', '<div class="callout callout-warning"><h4>IMPORTANTE!</h4><p>Este formando já fez alguns módulos. Deseja Eliminá-lo mesmo assim? &nbsp;<a href="'.site_url('deleteformandoconfirmado'.'/'.$id).'" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Sim</a> (<b>Obs:</b> Apagará todos os módulo que fez) &nbsp;&nbsp;&nbsp; <a href="'.site_url('listar_atleta').'" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Não</a></p></div>');

            redirect('listar_atleta');
          else:
            $this->session->set_flashdata('erro_delete_formando', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> FALHA!</h4>Não foi possível eliminar o formando.</div>');
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

  public function listarParticipante()
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('campeonato_model','campeonato');
    //$dados['atletas'] = $this->Atleta->getAll();
    $dados['campeonato'] = $this->campeonato->getAllParticipantes();
    //$ctrl1 = $this->Atleta->excluirAtleta();

    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header3');
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('listar/listar_participantes_campeonato',$dados);
      $this->load->view('Parts_Pages/footer3');
    endif;
  }

  public function listar()
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('associacao_Model','associacao');
    //$dados['atletas'] = $this->Atleta->getAll();
    $dados['associacao'] = $this->associacao->getAll();
    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    //$ctrl1 = $this->Atleta->excluirAtleta();

    if ($this->session->userdata('valida')):
      $this->template->load('template','listar/listar_associacao',$dados);
    endif;
  }

  public function novo_provincial()
  {

        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $data['descricao'] = $this->cru->getGraduacao();
        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['estilo']    = $this->cru->get_estilo();
        $data['provincia'] = $this->Provincia->getAllProv();
        $data['escolhe_provincias'] = $this->Provincia->selectProvincia();

    if ($this->session->userdata('valida')):
      $this->template->load('template','formularios/form_campeonato_provincial.php',$data);
    else:
      redirect(base_url());
    endif;
  }

  public function addCampeonatoProvincial(){

    $this->load->model('campeonato_model','campeonato');
    if($this->session->userdata('valida')):
      $dados['titulo'] = "KEDA";

      $this->form_validation->set_rules('fullName', 'Nome Completo', 'required',
        array('trim','required' => 'Os %s não deve estar vázia.'));
      $this->form_validation->set_rules('bilhete', 'Bilhete de Identidade', 'required','numeric',
        array('required' => 'Os %s não deve estar vázia.'));


      $dado1 =[
        'Pais_campeonato' => $this->input->post('pais'),
        'Cidade_campeonato' => $this->input->post('provincia')
      ];

      $id_local_campeonato = $this->campeonato->setLocal_campeonato($dado1);

      $dados = [
          'nome_campeonato' => $this->input->post('Campeonato'),
          'data_inicio' => $this->input->post('data_inicio'),
          'data_fim' => $this->input->post('data_fim'),
          'id_local_campeonato' => $id_local_campeonato,
          // 'tipo_campeonato' => $cadastro1
      ];

      $cadastro = $this->campeonato->setCampeonato($dados);

      $dado2 = [
        'director_prova' => $this->input->post('Director'),
        'edicao_campeonato' => $this->input->post('Edicao'),
        'id_campeonato' => $cadastro
      ];

      $cadastro1 = $this->campeonato->setCampeonato_provincial($dado2);

      if ($cadastro != 2) {
        //echo 'sucesso';
        redirect(base_url('Campeonato/gerirCampeonato/'. $cadastro1));

      }else{
        echo "insucesso";
      }

    else:
      redirect(base_url());
    endif;
  }

  public function gerirCampeonato($id = null)
  {
      if ($this->session->userdata('valida')):
        $dados['titulo'] = 'KEDA';
        $this->load->model('Atleta_Model');
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $this->load->model('campeonato_model');

        //$data['busca'] = $this->Atleta_Model->getAllAtletaByBilhete($this->input->post('numeroBilhete'));

        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['provincia'] = $this->Provincia->getAllProv();
        $data['categoria'] = $this->campeonato_model->setAllcategoria();
        $data['campeonato'] = $this->campeonato_model->getIdCampeonatoNacional($id);
        // $data['atletaProvincia'] = $this->campeonato_model->getAtletaProvincia();
        // $data['funcao'] = $this->campeonato_model->getFuncaoCampeonato();

        $this->template->load('template','ver/gerir_campeonato',$data);

    else:
      redirect(base_url());
    endif;
  }

  public function BuscaByBilhete()
  {

        $this->load->model('Atleta_Model');

        //$numero1 = $_POST['numero'];

        $numero = $this->Atleta_Model->getAllAtletaByBilhete($this->input->post('numero'));

        if($numero != null){
            $dado = [
                'id_atleta' => $numero[0]->id_atleta,
                'nome' => $numero[0]->nome,
                'statu' => $numero[0]->statu,
                'peso' => $numero[0]->peso,
                'provincia' => $numero[0]->provincia,
                'imagem' => $numero[0]->imagem
            ];
            echo json_encode($dado);
        }else{

            echo 1;
        }

  }

  public function cadastrarFuncao()
  {
    $this->load->model('campeonato_model');

    $controle = $this->input->post('funcao');

    if($controle == ''){
       echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!</h6></div>';
    }else{
      $dado = [
        'descricao_funcao' => $this->input->post('funcao')
      ];

      $retorno = $this->campeonato_model->setFuncao($dado);



      if ($retorno == 1) {

          $messagem = '';
          $messagem = '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!</h6></div>';

          $retorno1 = $this->campeonato_model->getAllFuncao();

          foreach ($retorno1 as $retorno1) {
              $conteudo2[] = array('Nome_funcao' => $retorno1->descricao_funcao);
          }



          echo json_encode($conteudo2);

      }else{
          echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!</h6></div>';
      }
    }
  }

  public function cadastrarParticipante()
  {
    $this->load->model('campeonato_model');

    $dado = array(
      'funcao_campeonato' => $this->input->post('Funcaoa'),
      'id_participante_ca' => $this->input->post('id_atleta'),
       'id_campeonato' => $this->input->post('id_campeonato')
    );

    $retorno = $this->campeonato_model->Participado($dado);

    /*if ($retorno == 1) {
       echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!</h6></div>';
    }else{
      echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!</h6></div>';
    }*/

    echo $retorno;

  }

  public function gerirCampeonato2(){
      if ($this->session->userdata('valida')):
        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $data['descricao'] = $this->cru->getGraduacao();
        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['estilo']    = $this->cru->get_estilo();
        $data['nome'] = $this->cru->listar_academia();
        $data['escolhe_provincias'] = $this->Provincia->selectProvincia();


        echo $this->load->view('inputs/input_atleta1',$data);

    else:
      redirect(base_url());
    endif;
  }


}
?>
