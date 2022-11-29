<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class Usuario extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
  }
  /*................................CADASTRAR USUARIO................................................................................*/

  public function mudarEstado()
  {
    $this->load->model('crud_model','cru');

    $estado = $this->input->post('estado');
    $id = $this->input->post('id_usuario');

    if ($this->session->userdata('valida')) {
       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }

       $dado = [
          'status' => $estado
       ];

       $resultado = $this->cru->trocarEstado($id, $dado);
       if ($resultado == 1) {
        $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado para '.$estado.'</h6></div>');
           redirect('usuario/listar');
       }else{
          $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado para '.$estado.'</h6></div>');
           redirect('usuario/listar');
       }
    }else{
      redirect('App/index');
    }
  }

  public function Cadastrar1()
  {
    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $data['role'] = $this->cru->role();
    $data['nome'] = $this->cru->listar_academia();

    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header2', $dados);
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('inputs/form_usuario',$data);
      $this->load->view('Parts_Pages/footer2');
    endif;
  }

  public function modalUsuarioEditar()
  {

      $this->load->model('crud_model','crud');

      if (isset($_POST['id_usuario'])) {

        $id_usuario = $this->crud->utilizador_role($this->input->post('id_usuario'));

        $caminho = base_url('uploads/product/' . $id_usuario[0]->imagem);
        $conteudo ='';
        $conteudo .= '<div class="row">';
        $conteudo .= '   <div class="col-md-6">';
        $conteudo .= '    <div class="card">';

        $conteudo .= '     <img class="card-img-top img-rounded height-150" src="'.$caminho.'"/>';
        $conteudo .= '     <div class="card-body">';
        $conteudo .= '      <h5 class="card-title">'.$id_usuario[0]->nome.'</h5>';
        $conteudo .= '     </div>';
        $conteudo .= '     <ul class="list-group list-group-flush">';
        $conteudo .= '      <li class="list-group-item"><h5 class="card-title"> Utilizador: '.$id_usuario[0]->username.'</h5></li>';
        $conteudo .= '      <li class="list-group-item"><h5 class="card-title"> Role: '.$id_usuario[0]->nome_role.'</h5></li>';
        $conteudo .= '      <li class="list-group-item"><h5 class="card-title"> Estado: '.$id_usuario[0]->status.'</h5></li>';
        $conteudo .= '     </ul';
        $conteudo .= '     <div class="card-body">';
        $conteudo .= '     </div>';
        $conteudo .= '    </div';
        $conteudo .= '   </div';

        $conteudo .= '   <div class="col-md-6">';
        $conteudo .= '    <div class="card">';

        $conteudo .= '     <img class="card-img-top img-rounded height-150" src="'.$caminho.'"/>';
        $conteudo .= '     <div class="card-body">';
        $conteudo .= '      <h5 class="card-title">'.$id_usuario[0]->nome.'</h5>';
        $conteudo .= '     </div>';
        $conteudo .= '     <ul class="list-group list-group-flush">';
        $conteudo .= '      <li class="list-group-item"><h5 class="card-title"> Utilizador: '.$id_usuario[0]->username.'</h5></li>';
        $conteudo .= '      <li class="list-group-item"><h5 class="card-title"> Role: '.$id_usuario[0]->nome_role.'</h5></li>';
        $conteudo .= '      <li class="list-group-item"><h5 class="card-title"> Estado: '.$id_usuario[0]->status.'</h5></li>';
        $conteudo .= '     </ul';
        $conteudo .= '     <div class="card-body">';
        $conteudo .= '     </div>';
        $conteudo .= '    </div';
        $conteudo .= '   </div';

        $conteudo .= '</div';

        echo $conteudo;
      }
  }

  public function Cadastrar()
  {
    $this->load->model('crud_model','cru');

    if ($this->session->userdata('valida')) {

            $config['upload_path']    = './uploads/product/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 2048;
            $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload',$config);

            $senha = $this->input->post('nova_senha');
            $hash = password_hash($senha, PASSWORD_BCRYPT, array('cost'=>11));

            if(@$_FILES['arquivoFotoAtleta']['name'] != null){
              if ($this->upload->do_upload('arquivoFotoAtleta')) {
                  $post['arquivo'] = $this->upload->data('file_name');

                  $dados = [
                    'nome' => $this->input->post('nome_usuario'),
                    'username'=> $this->input->post('Utilizador'),
                    'senha' => $this->input->post('nova_senha'),
                    'id_role' => $this->input->post('perfil'),
                    'data_criacao' => date('Y-m-d'),
                    'imagem' => $post['arquivo']
                  ];

                  $returno1 = $this->cru->insert_utilizador($dados);

                  if ($returno1 == 1) {

                    echo($returno1);

                  }else{

                      echo($returno1);

                  }
              }else{
                echo "imagem vazia";
              }
            }else{
              echo "imagem vazia";
            }
    }else{
      redirect('App/index');
    }
  }
  /*..............................................................EDITAR PERFIL..........................................................................................*/
  public function EditarPerfil($id = null)
  {
    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $dados['usuario'] = $this->cru->utilizador_role($id);
    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/ver_usuario',$dados);
    endif;
  }

  public function salvarEditar()
  {
    $this->load->model('crud_model','cru');

    if ($this->session->userdata('valida')) {
        $this->form_validation->set_rules('nome_usuario','Nome','required', array('trim','required' => 'O campo %s nao deve estar vazio.'));
        $this->form_validation->set_rules('Utilizador','Nome de utilizador','required', array('trim','required' => 'O campo %s nao deve estar vazio.'));
        $this->form_validation->set_rules('senha', 'senha', 'required', array('trim','required' => 'O %s não deve estar vázia.'));
        $this->form_validation->set_rules('nova_senha','confirmar senha','required|matches[senha]');

    if ($this->form_validation->run() == false) {
        $id_perfil = $this->input->post('id_perfil');
        redirect('usuario/EditarPerfil/' . $id_perfil);
    }else{

      $dados = [
        'nome' => $this->input->post('nome_usuario'),
        'username'=> $this->input->post('Utilizador'),
        'senha' => $this->input->post('nova_senha')
      ];

      $returno1 = $this->cru->verificar_perfil($dados);

      if ($returno1 == 1) {
        $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#ff5b57;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. Dados ja existente no sistema.</h6></div>');
        $id_perfil = $this->input->post('id_perfil');
        redirect('usuario/EditarPerfil/' . $id_perfil);
      }else{

      $returno = $this->cru->AtualizarUsuario1(7,$dados);
      if ($returno == 1) {
        $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h6></div>');
        $id_perfil = $this->input->post('id_perfil');
        redirect('usuario/EditarPerfil/' . $id_perfil);
      }else{
        echo "nao atualizado com sucesso";
        echo($this->session->userdata('id'));
      }
    }
    }
    }else{

    }
  }
  /*---------------------------------------------------------------------------------------------*/
  public function Editar1($id = null)
  {
    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $dados['usuario'] = $this->cru->utilizador_role($id);
    $dados['role'] = $this->cru->role();
    //$dados['formErrors'] = validation_errors();

    if ($this->session->userdata('valida')):
      $this->template->load('template','ver/ver_usuario',$dados);
    endif;
  }

  public function Editar()
  {

    if ($this->session->userdata('valida')) {
    $this->form_validation->set_rules('nome_usuario','Nome','required',
     array('trim','required' => 'O campo %s nao deve estar vazio.'));
    $this->form_validation->set_rules('Utilizador','Nome de utilizador','required',
     array('trim','required' => 'O campo %s nao deve estar vazia.'));
    $this->form_validation->set_rules('senha', 'senha', 'required',
     array('trim','required' => 'O %s não deve estar vázia.'));
    $this->form_validation->set_rules('nova_senha1','campo nova senha','required|matches[nova_senha2]',
     array('trim','required' => 'O %s não deve estar vázia.'));
    $this->form_validation->set_rules('nova_senha2','campo confirmar senha','required|matches[nova_senha1]',
     array('trim','required' => 'O %s nao deve estar vazia.'));

    if ($this->form_validation->run() == false) {
        $id_perfil = $this->input->post('idAtleta');
        // redirect('usuario/Editar1/' . $id_perfil);
        $this->Editar1($id_perfil);
    }else{

        $config['upload_path']    = './uploads/product/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
        $this->load->library('upload',$config);

      if(@$_FILES['arquivoFotoUsuario']['name'] != null){
        if ($this->upload->do_upload('arquivoFotoUsuario')) {
            $post['arquivo'] = $this->upload->data('file_name');
              // $this->session->set_userdata('foto', $post);
              $dados = [
                'nome' => $this->input->post('nome_usuario'),
                'username'=> $this->input->post('Utilizador'),
                'senha' => $this->input->post('nova_senha1'),
                // 'id_role' => $this->input->post('role'),
                'imagem' => $post['arquivo']
                // 'Status' => $this->input->post('Status')
              ];

            $this->load->model('crud_model','cru');
            $returno = $this->cru->AtualizarUsuario1($this->input->post('idAtleta'),$dados);
          if ($returno == 1) {
              $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h6></div>');
              redirect('usuario/Editar1/' . $id_perfil);
          }else{
            $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. Dados nao alterados.</h6></div>');
            redirect('usuario/Editar1');
          }
        }else{
          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
          redirect('Atleta/Editar/' . $id);
        }
      }else{

              $dados = [
                'nome' => $this->input->post('nome_usuario'),
                'username'=> $this->input->post('Utilizador'),
                'senha' => $this->input->post('nova_senha1')
              ];

              $this->load->model('crud_model','cru');
            $returno = $this->cru->AtualizarUsuario1($this->input->post('idAtleta'),$dados);
          if ($returno == 1) {
              $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os teus dados foram alterados.</h6></div>');
              $id_perfil = $this->input->post('idAtleta');
              redirect('usuario/Editar1/' . $id_perfil);
          }else{
            $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. Dados nao alterados.</h6></div>');
            redirect('usuario/Editar1');
          }
      }
    }
    }else{
        redirect('App/index');
    }
  }
  /*....................................................................................................................................................*/
  public function excluir($id = null)
  {
    $this->load->model('crud_model','cru');

    $controla = $this->cru->Excluir_usuario($id);

    if ($controla == 1) {
    $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h6></div>');

    redirect('usuario/listar');
  }else{
    $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Dados alterados com sucesso.</h6></div>');
    redirect('usuario/listar');
  }
  }

  public function listar()
  {

		$this->auth->check_logged(6,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    //$dados['atletas'] = $this->Atleta->getAll();
    $dados['usuario'] = $this->cru->utilizador();
    $dados['role'] = $this->cru->role();
    $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    //$ctrl1 = $this->cru->excluirAtleta();

    if ($this->session->userdata('valida')){
      $this->template->load('template','listar/listar_usuario',$dados);
    }else{
      redirect('App/index');
    }
  }

  public function verUsuario($id = NULL)
  {

    $this->auth->check_logged(6,$this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');

    $dado['verUsuario'] = $this->cru->utilizador2($id);
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

    if ($this->session->userdata('valida')){
      $this->template->load('template','ver/ver_usuario_perfil',$dado);
    }else{
      redirect('App/index');
    }
  }


  public function Detalhe(){
    $moda_Detalhe = '';

    $this->load->model('crud_model','cru');

    $detalhe = $this->input->post('id_usuario');
    $retorno77 = $this->cru->utilizador2($detalhe);

    if( $retorno77 == null){
      $retorno = $this->cru->utilizador8($detalhe);
    }else{
      $retorno = $this->cru->utilizador2($detalhe);
    }

    // $retorno = $this->cru->utilizador2($detalhe);

                    $moda_Detalhe .= '<div class="modal-body" id="modal-body2" style="display: flex">';
                    $moda_Detalhe .= '<div class="verDetalhe" style="position:relative;background:white; margin-right:12px;width:180px">';
                    if ($retorno[0]->imagem == null) {
                      $moda_Detalhe .=    '<img class="foto" src="http://localhost/SIS_KEDA/assets/images/3.JPG">';
                    }else{
                      $moda_Detalhe .=    '<img class="foto2" style="position: relative;width:100%; height:100%" src="http://localhost/SIS_KEDA/uploads/product/'.$retorno[0]->imagem.'">';
                    }

                    $moda_Detalhe .=    '<div class="verDetalhe2" style="position: absolute;top: 75%;left: 12%;height:30px; width: 130px; background-color:#ff5b57; font-size:14px; font-weight:600; color:white; text-align:center; line-height:30px">'.$retorno[0]->nome_role.'</div>';
                    $moda_Detalhe .=    '</div>';
                    $moda_Detalhe .=     '<div class="verDetalhe2" style="background:gray">';
                    $moda_Detalhe .=    '<div class="panel panel-inverse panel-inverse" style="margin-bottom:0px">';
										$moda_Detalhe .=    '<div class="table-responsive">';
                    $moda_Detalhe .=    '<table id="user" class="table table-condensed table-bordered">';
                    $moda_Detalhe .=    '<thead>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '</thead>';
                    $moda_Detalhe .=    '<tbody>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '<td class="bg-silver-lighter"><i class="fa fa-user"></i> Nome</td>';
                    $moda_Detalhe .=    '<td>'.$retorno[0]->nome.'</td>';
                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '<td class="bg-silver-lighter"><i class="fa fa-mars"></i> Utilizador</td>';
                    $moda_Detalhe .=    '<td>'.$retorno[0]->username.'</a></td>';

                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '<td class="bg-silver-lighter"><i class="fa fa-address-card"></i> Senha</td>';
                    $moda_Detalhe .=    '<td>'.$retorno[0]->senha.'</td>';
                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '<td class="bg-silver-lighter"><i class="fa fa-calendar-alt"></i>Estado</td>';
                    if($retorno[0]->status == 'Activo'){
                    $moda_Detalhe .=    '<td><div style="background-color:#49b6d6;color:white;font-size:12px;font-weight:600;height:20px;widht:30px;border-radius:3px;margin-right:54px;text-align:center">'.$retorno[0]->status.'</div></td>';
                    }else{
                    $moda_Detalhe .=    '<td><div style="background-color:#ff5b57;color:white;font-size:12px;font-weight:600;height:20px;widht:30px;border-radius:3px;margin-right:54px;text-align:center">'.$retorno[0]->status.'</div></td>';
                    }
                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '<td class="bg-silver-lighter"><i class="fa fa-phone"></i>Sigla</td>';
                    $moda_Detalhe .=    '<td>'.$retorno[0]->sigla.'</td>';
                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '<tr>';
                    $moda_Detalhe .=    '<td class="bg-silver-lighter"><i class="fa fa-at"></i>Data Registro</td>';
                    $moda_Detalhe .=    '<td>'.$retorno[0]->data_criacao.'</td>';
                    $moda_Detalhe .=    '</tr>';
                    $moda_Detalhe .=    '</tbody>';
                    $moda_Detalhe .=    '</table>';
										$moda_Detalhe .=    '</div>';

                    $moda_Detalhe .=    '</div>';
                    $moda_Detalhe .=    '                    </div>';


                $moda_Detalhe .= '</div>';

                $moda_Detalhe .=    '<div class="card">';
                $moda_Detalhe .=    '<div id="registroEntrada" class="bg-black text-white pointer-cursor collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" style="border-radius:none;text-align:center;padding: 10px 15px;font-weight:600">
                                Registro de Entrada no Sistema</div>';

                $moda_Detalhe .=    '<div id="collapseTwo" class="collapse" data-parent="#accordion" style="height:100%">';
                $moda_Detalhe .=    '<div class="card-body">';
                $moda_Detalhe .=    '<div class="panel panel-inverse panel-inverse" style="margin-bottom:0px">';

                $moda_Detalhe .=    '<div class="table-responsive">';
                $moda_Detalhe .=    '<table id="user" class="table table-condensed table-bordered">';
                if($retorno77 == null){

                $moda_Detalhe .= '<p style="color:rgba(0,0,0,.65);font-weight:600;padding:13px 16px; font-size:22px; text-align:center;line-height:normal">Sem Registro de Entrada no sistema</p>';

              }else{
              $moda_Detalhe .=    '<thead>';
                $moda_Detalhe .=    '<tr>';
                $moda_Detalhe .=    '<th width="50%">Hora e Data de Entrada</th>';
                $moda_Detalhe .=    '<th>Hora e Data de Saida</th>';
                $moda_Detalhe .=    '</tr>';
                $moda_Detalhe .=    '</thead>';

                $moda_Detalhe .=    '<tbody>';

              foreach($retorno as $retorno){
                $moda_Detalhe .= '<tr>';
                $moda_Detalhe .= '<td class="bg-silver-lighter">'.$retorno->horaLogin.'</td>';
                $moda_Detalhe .= '<td class="bg-silver-lighter">'.$retorno->horaLogout.'</td>';
                $moda_Detalhe .= '</tr>';
              }
              $moda_Detalhe .= '</tbody>';
            }

                $moda_Detalhe .= '</table>';
                $moda_Detalhe .=  '</div>';

                $moda_Detalhe .=    '</div>';
                $moda_Detalhe .=    '</div>';
                $moda_Detalhe .=    '</div>';
                $moda_Detalhe .=    '</div>';


    echo $moda_Detalhe;
  }


  public function Detalhe5(){

    $this->load->model('crud_model','cru');

    $detalhe = $this->input->post('id_usuario');

    $retorno = $this->cru->utilizador3($detalhe);

    echo json_encode($retorno);
  }

  public function pegarStatus(){

    $retorno = $this->db->query('select * from role')->result();
    foreach($retorno as $ret){
      echo "<option value='{$ret->id}'>$ret->nome_role</option>";
    }
  }

  public function pegarPerfil(){
    $retorno = $this->db->query('select * from role')->result();
    foreach($retorno as $ret){
      echo ("<option value='{$ret->id}'>$ret->nome_role</option>");
    }
  }


}

?>
