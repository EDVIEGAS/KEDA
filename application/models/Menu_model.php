<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 17/04/18
 * Time: 22:56
 */
class Menu_model extends CI_Model
{

    public function store(\Entity\Menu $menu)
    {
        /*$this->doctrine->em->persist($menu);
        $this->doctrine->em->flush();*/
        $this->db->insert('menu',$menu);
    }

    public function obterMenus($nomePerfil)
    {

       if($nomePerfil == ""){

        $query=$this->db->query(
                "SELECT DISTINCT mn.nome_menu,mn.id,mn.ordem,mn.icone from menu mn
                inner join menu_submenu on menu_submenu.fk_menu = mn.id
                -- inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
                -- inner join role on role.id = role_menu_submenu.id_role_fk
                inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
                where acesso_utilizador.id_role =".$this->session->userdata('id_role')." order by mn.ordem"
        );

      }else{

        $query=$this->db->query(
                "SELECT DISTINCT mn.nome_menu,mn.id,mn.ordem,mn.icone from menu mn
                inner join menu_submenu on menu_submenu.fk_menu = mn.id
                -- inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
                -- inner join role on role.id = role_menu_submenu.id_role_fk
                inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
                where acesso_utilizador.id_role =".$nomePerfil." order by mn.ordem"
        );

      }

        $data = array();

        foreach($query->result() as $menu){

            $data["$menu->id"]=array(
                // 'id_menu' => $menu->id_menu,
                'id' => $menu->id,
                'nome_menu' => $menu->nome_menu,
                // 'controlador' => $menu->controlador,
                // 'accao' => $menu->accao,
                'icone' => $menu->icone,
                'ordem' => $menu->ordem,
                'submenus' => array()
            );

            $submenus = $this->db->query("
            SELECT * FROM `menu_submenu`
            inner join menu on menu.id = menu_submenu.fk_menu
            inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
            inner join submenu_submenu3 on submenu_submenu3.id_submenu_submenusubmenu = menu_submenu.id_submenu_submenu3
            inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
            where menu.id = ".$menu->id." and sub_menu.accao <> '' and acesso_utilizador.id_role =".$this->session->userdata('id_role'));

            foreach($submenus->result() as $submenu){


                $data["$menu->id"]["submenus"]["$submenu->id_submenu"] = array(
                    "id_submenu" => $submenu->id_submenu,
                    "id_menu" => $submenu->id_menu,
                    "nome_sub_menu" => $submenu->nome_sub_menu,
                    // "controlador" => $submenu->controlador,
                    "accao" => $submenu->accao,
                    "tipo" => $submenu->tipo,
                    "modal" => $submenu->modal,
                    "submenusubmenus" => array()
                );

                $submenusubmenus = $this->db->query("SELECT * FROM submenu_submenu3
                inner join menu_submenu on menu_submenu.id_submenu_submenu3 = submenu_submenu3.id_submenu_submenusubmenu
                inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
                where menu_submenu.id_submenu_submenu3 <> 17 and menu_submenu.fk_submenu = ".$submenu->id_submenu)->result();

                foreach ($submenusubmenus as $submenusubmenu) {

                  $data["$menu->id"]["submenus"]["$submenu->id_submenu"]["submenusubmenus"]["$submenusubmenu->id_submenu_submenusubmenu"] = array(
                      "id_submenu_submenusubmenu" => $submenusubmenu->id_submenu_submenusubmenu,
                      "submenusubmenu" => $submenusubmenu->submenusubmenu,
                      "accao_camada3" => $submenusubmenu->accao_camada3
                  );

                }

            }
        }

        return $data;
    }

    public function obterMenusAcessoRole($nomePerfil)
    {

        $query=$this->db->query(
                "SELECT DISTINCT mn.nome_menu,mn.id,mn.ordem,mn.icone from menu mn
                inner join menu_submenu on menu_submenu.fk_menu = mn.id
                -- inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
                -- inner join role on role.id = role_menu_submenu.id_role_fk
                inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
                where acesso_utilizador.id_role =".$nomePerfil." order by mn.ordem"
        );

        $data = array();

        foreach($query->result() as $menu){

            $data["$menu->id"]=array(
                // 'id_menu' => $menu->id_menu,
                'id' => $menu->id,
                'nome_menu' => $menu->nome_menu,
                // 'controlador' => $menu->controlador,
                // 'accao' => $menu->accao,
                'icone' => $menu->icone,
                'ordem' => $menu->ordem,
                'submenus' => array()
            );

            $submenus = $this->db->query("
            SELECT * FROM `menu_submenu`
            inner join menu on menu.id = menu_submenu.fk_menu
            inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
            inner join submenu_submenu3 on submenu_submenu3.id_submenu_submenusubmenu = menu_submenu.id_submenu_submenu3
            inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
            where menu.id = ".$menu->id." and acesso_utilizador.id_role =".$nomePerfil);

            foreach($submenus->result() as $submenu){


                $data["$menu->id"]["submenus"]["$submenu->id_submenu"] = array(
                    "id_submenu" => $submenu->id_submenu,
                    "id_menu" => $submenu->id_menu,
                    "nome_sub_menu" => $submenu->nome_sub_menu,
                    // "controlador" => $submenu->controlador,
                    "accao" => $submenu->accao,
                    "tipo" => $submenu->tipo,
                    "modal" => $submenu->modal,
                    "submenusubmenus" => array()
                );

                $submenusubmenus = $this->db->query("SELECT * FROM submenu_submenu3
                inner join menu_submenu on menu_submenu.id_submenu_submenu3 = submenu_submenu3.id_submenu_submenusubmenu
                inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
                where menu_submenu.id_submenu_submenu3 <> 17 and menu_submenu.fk_submenu = ".$submenu->id_submenu)->result();

                foreach ($submenusubmenus as $submenusubmenu) {

                  $data["$menu->id"]["submenus"]["$submenu->id_submenu"]["submenusubmenus"]["$submenusubmenu->id_submenu_submenusubmenu"] = array(
                      "id_submenu_submenusubmenu" => $submenusubmenu->id_submenu_submenusubmenu,
                      "submenusubmenu" => $submenusubmenu->submenusubmenu,
                      "accao_camada3" => $submenusubmenu->accao_camada3
                  );

                }

            }
        }

        return $data;
    }

    public function obterMenus1($id)
    {
      $query=$this->db->query(
              "SELECT DISTINCT mn.nome_menu,mn.id,mn.ordem,mn.icone from menu mn
              inner join menu_submenu on menu_submenu.fk_menu = mn.id
              -- inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
              -- inner join role on role.id = role_menu_submenu.id_role_fk
              inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
              where acesso_utilizador.id_role =".$id." order by mn.ordem"
      );

      $data = array();

      foreach($query->result() as $menu){

          $data["$menu->id"]=array(
              // 'id_menu' => $menu->id_menu,
              'id' => $menu->id,
              'nome_menu' => $menu->nome_menu,
              // 'controlador' => $menu->controlador,
              // 'accao' => $menu->accao,
              'icone' => $menu->icone,
              'ordem' => $menu->ordem,
              'submenus' => array()
          );

          $submenus = $this->db->query("
          SELECT * FROM `menu_submenu`
          inner join menu on menu.id = menu_submenu.fk_menu
          inner join sub_menu on sub_menu.id_submenu = menu_submenu.fk_submenu
          inner join submenu_submenu3 on submenu_submenu3.id_submenu_submenusubmenu = menu_submenu.id_submenu_submenu3
          inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
          where menu.id = ".$menu->id." and acesso_utilizador.id_role =".$id);

          foreach($submenus->result() as $submenu){


              $data["$menu->id"]["submenus"]["$submenu->id_submenu"] = array(
                  "id_submenu" => $submenu->id_submenu,
                  "id_menu" => $submenu->id_menu,
                  "nome_sub_menu" => $submenu->nome_sub_menu,
                  // "controlador" => $submenu->controlador,
                  "accao" => $submenu->accao,
                  "tipo" => $submenu->tipo,
                  "modal" => $submenu->modal,
                  "submenusubmenus" => array()
              );

              $submenusubmenus = $this->db->query("SELECT * FROM submenu_submenu3
              inner join menu_submenu on menu_submenu.id_submenu_submenu3 = submenu_submenu3.id_submenu_submenusubmenu
              inner join acesso_utilizador on acesso_utilizador.id_menuSubmenu = menu_submenu.id_menu_submenu
              where menu_submenu.fk_submenu = ".$submenu->id_submenu)->result();

              foreach ($submenusubmenus as $submenusubmenu) {

                $data["$menu->id"]["submenus"]["$submenu->id_submenu"]["submenusubmenus"]["$submenusubmenu->id_submenu_submenusubmenu"] = array(
                    "id_submenu_submenusubmenu" => $submenusubmenu->id_submenu_submenusubmenu,
                    "submenusubmenu" => $submenusubmenu->submenusubmenu,
                    "accao_camada3" => $submenusubmenu->accao_camada3
                );

              }

          }
      }

      return $data;
    }

    public function listarMenus(){
        $query = $this->db->query("SELECT * FROM menu");
        return $query->result();
    }

    public function pegarIdRotaSubmenu($role, $submenu){
        $query = $this->db->query("SELECT ssm.id_subsubmenu, ssm.descricao, ssm.accao, ssm.controller FROM role r, sub_submenu ssm, sub_menu sm, role_subsubmenu rss WHERE r.id = rss.id_role AND ssm.id_subsubmenu = rss.id_submenu AND ssm.id_submenu = sm.id_submenu AND r.id = ? AND sm.id_submenu = ? ", array($role, $submenu))->result();
        return $query;
    }

    public function pegarIdRotaSubmenu2($submenu){
        $query = $this->db->query("SELECT descricao, accao_camada3 FROM submenu_submenu
        INNER JOIN submenu_submenusubmenu ON submenu_submenusubmenu.id_submenusubmenu = submenu_submenu.id_submenu_submenu
        INNER JOIN sub_menu ON sub_menu.id_submenu = submenu_submenusubmenu.id_submenu
        WHERE sub_menu.id_submenu =".$submenu)->result();
        return $query;
    }
}
