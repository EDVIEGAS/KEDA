<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth
{
	private $ci;

	public function __construct(){
		$this->ci = &get_instance();
	}

	function check_logged($id_menu,$classe,$metodo)
	{
			 /*
			 * Criando uma instância do CodeIgniter para poder acessar
			 * banco de dados, sessionns, models, etc...
			 */
			$this->CI =& get_instance();

			 /*

			 */

					if($id_menu == 0){

						$array = array('nome_menu' => $classe);
						$this->CI->db->where($array);
						$query = $this->CI->db->get('menu');
						$result = $query->result();

						if(count($result) == 0){

							$nome = $this->ci->session->userdata('nome');
					 		$username = $this->ci->session->userdata('username');
					 		$id_role = $this->ci->session->userdata('id_role');


					 		if($nome && $username && $id_role){

					 			   redirect('dashboard');

					 		}else{

					 				redirect('App/index','refresh');

					 		}

						}else{

								$id = $result[0]->id;

						}

						$array = array('id_menu' => $id, 'nome_sub_menu' => $metodo);
						$this->CI->db->where($array);
						$query = $this->CI->db->get('sub_menu');
						$result = $query->result();

						if(count($result) == 0){

							$nome = $this->ci->session->userdata('nome');
					 		$username = $this->ci->session->userdata('username');
					 		$id_role = $this->ci->session->userdata('id_role');


					 		if($nome && $username && $id_role){

					 			   redirect('dashboard');

					 		}else{

					 				redirect('App/index','refresh');

					 		}

						}else{

								$id_submenu = $result[0]->id_submenu;

						}

						$array = array('fk_menu' => $id, 'fk_submenu' => $id_submenu, 'id_submenu_submenu3' => 17);

						$this->CI->db->where($array);
						$query = $this->CI->db->get('menu_submenu');
						$result = $query->result();

					}else{

						 $array = array('nome_sub_menu' => $classe);
						 $this->CI->db->where($array);
						 $query = $this->CI->db->get('sub_menu');
						 $result = $query->result();
						 $id_submenu = $result[0]->id_submenu;

						 $camada3 = $classe . '/' . $metodo;

						 $array = array('controlAcesso' => $camada3);
						 $this->CI->db->where($array);
						 $query = $this->CI->db->get('submenu_submenu3');
						 $result = $query->result();
						 $id_submenu_submenusubmenu = $result[0]->id_submenu_submenusubmenu;

						 // var_dump($id_submenu_submenusubmenu);

						 /**adasdada
						 * Buscando a classe e metodo da tabela sys_metodos
						 */

						 $array = array('fk_menu' => $id_menu, 'fk_submenu' => $id_submenu, 'id_submenu_submenu3' => $id_submenu_submenusubmenu);

						 $this->CI->db->where($array);
						 $query = $this->CI->db->get('menu_submenu');
						 $result = $query->result();

					}
					 // $id = $result[0]->id_menu_submenu;
					 // var_dump($result);

					if(count($result)==0){
					 // Escapa da validacao e mostra o metodo.
					 		return false;

					}else{
					 // Se for privado, verifica o login
					 		$nome = $this->ci->session->userdata('nome');
					 		$username = $this->ci->session->userdata('username');
					 		$id_role = $this->ci->session->userdata('id_role');

					    // $id_role = $this->CI->db->query('SELECT id_role from utilizador where id_usuario ='.$id_usuario)->result();

							$id_menuSubmenu = $result[0]->id_menu_submenu;

					 // Se o usuario estiver logado vai verificar se tem permissao na tabela.
					 		if($nome && $username && $id_role){

								$array = array('id_menuSubmenu' => $id_menuSubmenu, 'id_role' => $id_role);
		            $this->CI->db->where($array);
		            $query2 = $this->CI->db->get('acesso_utilizador');
		            $result2 = $query2->result();
					 // Se não vier nenhum resultado da consulta, manda para página de
					 // usuario sem permissão.
					 			if(count($result2)==0){
					 			    // redirect('dashboard');

										return true;
					 			}else{

					 				return true;

					 			}
					 		}
					 // Se não estiver logado, sera redirecionado para o login.
					 		else{
					 		   redirect('App/index','refresh');
								 // redirect(base_url().'home/login', 'refresh');
					 		}
					 	}

					}

 /**
 * Método auxiliar para autenticar entradas em menu.
 * Não faz parte do plugin como um todo.
 */
 // function check_menu($classe,$metodo){
 // 	$this->CI =& get_instance();
 // 	$sql = "SELECT SQL_CACHE
 // 	count(sys_permissoes.id) as found
 // 	FROM
 // 	sys_permissoes
 // 	INNER JOIN sys_metodos
 // 	ON sys_metodos.id = sys_permissoes.id_metodo
 // 	WHERE id_usuario = '" . $this->ci->session->userdata('id_usuario') . "'
 // 	AND classe = '" . $classe . "'
 // 	AND metodo = '" . $metodo . "'";
 // 	$query = $this->CI->db->query($sql);
 // 	$result = $query->result();
 // 	return $result[0]->found;
 // }
}
