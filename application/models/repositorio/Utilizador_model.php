<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: elviosadoc
 * Date: 23/04/18
 * Time: 17:29
 */
class Utilizador_model extends CI_Model
{

    public function store(\Entity\User $utilizador)
    {
        if ($utilizador->getUser()!=null || $utilizador->getSenha()!="")
        {
            /*$this->doctrine->em->persist($utilizador);
            $this->doctrine->em->flush();*/
            $this->db->insert('user_teste',$utilizador);
            return $utilizador->getId();
        }
        return 0;
    }

    public function login($dados=array())
    {
        if($dados!=null)
        {
            $this->db->where('user', $dados['user']);
            $this->db->where('senha', $dados['senha']);
            $result=$this->db->get('user_teste');
            if( $result->num_rows()>0)
            {
                return $result->result();
            }else
            {
                return false;
            }
        }
    }

    public function listar_id_prov($id_user)
    {
        return @$this->db->query('select p.id, r.id as id_repart from utilizador_reparticao ur, reparticao r, provincia p WHERE r.id_provincia=p.id and r.id=ur.id_reparticao and ur.id_utilizador_func='.$id_user)->result()[0];
    }
    
    public function listar()
    {
        return $this->db->get('user_teste')->result();
    }

    public function retorna_role($id_user)
    {
        return $this->db->query('select r.nome,r.sigla from role r, user_teste ut where r.id=ut.id_role and ut.id='.$id_user)->result()[0];
    }


    public function seccao($id_user)
    {
        return "Dhulka - Sistema de Gestão de Terras <span class='text-capitalize'>[&nbsp;".$this->retorna_role($id_user)->nome.   "&nbsp;]</span>";
    }

    public function seccao_1($id_user)
    {
        return $this->retorna_role($id_user)->nome;
    }

    public function listar_utilizadores()
    {
        return $this->db->query('select c.*, p.nome as pais, f.estado_civil, f.genero, ct.telefone1, cm.nome as comuna, b.nome as bairro from cidadao c, pais p, fisica f, contacto ct,comuna cm,morada m, conta c2, bairro b  where c.id_pais=p.id and c.id=f.id_cidadao and b.id=m.bairro and c.id=ct.id_cidadao and (c.id=m.id_cidadao and cm.id=m.id_comuna and (c.id=c2.id_cidadao))')->result();
    }

    public function get_tecnico($sigla)
    {
        return $this->db->query('select c.nome, ut.id from cidadao c, user_teste ut, role r where c.id=ut.id_cidadao and ut.id_role=r.id and r.sigla=?',array($sigla))->result();
    }

    public function dados_user($id)
    {
        return $this->db->query("select c.*, p.nome as pais, ut.fotografia as foto from cidadao c, pais p, user_teste ut where ut.id_cidadao=c.id AND c.id_pais=p.id and c.id=".$id)->result();
    }
    public function controla_add_conta($id_user)
    {
        $r=0;
            $r=$this->db->query("select *from user_teste where id_cidadao=".$id_user)->result();
        return count($r);

        return $r;
    }

    public function control_cred($id_user)
    {
        $r=0;
        $r=$this->db->query("select *from conta where control_cred=0 and id_cidadao=".$id_user)->result();
        return count($r);

        return $r;
    }

    public function control_senha($id_user,$senha)
    {
        $this->db->where('id_cidadao', $id_user);
        $this->db->where('senha', $senha);
        $result=$this->db->get('user_teste');
        return $result->num_rows();
    }

    public function nome_user($id_user)
    {
        return $this->db->query("select nome from cidadao where  id=".$id_user)->result()[0];
    }

    public function alterar_senha($id,$dados=array())
    {
        $this->db->where('id_cidadao', $id);
        if($this->db->update('user_teste', $dados)) {
            $update=array('control_cred'=>1);
            $this->db->where('id_cidadao', $id);
            $this->db->update('conta', $update);
            return 1;
        }else
            return 0;
    }

    public function alterar_foto($id,$dados=array())
    {
        $this->db->where('id', $id);
        if ($this->db->update('user_teste', $dados))
            return 1;
        else
            return 0;
    }
    
}//fim da class