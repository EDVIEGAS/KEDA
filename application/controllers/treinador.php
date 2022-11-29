<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'C:\xampp\htdocs\KEDA\vendor\autoload.php';
// require('Qr_code_generate.php');

use Dompdf\Dompdf;
use Dompdf\Options;

    class treinador extends CI_Controller{

        function __construct()
        {
          parent::__construct();
          $this->load->helper('funcoes');

        }

        public function GerarPDFListarTreinador()
      	{

      		$this->load->model('treinador_model','treinador');

      		$dado['Treinador'] = $this->treinador->AllTreinador();

      		$dompdf = new Dompdf();

      		$this->load->library('pdf');

      		ob_start();

      		$this->load->view('pdfs/treinador.php',$dado);

      		$dompdf->loadHtml(ob_get_clean());

      		$dompdf->setPaper('A4');

      		$dompdf->render();
      		$dompdf->stream('Lista dos treinadores.pdf', ["Attachment" => false]);

      	}

        public function novo()
        {

          $this->auth->check_logged(2,$this->router->class , $this->router->method);

          $dados['titulo'] = 'KEDA';
          $this->load->model('Arbitro_Model','Ar');
          $this->load->model('Provincia','Pro');
          $data['categoria'] = $this->Ar->getCategoria();
          $data['provincia'] = $this->Pro->getAllProv();
          $data['escolhe_provincias'] = $this->Pro->selectProvincia();
          $data['subcategoria'] = $this->Ar->getSubCategoria();
          $data['escolhe_categoria'] = $this->Ar->selectCategoria();
          $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

          $descricao = $this->session->userdata('nome');
          $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

          if($query != NULL){
            $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
          }else{
            $data['id_associacao_pro'] = '';
          }


          if ($this->session->userdata('valida')):

            $this->template->load('template','formularios/form_treinador',$data);

          endif;
        }

        public function setTreinador(){

          $this->load->model('treinador_model','treinador');

          $dado = [
            'id_mestre' => $this->input->post('id_mestre'),
            'categoriaTreinador' => $this->input->post('categoriatreinador'),
            'data_inscricao' => Date('Y-m-d'),
            'data_validade' => Date('Y')+2,
            'statu_treinador' => 'Activo'
          ];

          if($this->input->post('categoriatreinador') == '0'){

            $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h7 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O Atleta foi eliminado.</a></h7></div>');
            redirect('novo_treinador');

          }

          $retorno = $this->treinador->addTreinador($dado);

        }



        public function listar()
        {

          // $this->auth->check_logged(2,$this->router->class , $this->router->method);

          $dados['titulo'] = 'KEDA';
          $this->load->model('treinador_model','treinador');
          //$dados['atletas'] = $this->Atleta->getAll();
          //$ctrl1 = $this->Atleta->excluirAtleta();

          if($this->session->userdata('role') == 'Associacao'){

            $descricao = $this->session->userdata('nome');
            $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

            $dados['treinador'] = $this->treinador->AllTreinador();

          }else{
            $dados['treinador'] = $this->treinador->AllTreinador();
          }

          $dados['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

          if ($this->session->userdata('valida')){
            $this->template->load('template','listar/listar_treinador',$dados);
          }else{
            redirect('App/index');
          }
        }


        public function geTALLtreinador(){

          $this->load->model('treinador_model','treinador');

          $retorno = $this->treinador->AllTreinador();

          $retorno2 = json_encode($retorno);

          echo $retorno2;

        }

        public function GetTreinadorNivel(){

          $this->load->model('treinador_model','treinador');

          $retorno = $this->treinador->GetTreinadorNivel($this->input->post('nivelTreinador'));

          $retorno2 = json_encode($retorno);

          echo $retorno2;

        }


    }

?>
