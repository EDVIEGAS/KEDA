<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'controllers/Qr_code_generate.php');
require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';
// require('Qr_code_generate.php');

use Dompdf\Dompdf;
use Dompdf\Options;
//este controlador vai gerir tudo que tem haver com o atleta;

class Mestre extends Qr_code_generate
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

	public function GerarPDFCarteiraMestre($idMestre)
	{

		$this->load->model('mestre_Model','Mestre');

		// $idMestre = $this->input->post('idEvento2');

		$dado['verMestre'] = $this->Mestre->getIdMestreInfTecn($idMestre);

		// var_dump($dado['verMestre']);

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/cartao.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('welcome.pdf', ["Attachment" => false]);

	}

	public function GerarPDFFichaMestre($id)
	{

		$this->load->model('mestre_Model','Mestre');

    $bilhete = null;

		$dado['verMestre'] = $this->Mestre->getIdMestreInfTecn($id);
		$dado['Mundial_participacao'] = $this->Mestre->getIdMestreInfTecnBilheteMundial($bilhete,$id);
		$dado['Africano_participaca'] = $this->Mestre->getIdMestreInfTecnBilheteAfricano($bilhete,$id);
	  $dado['historico'] = $this->Mestre->verificarActividade($id);
		$dado['Provincial_participacao'] = $this->Mestre->getIdMestreInfTecnBilheteProvincial($this->Mestre->getBilheteBYidMestre($id));

		// $dado['Nacional_participacao'] = $this->Mestre->getIdMestreInfTecnBilheteNacional($id);

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/FichaMestre.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('welcome.pdf', ["Attachment" => false]);

	}

	public function PegarBilhete($id = null){

		$this->load->model('mestre_Model','Mestre');

		return $this->Mestre->getIdMestreInfTecnBilhete($id);

	}

	public function PegarCartaoMestre($id = null){

		$dados['titulo'] = 'KEDA';
		$this->load->model('mestre_model','mestre');

		$verMestre = $this->mestre->getIdMestreInfTecn($id);

		var_dump($verMestre);

	}

	public function GerarPDFDiploma($id = null)
	{

		$this->load->model('mestre_Model','Mestre');
		$this->load->model('seminarios_outros');

		$dado['verMestre'] = $this->Mestre->getIdMestreInfTecn($id);
		$dado['SecretarioPresidente'] =$this->seminarios_outros->setAllSecretarioPresidente();

    $bilhete = $this->PegarBilhete($id);

		$info = [
			'imagem_qr' => $this->print_qr($bilhete)
		];

		$this->seminarios_outros->atribuirQrCodeMestre($id, $info);

		// $teste = $this->atletaPDF($id);
		// $options = new Options();
		// $options->set('defaultFont', 'Courier');
		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/certificado_mestre.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4','landscape');

		$dompdf->render();
		$dompdf->stream('welcome.pdf', ["Attachment" => false]);

	}

	public function GerarPDFGraduacao($id = null)
	{

		$this->load->model('mestre_Model','Mestre');
		$this->load->model('seminarios_outros');

		$dado['verMestre'] = $this->Mestre->getIdMestreInfTecn($id);
		$dado['SecretarioPresidente'] =$this->seminarios_outros->setAllSecretarioPresidente();

    $bilhete = $this->PegarBilhete($id);

		$info = [
			'imagem_qr' => $this->print_qr($bilhete)
		];

		$this->seminarios_outros->atribuirQrCodeMestre($id, $info);

		// $teste = $this->atletaPDF($id);
		// $options = new Options();
		// $options->set('defaultFont', 'Courier');
		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/certificado_mestre.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4','landscape');

		$dompdf->render();
		$dompdf->stream('welcome.pdf', ["Attachment" => false]);

	}


  public function mudarEstado()
  {

    $this->load->model('mestre_model','mestre');

    $estado = $this->input->post('estado');
    $id = $this->input->post('id_mestre');

    if ($this->session->userdata('valida')) {
       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }

       $dado = [
          'statu_mestre' => $estado
       ];

        $resultado = $this->mestre->trocarEstado($id, $dado);
        if ($resultado == 1) {
          $rs=$this->db->query('select statu_mestre from mestre where id_mestre=?',array($id))->result()[0];
          echo $rs->statu_mestre;
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Estado foi alterado para '.$rs->statu_mestre.'</h7></div>');
          // redirect('listaMestre');
        }
    }else{
      redirect('App/index');
    }
  }

  public function editar_sert(){

    $this->load->model('mestre_model','mestre');

    if($this->session->userdata('valida')){
      if($this->input->post('controlInfo') == 'IPessoal'){

        $id_pessoa1 = $this->input->post('idpessoa');

        $info = [
          'genero' => $this->input->post('genero'),
          'nome' => $this->input->post('fullName'),
          'n_bilhete' => $this->input->post('bilhete'),
          'data_nascimento' => $this->input->post('data')
        ];

        $ultimo_id_Pessoa = $this->mestre->actualizarPessoa($id_pessoa1,$info);

        if($ultimo_id_Pessoa == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado ao informacao Pessoal foram alterados.</h7></div>');
        }else{
          echo 'erro';
        }

      }elseif($this->input->post('controlInfo') == 'IEndereco'){

        $id_endereco_fk1 = $this->input->post('id_endereco_fk1');

        $provincia = $this->input->post('provincia');

        $id_provincia = $this->db->query('SELECT nome_provincia FROM provincia WHERE id_provincia ='.$provincia)->result();
        $id_provincia2 = $id_provincia[0]->nome_provincia;

        $info3 = [
          'provincia_e' => $id_provincia2,
          'municipio' => $this->input->post('municipio')
        ];

        $id_endereco = $this->mestre->AtualizarEndereco($id_endereco_fk1,$info3);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado a Filiacao foram alterados.</h7></div>');
        }else{
          echo 'erro';
        }

      }elseif($this->input->post('controlInfo') == 'IFiliacao'){

        $id_pessoa1 = $this->input->post('idpessoa');

        $info3 = [
        'nomePai' => $this->input->post('nomePai'),
        'nomeMae' => $this->input->post('nomeMae')
        ];

        $id_endereco = $this->mestre->actualizarPessoa($id_pessoa1,$info3);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado a Filiacao foram alterados.</h7></div>');
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

        $id_endereco = $this->mestre->actualizarPessoa($id_pessoa1,$info3);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado ao contacto foram alterados.</h7></div>');
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

        $id_endereco = $this->mestre->actualizarTecnica($id_inf_tecnica,$info2);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado a Informacao Tecnica foram alterados.</h7></div>');
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
    $config['max_size']       = 4096;
    $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
    $this->load->library('upload',$config);

    if(@$_FILES['arquivoFotoMestre']['name'] != null){
      if ($this->upload->do_upload('arquivoFotoMestre')) {
          $post['arquivo'] = $this->upload->data('file_name');

          $this->load->model('mestre_model','mestre');

          $info = [
            'imagem' => $post['arquivo']
          ];

          $id_pessoa1 = $this->input->post('idpessoa');
          $idMestre = $this->input->post('idMestre');

          $ultimo_id_Pessoa = $this->mestre->actualizarPessoa($id_pessoa1,$info);

          if($ultimo_id_Pessoa == 1){
            $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. A foto foi alterada.</h7></div>');
            redirect('Mestre/Editar/' . $idMestre);
          }else{
            redirect('Mestre/Editar/' . $idMestre);
          }
      }else{
        echo 'erro nenhuma imagem foi selecionada';
      }
    }else{
    echo 'erro nenhuma imagem foi selecionada';
    }
  }

  public function ApagarFoto(){
    $idpessoa = $this->input->post('idpessoa');
    $idMestre = $this->input->post('idMestre');

    $this->load->model('mestre_model','mestre');

    $returno = $this->mestre->ApagarFoto($idpessoa);

    if ($returno == 1) {
      $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. A foto foi excluida com sucesso.</h7></div>');
    }else{
      return 2;
    }
  }

  public function Editar($id = NULL)
  {
    $this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $this->load->model('Atleta_Model','Atleta');
    $this->load->model('mestre_model','mestre');
    $this->load->model('Provincia');
    $data['descricao'] = $this->cru->getGraduacao();
    $data['categoria'] = $this->cru->get_categoria_atleta();
    $data['nome_academia'] = $this->cru->listar_academia();
    $data['estilo'] = $this->Atleta->getEstilo_juj();
    $data['editarMestre'] = $this->mestre->getIdMestreInfTecn($id);
    $data['controlMethod'] = $this->router->method;
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
    $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    // var_dump($data['editarMestre']);

    if ($this->session->userdata('valida')){
      $this->template->load('template','editar/editar_mestre',$data);
    }else{
      redirect('App/index');
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
            $config['max_size']       = 4096;
            $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload',$config);

            $id_mestre = $this->input->post('idMestre');
            $id_pessoa = $this->input->post('idpessoa');
            $idInfTecnica = $this->input->post('idInfTecnica');
            $idendereco = $this->input->post('idendereco');

            $this->load->model('mestre_model','mestre');

            //$imagem = $this->Atleta->getImagem($id);

            $info2 = [
              'hablitacao_literaria' => $this->input->post('hablitacao'),
              'Graduacao' => $this->input->post('Graduacao'),
              'id_Academia_c' => $this->input->post('Academia'),
              'peso' => $this->input->post('peso'),
              'id_estilo' => $this->input->post('estilo')
            ];

            $info3 = [
              'provincia' => $this->input->post('provincia'),
              'municipio' => $this->input->post('municipio'),
              'destrito' => $this->input->post('Destrito')
            ];

            $id_endereco = $this->mestre->AtualizarEndereco($idendereco, $info3);

            $id_inf_tecnica = $this->mestre->AtualizarTecnica($idInfTecnica, $info2);
            $nomeAtleta = $this->input->post('fullName');

            if(@$_FILES['arquivo']['name'] != null){
                if ($this->upload->do_upload('arquivo')) {
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
                      // 'id_endereco_fk1' => $id_endereco
                    ];

                      $this->load->model('mestre_model','mestre');

                      $ultimo_id = $this->mestre->actualizarPessoa($id_pessoa,$info);

                      $inf2 = [
                        'statu' => $this->input->post('statu')
                        // 'id_infor_tecnica' => $id_inf_tecnica,
                        //'id_pessoa' => $this->input->post('idpessoa')
                      ];

                      $retornoAmestre = $this->mestre->AtualizarMestre($id_mestre, $inf2);



                      if( $ultimo_id != 0){

                          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');

                          redirect('listaMestre');
                      }else{
                        redirect('mestre/Editar/' . $id_mestre);
                      }
                }else{
                    $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                    redirect('mestre/Editar/' . $id_mestre);
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
                // 'id_endereco_fk1' => $id_endereco
              ];


                $this->load->model('mestre_model','mestre');

                $ultimo_id = $this->mestre->actualizarPessoa($id_pessoa,$info);

                      $inf2 = [
                        'statu' => $this->input->post('statu'),
                        // 'id_infor_tecnica' => $this->input->post('idInfTecnica'),
                        //'id_pessoa' => $this->input->post('idpessoa')
                      ];

                $retornoAmestre = $this->mestre->AtualizarMestre($id_mestre, $inf2);

                if( $ultimo_id != 0){

                   $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');

                  redirect('listaMestre');
                }else{
                  redirect('Atleta/cadastrar');
                }
              }
            }
    else:
      redirect(base_url());
    endif;
  }

  public function verMestre($id = NULL)
  {

    $this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('mestre_model','mestre');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    $dado['verMestre'] = $this->mestre->getIdMestreInfTecn($id);
    $NBilhete = $this->mestre->getIdMestreInfTecnBilhete($id);
    $dado['Mundial_participacao'] = $this->mestre->getIdMestreInfTecnBilheteMundial($NBilhete);
    $dado['Africano_participaca'] = $this->mestre->getIdMestreInfTecnBilheteAfricano($NBilhete);
    $dado['Nacional_participacao'] = $this->mestre->getIdMestreInfTecnBilheteNacional($NBilhete);
    $dado['Provincial_participacao'] = $this->mestre->getIdMestreInfTecnBilheteProvincial($NBilhete);
		// var_dump($dado['Provincial_participacao']);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    $dado['historico'] = $this->mestre->verificarActividade($id);
    $dado['posicaoFederacao'] = $this->mestre->verificarPosicao($id);
    $dado['posicaoFederacao2'] = $this->mestre->verificarPosicao2($id);


    // var_dump($dado['posicaoFederacao2']);

    if ($this->session->userdata('valida')){
      $this->template->load('template','ver/ver_mestre',$dado);
    }else{
      redirect('App/index');
    }
  }

  public function verMestreCartao($id = NULL)
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    $dados['titulo'] = 'KEDA';
    $this->load->model('mestre_model','mestre');

    $id = $this->input->post('idEvento2');

    $verMestre = $this->mestre->getIdMestreInfTecn($id);

    echo json_encode($verMestre);
    // var_dump($dado['posicaoFederacao2']);


  }

  public function eliminarVarios(){
    if($this->session->userdata('valida')){
        $this->load->model('mestre_model','mestre');

        $teste = $this->input->post('id');

        for ($i=0; $i < count($teste); $i++) {
          $this->mestre->excluirMestre($teste[$i]);
        }
    }else{
      redirect('App/index');
    }

  }

  public function eliminar($id = NULL){

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $this->load->model('mestre_model','mestre');
    if($this->session->userdata('valida')):
      $dados['titulo'] = "SEDICE";

      if($id != NULL):
        $ctrl = $this->mestre->excluirMestre($id);
        if($ctrl == 1):
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Mestre foi eliminado.</a></h7></div>');
          redirect('listaMestre');
        else:
          if($ctrl == 3):
            $this->session->set_flashdata('erro_delete_formando', '<div class="callout callout-warning"><h4>IMPORTANTE!</h4><p>Este formando já fez alguns módulos. Deseja Eliminá-lo mesmo assim? &nbsp;<a href="'.site_url('deleteformandoconfirmado'.'/'.$id).'" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Sim</a> (<b>Obs:</b> Apagará todos os módulo que fez) &nbsp;&nbsp;&nbsp; <a href="'.site_url('listaMestre').'" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Não</a></p></div>');

            redirect('listaMestre');
          else:
            $this->session->set_flashdata('erro_delete_formando', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> FALHA!</h4>Não foi possível eliminar o formando.</div>');
            redirect('listaMestre');
          endif;
        endif;
      else:
        $this->load->view('listaMestre',$dados);
      endif;
    else:
      redirect(site_url());
    endif;
  }

	public function convertDate56($data){

		// $dataInicial = explode(' ',$data);
		$dateFim2 = explode('-',$data);

		$dateFim3 = ($dateFim2[0])+5;
		$dateFim4 = $dateFim3 . "-" . $dateFim2[1] . "-" . $dateFim2[2];
		// $dateFim3 = $dateFim2[2] ."-" . $dateFim2[0] . "-" . $dateFim2[1];

		return $dateFim4;

	}

  public function listar()
  {

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('mestre_model','mestre');
    //$dados['atletas'] = $this->Atleta->getAll();
    //$ctrl1 = $this->Atleta->excluirAtleta();

    if($this->session->userdata('role') == 'Associacao'){

      $descricao = $this->session->userdata('nome');
      $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

      $dados['mestre'] = $this->mestre->listar_mestre_id($query[0]->id_associacao_pro);

    }else{

      $dados['mestre'] = $this->mestre->getAllMestre();

			// $data = date('d/m/Y', strtotime(strtoupper($this->mestre->getAllMestre()[0]->data_cadastro)));

			// $dados['dataCadastroMestre'] = $this->convertDate($data);

    }

    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')){
      $this->template->load('template','listar/listar_mestres',$dados);
    }else{
      redirect('App/index');
    }
  }

  public function novo()
  {

    if ($this->session->userdata('valida')):

			$this->auth->check_logged(2,$this->router->class , $this->router->method);

        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $this->load->model('associacao_Model');

        $data['descricao'] = $this->cru->getGraduacao();
        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['estilo']    = $this->cru->get_estilo();
        $data['nivel_academico'] = $this->cru->getNivelAcademico();
        $data['nome'] = $this->cru->listar_academia();
        $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
        $data['associacao_provincial'] = $this->associacao_Model->getAllAssociacao3();
        $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

        $descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

        if($query != NULL){
          $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
        }else{
          $data['id_associacao_pro'] = '';
        }

        if($this->session->userdata("id_role") == "56"){
					$this->template->load('template','formularios/form_atleta',$data);
				}else{
        	$this->template->load('template','formularios/form_mestre',$data);
				}
    else:
      redirect(base_url());
    endif;
  }

  public function addMestre(){

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
								'data_cadastro' => date('Y-m-d'),
								'data_expCarteira' => $this->convertDate56(date('Y-m-d'))
              ];

              $retorno = $this->mestre->addMestre($inf2);


              if( $retorno == 1){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado.</h7></div>');
                   redirect('listaMestre');
              }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('mestre/novo');
              }
            }else{
                $this->session->set_flashdata('sucesso', '<div class="alert alert-danger alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                redirect('mestre/novo');
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
                  'id_associacao_pro' => $id_associacao,
									'data_cadastro' => date('Y-m-d'),
									'data_expCarteira' => $this->convertDate56(date('Y-m-d'))
                ];

                $retorno = $this->mestre->addMestre($inf2);

                if( $retorno == 1){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado.</h7></div>');
                  redirect('mestre/listar');
                }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('mestre/novo');
                }
            }
          }
    else:
      redirect(base_url());
    endif;
  }

  public function trazerTodos(){

    if($this->session->userdata('valida')){
      $this->load->model('mestre_model','mestre');
      $retorno = $this->mestre->getAllMestre();

      $dados = json_encode($retorno);

      echo $dados;

    }else{
      redirect('App/index');
    }
  }

  public function BuscaByBilheteMestre1(){

    $dados['titulo'] = 'KEDA';
    $this->load->model('mestre_model','mestre');

    $retorno = $this->mestre->getAllMestreByBilhete($this->input->post('numero'));

    // $retorno2 = json_encode($retorno);

    echo $retorno;

  }

	public function BuscaByBilheteMestreSetTreinador()
  {

      $this->load->model('mestre_model');

      $numero = $this->mestre_model->getAllMestreByBilhete99($this->input->post('numero'));

				if(!empty($numero)){
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
            'graduacao' => $numero[0]->graduacao,
            'nome_pai' => $numero[0]->nomePai,
            'nome_mae' => $numero[0]->nomeMae,
            'telefone' => $numero[0]->telefone,
            'telefone2'=> $numero[0]->telefone2,
            'email' => $numero[0]->email,
            'provincia_e' => $numero[0]->provincia_e,
            'municipio' => $numero[0]->municipio
          ];

          echo json_encode($dado);
				}else{
					echo 7;
				}

  }


	public function BuscaByBilheteMestre()
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
            'graduacao' => $numero[0]->graduacao,
            'nome_pai' => $numero[0]->nomePai,
            'nome_mae' => $numero[0]->nomeMae,
            'telefone' => $numero[0]->telefone,
            'telefone2'=> $numero[0]->telefone2,
            'email' => $numero[0]->email,
            'provincia_e' => $numero[0]->provincia_e,
            'municipio' => $numero[0]->municipio
          ];

          echo json_encode($dado);

      }

      }

}
?>
