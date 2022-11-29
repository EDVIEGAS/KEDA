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
     
        $query=$this->db->query(
                "SELECT DISTINCT nome_menu,id_menu,id,ordem,icone from menu 
                inner join menu_submenu on menu_submenu.fk_menu = menu.id_menu
                inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
                inner join role on role.id = role_menu_submenu.id_role_fk
                where role.nome_role ='$nomePerfil' AND menu.menusubid is NULL
                ORDER BY menu.ordem"
        );
        
        $data = array();

        foreach($query->result() as $menu){

            $data["$menu->id_menu"]=array(
                'id_menu' => $menu->id_menu,
                'id' => $menu->id,
                'nome_menu' => $menu->nome_menu,
                // 'controlador' => $menu->controlador,
                // 'accao' => $menu->accao,
                'icone' => $menu->icone,
                'ordem' => $menu->ordem,
                'submenus' => array()
            );

            $submenus = $this->db->query("
            select * from sub_menu
            inner join menu_submenu on menu_submenu.fk_submenu = sub_menu.id_submenu
            inner join role_menu_submenu on role_menu_submenu.fk_menu_submenu = menu_submenu.id_menu_submenu
            inner join role on role.id = role_menu_submenu.id_role_fk
            inner join menu on menu_submenu.fk_menu = menu.id_menu
            where menu.id_menu = $menu->id_menu");

            foreach($submenus->result() as $submenu){

                
                $data["$menu->id_menu"]["submenus"]["$submenu->id_submenu"] = array(
                    "id_submenu" => $submenu->id_submenu,
                    "id_menu" => $submenu->id_menu,
                    "nome_sub_menu" => $submenu->nome_sub_menu,
                    "controlador" => $submenu->controlador,
                    "accao" => $submenu->accao,
                    "tipo" => $submenu->tipo,
                    "modal" => $submenu->modal
                    // "submenusubmenus" => array()
                );

            }
        }

        return $data;
    }

    public function listarMenus(){
        $query = $this->db->query("SELECT * FROM menu");
        return $query->result();
    }
}