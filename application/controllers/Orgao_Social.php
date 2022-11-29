<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class Orgao_Social extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
  }

  public function atletaPDF($id = null){
    // $retorno = $this->trazeTodos();
    $this->load->model('Mandato_model','Mandato');

    $dado['orgaos'] = $this->Mandato->setmembroMandato($id);

    return $this->load->view('pdfs/orgao_social', $dado);
  }

  public function GerarPDF($id = null)
  {
  //$retorno = $this->trazeTodos();

    $this->load->model('Mandato_model','Mandato');

    $dado['orgaos'] = $this->Mandato->setmembroMandato($id);


    // $teste = $this->atletaPDF($id);

    $this->load->library('pdf');

    ob_start();

    $this->load->view('pdfs/orgao_social.php',$dado);

    $this->dompdf->loadHtml(ob_get_clean());

    $this->dompdf->setPaper('A4');

    $this->dompdf->render();

    $this->dompdf->stream('welcome.pdf', ["Attachment" => false]);
  }

  function adicionarMandato(){

    $this->load->model('Mandato_model','Mandato');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    $data_inicio = date('Y-m-d');
    $ano = date('Y') + 4;
    $mes = date('m');
    $dia = date('d');

    $data_fim = $ano."-".$mes."-".$dia;

    $control = $this->input->post('id_associacao_pro');

    if(empty($control)){
      $dados = [
        'data_inicio_mandato' => $data_inicio,
        'data_fim_mandato' => $data_fim
      ];

      $returno = $this->Mandato->setmandato($dados);

      $dado2 = [
        'id_mandato_atual' => $returno
      ];

      $control = $this->Mandato->getmandatoControl();

      if(empty($control)){

        $retorno = $this->Mandato->setmandatoActual2($dado2);

        if($retorno !=2){
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Mandato para '.$data_inicio.' ate '.$data_fim.' foi criado</h7></div>');
          redirect('Orgao_Social/listarMandato');
        }else{

        }
      }else{

        $returno3 = $this->Mandato->setmandatoAtual(1,$dado2);

        if($returno3 == 1){
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Mandato para '.$data_inicio.' ate '.$data_fim.' foi criado</h7></div>');
          redirect('Orgao_Social/listarMandato');
        }else{

        }
      }

    }else{

      $dados = [
        'data_inicio_mandato' => $data_inicio,
        'data_fim_mandato' => $data_fim,
        'id_associacao_pro' => $this->input->post('id_associacao_pro')
      ];

      $returno = $this->Mandato->setmandato($dados);

      $dado2 = [
        'id_mandato_a' => $returno
      ];

      $control = $this->Mandato->getmandatoControlAss($query[0]->id_associacao_pro);

      if(empty($control)){
        $retorno = $this->Mandato->setmandatoAssActual($dado2);

        if($retorno !=2){
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Mandato para '.$data_inicio.' ate '.$data_fim.' foi criado</h7></div>');
          redirect('Orgao_Social/listarMandato');
        }else{

        }
      }else{
        $id_mandato_atual_associacao = $control[0]->id_mandato_atual_associacao;
        $returno3 = $this->Mandato->setmandatoAtualAss($id_mandato_atual_associacao,$dado2);
        if($returno3 == 1){
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Mandato para '.$data_inicio.' ate '.$data_fim.' foi criado</h7></div>');
          redirect('Orgao_Social/listarMandato');
        }else{

        }
      }

    }

    // echo $returno3;

  }

  public function novo()
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    //set_dashboard('cadastrar Usuario');

    $dados['titulo'] = 'KEDA';
    $dados['titulo1'] = '';
    $this->load->model('crud_model','cru');
    $this->load->model('Mandato_model','Mandato');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    if(empty($query)){

      $dado['id_associacao_pro'] = "";
      $control = $this->Mandato->getmandatoControl();
      $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

      if ($this->session->userdata('valida')):
        if(!empty($control)){
          $this->template->load('template','ver/controlMandato',$dado);
        }else{
          $this->template->load('template','formularios/form_orgao_social',$dado);
        }
      endif;

    }else{

      $dado['id_associacao_pro'] = $query[0]->id_associacao_pro;

      $control = $this->Mandato->getmandatoControlAss($query[0]->id_associacao_pro);

      $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

      if ($this->session->userdata('valida')):
        if(!empty($control)){
          $this->template->load('template','ver/controlMandato',$dado);
        }else{
          $this->template->load('template','formularios/form_orgao_social',$dado);
        }
      endif;


    }




    // if ($this->input->post('id_mandato') == null) {
    //   $data['ano_mandato'] = $this->Mandato->getmandato($id);
    // }else{
    //   $data['ano_mandato'] = $this->Mandato->getmandato($this->input->post('id_mandato'));
    // }

    // $data['cargo'] = $this->cru->getCargos($id);
    // $data['orgao'] = $this->cru->getOrgao($id);


  }

  public function pergarCargosEditar(){

    $this->load->model('crud_model','cru');

    $id = $this->input->post('id_orgao');

    $returno = $this->cru->getCargos($id);

    foreach($returno as $n){
            echo "<option value='{$n->nome_cargo}'>$n->nome_cargo</option>";
    }


  }


  public function pergarCargos(){

    $this->load->model('crud_model','cru');

    $id = $this->input->post('id_orgao');
    $id_ano_mandato = $this->input->post('ano_mandato');

    // $id_mandato_fk = $this->db->query("SELECT id_mandato_atual FROM mandato_atual")->result()[0];

    // $id_mandato = $id_mandato_fk->id_mandato_atual;

    $returno = $this->cru->getCargos($id);

    $controle = $this->db->query('select nome_cargo_membro from menbro_orgao m WHERE m.id_orgao_fk='.$id.' and id_mandato_fk='.$id_ano_mandato)->result();

    // var_dump($controle);


    $descricao = [];

    foreach($returno as $retur){
        $descricao[] = $retur->nome_cargo;
    }


    foreach($controle as $controle2){
      $key = array_search($controle2->nome_cargo_membro, $descricao);
      if ($key !== false) {
        unset($descricao[$key]);
      }
    }

    foreach($descricao as $n){
            echo "<option value='{$n}'>$n</option>";

    }


  }

  public function controlarStatus(){
    $this->load->model('crud_model','cru');

    $id = $this->input->post('id_orgao');

    $id_mandato_fk = $this->db->query("SELECT id_mandato_atual FROM mandato_atual")->result()[0];

    $id_mandato = $id_mandato_fk->id_mandato_atual;

    $returno = $this->cru->getCargos($id);

    $controle = $this->db->query('select nome_cargo_membro from menbro_orgao m WHERE m.id_orgao_fk='.$id.' and id_mandato_fk='.$id_mandato)->result();


    $descricao = [];

    foreach($returno as $retur){
        $descricao[] = $retur->nome_cargo;
    }

    foreach($controle as $controle2){
      $key = array_search($controle2->nome_cargo_membro, $descricao);
      if ($key !== false) {
        unset($descricao[$key]);
      }
    }

    if($descricao == '' || $descricao == null){
     echo 1;
    }else{
     echo 0;
    }
  }

  public function addMembro1()
  {

    $this->load->model('crud_model','cru');

    if($this->session->userdata('valida')){

      $this->form_validation->set_rules('nome_completo','nome','required', array('trim','required' => 'O campo %s nao deve estar vazio.'));
      $this->form_validation->set_rules('telefone','telefone','required', array('trim','required' => 'O campo %s nao deve estar vazio.'));

      if ($this->form_validation->run() == FALSE) {
        $this->cadastrar($this->input->post('mandato'));
      }else{
          $config['upload_path']    = './uploads/product/';
          $config['allowed_types']  = 'gif|jpg|png|jpeg';
          $config['max_size']       = 2048;
          $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
          $this->load->library('upload',$config);

          if (@$_FILES['arquivo']['name'] != null) {
              if ($this->upload->do_upload('arquivo')) {
                 $post['arquivo'] = $this->upload->data('file_name');

                  $nome=$this->input->post('nome_completo');
                  $telefone=$this->input->post('telefone');
                  $id_cargo_fk=$this->input->post('cargo');
                  $id_orgao_fk=$this->input->post('orgao');
                  $id_mandato_fk=$this->input->post('mandato');

                  $verifica = $this->cru->countOrMembro($id_orgao_fk,$id_mandato_fk);
                  if ($verifica == 1 || $verifica == 3 || $verifica == 4 || $verifica == 5 || $verifica == 6) {
                    $cont = 3;
                  }elseif ($verifica == 2) {
                    $cont = 7;
                  }else{
                    $cont = 5;
                  }

                  $verifica2 = $this->cru->verificaEntr($id_orgao_fk,$id_cargo_fk,$id_mandato_fk);

                  if(($verifica[0]->quantidade<=$cont) && ($verifica2!=1)){
                    $dados = [
                      'nome' => $this->input->post('nome_completo'),
                      'telefone' => $this->input->post('telefone'),
                      'id_cargo_fk' => $this->input->post('cargo'),
                      'id_orgao_fk' => $this->input->post('orgao'),
                      'id_mandato_fk' => $this->input->post('mandato'),
                      'imagem_membro' => $post['arquivo']
                    ];

                    if($this->cru->insert_membro_orgao($dados) == 1)
                    {
                      $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                        redirect('mostrarMembro/'. $id_mandato_fk .'/'. $id_orgao_fk);
                    }else{
                      $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                        redirect('cadastrar/' . $this->input->post('orgao'));
                    }
                  }else{
                     $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!. Esta vaga ja foi preenchida </h6></div>');
                      redirect('Orgao_Social/cadastrar/' . $this->input->post('mandato'));
                  }
                }else{
                    $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado. <a href="<?php base_url("Atleta/verAtleta/" . 2)?>">Clique aqui </a>Para ver Detalhes </h6></div>');
                    redirect('Orgao_Social/listarOrgaoSocial/' . $this->input->post('mandato'));
                }
          }else{
              $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta '.$this->input->post('fullName').' foi cadastrado. <a href="<?php base_url("Atleta/verAtleta/" . 2)?>">Clique aqui </a>Para ver Detalhes </h6></div>');
                redirect('Orgao_Social/listarOrgaoSocial/' . $this->input->post('mandato'));
          }
      }
    }else{
         redirect('App/index');
    }
 }

 public function addMembro()
 {

   $this->load->model('crud_model','cru');

            $config['upload_path']    = './uploads/product/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 2048;
            $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload',$config);

          if (@$_FILES['arquivoFotoDirigente']['name'] != null) {
              if ($this->upload->do_upload('arquivoFotoDirigente')) {
                 $post['arquivo'] = $this->upload->data('file_name');


                 $nome=$this->input->post('nome_completo');
                 $telefone=$this->input->post('telefone');
                 $id_cargo_fk=$this->input->post('cargo');
                 $id_orgao_fk=$this->input->post('orgao');
                 $id_mandato_fk=$this->input->post('mandato');

                   $dados = [
                     'nome' => $this->input->post('nome_completo'),
                     'telefone' => $this->input->post('telefone'),
                     'nome_cargo_membro' => $this->input->post('cargo'),
                     'id_orgao_fk' => $this->input->post('orgao'),
                     'id_mandato_fk' => $this->input->post('mandato'),
                     'imagem_membro' => $post['arquivo']
                   ];

                   if($this->cru->insert_membro_orgao($dados) == 1)
                   {

                    // $nome = $this->db->query('select nome_cargo from cargos where nome_cargo like "%'.$this->input->post('cargo').'%"')->result()[0];
                    // $nome1 = $nome[0]->nome_cargo;

                    echo "<div class='alert alert-success alert-dismissible' style='background:#00a65a;border-color:#008d4c;fonte_'><h6 style='color:white'><i class='icon fa fa-check'></i> Sucesso!. O adicionado</h6></div>";
                   }else{
                     $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                       redirect('cadastrar/' . $this->input->post('orgao'));
                   }

              }
          }else{

                 $nome=$this->input->post('nome_completo');
                 $telefone=$this->input->post('telefone');
                 $id_cargo_fk=$this->input->post('cargo');
                 $id_orgao_fk=$this->input->post('orgao');
                 $id_mandato_fk=$this->input->post('mandato');

                   $dados = [
                     'nome' => $this->input->post('nome_completo'),
                     'telefone' => $this->input->post('telefone'),
                     'nome_cargo_membro' => $this->input->post('cargo'),
                     'id_orgao_fk' => $this->input->post('orgao'),
                     'id_mandato_fk' => $this->input->post('mandato')
                   ];

                   if($this->cru->insert_membro_orgao($dados) == 1)
                   {

                    // $nome = $this->db->query('select nome_cargo_membro from cargos where nome_cargo like "%'.$this->input->post('cargo').'%"')->result()[0];
                    // $nome1 = $nome[0]->nome_cargo_membro;

                    echo "<div class='alert alert-success alert-dismissible' style='background:#00a65a;border-color:#008d4c;fonte_'><h6 style='color:white'><i class='icon fa fa-check'></i> Sucesso!. O adicionado</h6></div>";
                   }else{
                     $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
                       redirect('cadastrar/' . $this->input->post('orgao'));
                   }
          }
}

public function listarOrgaoSocial($id = null)
{

  $this->load->model('crud_model','crud');
  $this->load->model('Mandato_model','Mandato');

  $descricao = $this->session->userdata('nome');
  $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

  if($this->session->userdata('valida')){
    $dado['ano_mandato'] = $this->Mandato->getmandato($id);
    $dado['orgao_social'] = $this->crud->listar_orgao_social($id);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if(!empty($query)){

      $id_associacao_pro = $query[0]->id_associacao_pro;
      $control = $this->Mandato->getmandatoControlAss($query[0]->id_associacao_pro);
      $id_mandato_atual = $control->id_mandato_a;

      $dado['mandato_atual'] = $id_mandato_atual;

    }else{

      $control2 = $this->Mandato->getmandatoControl();
      $id_mandato_atual = $control2[0]->id_mandato_atual;

      $dado['mandato_atual'] = $id_mandato_atual;


    }

    $this->template->load('template','listar/listar_orgao_social',$dado);
  }else{
    redirect('App/index');
  }

  return $id;

}

public function listarMandato()
{

  $this->load->model('crud_model','crud');
  $this->load->model('Mandato_model','Mandato');

  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

  $descricao = $this->session->userdata('nome');
  $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

  if(empty($query)){

    // $id_associacao_pro = $query[0]->id_associacao_pro;
    // $control = $this->Mandato->getmandatoControlAss($query[0]->id_associacao_pro);

    $id = $this->Mandato->getAllMandatoAtual();

    $control = $id;

    $dado['Mandatos'] = $this->Mandato->getmandato($id);
    $dado['Mandatos2'] = $this->Mandato->getAllMandato();

  }else{

    $id_associacao_pro = $query[0]->id_associacao_pro;

    $control = $this->Mandato->getmandatoControlAss($query[0]->id_associacao_pro);

    // $id = $this->Mandato->getAllMandatoAtualAss($control);

    // var_dump($control->id_mandato_a);

    $dado['Mandatos'] = $this->Mandato->getmandatoAss($control->id_mandato_a);
    $dado['Mandatos2'] = $this->Mandato->getAllMandato();


  }

  if($this->session->userdata('valida')){
    if(empty($control)){
      $this->template->load('template','ver/mandatoVazio',$dado);
    }else{
      $this->template->load('template','listar/listar_mandatos',$dado);
    }

  }else{
    redirect('App/index');
  }

}

public function listarMandatoHistorico()
{

  $this->load->model('crud_model','crud');
  $this->load->model('Mandato_model','Mandato');

  $id = $this->Mandato->getAllMandatoAtual();

  $descricao = $this->session->userdata('nome');
  $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();


  $dado['Mandatos'] = $this->Mandato->getmandato($id);
  $dado['mandato_atual'] = $this->Mandato->getmandatoControl();
  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

  if(!empty($query)){

    $id_associacao_pro = $query[0]->id_associacao_pro;

    $dado['Mandatos2'] = $this->Mandato->getAllMandato($id_associacao_pro);

  }else{

    $dado['Mandatos2'] = $this->Mandato->getAllMandato();

  }

  if($this->session->userdata('valida')){
    $this->template->load('template','listar/listar_mandatoHistorico',$dado);
  }else{
    redirect('App/index');
  }

}


public function verMembroOrgaoVazio()
{

  $this->load->model('crud_model','cru');

  $id1 = $this->input->post('id_orgao');
  $id = $this->input->post('ano_mandato');

  $verMembro = $this->cru->getMembro($id,$id1);

  if($verMembro == ' ' || $verMembro == null){
    echo 1;
  }else{
    echo 2;
  }

}

public function verMembroOrgao($id = NULL,$id1 = NULL)
{

  if($this->session->userdata('valida')){
  $dados['titulo'] = 'KEDA';
  $this->load->model('crud_model','cru');

  $dado['verMembro'] = $this->cru->getMembro($id,$id1);
  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));



      $this->template->load('template','ver/ver_membro_orgao',$dado);

  }else{
    redirect('App/index');
  }

}

public function verMembroModal(){
  if (isset($_POST["id"])) {
     $this->load->model('crud_model','cru');
     $dado = $this->cru->getMembro($this->input->post('id'));

     $output = '';
     $output .= '<p><label> Cargo : '.$dado[0]->nome_cargo_membro.'</label></p>';
     $output .= '<p><label> Cargo : '.$dado[0]->nome_cargo_membro.'</label></p>';

     echo $output;

  }else{
  echo "NADA DE NADA";
  }
}

public function excluirAcademia($id = NULL){

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

public function editarDadoMembro()
{
  $this->load->model('Mandato_model', 'Mandato');

  // $nome = $this->input->post('nome_completo');
  // $telefone = $this->input->post('telefone');
  // $id_membro = $this->input->post('id_membro');
  // $cargo = $this->input->post('cargo22');

  // $dados = [
  //   "nome" => $nome,
  //   "telefone" => $telefone,
  //   "nome_cargo_membro" => $cargo
  // ];

  // $returno = $this->Mandato->EditarDadosMembro($id_membro, $dados);

  // if($returno == 1){
  //   echo "<div class='alert alert-success alert-dismissible' style='background:#00a65a;border-color:#008d4c;fonte_'><h6 style='color:white'><i class='icon fa fa-check'></i> Sucesso!. Os dados foram alterados com sucesso </h6></div>";
  // }else{
  //   echo 2;
  // }


  $this->load->model('crud_model','cru');

  $config['upload_path']    = './uploads/product/';
  $config['allowed_types']  = 'gif|jpg|png|jpeg';
  $config['max_size']       = 4096;
  $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
  $this->load->library('upload',$config);

if (@$_FILES['arquivoFotoDirigente']['name'] != null) {
    if ($this->upload->do_upload('arquivoFotoDirigente')) {
       $post['arquivo'] = $this->upload->data('file_name');

       $id_membro = $this->input->post('id_membro');
       $nome=$this->input->post('nome_completo');
       $telefone=$this->input->post('telefone');
       $id_cargo_fk=$this->input->post('cargo');
       $id_orgao_fk=$this->input->post('orgao');
       $id_mandato_fk=$this->input->post('mandato');

         $dados = [
           'nome' => $this->input->post('nome_completo'),
           'telefone' => $this->input->post('telefone'),
           'nome_cargo_membro' => $this->input->post('cargo22'),
           'id_orgao_fk' => $this->input->post('id_orgao'),
           'id_mandato_fk' => $this->input->post('id_mandato'),
           'imagem_membro' => $post['arquivo']
         ];

         $returno = $this->Mandato->EditarDadosMembro($id_membro, $dados);

         if($returno == 1)
         {

          echo "<div class='alert alert-success alert-dismissible' style='background:#00a65a;border-color:#008d4c;fonte_'><h6 style='color:white'><i class='icon fa fa-check'></i> Sucesso!. O adicionado</h6></div>";
         }else{
           $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
             redirect('cadastrar/' . $this->input->post('orgao'));
         }

    }
}else{
       $id_membro = $this->input->post('id_membro');
       $nome=$this->input->post('nome_completo');
       $telefone=$this->input->post('telefone');
       $id_cargo_fk=$this->input->post('cargo');
       $id_orgao_fk=$this->input->post('orgao');
       $id_mandato_fk=$this->input->post('mandato');

       $dados = [
        'nome' => $this->input->post('nome_completo'),
        'telefone' => $this->input->post('telefone'),
        'nome_cargo_membro' => $this->input->post('cargo22'),
        'id_orgao_fk' => $this->input->post('id_orgao'),
        'id_mandato_fk' => $this->input->post('id_mandato')
      ];

         $returno = $this->Mandato->EditarDadosMembro($id_membro, $dados);

         if($returno == 1)
         {

          echo "<div class='alert alert-success alert-dismissible' style='background:#00a65a;border-color:#008d4c;fonte_'><h6 style='color:white'><i class='icon fa fa-check'></i> Sucesso!. O adicionado</h6></div>";
         }else{
           $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!. Usuario <?= ?> adicionado  alterados com sucesso.</h6></div>');
             redirect('cadastrar/' . $this->input->post('orgao'));
         }
}

}

public function listarMandatoOrgaoMembro2($id = null)
{
  $this->load->model('Mandato_model','Mandato');

  $id_mandato_atual = $id;

  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
  $dado['mandato_atual'] = $id_mandato_atual;
  $dado['orgaos'] = $this->Mandato->setmembroMandato($id);


  if($this->session->userdata('valida'))
  {
    $this->template->load('template','ver/ver_orgao_historico',$dado);
  }else{
    redirect('App/index');
  }
}

public function listarMandatoOrgaoMembro($id = null)
{

  $this->load->model('Mandato_model','Mandato');

  $id_mandato_atual = $id;

  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
  $dado['mandato_atual'] = $id_mandato_atual;
  $dado['orgaos'] = $this->Mandato->setmembroMandato($id);

  if($this->session->userdata('valida'))
  {
    $this->template->load('template','listar/listar_orgao_membro',$dado);
  }else{
    redirect('App/index');
  }

}

public function listarMandatoOrgaoMembroView($id = null)
{

  $this->load->model('crud_model','cru');

  $id = $this->input->post('id_orgao');
  $id1 =  $this->input->post('id_orgao_social');

  $orgaos = $this->cru->getMembro($id,$id1);

  echo json_encode($orgaos);
}

public function listarMandatoOrgaoMembroView2($id = null)
{

  $this->load->model('crud_model','cru');


  $id2 = $this->input->post('id_membro');

  $orgaos = $this->cru->getMembroId($id2);

  echo json_encode($orgaos);
}

public function getSomaMembros(){

  $this->load->model('Mandato_model','Mandato');

  $id_mandato_atual = $this->input->post('id_mandato_atual');

  $resultado = $this->Mandato->getSomaMembros($id_mandato_atual);

  echo $resultado;

}

public function getIDParticipanteDirigente23(){

  $this->load->model('Mandato_model','Mandato');

  $id_membro = $this->input->post('id_membro');

  $resultado2 = $this->Mandato->getIDParticipanteDirigente($id_membro);
  $resultado = json_encode($resultado2);

  echo $resultado;

}

public function getListaMemmbrosMandatosDirigentes(){

  $this->load->model('Mandato_model','Mandato');

  $id_associacao_pro = $this->input->post('id_associacao_pro');
  $escolha = $this->input->post('escolha');

  $resultado = $this->Mandato->getMandatoDirigentes($id_associacao_pro, $escolha);

  $resultado2 = json_encode($resultado);

  echo $resultado2;

}

}

?>
