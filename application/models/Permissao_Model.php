<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Permissao_Model extends CI_Model
{

	public function GravarMenuSubmenu($dados=array()){

		$dados = [
			'fk_menu' => $dados["id_menu"],
			'fk_submenu' => $dados["id_sub_menu"]
		];

		$this->db->insert('menu_submenu',$dados);
		return $this->db->insert_id();

		// $query = $this->db->query("INSERT INTO menu_submenu.id from menu_sub_menu WHERE id_menu ='$id_menu' AND id_sub_menu=".$id_sub_menu)->row();
		// return $query->id;

    }

	public function GravarPermissoes($dados=array()){
			if($dados == null) return 0;
			if ($this->db->insert('acesso_utilizador', $dados)) {
				return 1;
			}else{
				return 2;
			}

	}

	public function removerPermissao($id_menuSubmenu = null){

		if($this->db->query("DELETE FROM acesso_utilizador WHERE id_menuSubmenu=".$id_menuSubmenu)){
			return 1;
		}else{
			return 2;
		}

	}

	public function getIdMenuSubmenu($id_menu, $id_submenu, $id_submenu_submenu3){

		$query = $this->db->query("select id_menu_submenu from menu_submenu where fk_menu=".$id_menu." and fk_submenu=".$id_submenu." and id_submenu_submenu3=".$id_submenu_submenu3)->result();

			if(count($query) != 0){
				return $query[0]->id_menu_submenu;
			}else{
				return 2;
			}

	}

	// public function DeletarPermissoes($dados=array()){
	// 		if ($this->db->delete('role_menu_sub_menu', array('id_role' => $dados['id_role'],'id_menu_sub_menu'=>$dados['id_menu_sub_menu']))) {
	// 			return 1;
	// 		}else{
	// 			return 2;
	// 		}
	// }

	// public function DeletarPermissoes12($id=null){
	// 	    $this->db->where('id_menu_sub_menu', $id);
	// 		if ($this->db->delete('role_menu_sub_menu')) {
	// 			return 1;
	// 		}else{
	// 			return 2;
	// 		}
	// }

	public function DeletarMenuSubmenu($dados = array()){

			$fk_menu = $dados["id_menu"];
			$fk_submenu = $dados["id_sub_menu"];

			if($this->db->query("DELETE FROM menu_submenu WHERE fk_menu ='$fk_menu' AND fk_submenu=".$fk_submenu)){
				return 1;
			}else{
				return 2;
			}


	}

	public function pegarIDmenu_submenu($dados = array())
	{

		$fk_menu = $dados["id_menu"];
		$fk_submenu = $dados["id_sub_menu"];

		$query = $this->db->query("SELECT id_menu_submenu FROM menu_submenu WHERE fk_menu='$fk_menu' AND fk_submenu='$fk_submenu'")->result();
		// foreach($query as $id){
		return $query[0]->id_menu_submenu;
		// }
	}

	public function DeletarRoleMenuSubmenu($dados = array()){

		$id_role_fk = $dados["id_role_fk"];
		$fk_menu_submenu = $dados["fk_menu_submenu"];

		if($this->db->query("DELETE FROM role_menu_submenu WHERE id_role_fk ='$id_role_fk' AND fk_menu_submenu=".$fk_menu_submenu)){
			return 1;
		}else{
			return 2;
		}


    }

	// public function DeletarPermissoes($dados=array()){

	// 	// if($dados == '' || $dados == null){
	// 		$id_role = $dados["id_role"];
	// 		$id_menu_sub_menu_fk = $dados["id_menu_sub_menu_fk"];

	// 		if($this->db->query("DELETE FROM role_menu_sub_menu WHERE id_role ='$id_role' AND id_menu_sub_menu_fk=".$id_menu_sub_menu_fk)){
	// 			return 1;
	// 		}else{
	// 			return 2;
	// 		}
	// 	// }else{
	// 	// 	echo "vazio";
	// 	// }

	// 	var_dump($dados);

	// }

	// public function pegarPermissao($id = null){

	// 	// $query=$this->db->query(
	// 	// 	"SELECT DISTINCT * from menu
	// 	// 	inner join menu_submenu on menu_submenu.fk_menu = menu.id_menu
	// 	// 	inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
	// 	// 	inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
	// 	// 	inner join role on role.id = role_menu_submenu.id_role_fk
	// 	// 	where role.id='$id' AND menu.menusubid is NULL
	// 	// 	ORDER BY menu.ordem"
	// 	// )->result();

	// 	// $query=$this->db->query(
	// 	// 	"SELECT DISTINCT * from menu
	// 	// 	inner join menu_submenu on menu_submenu.fk_menu = menu.id_menu
	// 	// 	inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
	// 	// 	inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
	// 	// 	inner join role on role.id = role_menu_submenu.id_role_fk
	// 	// 	where role.id='$id' AND menu.menusubid is NULL
	// 	// 	ORDER BY menu.ordem"
	// 	// );

	// 	$query=$this->db->query(
	// 		"SELECT DISTINCT * from menu
	// 		inner join menu_submenu on menu_submenu.fk_menu = menu.id_menu
	// 		inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
	// 		inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
	// 		inner join role on role.id = role_menu_submenu.id_role_fk
	// 		INNER join submenu_submenusubmenu on submenu_submenusubmenu.id_submenu=sub_menu.id_submenu
	// 		INNER JOIN submenu_submenu ON submenu_submenu.id_submenu_submenu = submenu_submenusubmenu.id_submenusubmenu
	// 		where role.id='$id' AND menu.menusubid is NULL ORDER BY menu.ordem"
	// 	)->result();

	// 	$data = array();

	// 	// foreach($query->result() as $menu){

	// 	// 	$data["$menu->id_menu"]=array(
	// 	// 		'id_menu' => $menu->id_menu,
	// 	// 		'nome_menu' => $menu->nome_menu,
	// 	// 		"id_submenu" => $menu->id_submenu,
	// 	// 		"id_menu" => $menu->id_menu,
	// 	// 		"nome_sub_menu" => $menu->nome_sub_menu,
	// 	// 		"controlador" => $menu->controlador,
	// 	// 		"accao" => $menu->accao,
	// 	// 		"tipo" => $menu->tipo,
	// 	// 		"modal" => $menu->modal,
	// 	// 		"camada3s" => array()
	// 	// 	);

	// 	// 		$camada3s = $this->db->query("
	// 	// 			SELECT * FROM submenu_submenusubmenu
	// 	// 			INNER JOIN submenu_submenu ON submenu_submenu.id_submenu_submenu = submenu_submenusubmenu.id_submenusubmenu
	// 	// 			WHERE id_submenu=".$menu->id_submenu
	// 	// 		);

	// 	// 		foreach($camada3s->result() as $camada3){
	// 	// 			$data["$menu->id_menu"]["camada3s"]["$camada3->id_submenu_submenusubmenu"] = array(
	// 	// 				"id_submenu_submenusubmenu" => $camada3->id_submenu_submenusubmenu,
	// 	// 				"id_submenu" => $camada3->id_submenu,
	// 	// 				"id_submenusubmenu" => $camada3->id_submenusubmenu,
	// 	// 				"descricao" => $camada3->descricao,
	// 	// 				"accao_camada3" => $camada3->accao_camada3
	// 	// 			);
	// 	// 		}


	// 	// }

	// 	return $query;

	// 	// return $query;
	// }

	public function pegarPermissao($id = null){

		$query=$this->db->query(
			"SELECT DISTINCT * from menu
			inner join menu_submenu on menu_submenu.fk_menu = menu.id_menu
			inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
			inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
			inner join role on role.id = role_menu_submenu.id_role_fk
			where role.id='$id' AND menu.menusubid is NULL
			ORDER BY menu.ordem"
		)->result();


		return $query;

	}

	public function pegarPermissao2($dados = array()){
		$query = $this->db->query('select * from role r, menu m, sub_menu sm, menu_sub_menu ms, role_menu_sub_menu rms WHERE m.id_menu=ms.id_menu and sm.id=ms.id_sub_menu and ms.id=rms.id_menu_sub_menu and r.id=rms.id_role and m.id_menu='.$dados['id_menu'].' and sm.id='.$dados['id_submenu'].' and r.id='.$dados['id_role'])->result();

		return $query;
	}


	public function getSubsubMenu($id=null){
		return $this->db->query('SELECT * FROM submenu_submenu')->result();
	}

	public function verificaChecks($id=null){
		return $this->db->query('SELECT id_submenusubmenu FROM submenu_submenusubmenu WHERE id_submenu=?',array($id))->result();
	}

	public function deleteGrant(){
		return $this->db->query('delete  FROM menu_submenu WHERE id_submenu=?',array($id))->result();
	}

	public function saveGrants($dados=array(),$id_role){

		$dado = [
			'fk_menu' => $dados["idmenu"],
			'fk_submenu' => $dados["idsubmenu"]
		];

		$this->db->insert('menu_submenu',$dado);
		return $this->db->insert_id();

		// $query = $this->db->query("INSERT INTO menu_submenu.id from menu_sub_menu WHERE id_menu ='$id_menu' AND id_sub_menu=".$id_sub_menu)->row();
		// WHERE id_submenusubmenu  NOT IN( SELECT id_submenusubmenu FROM submenu_submenusubmenu WHERE id_submenu=?)
		// return $query->id;

    }

}




?>
