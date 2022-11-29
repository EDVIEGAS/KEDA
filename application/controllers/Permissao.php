<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class Permissao extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->helper('funcoes');

  }

  // public function DeletarPermissoes1(){

  //   $this->load->model('Permissao_Model','Permissao');

  //   $id = $this->input->post('checadosDel');

  //   for($i=0 ;$i < count($id); $i++){
  //       $eliminar = array(
  //         'id' => $id[$i]['id_menu_sub_menu']
  //       );

  //       $PermissaoList = $this->Permissao->DeletarPermissoes(intval($eliminar['id']));
  //   }

  //   if ($PermissaoList == 1) {
  //     echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Permissoes Adicionadas com sucesso. </h6></div>';
  //   }else{
  //     echo "insucesso";
  //   }

  // }

  public function DeletarPermissoes(){

    $this->load->model('Permissao_Model','Permissao');

    $testeObect2 = $this->input->post('checadosDel3');

    for ($i=0; $i < count($testeObect2); $i++) {

          $testeObect12 = array(
            'id_menu' => $testeObect2[$i]['id_menu'],
            'id_sub_menu' => $testeObect2[$i]['id_submenu'],
            'id_utilizador' => 0
          );

          $retorno75 = $this->Permissao->pegarIDmenu_submenu($testeObect12);

          $testeObect22 = array(
            'id_role_fk' => $testeObect2[$i]['id_role'],
            'fk_menu_submenu' => $retorno75
          );

          $PermissaoList = $this->Permissao->DeletarRoleMenuSubmenu($testeObect22);
          $id_MenuSubmenu = $this->Permissao->DeletarMenuSubmenu($testeObect12);

    }


    if ($PermissaoList == 1) {
      echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Permissoes Adicionadas com sucesso. </h6></div>';
    }else{
      echo "insucesso";
    }

  }

  // public function pegarPermissoes3(){

  //   $this->load->model('Permissao_Model','Permissao');

  //   $id = $this->input->post('checadosDel4');

  //       $daddos = array(
  //         'id_role' => $id[0]['id_role'],
  //         'id_menu' => $id[0]['id_menu'],
  //         'id_submenu' => $id[0]['id_submenu']
  //       );


  //   $PermissaoList = $this->Permissao->pegarPermissao2($daddos);

  //   $ObjectPermissao1 = json_encode($PermissaoList);
  //   echo($ObjectPermissao1);

  // }

  public function pegarPermissoes2(){

    $this->load->model('Permissao_Model','Permissao');

    $id = $this->input->post('checadosDel3');

        $daddos = array(
          'id_role' => $id[0]['id_role'],
          'id_menu' => $id[0]['id_menu'],
          'id_submenu' => $id[0]['id_submenu']
        );


    $PermissaoList = $this->Permissao->pegarPermissao2($daddos);

    $ObjectPermissao1 = json_encode($PermissaoList);
    echo($ObjectPermissao1);

  }

  public function pegarSubmenus(){

    $this->load->model('Permissao_Model','Permissao');



  }

  public function pegarPermissoes(){

    $this->load->model('Permissao_Model','Permissao');

    $id = $this->input->post('id_role');

    $PermissaoList = $this->Permissao->pegarPermissao($id);

    echo json_encode($PermissaoList);

  }

  public function obterMenus(){

    $this->load->model('Menu_model','Permissao');

    $id = $this->input->post('id_role');

    $PermissaoList = $this->Permissao->obterMenus($id);

    echo json_encode($PermissaoList);

  }

  public function obterMenusAcessoRole(){

    $this->load->model('Menu_model','Permissao');

    $id = $this->input->post('id_role');

    $PermissaoList = $this->Permissao->obterMenusAcessoRole($id);

    echo json_encode($PermissaoList);

  }

  public function pegarClasses(){
    $this->load->model('crud_model','cru');
    $classes = $this->cru->classes();

    $classes2 = json_encode($classes);
    echo ($classes2);
  }

  public function pegarMetodo(){
    $this->load->model('crud_model','cru');
    $metodos = $this->cru->metodos();

    $metodos2 = json_encode($metodos);

    echo ($metodos2);
  }

  public function ListarPermissoes($id = null)
  {

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');

    //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    $dado['role'] = $this->cru->role();
    // $dado['classes'] = $this->cru->classes();
    // $dado['sub_menu'] = $this->cru->metodos();
    // $dado['sub_menu1'] = $this->cru->metodos();
    $dado['menuPerm'] = $this->cru->listarMenuSubmenuRole();
    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata("id_role"));
    // $dado['id_role'] = 1;

    // echo(json_encode($dado['menuPerm']));

    if ($this->session->userdata('valida')){
      $this->template->load('template','ver/gerirPermissoes',$dado);
    }else{
      redirect('App/index');
    }
  }

  public function gravarPermissoesDel()
  {

    $this->load->model('Permissao_Model','Permissao');

    $testeObect = $this->input->post('checadosDel');

     for ($i=0; $i < count($testeObect); $i++) {

					 $testeObect2 = array(
							 // 'role' => $testeObect[$i]['role'],
							 'fk_menu' => $testeObect[$i]['menus1'],
							 'fk_submenu' => $testeObect[$i]['submenus'],
							 'id_submenu_submenu3' => $testeObect[$i]['submenusubmenu']
							 // 'id_utilizador' => 0
					 );

					 $id_MenuSubmenu = $this->Permissao->getIdMenuSubmenu($testeObect[$i]['menus1'],$testeObect[$i]['submenus'],$testeObect[$i]['submenusubmenu']);

           $result = $this->Permissao->removerPermissao($id_MenuSubmenu);

    }

    if ($result == 1) {
      echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Permissoes Adicionadas com sucesso. </h6></div>';
    }else{
      echo "insucesso";
    }

  }

  public function gravarPermissoes()
  {

    $this->load->model('Permissao_Model','Permissao');

    $testeObect = $this->input->post('checados');

    for ($i=0; $i < count($testeObect); $i++) {

            $testeObect2 = array(
                // 'role' => $testeObect[$i]['role'],
                'fk_menu' => $testeObect[$i]['menus1'],
                'fk_submenu' => $testeObect[$i]['submenus'],
                'id_submenu_submenu3' => $testeObect[$i]['submenusubmenu']
                // 'id_utilizador' => 0
            );

          	$id_MenuSubmenu = $this->Permissao->getIdMenuSubmenu($testeObect[$i]['menus1'],$testeObect[$i]['submenus'],$testeObect[$i]['submenusubmenu']);
          	// $id_MenuSubmenu = $this->Permissao->getIdMenuSubmenu($testeObect2);
						//
            $testeObect1 = array(
              'id_role' => $testeObect[$i]['role'],
              'id_menuSubmenu' => $id_MenuSubmenu
            );
						//
            $result = $this->Permissao->GravarPermissoes($testeObect1);

    }

    if ($result == 1) {
      echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Permissoes Adicionadas com sucesso. </h6></div>';
    }else{
      echo "insucesso";
    }

  }

  public function getSubsubMenu(){
    echo json_encode($this->permissao->getSubsubMenu($this->input->get('idmenu')));
  }


  public function verificaChecks(){
    echo json_encode($this->permissao->verificaChecks($this->input->get('idmenu')));
  }

  public function saveGrants(){
    //print_r($this->input->post('permissoes'));die;
    $cont=0;
    $k=$this->input->post('permissoes');
    foreach($k as $data){
      $this->permissao->saveGrants($data,$this->input->post('id_role'));
      $cont++;
    }

    echo ($cont==count($k))? "1": "0";

    }
  }
?>
