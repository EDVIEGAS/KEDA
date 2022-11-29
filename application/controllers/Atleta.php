<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'controllers/Qr_code_generate.php');
require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;
//este controlador vai gerir tudo que tem haver com o atleta;

class Atleta extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->helper('funcoes');

  }

  public function GerarPDF()
  {

		$this->load->model('mestre_Model','mestre');

		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		$dado['atletas'] = $this->mestre->getAllMestre($query[0]->id_associacao_pro);
    $dado['nomeAssociacao'] = $query[0]->descricao_associacao;

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

    // $this->dompdf->set_base_path('http://localhost/KEDA/assets');
    $this->load->view('pdfs/listaAtleta.php', $dado);

    $this->dompdf->loadHtml(ob_get_clean());

    $this->dompdf->setPaper('A4');

    $this->dompdf->render();

    $this->dompdf->stream('listaAtlleta.pdf', ["Attachment" => false]);

  }

  public function ApagarFoto(){
    $idAtleta1 = $this->input->post('idAtleta');

    $this->load->model('Atleta_Model','Atleta');

    $returno = $this->Atleta->ApagarFoto($idAtleta1);

    if ($returno == 1) {
      return 1;
    }else{
      return 2;
    }
  }

  public function trazeTodos()
  {
      $this->load->model('Atleta_Model','Atleta');

      $resultado1 = $this->Atleta->getAllAtleta();

      foreach ($resultado1 as $result) {
        $dado[] = array(
          'id_atleta' => $result->id_atleta,
          'nome' => $result->nome,
          'graduacao' => $result->graduacao,
          'estilo' => $result->nome_estilo,
          'Academia' => $result->nome_academia,
          'imagem' => $result->imagem,
          'statu' => $result->statu
        );
      }


      $retorno = json_encode($dado);
      echo $retorno;
  }

  public function mudarEstado()
  {
    $this->load->model('Atleta_Model','Atleta');

    $estado = $this->input->post('estado');
    $id = $this->input->post('id_atleta');

    if ($this->session->userdata('valida')) {
       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }

       $dado = [
          'statu_atleta' => $estado
       ];

       $resultado = $this->Atleta->trocarEstado($id, $dado);
         if ($this->Atleta->trocarEstado($id, $dado)==1) {
           $rs=$this->db->query('select statu_atleta from atleta where id_atleta=?',array($id))->result()[0];
           echo $rs->statu_atleta;
         }


    //    // if ($resultado == 1) {

    //    //  echo '<div class="alert alert-success alert-dismissible" style="background:#ff5b57;border-color:#ff5b57;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Insucesso!. O estado nao foi alterado para '.$estado.'</h6></div>';
    //    //     //redirect('listar_atleta');
    //    // }else{

    //    //  echo '<div class="alert alert-success alert-dismissible" style="background:#ff5b57;border-color:#ff5b57;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Insucesso!. O estado nao foi alterado para '.$estado.'</h6></div>';
    //    //     //redirect('listar_atleta');
    //    // }

    }else{
      redirect('App/index');
    }

  }

  public function Editar($id = NULL)
  {

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $this->load->model('Atleta_Model','Atleta');
    $this->load->model('Provincia');
    $data['descricao'] = $this->cru->getGraduacao();
    $data['categoria'] = $this->cru->get_categoria_atleta();
    $data['nome'] = $this->cru->listar_academia();
    $data['estilo'] = $this->Atleta->getEstilo_juj();
    $data['editarAtleta'] = $this->Atleta->getIdAtletaInfTecn($id);
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
    $data['controlMethod'] = $this->router->method;

    $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

    if ($this->session->userdata('valida')){
      $this->template->load('template','editar/editar_atleta',$data);
    }else{
      redirect(base_url());
    }
  }

  public function editar_sert(){

    $this->load->model('Atleta_Model','Atleta');

    if($this->session->userdata('valida')){
      if($this->input->post('controlInfo') == 'IPessoal'){

        $id_pessoa1 = $this->input->post('idpessoa');

        $info = [
          'genero' => $this->input->post('genero'),
          'nome' => $this->input->post('fullName'),
          'n_bilhete' => $this->input->post('bilhete'),
          'data_nascimento' => $this->input->post('data')
        ];

        $ultimo_id_Pessoa = $this->Atleta->actualizarPessoa($id_pessoa1,$info);

        if($ultimo_id_Pessoa == 1){
          echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>';
        }else{
          echo 'erro';
        }

      }elseif($this->input->post('controlInfo') == 'IEndereco'){

        $id_endereco_fk1 = $this->input->post('id_endereco_fk1');

        $provincia = $this->input->post('provincia');

        $var = intval($provincia);
        if(is_integer($var)){
          echo 'true';
        }else{
          echo 'false';
        };

        // if($type == "string"){
        //   echo ('E uma string'+$var);
        // }else{
        //   echo 'numero';
        // }


        // $id_provincia = $this->db->query('SELECT nome_provincia FROM provincia WHERE id_provincia ='.$this->input->post('provincia'))->result();
        // $id_provincia2 = $id_provincia[0]->nome_provincia;

        // $info3 = [
        //   'provincia' => $id_provincia2,
        //   'municipio' => $this->input->post('municipio')
        // ];

        // $id_endereco = $this->Atleta->actualizarEndereco($id_endereco_fk1,$info3);

        // if($id_endereco == 1){
        //   echo 1;
        // }else{
        //   echo 'erro';
        // }

      }elseif($this->input->post('controlInfo') == 'IFiliacao'){

        $id_pessoa1 = $this->input->post('idpessoa');

        $info3 = [
        'nomePai' => $this->input->post('nomePai'),
        'nomeMae' => $this->input->post('nomeMae')
        ];

        $id_endereco = $this->Atleta->actualizarPessoa($id_pessoa1,$info3);

        if($id_endereco == 1){
          echo 1;
        }else{
          echo 2;
        }

      }elseif($this->input->post('controlInfo') == 'IContacto'){

        $id_pessoa1 = $this->input->post('idpessoa');

        $info3 = [
          'telefone' => $this->input->post('telefone'),
          'telefone2' => $this->input->post('telefone2'),
          'email' => $this->input->post('email')
        ];

        $id_endereco = $this->Atleta->actualizarPessoa($id_pessoa1,$info3);

        if($id_endereco == 1){
          echo 1;
        }else{
          echo 2;
        }

      }else{

        $id_inf_tecnica = $this->input->post('id_inf_tecnica');

        $info2 = [
          'peso' => $this->input->post('peso'),
          'Graduacao' => $this->input->post('Graduacao'),
          'mestre' => $this->input->post('mestre'),
          'id_Academia_c' => $this->input->post('Academia'),
          'id_estilo' => $this->input->post('estilo')
        ];

        $id_endereco = $this->Atleta->actualizarTecnica($id_inf_tecnica,$info2);

        if($id_endereco == 1){
          echo 1;
        }else{
          echo 2;
        }

      }
    }else{
      redirect(base_url());
    }
  }

  public function gravarFoto(){

      $config['upload_path']    = './uploads/product/';
      $config['allowed_types']  = 'gif|jpg|png|jpeg';
      $config['max_size']       = 2048;
      $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
      $this->load->library('upload',$config);

      if(@$_FILES['arquivoFotoAtleta']['name'] != null){
        if ($this->upload->do_upload('arquivoFotoAtleta')) {
            $post['arquivo'] = $this->upload->data('file_name');

            $this->load->model('Atleta_Model','Atleta');

            $info = [
              'imagem' => $post['arquivo']
            ];

            $id_pessoa1 = $this->input->post('idpessoa');
            $idAtleta = $this->input->post('idAtleta');

            $ultimo_id_Pessoa = $this->Atleta->actualizarPessoa($id_pessoa1,$info);
            // if(){

            // }else{
              redirect('Atleta/Editar/' . $idAtleta);
            // }
        }else{

        }
      }else{

      }
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
            $id_pessoa1 = $this->input->post('idpessoa');

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

            if(@$_FILES['arquivoFotoAtleta']['name'] != null){
                if ($this->upload->do_upload('arquivoFotoAtleta')) {
                    $post['arquivo'] = $this->upload->data('file_name');

                    $info = [
                          'genero' => $this->input->post('genero'),
                          'nome' => $this->input->post('fullName'),
                          'n_bilhete' => $this->input->post('bilhete'),
                          'data_nascimento' => $this->input->post('data'),
                          'nomePai' => $this->input->post('nomePai'),
                          'nomeMae' => $this->input->post('nomeMae'),
                          'telefone' => $this->input->post('telefone'),
                          'telefone2' => $this->input->post('telefone2'),
                          'imagem' => $post['arquivo'],
                          'email' => $this->input->post('email'),
                          'id_endereco_fk1' => $id_endereco
                    ];

                    $this->load->model('Atleta_Model','Atleta');
                    $ultimo_id_Pessoa = $this->Atleta->actualizarPessoa($id_pessoa1,$info);

                    $inf4 = [
                        'id_pessoa' => $this->input->post('idpessoa'),
                        'statu_atleta' => $this->input->post('statu'),
                        'id_infor_tecnica' => $id_inf_tecnica
                    ];

                      $ultimo_id = $this->Atleta->AtualizarAtleta($id,$inf4);
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
              echo "olaolaolaola";

               $this->load->model('Atleta_Model','Atleta');

              $info = [
                          'genero' => $this->input->post('genero'),
                          'nome' => $this->input->post('fullName'),
                          'n_bilhete' => $this->input->post('bilhete'),
                          'data_nascimento' => $this->input->post('data'),
                          'nomePai' => $this->input->post('nomePai'),
                          'nomeMae' => $this->input->post('nomeMae'),
                          'telefone' => $this->input->post('telefone'),
                          'telefone2' => $this->input->post('telefone2'),
                          //'imagem' => $post['arquivo'],
                          'email' => $this->input->post('email'),
                          'id_endereco_fk1' => $id_endereco
                    ];

                    $this->load->model('Atleta_Model','Atleta');
                    $ultimo_id_Pessoa = $this->Atleta->actualizarPessoa($id_pessoa1,$info);

                    $info4 = [
                        'id_pessoa' => $this->input->post('idpessoa'),
                        'statu_atleta' => $this->input->post('statu'),
                        'id_infor_tecnica' => $id_inf_tecnica
                    ];

                      // $ultimo_id = $this->Atleta->AtualizarAtleta($id,$inf4);

                // if ($id_pessoa == 1) {
                  $ultimo_id = $this->Atleta->AtualizarAtleta($id,$info4);
                    if( $ultimo_id != 0){

                       $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');

                      redirect('Atleta/listar');
                    }else{
                      redirect('Atleta/cadastrar');
                    }
                // }else{
                //   echo 'errror';
                // }

              }
            }
    else:
      redirect(base_url());
    endif;
  }

  public function verAtleta($id = NULL)
  {
    $this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    $dado['verAtl'] = $this->Atleta->getIdAtletaInfTecn($id);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/ver_atleta',$dado);
    endif;
  }

  public function eliminarVarios(){
    $this->load->model('Atleta_Model','Atleta');

    $teste = $this->input->post('id');

     for ($i=0; $i < count($teste); $i++) {
       $this->Atleta->excluirAtleta($teste[$i]);
     }

  }

	public function getAtletaById(){

		$this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    $verAtl = $this->Atleta->getIdAtletaInfTecn($this->input->post("idMestre"));

		echo json_encode($verAtl);

	}

  public function eliminar($id = NULL, $nome = null){

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $this->load->model('Atleta_Model','Atleta');
    if($this->session->userdata('valida')):

      $dados['titulo'] = "SEDICE";

      if($id != NULL):
        $ctrl = $this->Atleta->excluirAtleta($id);
        if($ctrl == 1):
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta foi eliminado.</a></h7></div>');
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

  public function listar()
  {

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('Atleta_Model','Atleta');
		$this->load->model('mestre_model','mestre');
    //$dados['atletas'] = $this->Atleta->getAll();

    if($this->session->userdata('role') == 'Associacao'){

      $descricao = $this->session->userdata('nome');
      $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

      $dados['atletas'] = $this->mestre->getAllMestre($query[0]->id_associacao_pro);


    }else{
			$dados['atletas'] = $this->mestre->getAllMestre();
    }

    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    $ctrl1 = $this->Atleta->excluirAtleta();

    if ($this->session->userdata('valida')){
        $this->template->load('template','listar/listar_atletas', $dados);
    }else{
      redirect('App/index');
    }

  }

  public function listarAtletaCompetidor()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Atleta_Model','Atleta');

    $escalao = $this->input->post('escalao');
    $anoFinal = $this->input->post('anoFinal');
    $genero = $this->input->post('genero');

    if($escalao == "Veterano Absoluto"){

        $anoInicial = $this->input->post('anoInicial');

        $descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

        if($query != null || $query != ""){

          $dados = $this->Atleta->listar_atleta_competidor_veterano($query[0]->id_associacao_pro,$anoInicial,$escalao);
          $dados2 = json_encode($dados);

        }else{

          $dados = $this->Atleta->listar_atleta_competidor_veterano2($anoInicial,$escalao);
          $dados2 = json_encode($dados);

        }

        echo ($dados2);

    }else{

        $anoInicial = $this->input->post('anoInicial');

        $descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

        if(count($query) != 0){

          $dados = $this->Atleta->listar_atleta_competidor_outros($query[0]->id_associacao_pro,$anoInicial,$anoFinal,$genero, $escalao);

          $dados2 = json_encode($dados);

        }else{

          $dados = $this->Atleta->listar_atleta_competidor_outros2($anoInicial,$anoFinal,$genero, $escalao);

          $dados2 = json_encode($dados);

        }

        echo ($dados2);

    }

  }

  public function getIDAtletaCompetidor()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Atleta_Model','Atleta');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $dados = $this->Atleta->listar_atleta_id($query[0]->id_associacao_pro, $this->input->post('id_atleta'));

    $dados2 = json_encode($dados);

    echo ($dados2);

  }

  public function getIDAtletaCompetidor23()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Atleta_Model','Atleta');

    // $id_atleta = $this->input->post('id_atleta');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    if(count($query) == 0 ){
      $dados = $this->Atleta->listar_atleta_idSelecionado2($this->input->post('id_atleta'));
    }else{
      $dados = $this->Atleta->listar_atleta_idSelecionado($query[0]->id_associacao_pro, $this->input->post('id_atleta'));
    }

    $dados2 = json_encode($dados);

    echo ($dados2);

  }

  public function novo()
  {

    if ($this->session->userdata('valida')):
        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $data['descricao'] = $this->cru->getGraduacao();
        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['estilo']    = $this->cru->get_estilo();
				$data['nivel_academico'] = $this->cru->getNivelAcademico();
        // $data['nome'] = $this->cru->listar_academia();
        $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

        $data['escolhe_provincias'] = $this->Provincia->selectProvincia3();


          $descricao = $this->session->userdata('nome');
          $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();
					// var_dump($query[0]->id_associacao_pro);
          if($query != NULL){
            $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
						$data['nome'] = $this->cru->listar_academia_id($query[0]->id_associacao_pro);
          }else{
            $data['id_associacao_pro'] = '';
          }

        $this->template->load('template','formularios/form_atleta',$data);

    else:
      redirect(base_url());
    endif;
  }

  public function addAtleta3(){

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
        $this->novo();
      }else{

        $config['upload_path']    = './uploads/product/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 4096;
        $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload',$config);

          $this->load->model('Atleta_Model','Atleta');

          $id_associacao_pro =  $this->input->post('id_associacao_pro');

          $info2 = [
            'peso' => $this->input->post('peso'),
            'Graduacao' => $this->input->post('Graduacao'),
            'mestre' => $this->input->post('mestre'),
            'id_Academia_c' => $this->input->post('Academia'),
            'id_estilo' => $this->input->post('estilo')
          ];

          $this->load->model('Provincia','Provincia');

          $provinciaNome = $this->Provincia->getProvinciaById($this->input->post('provincia'));

          $info3 = [
            'provincia_e' => $provinciaNome,
            'municipio' => $this->input->post('municipio'),
            'destrito' => $this->input->post('Destrito')
          ];

          $id_endereco = $this->Atleta->AddEndereco($info3);
          $id_inf_tecnica = $this->Atleta->addInf_tecnica($info2);
          $nomeAtleta = $this->input->post('fullName');

          if(@$_FILES['arquivoFotoAtleta768']['name'] != null){
            if ($this->upload->do_upload('arquivoFotoAtleta768')) {
              $post['arquivo'] = $this->upload->data('file_name');

              $info = [
                  'genero' => $this->input->post('genero'),
                  'nome' => $this->input->post('fullName'),
                  'n_bilhete' => $this->input->post('bilhete'),
                  'data_nascimento' => $this->input->post('data'),
                  'nomePai' => $this->input->post('nomePai'),
                  'nomeMae' => $this->input->post('nomeMae'),
                  'telefone' => $this->input->post('telefone'),
                  'telefone2' => $this->input->post('telefone2'),
                  'imagem' => $post['arquivo'],
                  'email' => $this->input->post('email'),
                  'id_endereco_fk1' => $id_endereco
              ];

              $this->load->model('Atleta_Model','Atleta');
              $ultimo_id_Pessoa = $this->Atleta->addPessoa($info);

               $inf4 = [
                  'id_pessoa' => $ultimo_id_Pessoa,
                  'statu_atleta' => $this->input->post('statu'),
                  'id_infor_tecnica' => $id_inf_tecnica,
                  'id_associacao_pro' => $id_associacao_pro
              ];

              $ultimo_id = $this->Atleta->addAtleta($inf4);

              if( $ultimo_id != 0){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado. <a href="<?php base_url("Atleta/verAtleta/" . 2)?>">Clique aqui </a>Para ver Detalhes </h6></div>');
                   redirect('Atleta/listar');
              }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('Atleta/novo');
              }
            }else{
                $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                redirect('Atleta/novo');
            }
          }else{
               $info = [
                'genero' => $this->input->post('genero'),
                'nome' => $this->input->post('fullName'),
                'n_bilhete' => $this->input->post('bilhete'),
                'data_nascimento' => $this->input->post('data'),
                'nomePai' => $this->input->post('nomePai'),
                'nomeMae' => $this->input->post('nomeMae'),
                'telefone' => $this->input->post('telefone'),
                'telefone2' => $this->input->post('telefone2'),
                'email' => $this->input->post('email'),
                'id_endereco_fk1' => $id_endereco
                ];

                $this->load->model('Atleta_Model','Atleta');
                $ultimo_id_Pessoa = $this->Atleta->addPessoa($info);

                $inf4 = [
                  'id_pessoa' => $ultimo_id_Pessoa,
                  'statu_atleta' => $this->input->post('statu'),
                  'id_infor_tecnica' => $id_inf_tecnica,
                  'id_associacao_pro' => $id_associacao_pro
                ];

              $ultimo_id = $this->Atleta->addAtleta($inf4);


                if( $ultimo_id != 0){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta <strong>'.$this->input->post('fullName').'</strong> foi cadastrado.</a></h7></div>');
                   redirect('Atleta/listar');
                }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('Atleta/novo');
                }
            }
          }

    else:
      redirect(base_url());
    endif;
  }


	  public function addAtleta(){

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
	        $this->novo();
	      }else{

	        $config['upload_path']    = './uploads/product/';
	        $config['allowed_types']  = 'gif|jpg|png|jpeg';
	        $config['max_size']       = 4096;
	        $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
	        $this->load->library('upload',$config);

	          $this->load->model('Atleta_Model','Atleta');

	          $provincia = $this->input->post('provincia');

	          $sql = "select nome_provincia from provincia where id_provincia = ?";
	          $id_associacao1 = $this->db->query($sql,array($provincia))->result()[0];
	          $id_associacao2 = $id_associacao1->nome_provincia;

	          $sql = "select id_associacao_pro from associacao_provincia where descricao_associacao = ?";
	          $id_associacao7 = $this->db->query($sql,array($id_associacao2))->result()[0];

	          $id_associacao = $id_associacao7->id_associacao_pro;

	          $info2 = [
	            'hablitacao_literaria' => $this->input->post('hablitacao'),
	            'Graduacao' => $this->input->post('Graduacao'),
	            'id_Academia_c' => $this->input->post('Academia'),
	            'peso' => $this->input->post('peso'),
	            'id_estilo' => $this->input->post('estilo')
	          ];

	          $this->load->model('Provincia','Provincia');

	          $provinciaNome = $this->Provincia->getProvinciaById($this->input->post('provincia'));

	          $info3 = [
	            'provincia_e' => $provinciaNome,
	            'municipio' => $this->input->post('municipio'),
	            'destrito' => $this->input->post('Destrito')
	          ];

	          $id_endereco = $this->Atleta->AddEndereco($info3);
	          $id_inf_tecnica = $this->Atleta->addInf_tecnica($info2);
	          $nomeAtleta = $this->input->post('fullName');

	          if(@$_FILES['arquivoFotoMestre']['name'] != null){
	            if ($this->upload->do_upload('arquivoFotoMestre')) {
	              $post['arquivo'] = $this->upload->data('file_name');

	              $info = [
	                  'genero' => $this->input->post('genero'),
	                  'nome' => $this->input->post('fullName'),
	                  'n_bilhete' => $this->input->post('bilhete'),
	                  'data_nascimento' => $this->input->post('data'),
	                  'nomePai' => $this->input->post('nomePai'),
	                  'nomeMae' => $this->input->post('nomeMae'),
	                  'telefone' => $this->input->post('telefone'),
	                  'telefone2' => $this->input->post('telefone2'),
	                  'imagem' => $post['arquivo'],
	                  'email' => $this->input->post('email'),
	                  'id_endereco_fk1' => $id_endereco
	              ];

	              $this->load->model('mestre_model','mestre');
	              $ultimo_id = $this->mestre->pessoa($info);

	              $inf2 = [
	                'statu_mestre' => $this->input->post('statu'),
	                'id_infor_tecnica' => $id_inf_tecnica,
	                'id_pessoa' => $ultimo_id,
	                'id_associacao_pro' => $this->input->post('id_associacao_pro'),
									'data_cadastro' => date('Y-m-d')
	              ];

	              $retorno = $this->mestre->addMestre($inf2);


	              if( $retorno == 1){
	                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado.</h7></div>');
	                   redirect('listar_atleta');
	              }else{
	                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
	                   redirect('novo_atleta');
	              }
	            }else{
	                $this->session->set_flashdata('sucesso', '<div class="alert alert-danger alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
	                redirect('novo_atleta');
	            }
	          }else{
	               $info = [

	                  'genero' => $this->input->post('genero'),
	                  'nome' => $this->input->post('fullName'),
	                  'n_bilhete' => $this->input->post('bilhete'),
	                  'data_nascimento' => $this->input->post('data'),
	                  'nomePai' => $this->input->post('nomePai'),
	                  'nomeMae' => $this->input->post('nomeMae'),
	                  'telefone' => $this->input->post('telefone'),
	                  'telefone2' => $this->input->post('telefone2'),
	                  'email' => $this->input->post('email'),
	                  'id_endereco_fk1' => $id_endereco
	                ];

	                $this->load->model('mestre_model','mestre');
	                $ultimo_id = $this->mestre->pessoa($info);

	                $inf2 = [
	                  'statu_mestre' => $this->input->post('statu'),
	                  'id_infor_tecnica' => $id_inf_tecnica,
	                  'id_pessoa' => $ultimo_id,
	                  'id_associacao_pro' => $id_associacao
	                ];

	                $retorno = $this->mestre->addMestre($inf2);

	                if( $retorno == 1){
	                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado.</h7></div>');
	                  redirect('listar_atleta');
	                }else{
	                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
	                   redirect('novo_atleta');
	                }
	            }
	          }
	    else:
	      redirect(base_url());
	    endif;
	  }

		public function getAllAssociacao(){

			 $this->load->model("associacao_model");

			 $retorno = $this->associacao_model->getAllAssociacao();

			 $descricao = $this->session->userdata('nome');

			 foreach ($retorno as $retorno) {
				if($retorno->nome != $descricao){
			 		echo "<option  value=".$retorno->id_usuario.">".$retorno->nome."</option>";
				}
			 }

		}


}

?>
