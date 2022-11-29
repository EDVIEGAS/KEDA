<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Crud_model extends CI_Model
{

	function AtualizarUsuario1($id = NULL,$dados = NULL){
		if ($id == NULL) return 0;
			$this->db->where('id_usuario',$id);
		if ($this->db->update('utilizador',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	function getNivelAcademico(){
		$retorno = $this->db->query('select * from nivel_academico')->result();
		return $retorno;
	}

	function verificar_perfil($dados)
	{
		$returno = $this->db->query('SELECT * FROM utilizador WHERE nome = ? AND username = ? and senha = ?',$dados)->result();
		if($returno == null){
			return 2;
		}else{
			return 1;
		}
	}

	function AtualizarAtividade1($id = NULL,$dados = NULL){
		if ($id == NULL) return 0;
			$this->db->where('id_actividade',$id);
		if ($this->db->update('actividade2',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	function insert_actividade($data = NULL)
	{
		if($data == null) return 0;
		if($this->db->insert('actividade2',$data))
		{
			return true;
		}else{
			return false;
		}
	}

	public function updateControlTelaGraduacao($id = null, $dados = null){
		$this->db->where('id_graduacaofederacao', $id);
		$this->db->update('graduacaofederacao', $dados);
	}

	public function updateControlTelaGraduacao2($id = null, $dados = null){
		$this->db->where('id', $id);
		$this->db->update('graduacaofederacao_atual', $dados);
	}

	function insert_graduacao($data = NULL)
	{
		if($data == null) return 0;
		if($this->db->insert('graduacaofederacao',$data))
		{
			$ultimo_id = $this->db->insert_id();
			return $ultimo_id;
		}else{
			return false;
		}
	}

	public function updateGraduacaoAtual($id = null, $dados = null){
		$this->db->where('id', $id);
		$this->db->update('graduacaofederacao_atual', $dados);
	}


	function tipo_graduacao($data = NULL)
	{
		if($data == null) return 0;
		if($this->db->insert('seminariograduacao',$data))
		{
			return true;
		}else{
			return false;
		}
	}

	public function insert_calendario_actividade($data = null){
		if ($data == null) return 0;
		if($this->db->insert('calendario_actividade',$data)){
			return 1;
		}else{
			return 2;
		}
	}

	function getCalendario($id = null)
	{
		$valor = $this->db->query('SELECT * FROM calendario WHERE id_calendario ='.$id)->result();
		return $valor;

	}

	function getCalendario_ano($id = null)
	{
		$valor = $this->db->query('SELECT ano FROM calendario_actividade,calendario WHERE id_calendario_fk = id_calendario and id_actividade_fk ='.$id)->result();
		return $valor;

	}


	function Verificar_Calendario($ano = null)
	{
		if ($this->db->query('SELECT * FROM calendario WHERE ano ='.$ano)->result()) {
			return 1;
		}else{
			return 2;
		}
	}

	function Verificar_Calendario2($ano = null)
	{
		$retorno2 = $this->db->query('SELECT id_calendario FROM calendario WHERE ano ='.$ano)->result();
		return $retorno2[0]->id_calendario;
	}

	function control(){
		$control = $this->db->query('select DISTINCT id_calendario_fk from calendario_actividade')->result();
		return $control;
    }

	function get_calendario_actividade($ano = null, $id = null)
	{
		if($id == null){
			return $this->db->query('select * from actividade2 where ano_calendario ='.$ano.' and id_associacao_pro=0')->result();
		}else{
			return $this->db->query('select * from actividade2 where ano_calendario ='.$ano.' and id_associacao_pro='.$id)->result();
		}

	}

	function getActividade($id = null)
	{
		$resultado = $this->db->query('SELECT * FROM actividade2 WHERE id_actividade='.$id)->result();
		return $resultado;
	}


	function insert_calendario($data = NULL)
	{
		if($data == null) return 0;
		if($this->db->insert('calendario',$data))
		{
			return $this->db->insert_id();
		}else{
			return 0;
		}
	}

	function insert_categoria($data= NULL)
	{
		$this->db->insert('categoria',$data);
	}
	//TRAZ TODAS AS PROVINCIAS DO BANCO DE DADOS---------------------------------------
	function getAllProvincia()
	{
		$this->db->select('*');
		$resultado = $this->db->get("provincia")->result();
		return $resultado;
	}

	function selectProvincia()
	{
		$options = "<option value=''>Selecione a Provinciaaddasdsdas</option>";
		$provincias = $this->getAllProvincia();

		foreach ($provincias as $provincia) {
			$options .= "<option value = '{$provincia->nome_provincia}'>{$provincia->nome_provincia}</option>";
		}
		return $options;
	}

	function getMunicipioById($id = NULL)
	{
		$this->db->where("id_provincia", $id_provincia)
		->order_by('nome_municipio')
		->get('cidade');
	}

	function insert_municipio($dado = NULL)
	{
		$this->db->insert('municipio',$dado);
	}

	function insert_utilizador($dado = NULL)
	{
		if($dado == NULL) return 0;
		if($this->db->insert('utilizador',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function Excluir_usuario($id = NULL){
		if($id != NULL){
			$this->db->where('id_usuario', $id);
			if($this->db->delete('utilizador')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	public function getAllTipoActividade(){
		$query = $this->db->query('SELECT * FROM tipo_actividade')->result();
		return $query;
	}


	function Excluir_role($id = NULL){
		if($id != NULL){
			$this->db->where('id', $id);
			if($this->db->delete('role')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	function AtualizarRole($id = NULL,$dados = NULL){
		if ($id == NULL) return 0;
			$this->db->where('id',$id);
		if ($this->db->update('role',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	function insert_role($dado = NULL)
	{
		if($dado == NULL) return 0;
		if($this->db->insert('role',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function insert_academia($dado = NULL)
	{
		if($dado == NULL) return 0;
		if($this->db->insert('academia',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function AtualizarAcademia($id = NULL,$dados = NULL){
		if ($id == NULL) return 0;
			$this->db->where('id_academia',$id);
		if ($this->db->update('academia',$dados)) {
			return 1;
		}else{
			return 2;
		}
	}

	public function getEstilo_juj(){
		return $this->db->get('estilo_jujitsu')->result();
	}


	public function excluirAcademia($id = NULL){

		if($id != NULL){
			$this->db->where('id_academia', $id);
			if($this->db->delete('academia')):
				return 1;
			else:
				return 2;
			endif;
		}else{
			return 0;
		}
	}

	function excluirActividade($id = null)
	{
		if ($id != null) {
		 $this->db->where('id_actividade',$id);
		 if ($this->db->delete('actividade2')) {
		 	return 1;
		 }else{
		 	return 2;
		 }
		}else{
			return 3;
		}
	}

	function excluirParticipante($id = null)
	{
		if ($id != null) {
			$this->db->where('id_evento_participante',$id);
			if ($this->db->delete('evento_participante')) {
		 		return 1;
			}else{
		 		return 2;
		 	}
		}else{
			return 3;
		}
	}

	function insert_membro_orgao($dado = NULL)
	{
		if($dado == NULL) return 0;
		if($this->db->insert('menbro_orgao',$dado)){
			return 1;
		}else{
			return 2;
		}
	}

	function getRoleUsuario($id = null)
	{
		$resultado = $this->db->query('SELECT id_role from utilizador where id_usuario ='.$id)->result();
		return $resultado;
	}

	function getCargos($id = null)
	{
		$resultado1 = $this->db->query('SELECT distinct nome_cargo,id_cargos from orgao_social,cargos,orgao_cargo where id_cargo=id_cargos and id_orgao='.$id)->result();
		return $resultado1;
	}

    function getMembro($id=NULL,$id1 = NULL){
		$resultado = $this->db->query('SELECT * from orgao_social org
		join menbro_orgao mo on mo.id_orgao_fk=org.id_orgao_social WHERE mo.id_mandato_fk='.$id.' and mo.id_orgao_fk='.$id1)->result();
		return $resultado;
	}

	function getMembroId($id2 = null){
		// $resultado = $this->db->query('SELECT * from menbro_orgao org
		// join menbro_orgao mo on mo.id_orgao_fk=org.id_orgao_social WHERE mo.id_mandato_fk='.$id.' and mo.id_orgao_fk='.$id1.' AND mo.id_membro='.$id2)->result();

		$resultado = $this->db->query('SELECT * FROM menbro_orgao WHERE id_membro='.$id2)->result();
		return $resultado;

	}

	function countOrMembro($id=NULL, $id_mandato=null){
		$resultado = $this->db->query('select count(id_orgao_fk) as quantidade from menbro_orgao where id_orgao_fk='.$id.' and id_mandato_fk='.$id_mandato)->result();
		return $resultado;
	}

	function verificaEntr($id=NULL,$id2=NULL,$id3=NULL){

		$resultado = $this->db->query('select * from menbro_orgao where id_orgao_fk='.$id.' and id_cargo_fk='.$id2.' and id_mandato_fk='.$id3)->result();
		$teste = $resultado;
		if($teste){
			return 1;
		}else{
			return 2;
		}
	}

	function getOrgao($id = null){
		$resultado = $this->db->query('select id_orgao_social, descricao from orgao_social where id_orgao_social='.$id)->result();
		return $resultado;
	}

	public function getMandato()
	{
		$retorno = $this->db->query('SELECT * FROM mandato')->result();
		return $retorno;
	}

	function listar_academia_id($id = null)
	{
		$resultado = $this->db->query('select * from academia
		inner join estilo_jujitsu on estilo_jujitsu.id_estilo = academia.idestilo
		inner join associacao_provincia on associacao_provincia.id_associacao_pro = academia.id_associacao_pro
		WHERE academia.id_associacao_pro='.$id)->result();
		return $resultado;
	}

	function listar_academia()
	{
		$resultado = $this->db->query('select * from academia,estilo_jujitsu WHERE idestilo=id_estilo')->result();
		return $resultado;
	}

	function getAcademiaId($id = NULL)
	{
		$resultado = $this->db->query('select * from academia, estilo_jujitsu where idestilo = id_estilo AND id_academia ='.$id)->result();
		return $resultado;

	}

	function utilizador()
	{
		$resultado = $this->db->query('select * from utilizador uti,role r where uti.id_role=r.id')->result();
		return $resultado;
	}

	function utilizador2($id = null)
	{
		$resultado = $this->db->query('select * from utilizador uti,login_utilizador lu ,role r where uti.id_role=r.id and uti.id_usuario=lu.id_utilizador and lu.id_utilizador='.$id)->result();
		return $resultado;
	}

	function utilizador8($id = null)
	{
		$resultado = $this->db->query('select * from utilizador uti,role r where uti.id_role=r.id and uti.id_usuario='.$id)->result();
		return $resultado;
	}


	function utilizador3($id = null)
	{
		$resultado = $this->db->query('select horaLogin, horaLogout from login_utilizador WHERE id_utilizador='.$id)->result();
		return $resultado;
	}

	function utilizador_role($id = NULL)
	{
		$resultado = $this->db->query('select * from utilizador uti, role r where r.id = uti.id_role and uti.id_usuario='.$id)->result();
		return $resultado;
	}

	function getUtilizador($id = null)
	{
		$resultado = $this->db->query('SELECT * FROM utilizador where id_usuario='.$id)->result();
		return $resultado;
	}

	public function trocarEstado($id = NULL, $dado = null)
	{
    	if ($id == NULL) return 0;
			$this->db->where('id_usuario',$id);
		if ($this->db->update('utilizador',$dado)) {
			return 1;
		}else{
			return 2;
		}
	}

	function role()
	{
		$this->db->select('*');
		$resultado = $this->db->get("role")->result();
		return $resultado;
	}

	public function getRole($id = null){
		$resultado = $this->db->query("SELECT * FROM role WHERE id =".$id)->result();
		return $resultado;
	}

	function classes()
	{
		$this->db->select('*');
		$resultado = $this->db->get("menu")->result();
		return $resultado;
	}

	function listarMenuSubmenuRole()
	{
		$query=$this->db->query(
			"SELECT DISTINCT nome_menu,id,ordem,icone from menu
			 where menu.menusubid is NULL
			 ORDER BY menu.ordem"
		);

		$data = array();

		foreach($query->result() as $menu){

			$data["$menu->id"]=array(
				'id' => $menu->id,
				'nome_menu' => $menu->nome_menu,
				'submenus' => array()
			);

			$submenus = $this->db->query("
			select * from sub_menu
			where id_menu=".$menu->id);

			foreach($submenus->result() as $submenu){

				$data["$menu->id"]["submenus"]["$submenu->id_submenu"] = array(
					"id_submenu" => $submenu->id_submenu,
					"id_menu" => $submenu->id_menu,
					"nome_sub_menu" => $submenu->nome_sub_menu,
					"accao" => $submenu->accao,
					"tipo" => $submenu->tipo,
					"modal" => $submenu->modal,
					"camada3s" => array()
				);

				$camdada3s = $this->db->query("
				SELECT * FROM submenu_submenu3
				inner join menu_submenu on menu_submenu.id_submenu_submenu3 = submenu_submenu3.id_submenu_submenusubmenu
				where menu_submenu.id_submenu_submenu3 <> 17 and menu_submenu.fk_submenu = ".$submenu->id_submenu
				);

				foreach($camdada3s->result() as $camada3){
					$data["$menu->id"]["submenus"]["$submenu->id_submenu"]["camada3s"]["$camada3->id_submenu_submenusubmenu"] = array(
						"id_submenu_submenusubmenu" => $camada3->id_submenu_submenusubmenu,
						"descricao" => $camada3->submenusubmenu,
						"id_submenu" => $camada3->fk_submenu,
						"accao_camada3" => $camada3->accao_camada3
					);
				}

			}
		}

		return $data;

	}

	function metodos()
	{
		$this->db->select('*');
		$resultado = $this->db->get("sub_menu")->result();
		return $resultado;
	}

	function listar_orgao_social2()
	{
		$this->db->select('*');
		$resultado = $this->db->get("orgao_social")->result();
		return $resultado;
	}

	public function listar_orgao_social($id = null)
    {

        $query=$this->db->query(
                "SELECT * FROM orgao_social"
        );

        $data = array();

        foreach($query->result() as $orgao){

            $data["$orgao->id_orgao_social"]=array(
                'id_orgao_social' => $orgao->id_orgao_social,
                // 'id_mandanto_fk' => $orgao->id_mandanto_fk,
                'descricao' => $orgao->descricao,
                'orgao_membros' => array()
            );

            $orgao_membros = $this->db->query("
            select * from menbro_orgao
            where menbro_orgao.id_orgao_fk = $orgao->id_orgao_social and id_mandato_fk = $id");

            foreach($orgao_membros->result() as $membro){

                $data["$orgao->id_orgao_social"]["orgao_membros"]["$membro->id_membro"] = array(
                    "id_membro" => $membro->id_membro,
                    "nome" => $membro->nome,
                    "telefone" => $membro->telefone,
                    "id_cargo_fk" => $membro->id_cargo_fk,
                    "id_orgao_fk" => $membro->id_orgao_fk,
                    "id_mandato_fk" => $membro->id_mandato_fk,
                    "imagem_membro" => $membro->imagem_membro,
										"nome_cargo_membro" => $membro->nome_cargo_membro
                );

            }
        }

        return $data;
    }

	function listar_atividade()
	{
		$this->db->select('*');
		$resultado = $this->db->get("calendario_actividade")->result();
		return $resultado;
	}

	function listar_calendario()
	{
		$this->db->select('*');
		$resultado = $this->db->get("calendario")->result();
		return $resultado;
	}

	function listar_categoria()
	{
		$this->db->select('*');
		$resultado = $this->db->get("categoria")->result();
		return $resultado;
	}

	function get_categoria_atleta()
	{
		$this->db->select('*');
		return $this->db->get('categoria')->result();
	}

	function get_estilo()
	{
		$this->db->select('*');
		return $this->db->get('estilo_jujitsu')->result();
	}
	function get_provincia()
	{
		$this->db->query('select * from provincia order by nome_provincia desc');
		return $this->db->get('provincia')->result();
	}
	function getGraduacao(){
		$this->db->select('*');
		return $this->db->get('graduacao')->result();
	}
}

?>
