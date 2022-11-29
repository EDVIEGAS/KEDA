<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class Campeonato extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
    $this->load->helper('funcoes');

  }

  public function atletaPDF(){
    // $retorno = $this->trazeTodos();
     $this->load->model('Atleta_Model','Atleta');

    $dado['atletas'] = $this->Atleta->getAllAtleta();

    return $this->load->view('pdfs/listaParticipante', $dado);

  }

  public function GerarPDF()
  {
 
    $teste = $this->atletaPDF();
    $this->load->library('pdf');

    ob_start();

    $html = file_get_contents($teste);

    // $this->dompdf->set_base_path('http://localhost/KEDA/assets');
    // $this->load->view('pdfs/listaParticipante.php');

    $this->dompdf->loadHtml($html);

    $this->dompdf->setPaper('A4','portrait');

    $this->dompdf->render();

    $this->dompdf->stream(array("Attachment" => 0));

  }

  public function relatorioPDF(){
    // $retorno = $this->trazeTodos();
    $this->load->model('campeonato_model','campeonato');

    $dado['relatorioUm'] = $this->campeonato->layoutClassificacaoProvinciaFinal(1);
    var_dump($dado['relatorioUm']);

    return $this->load->view('pdfs/relatorioCampionato', $dado);

  }

public function organizarCategoria(){
  
  $categoria = array();

  $this->load->model('campeonato_model','campeonato');

  $retorno = $this->campeonato->getCampeonatoCategoriaParti3(1);
  

        for($i = 0 ; $i < count($retorno) - 1 ; $i++){

            if(($i+1) != count($retorno) - 2){
               array_push($categoria, $retorno[$i]->descricao_categoriaPeso . ', ');
            }else{
              array_push($categoria, $retorno[$i]->descricao_categoriaPeso . ' e ');
            }
        }

        // for($i = 0;count($categoria);$i++){
        //   return $categoria[$i];
        // }
        return $categoria;
}



  public function gerarRelatorioCampeonato()
  {
   
    $this->load->model('campeonato_model','campeonato');

    $dado['retornoRelatorio'] = $this->campeonato->layoutClassificacaoFinal(1);
    $dado['relatorioProvincia'] = $this->campeonato->layoutClassificacaoProvinciaFinal(1);
    $dado['nome_secretarioGeral'] = $this->campeonato->pegarSecretarioGeral();
    $dado['categorias'] = $this->organizarCategoria();
    
    $this->load->library('pdf');

    ob_start();

    $this->load->view('pdfs/relatorioCampionato.php',$dado);

    $this->dompdf->loadHtml(ob_get_clean());

    $this->dompdf->setPaper('A4');

    $this->dompdf->render();

    $this->dompdf->stream('Relatorio do Campeonato.pdf', ["Attachment" => false]);
  }

  public function mudarEstado($id = null, $estado = null)
  {
    $this->load->model('Atleta_Model','Atleta');

    if ($this->session->userdata('valida')) {
       if ($estado == 'Activo') {
         $estado = 'Nao Activo';
       }else{
         $estado = 'Activo';
       }

       $dado = [
          'statu' => $estado
       ];

       $resultado = $this->Atleta->trocarEstado($id, $dado);
       if ($resultado == 1) {
        $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado para '.$estado.'</h6></div>');
           redirect('listar_atleta');
       }else{
          $this->session->set_flashdata('error', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. O estado foi alterado para '.$estado.'</h6></div>');
           redirect('listar_atleta');
       }
    }else{
      redirect('App/index');
    }
  }

  public function Editar($id = NULL)
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);

    $dados['titulo'] = 'KEDA';
    $this->load->model('crud_model','cru');
    $this->load->model('Atleta_Model','Atleta');
    $this->load->model('Provincia');
    $data['descricao'] = $this->cru->getGraduacao();
    $data['categoria'] = $this->cru->get_categoria_atleta();
    $data['nome'] = $this->cru->listar_academia();
    $data['estilo'] = $this->Atleta->getEstilo_juj();
    $data['editarUsuario'] = $this->Atleta->getIdAtletaInfTecn($id);
    $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
    
    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header2', $dados);
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('editar/editar_Atleta',$data);
      $this->load->view('Parts_Pages/footer2');
    endif;
  }

  public function salvar_Editar()
  {

    if($this->session->userdata('valida')):
        
        $dados['titulo'] = "KEDA";

        $this->form_validation->set_rules('fullName', 'Nome Completo', 'required', 
          array('trim','required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('bilhete', 'Bilhete de Identidade', 'required','numeric', 
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('nomePai', 'Nome do Pai', 'required', 
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('nomeMae', 'Nome da Mae', 'required', 
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('statu', 'statu', 'required', 
          array('required' => 'Os %s não deve estar vázia.'));
        $this->form_validation->set_rules('genero', 'genero', 'required', 
          array('required' => 'Os %s não deve estar vázia.'));
        
        if ($this->form_validation->run() == FALSE)
        {
            $dados = array('titulo' => 'KEDA');
            $this->Editar($this->input->post('idAtleta'));
        }else{
            $config['upload_path']    = './uploads/product/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 2048;
            $config['file_name']      = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload',$config);

            $id = $this->input->post('idAtleta');
              
            $this->load->model('Atleta_Model','Atleta');
            
            $imagem = $this->Atleta->getImagem($id);

            $info2 = [
                'peso' => $this->input->post('peso'),
                'Graduacao' => $this->input->post('Graduacao'),
                'mestre' => $this->input->post('mestre'),
                'id_Academia_c' => $this->input->post('Academia'),
                'id_estilo' => $this->input->post('estilo')
            ];

            $info3 = [
              'provincia' => $this->input->post('provincia'),
              'municipio' => $this->input->post('municipio'),
              'destrito' => $this->input->post('Destrito')
            ];  

            $id_endereco = $this->Atleta->AddEndereco($info3); 

            $id_inf_tecnica = $this->Atleta->addInf_tecnica($info2);
            $nomeAtleta = $this->input->post('fullName');

            if(@$_FILES['arquivo']['name'] != null){
                if ($this->upload->do_upload('arquivo')) {
                    $post['arquivo'] = $this->upload->data('file_name');

                    $info = [
                      'statu' => $this->input->post('statu'),
                      'genero' => $this->input->post('genero'),
                      'nome' => $this->input->post('fullName'),
                      'n_bilhete' => $this->input->post('bilhete'),
                      'data_nascimento' => $this->input->post('data'),
                      'id_tecnica' => $id_inf_tecnica,
                      'nomePai' => $this->input->post('nomePai'),
                      'nomeMae' => $this->input->post('nomeMae'),
                      'telefone' => $this->input->post('telefone'),
                      'telefone2' => $this->input->post('telefone2'),
                      'imagem' => $post['arquivo'],
                      'email' => $this->input->post('email'),
                      'id_endereco_fk1' => $id_endereco
                    ];

                      $this->load->model('Atleta_Model','Atleta');
                      $ultimo_id = $this->Atleta->AtualizarAtleta($id,$info);
                      if( $ultimo_id != 0){
                        
                          $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');
                      
                          redirect('Atleta/listar');
                      }else{
                          redirect('Atleta/cadastrar');
                      }
                }else{
                    $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Erro!. O Tamanho(2MB) da foto ou o formato(gif|jpg|png|jpeg) nao e valido. </h6></div>');
                    redirect('Atleta/Editar/' . $id);
                }
            }else{
               $info = [
                  'statu' => $this->input->post('statu'),
                  'genero' => $this->input->post('genero'),
                  'nome' => $this->input->post('fullName'),
                  'n_bilhete' => $this->input->post('bilhete'),
                  'data_nascimento' => $this->input->post('data'),
                  'id_tecnica' => $id_inf_tecnica,
                  'nomePai' => $this->input->post('nomePai'),
                  'nomeMae' => $this->input->post('nomeMae'),
                  'telefone' => $this->input->post('telefone'),
                  'telefone2' => $this->input->post('telefone2'),
                  'email' => $this->input->post('email'),
                  'id_endereco_fk1' => $id_endereco
                ];

                $this->load->model('Atleta_Model','Atleta');
                $ultimo_id = $this->Atleta->AtualizarAtleta($id,$info);
                if( $ultimo_id != 0){
                  
                   $this->session->set_flashdata('sucesso', '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!. Os dados foram atualizados.</h6></div>');
                  
                  redirect('Atleta/listar');
                }else{
                  redirect('Atleta/cadastrar');
                }
              }
            } 
    else:
      redirect(base_url());
    endif;
  }

  public function verAtleta($id = NULL)
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    $dados['titulo'] = 'KEDA';
    $this->load->model('Atleta_Model','Atleta');

      //$dado['verAtl'] = $this->Atleta->getIdAtleta($id);
    $dado['verAtl'] = $this->Atleta->getIdAtletaInfTecn($id);

    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/Page_head', $dados);
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('listar/ver_atleta',$dado);
      $this->load->view('Parts_Pages/footer');
    endif;
  }

  public function eliminar($id = NULL){

    $this->load->model('Atleta_Model','Atleta');
    if($this->session->userdata('valida')):
      $dados['titulo'] = "SEDICE";

      if($id != NULL):
        $ctrl = $this->Atleta->excluirAtleta($id);
        if($ctrl == 1):
          $this->session->set_flashdata('sucesso_delete_formando', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');

          redirect('listar_atleta');
        else:
          if($ctrl == 3):
            $this->session->set_flashdata('erro_delete_formando', '<div class="callout callout-warning"><h4>IMPORTANTE!</h4><p>Este formando já fez alguns módulos. Deseja Eliminá-lo mesmo assim? &nbsp;<a href="'.site_url('deleteformandoconfirmado'.'/'.$id).'" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Sim</a> (<b>Obs:</b> Apagará todos os módulo que fez) &nbsp;&nbsp;&nbsp; <a href="'.site_url('listar_atleta').'" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> Não</a></p></div>');

            redirect('listar_atleta');
          else:
            $this->session->set_flashdata('erro_delete_formando', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> FALHA!</h4>Não foi possível eliminar o formando.</div>');
            redirect('listar_atleta');
          endif;
        endif;
      else:
        $this->load->view('listar_atleta',$dados);
      endif;
    else:
      redirect(site_url());
    endif;
  }

  public function listarParticipante()
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    
    $dados['titulo'] = 'KEDA';
    $this->load->model('campeonato_model','campeonato');
    //$dados['atletas'] = $this->Atleta->getAll();
    $dados['campeonato'] = $this->campeonato->getAllParticipantes();
    //$ctrl1 = $this->Atleta->excluirAtleta();
    
    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header3');
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('listar/listar_participantes_campeonato',$dados);
      $this->load->view('Parts_Pages/footer3');
    endif;
  }

  public function listar()
  {
    //$this->auth->check_logged($this->router->class , $this->router->method);
    
    $dados['titulo'] = 'KEDA';
    $this->load->model('campeonato_model','campeonato');
    //$dados['atletas'] = $this->Atleta->getAll();
    $dados['campeonato'] = $this->campeonato->getAllCampeonatoNacional();
    //$ctrl1 = $this->Atleta->excluirAtleta();
    
    if ($this->session->userdata('valida')):
      $this->load->view('Parts_Pages/header3');
      $this->load->view('Parts_Pages/Page_Top_Menu');
      $this->load->view('Parts_Pages/Page_Sidebar');
      $this->load->view('Parts_Pages/Page_Content');
      $this->load->view('listar/listar_campeonato_nacional',$dados);
      $this->load->view('Parts_Pages/footer3');
    endif;
  }

  public function novo($id = null)
  {

        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $data['descricao'] = $this->cru->getGraduacao();
        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['estilo']    = $this->cru->get_estilo();
        $data['provincia'] = $this->Provincia->getAllProv();
        $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
        $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
        $data['fk_actividadeC'] = $id;

        $descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

        if($query != NULL){
          $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
        }else{
          $data['id_associacao_pro'] = '';
        }

    if ($this->session->userdata('valida')):
      if(empty($query[0]->descricao_associacao)){
        $this->template->load('template','formularios/form_campeonato_nacional.php',$data);
      }else{
        $this->template->load('template','formularios/form_campeonato_provincial.php',$data);
      } 
     
    else:
      redirect(base_url());
    endif;

  }

  public function addCampeonato(){
    
    $this->load->model('campeonato_model','campeonato');

    if($this->session->userdata('valida')):
      
      $dados['titulo'] = "KEDA";

      $this->form_validation->set_rules('fullName', 'Nome Completo', 'required', 
        array('trim','required' => 'Os %s não deve estar vázia.'));
      $this->form_validation->set_rules('bilhete', 'Bilhete de Identidade', 'required','numeric', 
        array('required' => 'Os %s não deve estar vázia.'));

        $descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

        if(count($query) != 0){
          $id_associacao_pro = $query[0]->id_associacao_pro;
        }else{
          $id_associacao_pro = 0;
        }

      
      if($id_associacao_pro != null){

        $dado1 =[
          'Pais_campeonato' => $this->input->post('pais'),
          'Cidade_campeonato' => $this->input->post('provincia')
        ];

        $id_local_campeonato = $this->campeonato->setLocal_campeonato($dado1);

        $dados = [ 
          'nome_campeonato' => $this->input->post('Campeonato'),
          'id_local_campeonato' => $id_local_campeonato,
          'id_associacao' =>  $id_associacao_pro,
          'fk_actividadeC' => $this->input->post('fk_actividadeC')
        ];

        $cadastro = $this->campeonato->setCampeonato($dados);

        $dado78 = [
          'director_prova' => $this->input->post('Director'),
          'edicao_campeonato' => $this->input->post('Edicao'),
          'id_campeonato' => $cadastro
        ];

        $cadastro1 = $this->campeonato->setCampeonato_provincial($dado78);

        // if($cadastro1 != 2){
        //   $dado = [
        //     'status' => 1
        //   ];

        //   $this->campeonato->updateStatusCampeonato_provincial($this->input->post('fk_actividadeC'),$dado);
        // }

      }else{

        $dado1 =[
          'Pais_campeonato' => $this->input->post('pais'),
          'Cidade_campeonato' => $this->input->post('provincia')
        ];

        $id_local_campeonato = $this->campeonato->setLocal_campeonato($dado1);
  
        $dados = [ 
          'nome_campeonato' => $this->input->post('Campeonato'),
          'id_local_campeonato' => $id_local_campeonato,
          'id_associacao' => 0,
          'fk_actividadeC' => $this->input->post('fk_actividadeC')
        ];

        $cadastro = $this->campeonato->setCampeonato($dados);

        $dados7 = [
          'id_campeonato' =>  $cadastro
        ];
  
        $this->campeonato->setCampeonatoCorrente(1,$dados7);//Inserir campeonato corrente
  
        $dado2 = [
          'director_prova' => $this->input->post('Director'),
          'edicao_campeonato' => $this->input->post('Edicao'),
          'id_campeonato' => $cadastro,
          'descricao_nacional' => $this->input->post('campeonatoNome'),
          'horaInicio' => $this->input->post('horaDeInicioProva')
          // 'horaFim' => $this->input->post('campeonatoNome')
        ];
        
        if($this->input->post('campeonatoNome') == 'Nacional'){
  
          $cadastro1 = $this->campeonato->setCampeonato_nacional($dado2);

        }elseif($this->input->post('campeonatoNome') == 'Africano'){
  
          $cadastro1 = $this->campeonato->setCampeonato_africano($dado2);
  
        }elseif($this->input->post('campeonatoNome') == 'Mundial'){
  
          $cadastro1 = $this->campeonato->setCampeonato_mundial($dado2);
  
        }
      }

      if ($cadastro != 2) {
        //echo 'sucesso';
        $nomeCampeonato = $this->input->post('campeonatoNome');
        redirect(base_url('Campeonato/gerirCampeonato/'. $cadastro1 .'/'.$nomeCampeonato));

      }else{
        echo "insucesso";
      }

    else:
      redirect(base_url());
    endif;
  }

  public function getIdCampeonatoCorrente(){
    
    $query = $this->db->query('SELECT * FROM campeonato WHERE id_associacao='.$this->input->post('id_associacao_pro2').' AND fk_actividadeC='.$this->input->post('idEvento2'))->result();
    if(empty($query)){
      echo 'erro';
    }else{
      $query2 = $query[0]->id_campeonato;
      echo $query2;

    }
   
  }

  public function verificaActividadeCampeonato(){

    $id_actividade = $this->input->post('id_actividade');
    $id_associacao = $this->input->post('id_associacao');

    $query = $this->db->query('SELECT * FROM campeonato WHERE id_associacao='.$id_associacao.' AND fk_actividadeC='.$id_actividade)->result();
    if(empty($query)){
      echo 1;
    }else{
      echo 2;
    }
  }

  public function removeCategoria(){
    $this->load->model('campeonato_model');
 
    $id = $this->input->post('id');

    $this->campeonato_model->excluirCategoria($id);

  }

  public function removeParticipanteCampeonato(){
    $this->load->model('campeonato_model');
 
    $id = $this->input->post('idparticipante');

    $this->campeonato_model->excluirParticipanteCampeonato($id);


  }

  public function atualizarParticipanteCampeonato(){
    $this->load->model('campeonato_model');
 
    $id = $this->input->post('idparticipante');

    $dados = [
      'funcao' => $this->input->post('funcao'),
      'categoriaPeso' => $this->input->post('categoriaPeso')
    ];

    $retorno = $this->campeonato_model->atualizarParticipanteCampeonato($id, $dados);

    if($retorno == 1){
        echo 1;
    }else{
        echo 2;
    }


  }

  public function gerirCampeonato($id = null,$nome = null)
  {

      if ($this->session->userdata('valida')):

        $dados['titulo'] = 'KEDA';

        $this->load->model('Atleta_Model');
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $this->load->model('campeonato_model');

        //$data['busca'] = $this->Atleta_Model->getAllAtletaByBilhete($this->input->post('numeroBilhete'));

        // $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['provincia'] = $this->Provincia->getAllProv();
        // $data['categoria'] = $this->campeonato_model->setAllcategoria();
        $data['campeonato'] = $this->campeonato_model->getIdCampeonato($id,$nome);
        $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));  

        var_dump($data['campeonato']);

        $descricao = $this->session->userdata('nome');
        $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

        if($query != NULL){
          $data['id_associacao_pro'] = $query[0]->id_associacao_pro;
        }else{
          $data['id_associacao_pro'] = '';
        }
        
        $this->template->load('template','ver/gerir_campeonato',$data);

        // $this->getCategoria($id);
    else:
      redirect(base_url());
    endif;

  }

  public function getCategorias(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('id');

    $retorno = $this->campeonato_model->getCategoria();

    foreach($retorno as $retor){
      echo "<option value='{$retor->id_categoria }'>$retor->categoria</option>";
    }

  }

  public function BuscaByBilhete()
  {
        
        $this->load->model('mestre_model');

        //$numero1 = $_POST['numero'];
       
        $numero = $this->Atleta_Model->getAllAtletaByBilhete($this->input->post('numero'),$this->input->post('id_associacao_pro'));
        
        if($numero != null){
            $dado = [
                'id_atleta' => $numero[0]->id_atleta,
                'nome' => $numero[0]->nome,
                'statu' => $numero[0]->statu,
                'peso' => $numero[0]->peso,
                'provincia' => $numero[0]->provincia,
                'imagem' => $numero[0]->imagem,
                'data_nascimento' => $numero[0]->data_nascimento,
                'n_bilhete' => $numero[0]->n_bilhete,
                'genero' => $numero[0]->genero
            ];
            echo json_encode($dado);
        }else{            

            echo 1;
        }
        
  }

  
  public function cadastrarFuncao()
  {
    $this->load->model('campeonato_model');

    $controle = $this->input->post('funcao');
    
    if($controle == ''){
       echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!</h6></div>';
    }else{
      $dado = [
        'descricao_funcao' => $this->input->post('funcao')
      ];

      $retorno = $this->campeonato_model->setFuncao($dado);
      

      
      if ($retorno == 1) {

          $messagem = '';
          $messagem = '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!</h6></div>';

          $retorno1 = $this->campeonato_model->getAllFuncao();
      
          foreach ($retorno1 as $retorno1) {
              $conteudo2[] = array('Nome_funcao' => $retorno1->descricao_funcao);
          }

          echo json_encode($conteudo2);

      }else{
          echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!</h6></div>';
      }
    }
  }

  public function cadastrarParticipante()
  {
    $this->load->model('campeonato_model');

    $dado = array(
      'funcao_campeonato' => $this->input->post('Funcaoa'),
      'id_participante_ca' => $this->input->post('id_atleta'),
       'id_campeonato' => $this->input->post('id_campeonato')
    );

    $retorno = $this->campeonato_model->Participado($dado);

    /*if ($retorno == 1) {
       echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Sucesso!</h6></div>';
    }else{
      echo '<div class="alert alert-success alert-dismissible" style="background:#00a65a;border-color:#008d4c;fonte_"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6 style="color:white"><i class="icon fa fa-check"></i> Error!</h6></div>';
    }*/

    echo $retorno;
   
  }

  public function gerirCampeonato2(){
      if ($this->session->userdata('valida')):
        $dados['titulo'] = 'KEDA';
        $this->load->model('crud_model','cru');
        $this->load->model('Provincia');
        $data['descricao'] = $this->cru->getGraduacao();
        $data['categoria'] = $this->cru->get_categoria_atleta();
        $data['estilo']    = $this->cru->get_estilo();
        $data['nome'] = $this->cru->listar_academia();
        $data['escolhe_provincias'] = $this->Provincia->selectProvincia();
    
        
        echo $this->load->view('inputs/input_atleta1',$data);
        
    else:
      redirect(base_url());
    endif;
  }

  public function addCategoria(){
    
    $this->load->model('campeonato_model');

    $dado = [
    'id_categoria_fk' => $this->input->post('id_categoria_fk'),
    'generoCategoriaCamp' => $this->input->post('generoCategoriaCamp'),
    'id_campeonato_fk' => $this->input->post('id_campeonato_fk')
    ];

    $retorno = $this->campeonato_model->setCategoria($dado);

    if($retorno == 1){
      return true;
    }else{
      return false;
    }

  }

  public function getCategoria(){
    $this->load->model('campeonato_model');

    $id = $this->input->post('id');

    $retorno = $this->campeonato_model->setAllcategoria($id);
    
    $retorno2 = json_encode($retorno);
    
    echo $retorno2;

  }

  public function getParticipantes(){

    $this->load->model('campeonato_model');

    $idEvento = $this->input->post('idEvento2');
    $idAssociacao = $this->input->post('id_associacao_pro2');
    
    $participantes = $this->campeonato_model->setAllParticipante($idEvento, $idAssociacao);

    $retorno = json_encode($participantes);
    echo ($retorno);


  }

  public function getParticipantes2(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('idEvento22');

    $participantes = $this->campeonato_model->setAllParticipante2(1);

    $retorno = json_encode($participantes);
     
    echo($retorno);

  }

  public function getInfoCabecalhoLista(){

    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('id_campeonato');

    $descricao = $this->session->userdata('nome');
    $query = $this->db->query("SELECT id_associacao_pro, descricao_associacao FROM associacao_provincia WHERE descricao_associacao = '$descricao'")->result();

    if(count($query) != 0){
      $data = $query[0]->id_associacao_pro;
    }else{
      $data = 0;
    }

    $participantes = $this->campeonato_model->getInfoCabecalhoLista($idcampeonato, $data);

    $retorno = json_encode($participantes);
     
    echo($retorno);

  }

  public function getInfoRelatorioFinal(){

    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('idcampeonato');

    $participantes = $this->campeonato_model->getInfoRelatorioFinal45($idcampeonato);

    $retorno = json_encode($participantes);
     
    echo($retorno);

  }

  public function getTotalParticipanteCampeonato(){
    
    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('idcampeonato');

    $participantes = $this->campeonato_model->getInfoRelatorioFinal45we($idcampeonato);

    echo($participantes);

  }

  public function getSecretarioGeral(){
    
    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('idcampeonato');

    $secretario = $this->campeonato_model->pegarSecretarioGeral();

    echo($secretario);

  }

  public function getCampeonatoProvinParti(){

    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('idcampeonato');

    $participantes = $this->campeonato_model->getCampeonatoProvinParti3($idcampeonato);

    $retorno = json_encode($participantes);
     
    echo($retorno);

  }

  public function getClassificacaoMedalhaProvincia(){

    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('idcampeonato');

    $participantes = $this->campeonato_model->getClassificacaoMedalhaProvincia12($idcampeonato);

    $retorno = json_encode($participantes);
     
    echo($retorno);

  }

  public function getCampeonatoCategoriaParti(){

    $this->load->model('campeonato_model');

    $idcampeonato = $this->input->post('idcampeonato');

    $participantes = $this->campeonato_model->getCampeonatoCategoriaParti3($idcampeonato);

    $retorno = json_encode($participantes);
     
    echo($retorno);

  }

  public function getCabecalho3(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('idEvento22');

    $participantes = $this->campeonato_model->setAllParticipante2(1);

    // $retorno = json_encode($participantes);
     
    // echo($retorno);
    
      $mostra = "";
     

      $mostra .= '<div class="col-lg-12">';
                            
      $mostra .= '<div class="card card-gray">';

      foreach($participantes as $participante){
      
       $mostra .= '<div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">';
       $mostra .=   '<h3 class="card-title text-uppercase" style="margin-left: -12px">ESCALAO ETARIO'.$participante['escalao'].'</h3>';
       $mostra .=   '</div>';
       $mostra .=   '<div class="card-body border-0 pt-0 pl-0 pr-0">';
        
       $mostra .=   '<div class="justify-content-between align-items-center border-bottom mb-3">';
            
       $mostra .=   '<div class="d-flex flex-column">';
       foreach($participante['generos'] as $genero){
            
        $mostra .=   '<span class="font-weight-bold text-uppercase bg-danger p-2">';
        $mostra .=   '<i class="ion ion-android-arrow-up text-success"></i>SEXO'.$genero['genero'].'</span>';
         
        foreach($genero['categoriaPesos'] as $categoriaPeso){
          if(count($categoriaPeso['participantes']) != 0){

            $mostra .=   ' <span class="font-weight-bold pt-1 ml-3"><i class="ion ion-android-arrow-up"></i>Categoria de '.$categoriaPeso['categoriaPeso'].'</span>';
            $mostra .=   '<span class="text-muted">';
            $mostra .=   '<div class="table-responsive col-lg-12">';
            $mostra .=   '<table class="table table-sm">';
            $mostra .=   '<thead>';
            $mostra .=   '<tr>';
            $mostra .=   '<th>Nome Completo</th>';
            $mostra .=   '<th>Peso</th>';
            $mostra .=   '<th>Funcao</th>';
            $mostra .=   '<th>Data de Nascimento(idade)</th>';
            $mostra .=   '</tr>';
            $mostra .=   '</thead>';
            $mostra .=   '<tbody>';
            foreach($categoriaPeso['participantes'] as $participantes){
              $mostra .=   '<tr>';
              $mostra .=   '<td><a href="pages/examples/invoice.html">'.$participantes['nome_participante'].'</a></td>';
              $mostra .=   '<td>'.$participantes['categoria'].'</td>';
              $mostra .=   '<td><span class="badge badge-success p-2" style="font-size:13px">'.$participantes['funcao'].'</span></td>';
              $mostra .=   '<td>';
              $mostra .=   '<div class="sparkbar" data-color="#00a65a" data-height="20">'.date('d/m/Y', strtotime(strtoupper($participantes['dataNascimento']))).'</div>';
              $mostra .=   '</td>';
              $mostra .=   '  </tr>';
            } 
            $mostra .=   ' </tbody>';
            $mostra .=   '</table>';
            $mostra .=   ' </div>';
            $mostra .=   '</span>';
          }
        }
         
       }
            $mostra .=   '</div>';
        
            $mostra .=   '</div>';
      
            $mostra .=   '</div>';
      } 

            
            $mostra .=   '</div>';

            $mostra .=   '<br></div>';

    echo $mostra;

  

  }

  public function getParticipantes3(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('idactividade');
    $id2 = $this->input->post('idcampeonato');

    $participantes = $this->campeonato_model->setAllParticipante2($id,$id2);

      $mostra = "";
      $mostra .= '<div class="col-lg-12">';
                            
      $mostra .= '<div class="card border">';

    foreach($participantes as $participante){
      
       $mostra .= '<div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">';
       $mostra .=   '<h3 class="card-title text-uppercase" style="margin-left: -12px">ESCALAO ETARIO '.$participante['escalao'].'</h3>';
       $mostra .=   '</div>';
       $mostra .=   '<div class="card-body border-0 pt-0 pl-0 pr-0">';
        
       $mostra .=   '<div class="justify-content-between align-items-center border-bottom mb-3">';
            
       $mostra .=   '<div class="d-flex flex-column">';
      foreach($participante['generos'] as $genero){
            
        $mostra .=   '<span class="text-uppercase bg-info p-2">';
        $mostra .=   '<i class="ion ion-android-arrow-up text-success"></i>SEXO '.$genero['genero'].'</span>';
         
        foreach($genero['categoriaPesos'] as $categoriaPeso){
          if(count($categoriaPeso['participantes']) != 0){

            $mostra .=   ' <span class="font-weight-bold pt-1 ml-3"><i class="ion ion-android-arrow-up"></i>Categoria de '.$categoriaPeso['categoriaPeso'].'</span>';
            $mostra .=   '<span class="text-muted">';
            $mostra .=   '<div class="table-responsive col-lg-12">';
            $mostra .=   '<table class="table table-sm">';
            $mostra .=   '<thead>';
            $mostra .=   '<tr>';
            $mostra .=   '<th>Nome Completo</th>';
            $mostra .=   '<th>Peso</th>';
            $mostra .=   '<th>Funcao</th>';
            $mostra .=   '<th>Data de Nascimento(idade)</th>';
            $mostra .=   '</tr>';
            $mostra .=   '</thead>';
            $mostra .=   '<tbody>';
            foreach($categoriaPeso['participantes'] as $participantes){
            $mostra .=   '<tr>';
            $mostra .=   '<td><a href="pages/examples/invoice.html">'.$participantes['nome_participante'].'</a></td>';
            $mostra .=   '<td>'.$participantes['categoria'].'</td>';
            $mostra .=   '<td><span class="p-2" style="">'.$participantes['funcao'].'</span></td>';
            $mostra .=   '<td>';
            $mostra .=   '<div class="sparkbar" data-color="#00a65a" data-height="20">'.date('d/m/Y', strtotime(strtoupper($participantes['dataNascimento']))).'</div>';
            $mostra .=   '</td>';
            $mostra .=   '  </tr>';
            } 
            $mostra .=   ' </tbody>';
            $mostra .=   '</table>';
            $mostra .=   ' </div>';
            $mostra .=   '</span>';
          }
        }
         
      }
            $mostra .=   '</div>';
        
            $mostra .=   '</div>';
      
            $mostra .=   '</div>';
    } 
            $mostra .=   '</div>';

            $mostra .=   '</div>';

    echo $mostra;

  

  }

  public function getCampeonatoChaves(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('idEvento22');

    $participantes = $this->campeonato_model->setAllParticipante2(1);

    // $retorno = json_encode($participantes);
     
    // echo($retorno);
    
      $mostra = "";
      // $mostra .= '<div class="col-lg-12">';
     
      foreach($participantes as $participante){
      
          // $mostra .= '<div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">';
          // $mostra .=   '<h3 class="card-title text-uppercase" style="margin-left: -12px">ESCALAO ETARIO'.$participante['escalao'].'</h3>';
          // $mostra .=   '</div>';
          // $mostra .=   '<div class="card-body border-0 pt-0 pl-0 pr-0">';
            
          // $mostra .=   '<div class="justify-content-between align-items-center border-bottom mb-3">';
                
           $mostra .=   '<div class="d-flex flex-column">';

            foreach($participante['generos'] as $genero){
                
                  // $mostra .=   '<span class="font-weight-bold text-uppercase bg-danger p-2">';
                  // $mostra .=   '<i class="ion ion-android-arrow-up text-success"></i>SEXO'.$genero['genero'].'</span>';
            
                  foreach($genero['categoriaPesos'] as $categoriaPeso){
                    if(count($categoriaPeso['participantes']) != 0){

                      $mostra .=   '<span class="font-weight-bold pt-1 ml-3"><i class="ion ion-android-arrow-up"></i>Categoria de '.$categoriaPeso['categoriaPeso'].'</span>';
                      $mostra .=   '<span class="text-muted">';
                    
                      foreach($categoriaPeso['participantes'] as $participantes){
                  
                          $mostra .=   '<div class="card p-2 border mb-0"';
                          $mostra .=   '<ul class="nav nav-pills flex-column">';
                          $mostra .=   '<li class="nav-item">';
                          $mostra .=   '<div class="user-block">';
                          $mostra .=   '<img class="img-circle img-sm" src="http://localhost/KEDA/assets/images/3.JPG" alt="User Image">';
                          $mostra .=   '<span class="username"><a href="#">'.$participantes['nome_participante'].'</a></span>';
                          // $mostra .=   '<span class="description">Shared publicly - 7:30 PM Today</span>';
                          $mostra .=   '</div>';
                          $mostra .=   '</li>';
                          $mostra .=   '</ul>';
                          $mostra .=   '</div>';
                          $mostra .=    '<hr class="p-0">';
                       
                      }

                      
                    }
                  }
            }

          $mostra .=   '</div>';
            
          // $mostra .=   '</div>';
      
      } 

      // $mostra .=   '</div>';

    echo $mostra;

  

  }

  public function getParticipantesLista4(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('idEvento22');

    $participantes = $this->campeonato_model->setAllParticipante2(1);

    // $retorno = json_encode($participantes);
     
    // echo($retorno);
    
      $mostra = "";
      $mostra .= '<div class="col-lg-12">';
                            
      $mostra .= '<div class="card card-gray">';

      foreach($participantes as $participante){
      
       $mostra .= '<div class="card-header" style="border-top-left-radius:0;border-top-right-radius:0">';
       $mostra .=   '<h3 class="card-title text-uppercase" style="margin-left: -12px">ESCALAO ETARIO'.$participante['escalao'].'</h3>';
       $mostra .=   '</div>';
       $mostra .=   '<div class="card-body border-0 pt-0 pl-0 pr-0">';
        
       $mostra .=   '<div class="justify-content-between align-items-center border-bottom mb-3">';
            
       $mostra .=   '<div class="d-flex flex-column">';
       foreach($participante['generos'] as $genero){
            
        $mostra .=   '<span class="font-weight-bold text-uppercase bg-danger p-2">';
        $mostra .=   '<i class="ion ion-android-arrow-up text-success"></i>SEXO'.$genero['genero'].'</span>';
         
        foreach($genero['categoriaPesos'] as $categoriaPeso){
          if(count($categoriaPeso['participantes']) != 0){

            $mostra .=   ' <span class="font-weight-bold pt-1 ml-3"><i class="ion ion-android-arrow-up"></i>Categoria de '.$categoriaPeso['categoriaPeso'].'</span>';
            $mostra .=   '<span class="text-muted">';
            $mostra .=   '<div class="table-responsive col-lg-12">';
            $mostra .=   '<table class="table table-sm">';
            $mostra .=   '<thead>';
            $mostra .=   '<tr>';
            $mostra .=   '<th>Nome Completo</th>';
            $mostra .=   '<th>Peso</th>';
            $mostra .=   '<th>Funcao</th>';
            $mostra .=   '<th>Data de Nascimento(idade)</th>';
            $mostra .=   '</tr>';
            $mostra .=   '</thead>';
            $mostra .=   '<tbody>';
            foreach($categoriaPeso['participantes'] as $participantes){
            $mostra .=   '<tr>';
            $mostra .=   '<td><a href="pages/examples/invoice.html">'.$participantes['nome_participante'].'</a></td>';
            $mostra .=   '<td>'.$participantes['categoria'].'</td>';
            $mostra .=   '<td><span class="badge badge-success p-2" style="font-size:13px">'.$participantes['funcao'].'</span></td>';
            $mostra .=   '<td>';
            $mostra .=   '<div class="sparkbar" data-color="#00a65a" data-height="20">'.date('d/m/Y', strtotime(strtoupper($participantes['dataNascimento']))).'</div>';
            $mostra .=   '</td>';
            $mostra .=   '  </tr>';
           } 
            $mostra .=   ' </tbody>';
            $mostra .=   '</table>';
            $mostra .=   ' </div>';
            $mostra .=   '</span>';
            }
            }
         
            }
            $mostra .=   '</div>';
        
            $mostra .=   '</div>';
      
            $mostra .=   '</div>';
            } 
            $mostra .=   '</div>';

            $mostra .=   '</div>';

    echo $mostra;

  

  }

  public function setParticipante(){

    $this->load->model('campeonato_model');

    $dados = [
      'id_funcao_fk' => $this->input->post('funcao'),
      'id_campeonato_fk' => $this->input->post(''),
      'nome_participante' => $this->input->post('Nome'),
      'numeroBI' => $this->input->post('bilheteNome'),
      'telefone' => $this->input->post(),
      'dataNasc' => $this->input->post('dataNasc'),
      'genero' => $this->input->post('genero_categoria'),
      'idGeneroCampeonato' => $this->input->post(),
      'provincia' => $this->input->post('provincia_categoria')
    ];

    $retorno = $this->campeonato_model->setParticipante($dados);

  }

  public function setFuncao(){
    $this->load->model('campeonato_model');

    $dado = [
      'descricaoFuncao' => $this->input->post('descricaoFuncao')
    ];

    $retorno = $this->campeonato_model->setFuncao($dado);
    if($retorno == 1){
      echo 1;
    }else{
      echo 2;
    }
  }

  public function getFuncao(){
    $this->load->model('campeonato_model');

    $retorno = $this->campeonato_model->getAllFuncao();

    foreach($retorno as $retor){
      echo "<option value='{$retor->descricaoFuncao}'>$retor->descricaoFuncao</option>";
    }
  }

  public function getALLCategoria(){
    $this->load->model('campeonato_model');

    $id = $this->input->post('id');

    $retorno = $this->campeonato_model->setAllcategoria($id);

    foreach($retorno as $retor){
      echo "<option value='{$retor->descricao_categoriaCamp }'>$retor->descricao_categoriaCamp</option>";
    }
  }

  public function setParticipanteEvento(){

		$dado = [
			'id_participante_fk' => $this->input->post('id_mestre'),
			'id_campeonato_fk' => $this->input->post('id_campeonato'),
      'bilhete_identidade' => $this->input->post('bilhete'),
      'categoria' => $this->input->post('categoria'),
      'funcao' => $this->input->post('funcao'),
      'nome_participante' => $this->input->post('nome'),
      'provincia' => $this->input->post('provincia'),
      'genero' => $this->input->post('genero'),
      'dataNascimento' => $this->input->post('data')
		];

		$this->load->model('campeonato_model');

		$resposta = $this->campeonato_model->setParticipanteCampeonato($dado);

		if($resposta == 1) {
			$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.O Participante foi adicionado.</h6></div>');
		}else{
			$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');
			redirect('actividade/listar/' . $this->input->post('ano'));
		}
	}

  public function verificarCategoria($peso, $sexo, $escalao){

    if($sexo === "Masculino" && $escalao === "sub16"){
       if($peso <= 38){
            return "-38";
       }
       if($peso >= 38 && $peso <= 42){
            return "-42";
       }
       if($peso >= 42 && $peso <= 46){
            return "-46";
       }
       if($peso >= 46 && $peso <= 50){
            return "-50";
       }
       if($peso >= 50 && $peso <= 55){
            return "-55";
       }
       if($peso >= 55 && $peso <= 60){
            return "-60";
       }
       if($peso >= 60 && $peso <= 66){
            return "-66";
       }
       if($peso >= 66 && $peso <= 73){
            return "-73";
       }
       if($peso >= 73 && $peso <= 79){
            return "+73";
       }
    }

    if($sexo === "Femenino" && $escalao === "sub16"){
      if($peso <= 38){
           return "-38";
      }
      if($peso >= 38 && $peso <= 42){
           return "-42";
      }
      if($peso >= 42 && $peso <= 46){
           return "-46";
      }
      if($peso >= 46 && $peso <= 50){
           return "-50";
      }
      if($peso >= 50 && $peso <= 55){
           return "-55";
      }
      if($peso >= 55 && $peso <= 60){
           return "-60";
      }
      if($peso >= 60 && $peso <= 66){
           return "-66";
      }
      if($peso >= 66 && $peso <= 73){
           return "-73";
      }
      if($peso >= 73 && $peso <= 79){
           return "+73";
      }
    }

    if($sexo === "Masculino" && $escalao === "sub21"){
      if($peso <= 56){
          return "-56";
      }
      if($peso >= 56 && $peso <= 62){
          return "-62";
      }
      if($peso >= 62 && $peso <= 69){
          return "-69";
      }
      if($peso >= 69 && $peso <= 77){
          return "-77";
      }
      if($peso >= 77 && $peso <= 85){
          return "-85";
      }
      if($peso >= 85 && $peso <= 94){
          return "-94";
      }
      if($peso >= 94){
          return "+94";
      }
      
    }

    if($sexo === "Femenino" && $escalao === "sub21"){
      if($peso >= 45 && $peso <= 48){
          return "-48";
      }
      if($peso >= 48 && $peso <= 52){
          return "-52";
      }
      if($peso >= 52 && $peso <= 57){
          return "-57";
      }
      if($peso >= 57 && $peso <= 63){
          return "-63";
      }
      if($peso >= 63 && $peso <= 70){
          return "-70";
      }
      if($peso >= 73){
          return "+70";
      }
    
    }

    if($sexo === "Masculino" && $escalao === "Veterano Absoluto"){
      if($peso <= 56){
          return "-56";
      }
      if($peso >= 56 && $peso <= 62){
          return "-62";
      }
      if($peso >= 62 && $peso <= 69){
          return "-69";
      }
      if($peso >= 69 && $peso <= 77){
          return "-77";
      }
      if($peso >= 77 && $peso <= 85){
          return "-85";
      }
      if($peso >= 85 && $peso <= 94){
          return "-94";
      }
      if($peso >= 94){
          return "+94";
      }
    
    }

    if($sexo === "Femenino" && $escalao === "Veterano Absoluto"){
      if($peso >= 45 && $peso <= 48){
          return "-48";
      }
      if($peso >= 48 && $peso <= 52){
          return "-52";
      }
      if($peso >= 52 && $peso <= 57){
          return "-57";
      }
      if($peso >= 57 && $peso <= 63){
          return "-63";
      }
      if($peso >= 63 && $peso <= 70){
          return "-70";
      }
      if($peso >= 73){
          return "+70";
      }
    
    }
  
  }

  
  public function setParticipanteCompEvento(){

    $this->load->model('campeonato_model');

    $dados =  $this->input->post('dados');

    $idcampeonato = $dados[count($dados)-2]['idcampeonato'];

    $escalao = $dados[count($dados)-1]['escalao'];

    $existeTable = [];

 
    for($i = 0;$i < count($dados)-2;$i++){

          $resposta909 = $this->campeonato_model->verificaParticipanteCampeonato($dados[$i]['n_bilhete'], $idcampeonato);

          if(count($resposta909) != 0){
            array_push($existeTable,array("nome" => $dados[$i]['nome'], "bilhete" => $dados[$i]['n_bilhete'],));
          }else{

            $dado = [
              'id_participante_fk' => $dados[$i]['id_atleta'],
              'id_campeonato_fk' => $idcampeonato,
              'bilhete_identidade' => $dados[$i]['n_bilhete'],
              'categoria' => $dados[$i]['peso'],
              'funcao' => 'Competidor',
              'nome_participante' => $dados[$i]['nome'],
              'imagem' => $dados[$i]['imagem'],
              'provincia' => $dados[$i]['provincia_e'],
              'genero' => $dados[$i]['genero'],
              'dataNascimento' => $dados[$i]['data_nascimento'],
              'escalao' => $escalao,
              'categoriaPeso' => $this->verificarCategoria($dados[$i]['peso'],$dados[$i]['genero'],$escalao)
            ];

            $resposta = $this->campeonato_model->setParticipanteCampeonato($dado);
          }
  
      }
      
      if(count($existeTable) == 0){
        echo 0;
      }else{
        echo json_encode($existeTable);
      }

	}

  public function setParticipanteCompEventoDirigente(){

    $dados =  $this->input->post('dados');

    // $escalao = $dados[count($dados)-1]['escalao'];
    $idcampeonato = $dados[count($dados)-1]['idcampeonato'];

    for($i = 0;$i < count($dados)-1;$i++){

      $dado = [
        'id_participante_fk' => $dados[$i]['id_membro'],
        'id_campeonato_fk' => $idcampeonato,
        // 'bilhete_identidade' => $dados[$i]['n_bilhete'],
        // 'categoria' => $dados[$i]['peso'],
        'funcao' => 'Dirigente',
        'nome_participante' => $dados[$i]['nome'],
        'imagem' => $dados[$i]['imagem_membro'],
        // 'provincia' => $dados[$i]['provincia_e'],
        // 'genero' => $dados[$i]['genero'],
        // 'dataNascimento' => $dados[$i]['data_nascimento']
        // 'escalao' => $escalao,
        // 'categoriaPeso' => $this->verificarCategoria($dados[$i]['peso'],$dados[$i]['genero'],$escalao)
      ];

      $this->load->model('campeonato_model');

      $resposta = $this->campeonato_model->setParticipanteCampeonato($dado);
    }

		if($resposta == 1) {
			$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h6><i class="icon fa fa-check"></i> Sucesso!.O Participante foi adicionado.</h6></div>');
		}else{
			$this->session->set_flashdata('sucesso_participante', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Sucesso!.O Atleta<?php?> com sucesso.</div>');
			redirect('actividade/listar/' . $this->input->post('ano'));
		}
	}

  public function setVParticipanteEvento(){

    $this->load->model('campeonato_model');

    $retornoExistente = [];

    $dados =  $this->input->post('dados');

        for($i = 0;$i < count($dados);$i++){

            $dado = [
              'id_participante_fk' => $dados[$i]['id_arbitro'],
              'id_campeonato_fk' => 1,
              'bilhete_identidade' => $dados[$i]['n_bilhete'],
              'categoria' => $dados[$i]['nome_categoria_fk'],
              'funcao' => 'Arbitro',
              'nome_participante' => $dados[$i]['nome'],
              'provincia' => $dados[$i]['provincia_e'],
              'genero' => $dados[$i]['genero'],
              'dataNascimento' => $dados[$i]['data_nascimento']
            ];

          
              $resposta = $this->campeonato_model->setParticipanteCampeonato($dado);
         

        }

		
	}

  public function setVParticipanteEventoArbitro(){

    $this->load->model('campeonato_model');

    $retornoExistente = [];

    $dados =  $this->input->post('dados');

    $idcampeonato = $dados[count($dados)-1]['idcampeonato'];

        for($i = 0;$i < count($dados)-1;$i++){

            $dado = [
              'id_participante_fk' => $dados[$i]['id_arbitro'],
              'id_campeonato_fk' => $idcampeonato,
              'bilhete_identidade' => $dados[$i]['n_bilhete'],
              'categoria' => $dados[$i]['nome_categoria_fk'],
              'funcao' => 'Arbitro',
              'nome_participante' => $dados[$i]['nome'],
              'provincia' => $dados[$i]['provincia_e'],
              'genero' => $dados[$i]['genero'],
              'dataNascimento' => $dados[$i]['data_nascimento']
            ];

          
              $resposta = $this->campeonato_model->setParticipanteCampeonato($dado);
         

        }

		
	}

  public function setVParticipanteEventoTreinador(){

    $this->load->model('campeonato_model');

    $retornoExistente = [];

    $dados =  $this->input->post('dados');

    $idcampeonato = $dados[count($dados)-1]['idcampeonato'];

        for($i = 0;$i < count($dados)-1;$i++){

            $dado = [
              'id_participante_fk' => $dados[$i]['id_treinador'],
              'id_campeonato_fk' => $idcampeonato,
              // 'bilhete_identidade' => $dados[$i]['n_bilhete'],
              // 'categoria' => $dados[$i]['nome_categoria_fk'],
              'funcao' => 'Treinador',
              'nome_participante' => $dados[$i]['nome'],
              'imagem' => $dados[$i]['imagem'],
              'provincia' => $dados[$i]['provincia_e'],
              'genero' => $dados[$i]['genero'],
              'dataNascimento' => $dados[$i]['data_nascimento']
            ];

          
              $resposta = $this->campeonato_model->setParticipanteCampeonato($dado);
         

        }

		
	}

  public function getIdCategoria(){
    $this->load->model('campeonato_model');

    $id = $this->input->post('id');
    $genero = $this->input->post('genero');
    $escalao = $this->input->post('escalao');

    $retorno = $this->campeonato_model->setIdcategoria($id,$genero,$escalao);

    foreach($retorno as $retor){
      echo "<option value='{$retor->categoria}'>$retor->categoria</option>";
    }
  }

  public function getIdCategoria3(){
    $this->load->model('campeonato_model');

    $id = $this->input->post('id');
    $genero = $this->input->post('genero');
    $escalao = $this->input->post('escalao');

    $retorno = $this->campeonato_model->setIdcategoria3($id,$genero,$escalao);

    foreach($retorno as $retor){
      echo "<option value='{$retor->descricao_categoriaPeso}'>$retor->descricao_categoriaPeso</option>";
    }
  }

  public function getInfoParticipanteCampeonato(){

    $this->load->model('campeonato_model');

    $id = $this->input->post('idparticipante567');
    // $genero = $this->input->post('genero');

    $retorno = $this->campeonato_model->getInfoParticipanteCampeonato($id);

    echo json_encode($retorno);

  }

  public function getProvincia(){
    $this->load->model('campeonato_model');

    $retorno = $this->campeonato_model->getAllProvincia();

    foreach($retorno as $retor){
      echo "<option value='{$retor->nome_provincia}'>$retor->nome_provincia</option>";
    }
  }

  function listar_atleta_id()
	{
    $this->load->model('campeonato_model');

    $id_associacao_pro = $this->input->post('id_associacao_pro');

    $dados = $this->campeonato_model->listar_atleta_id($id_associacao_pro);

    $dado2 = json_encode($dados);

    echo $dado2;
    
    
	}

  function verificarCampeonatoId(){

    $this->load->model('campeonato_model');

    $retorno = $this->campeonato_model->getcampeonato($this->input->post('id_actividade'));

    echo $retorno;

  }

  function setInformacaoCamp(){

        $this->load->model('campeonato_model');

        $dados = $this->input->post('arrayTotal2');

        $query = $this->db->query('select id_campeonato from campeonato where fk_actividadeC='.$dados['actividade'][0])->result()[0];
        $retorno = $query->id_campeonato;
        
        $teste = $dados["EscalaoGeneroCatergoriaArray"];
        // var_dump($teste);
        // var_dump(count($teste));
        // var_dump($teste[0]["categoriaPeso"][0]);

        $dado99 = [];

        if(!empty($dados['sistemaLuta'])){

          for($i=0;$i < count($dados['sistemaLuta']);$i++){

            // $query2 = $this->db->query('select id_escalao from escalao where descricao_escalao like "%'.$dados['escalao'][$i].'%"')->result()[0];
            // $retorno3 = $query2->id_escalao;

            $dado = [
              'id_campeonato' => $retorno,
              'descricaosistemaluta' => $dados['sistemaLuta'][$i] 
            ];

            $retorno77 = $this->campeonato_model->verificarCampeonatoSistemaLuta($retorno,$dados['sistemaLuta'][$i]);

            if(count($retorno77) != 0){

              if(count($dado99)==0){
                $dado99 = array(99);
              }
              array_push($dado99,array($dados['sistemaLuta'][$i]));

            }else{
              $retorno2 = $this->campeonato_model->setcampeonatoSistemaLuta($dado);
            }

          }
        
          echo json_encode($dado99);

        }
        
        if(!empty($dados["EscalaoGeneroCatergoriaArray"])){

          for($i=0;$i < count($teste);$i++){

            // $query4 = $this->db->query('select id_sistemaLuta from sistemaluta where descricao_sistemaLuta like "%'.$dados['sistemaLuta'][$i].'%"')->result()[0];
            // $retorno4 = $query4->id_sistemaLuta;

            $dado = [
              'id_campeonato' => $retorno,
              'descricao_escalao' => $teste[$i]['escalao'],
              'genero' => $teste[$i]['genero']
            ];
      
            $retorno2 = $this->campeonato_model->setcampeonatoEscalao($dado);

                if(!empty($teste[$i]["categoriaPeso"])){

                  for($j=0;$j < count($teste[$i]["categoriaPeso"]);$j++){

                    $dado = [
                      'id_campeonatoescalao' => $retorno2,
                      'descricao_categoriaPeso' => $teste[$i]["categoriaPeso"][$j]
                    ];

                    $retorno3 = $this->campeonato_model->setcampeonatoPeso($dado);

                  }

             
            }

          }

          // echo json_encode($dado99);
        }

      
  }

  public function getGenero(){

    $this->load->model('campeonato_model');

    $retorno = $this->campeonato_model->getgenero();
    echo json_encode($retorno);
  }

  public function getcategoriaPeso(){

    $this->load->model('campeonato_model');

    $dados = $this->input->post('arrayEscala');
    
    $genero = $dados[0];
    $escalao = $dados[1];

    if($escalao == "9056as34"){
      $retorno = $this->campeonato_model->getcategoriaPesoSemEscalao();

      foreach($retorno as $retor){
        
        echo '<div class="custom-control custom-checkbox" id="formchecklabel452"><input class="custom-control-input formchecklabel45" type="checkbox" id="'.$retor->descricao_peso.'" value="'.$retor->descricao_peso.'"><label for="'.$retor->descricao_peso.'" class="custom-control-label form-check-label">Categoria de '.$retor->descricao_peso.'</label></div>'; 
                 
      }

    }else{

    $id_genero = $genero == "Masculino" ? 1 : 2;

    $query = $this->db->query('SELECT id_escalao FROM escalao WHERE descricao_escalao LIKE "%'.$escalao.'%"')->result()[0];
    $id_escalao2 = $query->id_escalao;

    $query3 = $this->db->query('select id_escalaoGenero from escalaogenero where id_genero ='.$id_genero.' and id_escalao ='.$id_escalao2)->result()[0];
    $id_escalaoGenero2 = $query3->id_escalaoGenero;

    $retorno = $this->campeonato_model->getcategoriaPeso($id_escalaoGenero2);

    foreach($retorno as $retor){
      // echo "<option value='{$retor->descricao_peso }'>Categoria de ".$retor->descricao_peso."</option>";
                  //  <div class="custom-control custom-checkbox">
      echo '<div class="custom-control custom-checkbox" id="formchecklabel452"><input class="custom-control-input formchecklabel45" type="checkbox" id="'.$retor->descricao_peso.'" value="'.$retor->descricao_peso.'"><label for="'.$retor->descricao_peso.'" class="custom-control-label form-check-label">Categoria de '.$retor->descricao_peso.'</label></div>'; 
               
    }
  }
    // echo json_encode($retorno);
    
  }

  public function getEscalaoCampeonato(){

    $this->load->model('campeonato_model');
    
    $id = $this->input->post('id_ddd');

    $retorno = $this->campeonato_model->getEscalaoCampeonato($id);

    if($retorno->descricao_escalao == "9056as34"){
      ech
    }else{

    if(count($retorno) != 0){

      foreach($retorno as $retorno){
        echo '<option value="'.$retorno->descricao_escalao.'">'.$retorno->descricao_escalao.'</option>';
      }

    }else{
      echo 0;
    }
  }

  }

  public function getcategoriaPeso2(){
    $this->load->model('campeonato_model');

    $retorno = $this->campeonato_model->getcategoriaPeso2();

    echo json_encode($retorno);
  }

  function buscarSelectGenero(){

		$this->load->model('campeonato_model');
    
    $escalao = $this->input->post('escalao');
    $id_campeonato = $this->input->post('id_campeonato');

    $retorno = $this->campeonato_model->getgenero2($escalao, $id_campeonato);

    foreach($retorno as $retorno){
      echo '<option value="'.$retorno->genero.'">'.$retorno->genero.'</option>';
    }

	}

  function buscarSelectCategoriaPeso(){

		$this->load->model('campeonato_model');
    
    $genero = $this->input->post('genero');
    $escalao = $this->input->post('escalaoer');
    $id_campeonato = $this->input->post('id_ddd');

    $retorno = $this->campeonato_model->categoriaPeso($genero,$escalao,$id_campeonato);

    foreach($retorno as $retorno){
      echo '<option value="'.$retorno->categoriaPeso.'">'.$retorno->categoriaPeso.'</option>';
    }

	}

  function buscarSelectCategoriaPeso2(){

		$this->load->model('campeonato_model');
    
    $genero = $this->input->post('genero');
    $escalao = $this->input->post('escalao');

    $retorno = $this->campeonato_model->categoriaPeso3($genero,$escalao);

    echo json_encode($retorno);

	}

  function buscarSelectCategoriaPeso5(){

		$this->load->model('campeonato_model');
    
    $genero = $this->input->post('genero');
    $escalao = $this->input->post('escalao');
    $categoriaPeso = $this->input->post('categoriaPeso');
    $idActividade = $this->input->post('idactividadeIO');

    $query = $this->db->query("select id_campeonato from campeonato where fk_actividadeC=".$idActividade)->result()[0];
    $idCampeonato = $query->id_campeonato;

    $retorno = $this->campeonato_model->categoriaPeso5($genero,$escalao,$categoriaPeso,$idCampeonato);

    echo ($retorno);

	}

  function buscarSelectCategoriaPeso58(){

		$this->load->model('campeonato_model');

    $retorno = $this->campeonato_model->layoutClassificacaoFinal(2);

    echo json_encode($retorno);

	}

  function ClassificacaoFinalRelatorio(){

		$this->load->model('campeonato_model');

    $retornoRelatorio = $this->campeonato_model->layoutClassificacaoFinal($this->input->post('idcampeonato'));

    // echo json_encode($retornoRelatorio);

    $mostra = "";
    $mostra .= '<div class="text-center">';
    $mostra .= '<span class="font-weight-bold">CLASSIFICACAO FINAL</span>';
    foreach($retornoRelatorio as $retornoRelatorio2){
      $mostra .='<div class="info-box-content" style="width:100%;padding: 16px 0 8px 16px;">';
        foreach($retornoRelatorio2['generos'] as $genero){
          if($genero['categoriaPesos'] != " "){
            $mostra .='<span class="info-box-text text-muted font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;"><u>'.$genero['genero'].'</u></span><br>';
            foreach($genero['categoriaPesos'] as $categoriaPeso){
              if(count($categoriaPeso['classificacaoFinals'])!=0){
            
                  $mostra .='<div style="margin-top: 5px;margin-bottom: 5px;">';
                  $mostra .='<div>';
                      $mostra .='<span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;">Categoria de '.$categoriaPeso['descricao_categoriaPeso'].'kg</span>';
                      $mostra .='</div>';
                      $mostra .='</div>';
                  foreach($categoriaPeso['classificacaoFinals'] as $teste){
                    
                    $mostra .='<div class="text-center" style="padding-left:287px">';
                    $mostra .='<table class="pb-2" style="table-layout: fixed;width:100%;display:inline-table;border-collapse:collapse">';
                    // $mostra .='<colgroup>';
                    // $mostra .='<col>';
                    // $mostra .='<col style="width:100%">';
                    // $mostra .='</colgroup>';
                        $mostra .='<tbody>';
                        $mostra .='<tr">';
                          $mostra .='<th style="width:24px;">';
                            $mostra .='<div>';
                                if($teste['posicao'] == 1){
                                  $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;" height="16">1.</span>';
                                }elseif($teste['posicao'] == 2) {
                                  $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;" height="16">2.</span>';
                                }else{
                                  $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;" height="16">3.</span>';
                                }
                            $mostra .='</div>';
                          $mostra .='</th>';
                            $mostra .='<td>';
                            $mostra .='<div class="user-block">';
                                $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;">'.$teste['name_participante'].' - '.$teste['provincia'].'</span>';
                                $mostra .='<span class="description"></span>';
                                $mostra .='</div>';
                                $mostra .='</td>';
                            $mostra .='</tr>';
                          $mostra .='</tbody>';
                        $mostra .='</table>';
                      $mostra .='</div>';
                  }
              }
            }
          }
        }
      $mostra .='</div>';
    }
    $mostra .='</div>';

    echo $mostra;

	}

  function getClassificacaoCategoriaFinal(){

		$this->load->model('campeonato_model');

    $dados = $this->input->post('dados');


        $dado = [
          "id_categoriapeso" => $dados[0]["id_categoriapeso"]
        ];

        $verifica = $this->campeonato_model->verificaEXIST($dados[0]["id_categoriapeso"]);

        if($verifica == 1){
          echo 55;
        }else{

            $retorno = $this->campeonato_model->setcampeonatoClassificacao($dado);
        
            for($i = 0 ;$i < count($dados); $i++){

              $dados45 = [
                "id_classificacao_campeonato" => $retorno,
                "posicaoDes" => $dados[$i]["posicao"],
                "id_participante" => $dados[$i]["id_participante"],
                "name_participante" => $dados[$i]["name_participante"]
              ];

              $retorno45 = $this->campeonato_model->posicaoclassificacao($dados45);

            }
      
        echo $retorno45;
      
      }
	}

  function getListaParticipanteNacional(){

		$this->load->model('campeonato_model');

    
    $retorno45 = $this->campeonato_model->getListaParticipanteNacionalAS();
  
    echo json_encode($retorno45);
      
	}

  function buscarSelectCategoriaPesoClassificacao(){

		$this->load->model('campeonato_model');

    $genero = $this->input->post('genero');
    $categoriaPeso = $this->input->post('categoriaPeso');
    $idAssociacao = $this->input->post('id_actividade');
    $escalao = $this->input->post('escalao');
    $id_actividade = $this->input->post('idactividadeIO');

    $query = $this->db->query('SELECT id_campeonato FROM campeonato WHERE fk_actividadeC='.$id_actividade.' and id_associacao='.$idAssociacao)->result()[0];
    $id_campeonato_fk = $query->id_campeonato;

    $retorno = $this->campeonato_model->buscarAtletaClassificacao($genero, $categoriaPeso, $id_campeonato_fk, $escalao);
   
  
      if($retorno != 25){

        $mostra;

        $mostra = '<table class="table p-0 mb-0">';
      
        foreach($retorno as $retorno){
                    
          $mostra .= '<tbody>';
                        
          $mostra .= '<tr>';
                                  
          $mostra .= '<td>'.$retorno->nome_participante.'</td>';
          $mostra .= '<td class="nowrap">';
          $mostra .= '<div class="col-5" style="right:0"><select class="form-control form-control-sm bg-info" name="selectClassificacaoLugar4567" name_participante="'.$retorno->nome_participante.'" id_participante45980="'.$retorno->id_participante_campeonato.'">';
          $mostra .= '<option value="0"> ----------//---------- </option>';
          $mostra .= '<option value="1">Primeiro Lugar</option>';
          $mostra .= '<option value="2">Segundo Lugar</option>';
          $mostra .= '<option value="3">Terceiro Lugar</option>';
          $mostra .= '</select></div>';
          $mostra .= '</td>';
          $mostra .= '<td><span class="" style="color:red;border-radius:50%;height:50px;weight:50px"> </span></td>';
                                
          $mostra .= '</tr>';
                            
          $mostra .= '</tbody>';
        }

        $mostra .= '</table>';

        echo $mostra;

      }else{
        echo 0;
      }

	}

  function getEscalaogenero55(){

    $this->load->model('campeonato_model');

    $idEscalaoGenero = $this->input->post('teste');
    $idCampeonato = $this->input->post('id_ddd');

    $retorno = $this->campeonato_model->getEscalaogenero555($idEscalaoGenero, $idCampeonato);

    // foreach($retorno as $retorno){
    //   echo '<option value="'.$retorno->genero.'">'.$retorno->genero.'<option>';
    // }

    echo json_encode($retorno);

  }


  function ordenarArray(){
    
    $this->load->model('campeonato_model');

    $retornoRelatorio = ($this->campeonato_model->layoutClassificacaoProvinciaFinal($this->input->post('idcampeonato')));
    
    for($i=0;$i < count($retornoRelatorio);$i++){
      return $retornoRelatorio[$i]['nome_medalha'];
    }

  }
  
  function ClassificacaoFinalRelatorioProvincia(){

		$this->load->model('campeonato_model');

    $retornoRelatorio = ($this->campeonato_model->layoutClassificacaoProvinciaFinal($this->input->post('idcampeonato')));

    $mostra = "";
    $mostra .= '<div class="text-center">';
    $mostra .= '<span class="font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:16px;text-align: center;">CLASSIFICACAO DAS MEDALHAS POR PROVINCIA</span>';

    uasort($retornoRelatorio, function ($a, $b) {
      return strcmp($b['nome_medalha'], $a['nome_medalha']);
      //Se quiser inverter a ordem basta trocar por return strcmp($b['nome'], $a['nome']);
    });

    // var_dump($retornoRelatorio);
    
    $control = 1;
   
    foreach($retornoRelatorio as $retornoRelatoriof){
      
      $mostra .='<div class="info-box-content" style="width:100%;padding: 16px 0 8px 16px;">';

      // if($retornoRelatorio[$i]['nome_medalha'] > $this->ordenarArray()){
        $mostra .='<span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;"><u>'.$control++.'ª Lugar</u></span><br>';
        $mostra .='<p><span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;"><u>'.$retornoRelatoriof['nome_provincia'].'</u> - </span><span>'.$retornoRelatoriof['nome_medalha'].' Medalhas</span></p>';
        $i=0;
        $a=0;

        foreach($retornoRelatoriof as $medalhas2){
          
            // $mostra .='<span class="" style="font-family: arial,sans-serif;font-weight: normal;">Ouro : </span><span>0</span><br>';
         
            if($i == 0){
            }elseif($i == 1){
            }else{
                $mostra .='<span class="" style="font-family: arial,sans-serif;font-weight: normal;">'.$medalhas2["Medalha"]['Descricao'].'  : </span><span>'.$medalhas2["Medalha"]['quantidade'].'</span><br>';
            }
            $i++;
          
        }

      $mostra .='</div>';
         
    }
    
    $mostra .='</div>';

    echo $mostra;

	}

  function ClassificacaoFinalRelatorioProvincia2(){

		$this->load->model('campeonato_model');

    $retornoRelatorio = ($this->campeonato_model->layoutClassificacaoProvinciaFinal($this->input->post('idcampeonato')));
    

    $mostra = "";
    $mostra .= '<div style="margin-left:164px">';
    $mostra .= '<span class="font-weight-bold" style="font-size:16px;text-align: center;"><strong>CLASSIFICACAO DAS MEDALHAS POR PROVINCIA</strong></span>';
    $mostra .= '</div>';
    $mostra .= ' <div class="text-center" style="margin-left:264px">';
  
    uasort($retornoRelatorio, function ($a, $b) {
      return strcmp($b['nome_medalha'], $a['nome_medalha']);
      //Se quiser inverter a ordem basta trocar por return strcmp($b['nome'], $a['nome']);
    });

    // var_dump($retornoRelatorio);
    
    $control = 1;
   
    foreach($retornoRelatorio as $retornoRelatoriof){
      
      $mostra .='<div class="info-box-content" style="width:100%;padding: 16px 0 8px 16px;">';

      // if($retornoRelatorio[$i]['nome_medalha'] > $this->ordenarArray()){
        $mostra .='<span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;font-size:14px"><u><b>'.$control++.'ª Lugar</b></u></span><br>';
        $mostra .='<p><span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;"><u>'.$retornoRelatoriof['nome_provincia'].'</u> - </span><span>'.$retornoRelatoriof['nome_medalha'].' Medalhas</span></p>';
        $i=0;
        $a=0;

        foreach($retornoRelatoriof as $medalhas2){
          
            // $mostra .='<span class="" style="font-family: arial,sans-serif;font-weight: normal;">Ouro : </span><span>0</span><br>';
         
            if($i == 0){
            }elseif($i == 1){
            }else{
                $mostra .='<span class="" style="font-family: arial,sans-serif;font-weight: normal;">'.$medalhas2["Medalha"]['Descricao'].'  : </span><span>'.$medalhas2["Medalha"]['quantidade'].'</span><br>';
            }
            $i++;
          
        }

      $mostra .='</div>';
         
    }
    
    $mostra .='</div>';
    // $mostra .='</div>';

    echo $mostra;

	}

  function ClassificacaoFinalRelatorio2(){

		$this->load->model('campeonato_model');

    $retornoRelatorio = $this->campeonato_model->layoutClassificacaoFinal($this->input->post('idcampeonato'));

    // echo json_encode($retornoRelatorio);

    $mostra = "";
    $mostra .= '<div class="text-center">';
    $mostra .= '<span class="font-weight-bold" style="margin-left:264px;font-size:16px"><strong>CLASSIFICACAO FINAL</strong></span>';
    foreach($retornoRelatorio as $retornoRelatorio2){
      $mostra .='<div class="info-box-content" style="width:100%;padding: 16px 0 8px 16px;">';
        foreach($retornoRelatorio2['generos'] as $genero){
          if($genero['categoriaPesos'] != " "){
            $mostra .='<span class="info-box-text text-muted font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;margin-left:264px"><u>'.$genero['genero'].'</u></span><br>';
            foreach($genero['categoriaPesos'] as $categoriaPeso){
              if(count($categoriaPeso['classificacaoFinals'])!=0){
            
                  $mostra .='<div style="margin-top: 5px;margin-bottom: 5px;">';
                  $mostra .='<div>';
                      $mostra .='<span class="tsp-fr tsp-flr tsp-pb4 font-weight-bold" style="font-family: arial,sans-serif;font-weight: normal;margin-left:264px"><b>Categoria de '.$categoriaPeso['descricao_categoriaPeso'].'kg</b></span><br>';
                      $mostra .='</div>';
                      $mostra .='</div>';
                  foreach($categoriaPeso['classificacaoFinals'] as $teste){
                    
                    $mostra .='<div class="text-center" style="padding-left:287px">';
                    $mostra .='<table class="pb-2" style="table-layout: fixed;width:100%;display:inline-table;border-collapse:collapse">';
                    // $mostra .='<colgroup>';
                    // $mostra .='<col>';
                    // $mostra .='<col style="width:100%">';
                    // $mostra .='</colgroup>';
                        $mostra .='<tbody>';
                        $mostra .='<tr">';
                          $mostra .='<th style="width:24px;">';
                            $mostra .='<div>';
                                if($teste['posicao'] == 1){
                                  $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;" height="16">1.</span>';
                                }elseif($teste['posicao'] == 2) {
                                  $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;" height="16">2.</span>';
                                }else{
                                  $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;" height="16">3.</span>';
                                }
                            $mostra .='</div>';
                          $mostra .='</th>';
                            $mostra .='<td>';
                            $mostra .='<div class="user-block">';
                                $mostra .='<span style="font-family: arial,sans-serif;font-weight: normal;">'.$teste['name_participante'].' - '.$teste['provincia'].'</span>';
                                $mostra .='<span class="description"></span>';
                                $mostra .='</div>';
                                $mostra .='</td>';
                            $mostra .='</tr>';
                          $mostra .='</tbody>';
                        $mostra .='</table>';
                      $mostra .='</div>';
                  }
              }
            }
          }
        }
      $mostra .='</div>';
    }
    $mostra .='</div>';

    echo $mostra;

	}


}
?>