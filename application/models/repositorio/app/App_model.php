<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 18/04/18
 * Time: 09:42
 */
class App_model extends CI_Model
{


    public function store_menu($menu=null)
    {
        if ($menu!=null){
            /*$this->doctrine->em->persist($menu);
            $this->doctrine->em->flush();*/
            $this->db->insert('menu',$menu);
            return $this->db->insert_id();
        }else{
            return 0;
        }
    }

    public function store_sub_menu($k=null)
    {
        if ($k!=null) {
            /*$this->doctrine->em->persist($k);
            $this->doctrine->em->flush();*/
            $this->db->insert('sub_menu',$k);
            //return $k->getId();
            $this->db->insert_id();
        }else{
            return 0;
        }
    }

    public function listar_grupo()
    {
        return $this->db->query('select *from role order BY nome ASC')->result();
    }

    public function listar_menu()
    {
        return $this->db->query('select *from menu order by nome asc')->result();
    }
    public function listar_sub_menu($id=null)
    {
        if($id!=null)
            return $this->db->query('select sm.* from sub_menu sm where sm.id NOT IN (select sm.id from menu m, sub_menu sm, menu_sub_menu msm where m.id=msm.id_menu and sm.id=msm.id_sub_menu and m.id='.$id.')')->result();
        return null;
    }

    public function add_sub_menu_menu($msm=null)
    {
        if($msm!=null)
        {
            /*$this->doctrine->em->persist($msm);
            $this->doctrine->em->flush();*/
            $this->db->insert('menu_sub_menu',$msm);
            return $this->db->insert_id();
            //return $msm->getIdMenu();
        }else{
            return 0;
        }


    }

    public function add_sub_menu_menu2($dados=array())
    {
        if($dados!=null)
        {
            if ($this->db->insert('menu_sub_menu', $dados))
                return 1;
            else
                return 0;
        }
    }
    public function nome_menu($id=null)
    {
        if($id!=null)
            return $this->db->query('select nome from menu where id=? ',array($id))->result();
        return null;
    }

    public function nome_grupo($id=null)
    {
        if($id!=null)
            return $this->db->query('select nome from role where id= '.$id)->result()[0];
        return null;
    }



    public function get_sub_menu_by_id_menu($id_menu=null,$role)
    {
        if($id_menu!=null && $role!=null)
            return $this->db->query('select  sm.*, msm.id as id_msm FROM menu m, sub_menu sm, menu_sub_menu msm  where m.id=msm.id_menu and sm.id=msm.id_sub_menu and m.id='.$id_menu.' and sm.id not in (select sm.id from menu m, sub_menu sm, menu_sub_menu msm, role r, role_menu_sub_menu rmsm where m.id=msm.id_menu and r.id=rmsm.id_role and msm.id= rmsm.id_menu_sub_menu and sm.id=msm.id_sub_menu and m.id='.$id_menu.'  and r.id='.$role.' order by sm.nome asc) order by sm.nome')->result();
        return null;
    }

    public function get_sub_menu_by_id_menu4($id_menu=null,$role)
    {
        if($id_menu!=null && $role!=null)
            return $this->db->query('select  sm.*, msm.id as id_msm FROM menu m, sub_menu sm, menu_sub_menu msm  where m.id=msm.id_menu and sm.id=msm.id_sub_menu and m.id='.$id_menu.' and sm.id in (select sm.id from menu m, sub_menu sm, menu_sub_menu msm, role r, role_menu_sub_menu rmsm where m.id=msm.id_menu and r.id=rmsm.id_role and msm.id= rmsm.id_menu_sub_menu and sm.id=msm.id_sub_menu and m.id='.$id_menu.'  and r.id='.$role.' order by sm.nome asc) order by sm.nome')->result();
        return null;
    }

    public function listar_menu_role()
    {

        return $this->db->query('select m.* from menu m, sub_menu sm, menu_sub_menu msm where m.id=msm.id_menu and sm.id=msm.id_sub_menu GROUP BY m.id ORDER BY m.nome ASC ')->result();

    }

    public function add_privilegio_store($dados=array())
    {
        if($dados!=null)
        {
            if ($this->db->insert('role_menu_sub_menu', $dados))
                return 1;
            else
                return 0;
        }
    }

    public function control_acesso($controlller,$action, $role)
    {
        $r=0;
        if($controlller!=null && $action!=null) {
            $r = $this->db->query("SELECT rmsm.id FROM role_menu_sub_menu rmsm WHERE rmsm.id_menu_sub_menu=(select msm.id from menu_sub_menu msm WHERE controlador='$controlller' and accao='$action') and rmsm.id_role='$role'")->result();
            return count($r);
        }else
            return $r;

    }

//    public function get_menu($id_role=null)
//    {select msm.id from menu_sub_menu msm WHERE controlador='processo' and accao='novo'

//        if($id_role!=null)
//            return $this->db->query('select msm.controlador, msm.accao, sm.nome, m.nome as nome_menu from menu m, sub_menu sm, menu_sub_menu msm, role r, role_menu_sub_menu rmsm where m.id=msm.id_menu and r.id=rmsm.id_role and msm.id= rmsm.id_menu_sub_menu and sm.id=msm.id_sub_menu  and r.id='.$id_role.' order by sm.nome')->result();
//        return null;
//    }

    public function listar_menu_role_dash()
    {

        return $this->db->query('select m.* from menu m, sub_menu sm, menu_sub_menu msm where m.id=msm.id_menu and sm.id=msm.id_sub_menu GROUP BY m.id ORDER BY m.nome ASC')->result();

    }

    public function get_menu($id_menu=null,$role)
    {
        if($id_menu!=null)
            return $this->db->query('select  sm.*, msm.* FROM menu m, sub_menu sm, menu_sub_menu msm  where m.id=msm.id_menu and sm.id=msm.id_sub_menu and m.id='.$id_menu.' and sm.id in (select sm.id from menu m, sub_menu sm, menu_sub_menu msm, role r, role_menu_sub_menu rmsm where m.id=msm.id_menu and r.id=rmsm.id_role and msm.id= rmsm.id_menu_sub_menu and sm.id=msm.id_sub_menu and m.id='.$id_menu.'  and r.id='.$role.' order by sm.nome asc) order by sm.nome')->result();
        return null;
    }

    public function listar_tipo_instituicao()
    {
        return $this->db->get('tipo_instituicao')->result();
    }

    public function delete_privilegio($dados=array())
    {
        if($this->db->delete('role_menu_sub_menu', array('id_role' => $dados['id_role'],'id_menu_sub_menu'=>$dados['id_menu_sub_menu'])))
            return 1;
        else
            return 0;

    }

public function list_user()
{
    return $this->db->get('user_teste')->result();
}
}