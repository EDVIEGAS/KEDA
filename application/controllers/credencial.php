<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class credencial extends CI_Controller{

    public function view($page = 'home'){
      if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
          show_404();
      }

      $data['title'] = ucfirst($page);

      $this->load->view('templates/header.php');
      $this->load->view('pages/'.$page, $data);
      $this->load->view('templates/footer.php');

    }

   public function gerar(){

        $this->load->model('campeonato_model');

        $id_campeonato = $this->input->post('id_campeonato');
        // $idAssociacao = $this->input->post('id_associacao_pro2');

        $participantes = $this->campeonato_model->setAllParticipante($id_campeonato);

        $retorno = json_encode($participantes);

        echo ($retorno);

   }

   public function gerarFromBilhete(){

        $this->load->model('campeonato_model');

        $id_campeonato = $this->input->post('id_campeonato');
        $Bilhete = $this->input->post('Bilhete');
        // $idAssociacao = $this->input->post('id_associacao_pro2');

        $participantes = $this->campeonato_model->setAllParticipanteByBilhete($id_campeonato, $Bilhete);

        $retorno = json_encode($participantes);

        echo ($retorno);

   }
}
