<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller{

    public function index(){
    
      $data['title'] = 'Latest ';

      $this->load->view('templates/header.php');
      $this->load->view('Posts/index', $data);
      $this->load->view('templates/footer.php');
      
    }

}