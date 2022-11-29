<?php

defined('BASEPATH') OR exit('No direct script access allowed');


//este controlador vai gerir tudo que tem haver com o atleta;


class geradorCodigoBarra extends CI_Controller{

  // function __construct() {
  // 	parent::__construct();
  // 	$this->load->database();
  // 	$this->load->library('ci_qr_code');
  //   $this->config->load('qr_code');
  // }

  function print_qr()
  {
  	  $user_id=$this->input->post('sample');
      $qr_code_config = array();
      $qr_code_config['cacheable'] = $this->config->item('cacheable');
      $qr_code_config['cachedir'] = $this->config->item('cachedir');
      $qr_code_config['imagedir'] = $this->config->item('imagedir');
      $qr_code_config['errorlog'] = $this->config->item('errorlog');
      $qr_code_config['ciqrcodelib'] = $this->config->item('ciqrcodelib');
      $qr_code_config['quality'] = $this->config->item('quality');
      $qr_code_config['size'] = $this->config->item('size');
      $qr_code_config['black'] = $this->config->item('black');
      $qr_code_config['white'] = $this->config->item('white');
      $this->ci_qr_code->initialize($qr_code_config);

      // get full name and user details
      $user_details = $this->UserModel->get_users_one($user_id);
      $image_name = $user_id . ".png";

      // create user content
      $codeContents = "Name:";
      $codeContents .= "$user_details->emp_fname";
  	  $codeContents .= "\n";
      $codeContents .= " DOB:";
      $codeContents .= "$user_details->emp_dob";
      $codeContents .= "\n";
      $codeContents .= "ID No :";
      $codeContents .= $user_details->emp_id;
      $params['data'] = $codeContents;
      $params['level'] = 'H';
      $params['size'] = 2;

      $params['savename'] = FCPATH . $qr_code_config['imagedir'] . $image_name;
      $this->ci_qr_code->generate($params);
      $this->data['qr_code_image_url'] = base_url() . $qr_code_config['imagedir'] . $image_name;

      // save image path in tree table
     $this->User->change_userqr($user_id, $image_name);
      // then redirect to see image link
      $file = $params['savename'];
      if(file_exists($file)){
      	$target = 'global/tmp/qr_codes'.$file;
          redirect('home');
      }
  }
}
?>
