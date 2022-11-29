<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;

class estatistica extends CI_Controller
{
	function __construct()
  {
    parent::__construct();
  }

  public function atletaPDF($id = null){
    // $retorno = $this->trazeTodos();
    $this->load->model('Mandato_model','Mandato');

    $dado['orgaos'] = $this->Mandato->setmembroMandato($id);

    return $this->load->view('pdfs/orgao_social', $dado);
  }

  public function GerarPDF($id = null)
  {
  //$retorno = $this->trazeTodos();

    $this->load->model('Mandato_model','Mandato');

    $dado['orgaos'] = $this->Mandato->setmembroMandato($id);


    // $teste = $this->atletaPDF($id);

    $this->load->library('pdf');

    ob_start();

    $this->load->view('pdfs/orgao_social.php',$dado);

    $this->dompdf->loadHtml(ob_get_clean());

    $this->dompdf->setPaper('A4');

    $this->dompdf->render();

    $this->dompdf->stream('welcome.pdf', ["Attachment" => false]);
  }


  public function pergarCargosEditar(){

    $this->load->model('crud_model','cru');

    $id = $this->input->post('id_orgao');

    $returno = $this->cru->getCargos($id);

    foreach($returno as $n){
            echo "<option value='{$n->nome_cargo}'>$n->nome_cargo</option>";
    }


  }


public function verEstatistica()
{
  $this->load->model('Atleta_Model','atleta');

  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));
  // $dado['TotalAtleta'] = $this->atleta->totalAtleta();
  // $dado['totalAtletaMasculino'] = $this->atleta->totalAtletaMasculino();
  // $dado['totalAtletaFemenino'] = $this->atleta->totalAtletaFemenino();

  // var_dump($dado['totalAtletaMasculino']);

  if($this->session->userdata('valida'))
  {
    $this->template->load('template','ver/estatistica.php',$dado);
  }else{
    redirect('App/index');
  }

}

public function NumeroAtleta()
{
  $this->load->model('Atleta_Model','atleta');

  $dado['menus'] = $this->Menu_model->obterMenus($this->session->userdata('id_role'));

  $TotalAtleta = $this->atleta->totalAtleta();
  $totalAtletaMasculino = $this->atleta->totalAtletaMasculino();
  $totalAtletaFemenino = $this->atleta->totalAtletaFemenino();

	$mostra = [];

	$mostra = [
		'totalAtletaMasculino' => $totalAtletaMasculino,
		'totalAtletaFemenino' => $totalAtletaFemenino
	];

	// $teste = implode(',', $mostra);


  echo json_encode($mostra);

}

public function NumeroArbitro()
{
  $this->load->model('Arbitro_Model','Arbitro');

  $internacionalMasc = $this->Arbitro->getAllArbitroInternacionalMas();
  $internacionalFem = $this->Arbitro->getAllArbitroInternacionalFem();

	$NacionalMas = $this->Arbitro->getAllArbitroNacionalMasc();
	$NacionalFem = $this->Arbitro->getAllArbitroNacionalFem();

	$ProvincialMasc = $this->Arbitro->getAllArbitroProvincialMasc();
	$ProvincialFem = $this->Arbitro->getAllArbitroProvincialFem();


	// var_dump($dados['nome_categoria_fk']);
	$mostra = [];
	//
	$A_provincial = [
		'totalAtletaMasculino' => $ProvincialMasc[0]->quantidade,
		'totalAtletaFemenino' => $ProvincialFem[0]->quantidade
	];

	array_push($mostra, $A_provincial);

	$A_nacional = [
		'totalAtletaMasculino' => $NacionalMas[0]->quantidade,
		'totalAtletaFemenino' => $NacionalFem[0]->quantidade
	];

	array_push($mostra, $A_nacional);

	$A_internacional = [
		'totalAtletaMasculino' => $internacionalMasc[0]->quantidade,
		'totalAtletaFemenino' => $internacionalFem[0]->quantidade
	];

	array_push($mostra, $A_internacional);
	// $teste = implode(',', $mostra);


  echo json_encode($mostra);

}

public function listarMandatoOrgaoMembroView($id = null)
{

  $this->load->model('crud_model','cru');

  $id = $this->input->post('id_orgao');
  $id1 =  $this->input->post('id_orgao_social');

  $orgaos = $this->cru->getMembro($id,$id1);

  echo json_encode($orgaos);
}


}

?>
