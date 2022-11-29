<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once(APPPATH.'controllers/Qr_code_generate.php');
require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';
// require('Qr_code_generate.php');

use Dompdf\Dompdf;
use Dompdf\Options;
//este controlador vai gerir tudo que tem haver com o atleta;

class Arbitro extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
  }

	//-----------------Funcao gerar pdf listar Arbitro---------------------------------------------------
	public function actividadePDF($idEvento){

			$query45 = $this->db->query("SELECT id_campeonato FROM campeonato WHERE fk_actividadeC =".$idEvento)->result();
			$idcampeonato = $query45[0]->id_campeonato;

			$descricao = $this->session->userdata('nome');
			$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

			if(count($query) != 0){
				$data = $query[0]->id_associacao_pro;
			}else{
				$data = 0;
			}
	}

	public function GerarPDFListarArbitro()
	{

		$this->load->model('Arbitro_Model','Arbitro');

		$dado['Arbitro'] = $this->Arbitro->getAllArbitro();

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/Arbitro.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('Lista dos Arbitros.pdf', ["Attachment" => false]);

	}
	//-----------------Funcao gerar pdf listar Arbitro---------------------------------------------------

  public function mudarEstado()
  {

    $this->load->model('Arbitro_Model','Arbitro');

    $estado = $this->input->post('estado');
    $id = $this->input->post('id_arbitro');

    if ($this->session->userdata('valida')) {
       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }

       $dado = [
          'statu' => $estado
       ];

       $resultado = $this->Arbitro->trocarEstado($id, $dado);
        if ($resultado == 1) {
           $rs=$this->db->query('select statu from arbitro where id_arbitro=?',$id)->result()[0];
           echo $rs->statu;
         }

       //  echo '<div class="alert alert-success alert-dismissible" style="background:#ff5b57;border-color:#ff5b57;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Insucesso!. O estado nao foi alterado para '.$estado.'</h6></div>';
       //     //redirect('listar_atleta');
       // }else{

       //  echo '<div class="alert alert-success alert-dismissible" style="background:#ff5b57;border-color:#ff5b57;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Insucesso!. O estado nao foi alterado para '.$estado.'</h6></div>';
       //     //redirect('listar_atleta');
       // }

    }else{
      redirect('App/index');
    }
  }

  public function novo()
  {
		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Ar');
    $this->load->model('Provincia','Pro');
    $data['categoria'] = $this->Ar->getCategoria();
    $data['provincia'] = $this->Pro->getAllProv();
    $data['escolhe_provincias'] = $this->Pro->selectProvincia();
    $data['subcategoria'] = $this->Ar->getSubCategoria();
    $data['escolhe_categoria'] = $this->Ar->selectCategoria();
    $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    if($query != NULL){
      $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
    }else{
      $data['id_associacao_pro'] = '';
    }


    if ($this->session->userdata('valida')):

      $this->template->load('template','formularios/form_arbitro',$data);

    endif;
  }

  public function eliminarVarios(){
    $this->load->model('Arbitro_Model','Atleta');

    $teste = $this->input->post('id');

     for ($i=0; $i < count($teste); $i++) {
       $this->Atleta->excluirArbitro($teste[$i]);
     }

  }

  public function verArbitro($id = NULL)
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Arbitro');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    $dado['verArb'] = $this->Arbitro->getIdArbitroInfTecn($id);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/ver_arbitro',$dado);
    endif;
  }

  public function gravarFoto(){

    $config['upload_path']    = './uploads/product/';
    $config['allowed_types']  = 'gif|jpg|png|jpeg';
    $config['max_size']       = 4096;
    $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
    $this->load->library('upload',$config);


    if(@$_FILES['arquivoFotoArbitro']['name'] != null){
      if ($this->upload->do_upload('arquivoFotoArbitro')) {
          $post['arquivo'] = $this->upload->data('file_name');

          $this->load->model('Arbitro_Model','Arbitro');

          $info = [
            'imagem' => $post['arquivo']
          ];

          $id_pessoa1 = $this->input->post('idpessoa');
          $idArbitro = $this->input->post('idArbitro');

          $ultimo_id_Pessoa = $this->Arbitro->actualizarPessoa($id_pessoa1,$info);

          if($ultimo_id_Pessoa == 1){
            $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. A foto foi alterada.</h7></div>');
            redirect('Arbitro/Editar/' . $idArbitro);
          }else{
            redirect('Arbitro/Editar/' . $idArbitro);
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

    $this->load->model('Arbitro_Model','Arbitro');

    $returno = $this->Arbitro->ApagarFoto($idpessoa);

    if ($returno == 1) {
      $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. A foto foi excluida com sucesso.</h7></div>');
    }else{
      return 2;
    }
  }

  public function editar_sert(){

    $this->load->model('Arbitro_Model','Arbitro');

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

       if(is_numeric($provincia)){

        $id_provincia = $this->db->query('SELECT nome_provincia FROM provincia WHERE id_provincia ='.$provincia)->result();
        $id_provincia2 = $id_provincia[0]->nome_provincia;

        $info3 = [
          'provincia_e' => $id_provincia2,
          'municipio' => $this->input->post('municipio')
        ];

       }else{

        $info3 = [
          'provincia_e' => $provincia,
          'municipio' => $this->input->post('municipio')
        ];

       }

        $id_endereco = $this->Arbitro->AtualizarEndereco($id_endereco_fk1,$info3);

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

        $id_endereco = $this->Arbitro->actualizarPessoa($id_pessoa1,$info3);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado ao informacao Pessoal foram alterados.</h7></div>');
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

        $id_endereco = $this->Arbitro->actualizarPessoa($id_pessoa1,$info3);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado ao informacao Pessoal foram alterados.</h7></div>');
        }else{
          echo 2;
        }

      }else{

        $id_inf_tecnica = $this->input->post('id_inf_tecnica');
        $categoria = $this->input->post('Categoria');

        if($categoria == "Provincial"){
          $info2 = [
            'nome_categoria_fk' => $this->input->post('Categoria'),
            'nome_subcategoria_fk' => " "
          ];
        }else{
          $info2 = [
            'nome_categoria_fk' => $this->input->post('Categoria'),
            'nome_subcategoria_fk' => $this->input->post('sub-categoria')
          ];
        }

        $id_catArbitro_subcatArbitro = $this->Arbitro->getIdcatArbitrosubcatArbitro($id_inf_tecnica);
        $id_endereco = $this->Arbitro->ActualizarTecnica($id_catArbitro_subcatArbitro,$info2);

        if($id_endereco == 1){
          $this->session->set_flashdata('sucesso_editar', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados do mestre Associado ao informacao Pessoal foram alterados.</h7></div>');
        }else{
          echo 2;
        }

      }
    }else{
      redirect(base_url());
    }
  }

  public function Editar($id = NULL)
  {

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $data['controlMethod'] = $this->router->method;
    $this->load->model('crud_model','cru');
    $this->load->model('Arbitro_Model','Arbitro');
    $this->load->model('Provincia');
    $data['categoria'] = $this->Arbitro->getCategoria();
    $data['subcategoria'] = $this->Arbitro->gettsubCategoria();
    $data['editarArbitro'] = $this->Arbitro->getIdArbitroInfTecn($id);
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
    $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    // $data['subcategoria'] = $this->Arbitro->getSubCategoria();
    $data['escolhe_categoria'] = $this->Arbitro->selectCategoria();

    // var_dump($data['editarArbitro']);

    if ($this->session->userdata('valida')):

      $this->template->load('template','editar/editar_arbitro1',$data);

    endif;
  }

  public function Editar2($id = null)
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
        $this->novo();
      }else{

        $config['upload_path']    = './uploads/product/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 4096;
        $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload',$config);

          $this->load->model('Atleta_Model','Atleta');
          $this->load->model('Arbitro_Model','Arbitro');
          $this->load->model('Provincia','Provincia');

          $id_arbitro = $this->input->post('idArbitro');
          $id_pessoa = $this->input->post('idpessoa');
          $idInfTecnica = $this->input->post('idInfTecnica');
          $idendereco = $this->input->post('idendereco');

          //$provinciaNome = $this->Provincia->getProvinciaById($this->input->post('provincia'));

          $info2 = [
            'nome_subcategoria_fk' => $this->input->post('Categoria'),
            'nome_categoria_fk' => $this->input->post('sub-categoria')
          ];

          $info3 = [
            'provincia' => $this->input->post('provincia'),
            'municipio' => $this->input->post('municipio'),
            'destrito' => $this->input->post('Destrito')
          ];

          $id_endereco = $this->Arbitro->AtualizarEndereco($idendereco, $info3);

          $id_cate_sub = $this->Arbitro->addcategoria_subcategoria($info2);

          $info4 = [
              'peso' => $this->input->post('peso'),
              'Graduacao' => $this->input->post('Graduacao'),
              'mestre' => $this->input->post('mestre'),
              'id_Academia_c' => $this->input->post('Academia'),
              //'id_catArbitro_subcatArbitro' => $id_cate_sub
          ];

          $id_inf_tecnica = $this->Arbitro->AtualizarTecnica($idInfTecnica, $info4);


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

              $ultimo_id = $this->Arbitro->actualizarPessoa($id_pessoa, $info);

              $info7 = [
                'statu' => $this->input->post('statu')
              ];

              $this->Arbitro->AtualizarArbito($id_arbitro, $info7);

              if( $ultimo_id != 0){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado. <a href="<?php base_url("Atleta/verAtleta/" . 2)?>">Clique aqui </a>Para ver Detalhes </h6></div>');
                   redirect('Arbitro/listar');
              }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('Arbitro/novo');
              }
            }else{
                $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                redirect('Arbitro/novo');
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
              // 'imagem' => $post['arquivo'],
              'email' => $this->input->post('email'),
              // 'id_endereco_fk1' => $id_endereco
            ];

                //$this->load->model('Atleta_Model','Atleta');

                $ultimo_id = $this->Arbitro->actualizarPessoa($id_pessoa, $info);

                $info7 = [
                  'statu' => $this->input->post('statu')
                ];

                $this->Arbitro->AtualizarArbito($id_arbitro, $info7);

                if( $ultimo_id != 0){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!.</div>');
                   redirect('Arbitro/listar');
                }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('Arbitro/novo');
                }
            }
          }
    else:
      redirect(base_url());
    endif;
  }

  public function cadastrar()
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
        $this->novo();
      }else{

        $config['upload_path']    = './uploads/product/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 4096;
        $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload',$config);

          $this->load->model('Atleta_Model','Atleta');
          $this->load->model('Arbitro_Model','Arbitro');
          $this->load->model('Provincia','Provincia');

          $provinciaNome = $this->Provincia->getProvinciaById($this->input->post('provincia'));

          $info2 = [
            'nome_subcategoria_fk' => $this->input->post('sub-categoria'),
            'nome_categoria_fk' => $this->input->post('Categoria')
          ];

          $info3 = [
            'provincia_e' => $provinciaNome,
            'municipio' => $this->input->post('municipio'),
            'destrito' => $this->input->post('Destrito')
          ];

          $id_endereco = $this->Atleta->AddEndereco($info3);

          $id_cate_sub = $this->Arbitro->addcategoria_subcategoria($info2);

          $info4 = [
              'peso' => $this->input->post('peso'),
              'Graduacao' => $this->input->post('Graduacao'),
              'mestre' => $this->input->post('mestre'),
              'id_Academia_c' => $this->input->post('Academia'),
              'id_catArbitro_subcatArbitro' => $id_cate_sub
          ];

          $id_inf_tecnica = $this->Arbitro->addInf_tecnica($info4);


          $nomeAtleta = $this->input->post('fullName');

          if(@$_FILES['arquivoFotoArbitro']['name'] != null){
            if ($this->upload->do_upload('arquivoFotoArbitro')) {
              $post['arquivo'] = $this->upload->data('file_name');

              $info = [
                  'genero' => $this->input->post('genero'),
                  'id_endereco_fk1' => $id_endereco,
                  'nome' => $this->input->post('fullName'),
                  'n_bilhete' => $this->input->post('bilhete'),
                  'data_nascimento' => $this->input->post('data'),
                  'nomePai' => $this->input->post('nomePai'),
                  'nomeMae' => $this->input->post('nomeMae'),
                  'telefone' => $this->input->post('telefone'),
                  'telefone2' => $this->input->post('telefone2'),
                  'imagem' => $post['arquivo'],
                  'email' => $this->input->post('email')
              ];

              $ultimo_id = $this->Arbitro->addPessoa($info);
              $control23 = $this->input->post('id_associacao_pro');
              if($control23 != NULL){
                $info7 = [
                  'id_infor_tecnica' => $id_inf_tecnica,
                  'statu' => $this->input->post('statu'),
                  'id_pessoa' => $ultimo_id,
                  'id_associacao_pro' => $this->input->post('id_associacao_pro')
                ];
              }else{
                $info7 = [
                    'id_infor_tecnica' => $id_inf_tecnica,
                    'statu' => $this->input->post('statu'),
                    'id_pessoa' => $ultimo_id
                ];
              }

              $retorno = $this->Arbitro->addArbitro($info7);

              if( $retorno == 1){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado.</h7></div>');
                   redirect('Arbitro/listar');
              }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('Arbitro/novo');
              }
            }else{
                $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                redirect('Arbitro/novo');
            }
          }else{

              $info = [
              'genero' => $this->input->post('genero'),
              'id_endereco_fk1' => $id_endereco,
              'nome' => $this->input->post('fullName'),
              'n_bilhete' => $this->input->post('bilhete'),
              'data_nascimento' => $this->input->post('data'),
              'nomePai' => $this->input->post('nomePai'),
              'nomeMae' => $this->input->post('nomeMae'),
              'telefone' => $this->input->post('telefone'),
              'telefone2' => $this->input->post('telefone2'),
              // 'imagem' => $post['arquivo'],
              'email' => $this->input->post('email')
              ];

              $ultimo_id = $this->Arbitro->addPessoa($info);

              $control23 = $this->input->post('id_associacao_pro');
              if($control23 != NULL){
                $info7 = [
                  'id_infor_tecnica' => $id_inf_tecnica,
                  'statu' => $this->input->post('statu'),
                  'id_pessoa' => $ultimo_id,
                  'id_associacao_pro' => $this->input->post('id_associacao_pro')
                ];
              }else{
                $info7 = [
                    'id_infor_tecnica' => $id_inf_tecnica,
                    'statu' => $this->input->post('statu'),
                    'id_pessoa' => $ultimo_id
                ];
              }

              $retorno = $this->Arbitro->addArbitro($info7);

                if( $ultimo_id != 0){
                  $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado.</h7></div>');
                   redirect('Arbitro/listar');
                }else{
                  $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                   redirect('Arbitro/novo');
                }
            }
          }
    else:
      redirect(base_url());
    endif;
  }

  public function atletaPDF(){
    // $retorno = $this->trazeTodos();
      $this->load->model('Arbitro_Model','Arbitro');

    $dado['Arbitro'] = $this->Arbitro->getAllArbitro();

    $this->load->view('pdfs/Arbitro', $dado);
  }

  public function GerarPDF()
  {
  //$retorno = $this->trazeTodos();
    $this->atletaPDF();
    $this->load->library('pdf');

    //$this->load->view('Inputs/input_atleta.php');

    //$this->output->get_output();
    $this->dompdf->loadHtml('<h1>ola mundo</h1>');
    ob_start();
    $this->load->view('pdfs/Arbitro.php');

    $this->dompdf->loadHtml(ob_get_clean());

    $this->dompdf->setPaper('A4');

    $this->dompdf->render();

    $this->dompdf->stream('welcome.pdf', array('Attachment'=>0));
  }

  public function trazeTodos()
  {
      $this->load->model('Arbitro_Model','Arbitro');

      $resultado1 = $this->Arbitro->getAllArbitro();

      foreach ($resultado1 as $result) {
        $dado[] = array(
          'id_arbitro' => $result->id_arbitro,
          'nome' => $result->nome,
          'nome_categoria_fk' => $result->nome_categoria_fk,
          'nome_subcategoria_fk' => $result->nome_subcategoria_fk,
          'provincia' => $result->provincia_e,
          'imagem' => $result->imagem,
          'statu' => $result->statu
        );
      }


      $retorno = json_encode($dado);
      echo $retorno;
  }

  public function listar()
  {

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Arbitro');

    if($this->session->userdata('role') == 'Associacao'){

      $descricao = $this->session->userdata('nome');
      $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

      $dados['Arbitro'] = $this->Arbitro->listar_arbitro_id($query[0]->id_associacao_pro);

    }else{
      $dados['Arbitro'] = $this->Arbitro->getAllArbitro();
    }

    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')){
      $this->template->load('template','listar/listar_arbitro',$dados);
    }else{
      redirect('App/index');
    }
  }

  public function listarArbitroCampeonato()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Arbitro');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $Arbitro2 = $this->Arbitro->listar_arbitro_id($query[0]->id_associacao_pro);

    $arbitro = json_encode($Arbitro2);

    echo $arbitro;

  }

  public function listarArbitroCategoria()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Arbitro');

    // $descricao = $this->session->userdata('nome');
    // $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $categoria = $this->input->post('categoria');

    $Arbitro2 = $this->Arbitro->listar_arbitroCategoria($categoria);

    $arbitro = json_encode($Arbitro2);

    echo $arbitro;

  }

  public function getTreinadorID()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Arbitro');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $Arbitro2 = $this->Arbitro->getTreinador_id($this->input->post('id_treinador'));

    $arbitro = json_encode($Arbitro2);

    echo $arbitro;

  }

  public function getArbitroID()
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('Arbitro_Model','Arbitro');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $Arbitro2 = $this->Arbitro->getArbitro_id($this->input->post('id_arbitro'));

    $arbitro = json_encode($Arbitro2);

    echo $arbitro;

  }

  public function atualizar()
  {}

  public function eliminar($id = NULL)
  {

    $this->load->model('Arbitro_Model','Arbitro');
    if($this->session->userdata('valida')):
      $dados['titulo'] = "SEDICE";

			$this->auth->check_logged(2,$this->router->class , $this->router->method);

      if($id != NULL):
        $ctrl = $this->Arbitro->excluirArbitro($id);
        if($ctrl == 1):
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Arbitro Eliminado.</h6></div>');

          redirect('listaArbitro');
        else:
          if($ctrl == 3):
            $this->session->set_flashdata('error', '<div class="callout callout-warning"><h4>IMPORTANTE!</h4><p>Este formando já fez alguns módulos. Deseja Eliminá-lo mesmo assim? &nbsp;<a href="'.site_url('deleteformandoconfirmado'.'/'.$id).'" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Sim</a> (<b>Obs:</b> Apagará todos os módulo que fez) &nbsp;&nbsp;&nbsp; <a href="'.site_url('listaArbitro').'" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Não</a></p></div>');

            redirect('listaArbitro');
          else:
            $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');
            redirect('listaArbitro');
          endif;
        endif;
      else:
        $this->load->view('listaArbitro',$dados);
      endif;
    else:
      redirect(site_url());
    endif;
  }

  public function consultar()
  {}

}

?>
