<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backupbanco extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->helper('download');
        $this->load->library('zip');
    }

    function fazerBackupBanco(){

      $this->auth->check_logged(0,$this->router->class , $this->router->method);

       $this->load->dbutil();
       $db_format=array('format'=>'zip','filename'=>'KEDA_BACKUP.sql');
       $backup=& $this->dbutil->backup($db_format);
       $dbname='backup-'.date('d-m-Y').'.zip';
       $save='db_backup/'.$dbname;
       write_file($save,$backup);
      return force_download($dbname,$backup);

    }

    function gerenciarBackup(){

      $this->auth->check_logged(0,$this->router->class , $this->router->method);

        if($this->session->userdata('valida')){
            $data['menus'] = $this->Menu_model->obterMenus($this->session->userdata('role'));
            $this->template->load('template','ver/gerenciar_backup', $data);
          }else{
            redirect('App/index');
          }

    }

    // function __construct(){

    // }

    // function index(){
    //   $this->build_backups();
    // }

    // function build_backups(){
    //   $date = date("Y-m-d");
    //   $this->database_backup($date);
    //   $this->project_backup($date);
    //   $this->send_backup($date);
    // }

    // function database_backup($date){
    //   $this->load->helper('file');
    //   $this->load->dbutil();
    //   @ $backup =& $this->dbutil->backup();
    //   write_file('global/database_'.$date.'.zip', $backup);
    // }

    // function project_backup($date){
    //   $this->load->library('zip');

    //   $this->zip->read_dir(FCPATH,FALSE);
    //   $this->zip->archive('global/project_'.$date.'.zip');

    // }

    // function send_backup($date){

    // }
}

?>
