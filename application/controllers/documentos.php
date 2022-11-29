<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class Documentos extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
  }
  
  public function gravarFoto(){

    $this->load->model('documentos_Model','doc');

    $dados = $this->input->post('descricaoDocumento');

    $config['upload_path']    = './uploads/documento/';
    $config['allowed_types']  = 'pdf|doc';
    // $config['max_size']       = 2048;
    $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
    $this->load->library('upload',$config);

    if(@$_FILES['fileDocument']['name'] != null){
      if (!$this->upload->do_upload('fileDocument')) {
        echo $this->upload->display_errors();
      }else{
       $data = $this->upload->data();


       echo $data['file_name'];

       $dados = [
        "descricao" => $data['file_name'],
        "nomeDocumento" => $dados,
        "status" => true
       ];

       $retorno = $this->doc->insertDocumento($dados);

       echo $retorno;

      }
    }else{
     
    }
  }

  public function gravarFotoMestre(){

    $this->load->model('documentos_Model','doc');

    $dados = $this->input->post('idMestre');
    $id_mestre = $this->input->post('idMestre');

    $config['upload_path']    = './uploads/documento/';
    $config['allowed_types']  = 'pdf|doc';
    // $config['max_size']       = 2048;
    $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
    $this->load->library('upload',$config);

    if(@$_FILES['fileDocument']['name'] != null){
      if (!$this->upload->do_upload('fileDocument')) {
        echo $this->upload->display_errors();
      }else{
       $data = $this->upload->data();

       $dados = [
        "descricao_documento" => $data['file_name']
       ];

       $retorno = $this->doc->insertDocumentoMestre($id_mestre,$dados);

      //  if($retorno == 1){
        echo json_encode($this->doc->selectDocumentoMestre($id_mestre));
      //  }

      }

    }else{
     
    }
  }

  public function getAllDocumento(){

    $this->load->model('documentos_Model','doc');

    $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));


    $Documentos = $this->doc->selectAllDocument();

    echo json_encode($Documentos);

  }

  public function getDocumentoById(){

    $this->load->model('documentos_Model','doc');

  // $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    $id = $this->input->post('idDocumento');

    $Documentos = $this->doc->selectDocumentById($id);

    echo json_encode($Documentos);

  }

  public function deleteDocumentoById(){

    $this->load->model('documentos_Model','doc');

  // $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    $id = $this->input->post('id');

    $Documentos = $this->doc->deleteDocumentoById($id);

    echo json_encode($Documentos);

  }

  public function updateDocumentStatus(){

    $this->load->model('documentos_Model','doc');

  // $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
    $id = $this->input->post('id');
    $status = $this->input->post('status');

    $dados = [
      "status" => $status
    ];

    $Documentos = $this->doc->updateDocumentStatus($id, $dados);

    echo json_encode($Documentos);

  }


}

?>
