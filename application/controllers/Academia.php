<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;


//este controlador vai gerir tudo que tem haver com o atleta;

class Academia extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
  }

	public function GerarPDFListaAcademia()
	{

		$this->load->model('crud_model','Academia');

		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		$dado['academia'] = $this->Academia->listar_academia_id($query[0]->id_associacao_pro);

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/listaAcademias.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('Lista de Academias.pdf', ["Attachment" => false]);

	}

	public function GerarPDFListaAcademiaAtleta($idAcademia)
	{

		$this->load->model('crud_model','Academia');
		$this->load->model('Academia_Model','Academia2');

		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

		$dado['academia_atleta'] = $this->Academia2->pergarAtletaAcademia($idAcademia,$query[0]->id_associacao_pro);

		$dompdf = new Dompdf();

		$this->load->library('pdf');

		ob_start();

		$this->load->view('pdfs/listaAcademiaAtleta.php',$dado);

		$dompdf->loadHtml(ob_get_clean());

		$dompdf->setPaper('A4');

		$dompdf->render();
		$dompdf->stream('Lista de Academias.pdf', ["Attachment" => false]);

	}

  public function cadastrar()
  {

		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

    set_dashboard('cadastrar Usuario');
    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $this->load->model('Provincia');
    $data['descricao'] = $this->cru->getGraduacao();
    $data['categoria'] = $this->cru->get_categoria_atleta();
    $data['estilo']    = $this->cru->get_estilo();
    $data['nome'] = $this->cru->listar_academia();
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia3();
    $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    if($query != NULL){
      $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
    }else{
      $data['id_associacao_pro'] = '';
    }

    if ($this->session->userdata('valida')):

      $this->template->load('template','formularios/form_academia',$data);

    endif;
  }

  public function mudarEstado()
  {
    $this->load->model('Academia_Model','Academia');

    $estado = $this->input->post('estado');
    $id = $this->input->post('id_academia');

    if ($this->session->userdata('valida')) {
       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }

       $dado = [
          'statu' => $estado
       ];

       $resultado = $this->Academia->trocarEstado($id, $dado);
         if ($this->Academia->trocarEstado($id, $dado)==1) {
           $rs=$this->db->query('select statu from academia where id_academia=?',array($id))->result()[0];
           echo $rs->statu;
         }

    }else{
      redirect('App/index');
    }

  }

  public function cadastrar_academia()
  {

		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

    if($this->session->userdata('valida')){

      $this->form_validation->set_rules('responsavel','responsavel','required',array('trim','required' => 'O campo %s nao pode estar vazio'));
      $this->form_validation->set_rules('Designacao_academia','nome da academia','required',array('trim','required'=> 'O campo %s nao pode estar vazio'));

      if($this->form_validation->run() == FALSE){
        $this->cadastrar();
      }else{

          $provincia = $this->input->post('provincia');
          $sql = "select nome_provincia from provincia where id_provincia = ?";
          $id_associacao1 = $this->db->query($sql,array($provincia))->result()[0];

          $id_associacao2 = $id_associacao1->nome_provincia;

          $sql = "select id_associacao_pro from associacao_provincia where descricao_associacao = ?";
          $id_associacao = $this->db->query($sql,array($id_associacao2))->result()[0];

          $id_associacao_pro = $id_associacao->id_associacao_pro;

          $dado = [
            'nome_academia' => $this->input->post('Designacao_academia'),
            'responsavel' => $this->input->post('responsavel'),
            'idestilo' => $this->input->post('estilo'),
            'Data_fundacao' => $this->input->post('data'),
            'provincia' => $id_associacao2,
            'id_associacao_pro' => $id_associacao_pro,
            'statu' => 'Activo',
            'email_clube' => $this->input->post('Email')
          ];

          $this->load->model('crud_model','crud');
          $resposta = $this->crud->insert_academia($dado);
          if($resposta == 1) {
            $this->session->set_flashdata('sucesso_mundial', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Academia'.$this->input->post('nome_academia').' adicionado.</h7></div>');
            redirect('listaMundial');
          }else{
          $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
            redirect('listaMundial');
         }
      }
    }else{
      redirect('App/index');
    }
  }

  public function editar_academia($id = null)
  {
		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    if($this->session->userdata('valida')){

          $provincia = $this->input->post('provincia');

          $sql = "select nome_provincia from provincia where id_provincia = ?";
          $id_associacao1 = $this->db->query($sql,array($provincia))->result();


          if(empty($id_associacao1)){
            $id_associacao2 = $provincia;

            $sql = "select id_associacao_pro from associacao_provincia where descricao_associacao = ?";
            $id_associacao = $this->db->query($sql,array($id_associacao2))->result()[0];

            $id_associacao_pro = $id_associacao->id_associacao_pro;


          }else{
            $id_associacao2 = $id_associacao1[0]->nome_provincia;

            $sql = "select id_associacao_pro from associacao_provincia where descricao_associacao = ?";
            $id_associacao = $this->db->query($sql,array($id_associacao2))->result()[0];

            $id_associacao_pro = $id_associacao->id_associacao_pro;
          }

          $dado = [
            'nome_academia' => $this->input->post('Designacao_academia'),
            'responsavel' => $this->input->post('responsavel'),
            'idestilo' => $this->input->post('estilo'),
            'Data_fundacao' => $this->input->post('data'),
            'provincia' => $id_associacao2,
            'id_associacao_pro' => $id_associacao_pro,
            'statu' => 'Activo',
            'email_clube' => $this->input->post('Email')
          ];

          $this->load->model('crud_model','crud');

          $resposta = $this->crud->AtualizarAcademia($id, $dado);

          if($resposta == 1) {
            $this->session->set_flashdata('sucesso_academia', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Academia'.$this->input->post('nome_academia').' adicionado.</h7></div>');
            redirect('Academia/listar_Academia');
          }else{
          $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
            redirect('Academia/EditarAcademia/'.$id);
         }

    }else{
      redirect('App/index');
    }
  }


  function listar_Academia()
  {
		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','Academia');
    if($this->session->userdata('role') == 'Associacao'){

      $descricao = $this->session->userdata('nome');
      $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

      $dados['academia'] = $this->Academia->listar_academia_id($query[0]->id_associacao_pro);
    }else{
      $dados['academia'] = $this->Academia->listar_academia();
    }

    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','listar/listar_academia',$dados);
    endif;
  }

  public function EditarAcademia($id = NULL)
  {
		// $this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('Provincia');
    $this->load->model('crud_model','Academia');
    $data['estilo'] = $this->Academia->getEstilo_juj();
    // $data['academia'] = $this->Academia->listar_academia();
    $data['academia'] = $this->Academia->getAcademiaId($id);
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
    $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    if($query != NULL){
      $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
    }else{
      $data['id_associacao_pro'] = '';
    }

    if ($this->session->userdata('valida')):
      $this->template->load('template','editar/editar_academia',$data);
    endif;
  }

  public function editarModal(){

    $id_academia = $_POST['id_academia'];

    $this->load->model('crud_model','Academia');
    $this->load->model('Provincia');

    $estilo = $this->Academia->getEstilo_juj();
    $provincias = $this->Provincia->selectProvincia();
    $academia = $this->Academia->getAcademiaId($id_academia);

    $modalEditar = '';
    $modalEditar .= '<div>';
    $modalEditar .= '<fieldset>';

    $modalEditar .= '<div class="row">';
    $modalEditar .= '<br>';
    $modalEditar .= '<div class="col-md-12">';
    $modalEditar .= '<div class="form-row">';
    $modalEditar .= '<div class="form-group col-sm-6">';
    $modalEditar .= '<label for="exampleInputEmail1">Responsavel</label>';
    $modalEditar .= '<input type="text" name="responsavel" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="'.$academia[0]->responsavel.'">';
    $modalEditar .= '</div>';

    $modalEditar .= '<div class="form-group col-sm-6">';
    $modalEditar .= '<label for="exampleInputEmail1">Nome da Academia</label>';
    $modalEditar .= '<input type="text" name="nome_academia" placeholder="Nome Completo" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="'.$academia[0]->nome_academia.'">';
    $modalEditar .= '</div>';
    $modalEditar .= '</div>';

    $modalEditar .= '<div class="form-row">';
    $modalEditar .= '<div class="form-group col-sm-6">';
    $modalEditar .= '<label class="col-form-label text-md-right">Data de Fundacao</label>';
    $modalEditar .= '<input type="Date" class="form-control" id="data" name="data" placeholder="Select Date" value="'.$academia[0]->Data_fundacao.'">';
    $modalEditar .= '</div>';
    $modalEditar .= '<div class="form-group col-sm-6">';
    $modalEditar .= '<label class="col-form-label text-md-right">Estilo<span class="text-danger"></span></label>';
    $modalEditar .= '<select class="form-control" name="estilo" id="estilo">';
    $modalEditar .= '<option></option>';
    foreach ($estilo as $est){
      if ($est->id_estilo == $academia[0]->id_estilo) {
    $modalEditar .= '<option value="<?= $est->id_estilo?>" selected>'.$est->nome_estilo.'</option>';
      } else {
    $modalEditar .= '<option value="<?= $est->id_estilo?>" selected>'.$est->nome_estilo.'</option>';
      }
    }
    $modalEditar .= '</select>';
    $modalEditar .= '</div>';
    $modalEditar .= '</div>';
    $modalEditar .= '</div>';
    $modalEditar .= '</div>';

    $modalEditar .= '<div class="row">';
    $modalEditar .= '<div class="col-md-12">';
    $modalEditar .= '<div class="form-row">';
    $modalEditar .= '<div class="form-group col-sm-4">';
    $modalEditar .= '<label class="col-form-label text-md-left">Provincia<span class="text-danger"></span></label>';
    $modalEditar .= '<select id="provincia" class="form-control" name="provincia">';
    foreach($provincias as $provincias){
      if($provincias->nome_provincia == $academia[0]->provincia){
    $modalEditar .= '<option value="<?= $provincias->nome_provincia ?>" selected>'.$academia[0]->provincia.'</option>';
      }else{
    $modalEditar .= '<option value="<?= $provincias->nome_provincia ?>" selected>'.$academia[0]->provincia.'</option>';
      }
    }
    $modalEditar .= '</select>';
    $modalEditar .= '</div>';

    $modalEditar .= '<div class="form-group col-sm-4">';
    $modalEditar .= '<label class="col-form-label text-md-right">Municipio<span class="text-danger"></span></label>';
    $modalEditar .= '<select id="municipio" class="form-control" name="municipio" disabled>';
    $modalEditar .= '</select>';
    $modalEditar .= '</div>';

    $modalEditar .= '<div class="form-group col-sm-4">';
    $modalEditar .= '<label class="col-form-label text-md-right">Destrito<span class="text-danger"></span></label>';
    $modalEditar .= '<select class="form-control" name="destrito" id="destrito" disabled>';
    // foreach ($academia as $n){
    $modalEditar .= '<option value=""></option>';
    // }
    $modalEditar .= ' </select>';
    $modalEditar .= '</div>';

    $modalEditar .= '</div>';
    $modalEditar .= '</div>';
    $modalEditar .= '</div>';
    $modalEditar .= '</fieldset>';
    $modalEditar .= '</div>';

    echo $modalEditar;
  }

  public function excluirAcademia($id = NULL){

		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $this->load->model('crud_model','Academia');
    if($this->session->userdata('valida')):
      $dados['titulo'] = "SEDICE";

      if($id != NULL):
        $ctrl = $this->Academia->excluirAcademia($id);
        if($ctrl == 1):
          $this->session->set_flashdata('sucesso_delete_academia', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');
          redirect('Academia/listar_academia');
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

  public function novoNome($nome = null){

      $nome2 = explode(" ",$nome,4);
      return strtoupper($nome2[0]);
  }

  public function novofim($nome = null){

    $nome2 = explode(" ",$nome,4);
    return strtoupper(end($nome2));
}

  function calcularIdade($idade){
    $dataAtual = date('Y-m-d');
    $anoActual = explode("-", $dataAtual);

    $ano = explode("-", $idade,4);
    $idade = $anoActual[0]-$ano[0];
    return $idade;
  }

  public function pegarAtletaAcademia(){

    $this->load->model('Academia_Model','Academia');

    $id_atleta = $this->input->post('id_atleta_academia');

		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $dados_atleta = $this->Academia->pergarAtletaAcademia777($id_atleta,$query[0]->id_associacao_pro);
    $totalAtleta = $this->Academia->totalAtletaAcademia($id_atleta,$query[0]->id_associacao_pro);

    $idade = $this->calcularIdade($dados_atleta[0]->data_nascimento);

    $primeiroNome = $this->novoNome($dados_atleta[0]->nome);
    $ultimoNome = $this->novofim($dados_atleta[0]->nome);

    $conteudo = '';

    $conteudo .= '<div style="display:flex;flex-direction: row">';
    $conteudo .= '<div style="width:150px;height:180px">';
    if($dados_atleta[0]->imagem != null){
      $conteudo .= '  <img style="width:100%;height:100%" src="http://localhost/KEDA/uploads/product/'.$dados_atleta[0]->imagem.'" />';
    }else{
      $conteudo .= '  <img style="width:100%;height:100%" src="http://localhost/KEDA/assets/images/3.jpg" />';
    }
    $conteudo .= '</div>';
    if($dados_atleta[0]->statu == 'Activo'){
    $conteudo .= '<div style="background-color:#00acac;height:13px;width:13px;position:relative;bottom:-158px;left:-26px;border-radius:50%;"></div>';
    }else{
    $conteudo .= '<div style="background-color:#ff5b57;height:13px;width:13px;position:relative;bottom:-158px;left:-26px;border-radius:50%;"></div>';
    }
    $conteudo .= '<div style="width:250px;height:180px;background-color:rgba(255,255,255,.4);position:absolute;left:127px">';
    $conteudo .= '<div style="margin-left:46px">';
    $conteudo .= '<p style="font-size:17px;font-weight:400;color:#2d353c;margin-top:2px;margin-bottom:0rem;margin-left:6px">'.$primeiroNome.'</p>';
    $conteudo .= '<p style="font-size:17px;font-weight:700;color:#2d353c;padding-top:0px;margin-left:6px">'.$ultimoNome.'</p>';
    $conteudo .= '<div style="display:flex;"><img style="height:20px;width:20px;border-radius:50%;margin-left:6px;margin-right:6px;margin-bottom:8px" src="http://localhost/SIS_KEDA/uploads/product/'.$dados_atleta[0]->imagem.'">'.$dados_atleta[0]->nome_academia.' . '.$dados_atleta[0]->nome_estilo.'</p></div>';
    $conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">PESO </p><p style="font-size:14px;font-weight:400;color:#242a30;">'.$dados_atleta[0]->peso.' Kg</p></div>';
		$conteudo .= '<div class="text-center" id="conteiner3">';

		if($dados_atleta[0]->graduacao == 0){

    $conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="entrada7"><p style="margin-top: 13px;"> NEGRO </p></div></p></div>';

		}else if($dados_atleta[0]->graduacao > 10){

							if($dados_atleta[0]->graduacao == 15){

								$conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="bg bg-warning"><p style="margin-top: 13px;color:black">Amarelo</p></div></p></div>';

							}elseif ($dados_atleta[0]->graduacao == 16) {
								$conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="bg bg-light"><p style="margin-top: 13px;color:black">Branco</p></div></p></div>';

							}elseif ($dados_atleta[0]->graduacao == 14) {
								$conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="bg bg-orange"><p style="margin-top: 13px;color:black">Laranja</p></div></p></div>';

							}elseif ($dados_atleta[0]->graduacao == 13) {
								$conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="bg bg-success"><p style="margin-top: 13px;color:black">Verde</p></div></p></div>';

							}elseif ($dados_atleta[0]->graduacao == 12) {
								$conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="bg bg-primary"><p style="margin-top: 13px;color:black">Branco</p></div></p></div>';

							}elseif ($dados_atleta[0]->graduacao == 11) {
								$conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">GRAD. </p><p style="font-size:14px;font-weight:400;color:#242a30;"><div class="bg bg-light"><p style="margin-top: 13px;color:black">Branco</p></div></p></div>';

							}

					}else{

					}
		$conteudo .= '</div>';

    $conteudo .= '<div style="display:flex;margin-bottom: -14px"><p style="margin-left:6px;margin-right:26px;font-size:14px;font-weight:200;">NASC. </p><p style="font-size:14px;font-weight:400;color:#242a30;">'.date('d/m/Y', strtotime($dados_atleta[0]->data_nascimento)).' ('.$idade.' Anos)</p></div>';
    $conteudo .= '</div>';
    $conteudo .= '</div>';
    $conteudo .= '</div>';

    echo $conteudo;
  }


  public function verAcademia($id = NULL)
  {
		$this->auth->check_logged(2,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','Academia');
    $this->load->model('Academia_Model','Academia2');
    //$this->load->model('Academia_Model','Academia');

    $id_atleta = $this->input->post('id_atleta_academia');

		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $dado['totalAtleta'] = $this->Academia2->totalAtletaAcademia($id,$query[0]->id_associacao_pro);
    $dado['academia_atleta'] = $this->Academia2->pergarAtletaAcademia($id,$query[0]->id_associacao_pro);
    $dado['academia'] = $this->Academia->getAcademiaId($id);
    $dado['totalMasc'] = $this->Academia2->totalMasculino($id,$query[0]->id_associacao_pro);
    $dado['totalFem'] = $this->Academia2->totalFemenino($id,$query[0]->id_associacao_pro);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/ver_academia',$dado);
    endif;

  }

  public function verAcademiaAtleta($id = NULL)
  {
    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','Academia');
    $this->load->model('Academia_Model','Academia2');
    //$this->load->model('Academia_Model','Academia');

    $id_atleta = $this->input->post('id_atleta_academia');

		$descricao = $this->session->userdata('nome');
		$query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $dado['totalAtleta'] = $this->Academia2->totalAtletaAcademia($id, $query[0]->id_associacao_pro);
    $dado['academia_atleta'] = $this->Academia2->pergarAtletaAcademia($id);
    $dado['academia'] = $this->Academia->getAcademiaId($id);
    $dado['totalMasc'] = $this->Academia2->totalMasculino($id);
    $dado['totalFem'] = $this->Academia2->totalFemenino($id);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/ver_atletas_academia',$dado);
    endif;

  }

  public function eliminarVarios(){
    $this->load->model('Academia_Model','Academia');

    $teste = $this->input->post('id');

     for ($i=0; $i < count($teste); $i++) {
       $this->Academia->excluirAcademia($teste[$i]);
     }

  }


}

?>
