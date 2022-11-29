<?php


function get_tema()
{
	$ci =& get_instance();
	$ci->load->library('sistema');
	return $ci->sistema->tema;
}

function set_tema($propriedade,$valor,$replace = TRUE)
{
	$ci =& get_instance();
	$ci->load->library('sistema');
	
	if ($replace):
		$ci->sistema->tema[$propriedade] = $valor;
	else:
		if (!isset($ci->sistema->tema[$propriedade]))$ci->sistema->tema[$propriedade] = "";
		$ci->sistema->tema[$propriedade] .= $valor;
	endif;
}

function load_template()
{
	$ci =& get_instance();
	$ci->load->library('sistema');
	if (isset($ci->sistema->tema['header'])){
		$ci->parser->parse($ci->sistema->tema['header'], get_tema());
	}
	if (isset($ci->sistema->tema['template'])){
		$ci->parser->parse($ci->sistema->tema['template'], get_tema());
	}
	if (isset($ci->sistema->tema['footer'])){
		$ci->parser->parse($ci->sistema->tema['footer'], get_tema());
	}			
}

function get_data_form($campo, $tipo='post')
{
	$ci =& get_instance();
	return $ci->input->$tipo($campo);
}

function init_painel()
{
	set_tema('header','painel/header');
	set_tema('footer','painel/footer');
	set_tema('template','painel/index');
}

function set_dashboard($nome=NULL){
	set_tema('dashboard', $nome);
}

function uploadImage($tmp,$nome,$whidth,$dir='blog/')
{
	$ext = substr($nome, -3);
	$dir = 'uploads/'.$dir; 

	switch ($ext) { 
		case 'jpg':
		case 'JPG':
					$img = imagecreatefromjpeg($tmp);
			break;
		case 'png':
					$img = imagecreatefrompng($tmp);
			break;
		case 'gif':
					$img = imagecreatefromgif($tmp);
			break;
		default:
			break;
	}

	$x = imagesx($img);
	$y = imagesy($img);
	$height = ($whidth * $y) / $x;

	$nova = imagecreatetruecolor($swidth, $height);

	imagealphablending($nova, FALSE);
	imagesavealpha($nova, TRUE);
	imagecopyresampled($nova, $img, 0, 0, 0, 0, $swidth, $height, $x, $y);
	$nome_nova_image = $pasta.md5($nome.time()).'.'.$ext;
	switch ($ext) {
		case 'jpg': imagejpeg($nova, $nome_nova_image, 100);break;
		case 'png': imagejpeg($nova, $nome_nova_image, 100);break;
		case 'gif': imagejpeg($nova, $nome_nova_image, 100);break;
	}
	imagedestroy($img);
	imagedestroy($nova);
	return $nome_nova_image;
}

function uploadImage1()
{
	$formatosPermitidos = array("png","jpg","jpeg","gif");
	var_dump($FILES);
	
}

