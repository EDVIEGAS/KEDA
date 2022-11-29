<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* @property user_model $user */
include_once(APPPATH.'core/Front_end.php');

class Qr_code_generate extends Front_end
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->library('ci_qr_code');
        $this->config->load('qr_code');


    }

    /**
     * success_link
     * to display user info and see print link
     * @access public
     * @param user_id
     * @return
     */
    // function index(){
    //     $data['user']=$this->user->get_random_user();
    //     $this->view('content/qr_code',$data);
    // }


    /**
     * print_qr
     *
     * @access public
     * @param user_id
     * @return
     */
    function print_qr($user_id)
    {
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
        $user_details = $this->user->get_users_one($user_id);
        $image_name = $user_id . ".png";

        // create user content
        $codeContents = "user_name:";
        $codeContents .= "user_details->user_name";
        $codeContents .= " user_address:";
        $codeContents .= "user_details->user_address";
        $codeContents .= "\n";
        $codeContents .= "user_email :";
        $codeContents .= "user_details->user_email";

        $params['data'] = $codeContents;
        $params['level'] = 'H';
        $params['size'] = 2;

        $params['savename'] = FCPATH . $qr_code_config['imagedir'] . $image_name;
        $this->ci_qr_code->generate($params);

        $this->data['qr_code_image_url'] = base_url() . $qr_code_config['imagedir'] . $image_name;//eeeeeeeeeeeeeeeeeeeeeeeeeeee

       //  save image path in tree table
       // $this->User->change_userqr($user_id, $image_name);
       //  then redirect to see image link
        $file = $params['savename'];

        return $image_name;

        // if(file_exists($file)){
        //   $target = 'global/tmp/qr_codes'.$file;
        //     redirect('home');
        // }


    }

}
// END qr_code_generate Controller class
/* End of file qr_code_generate.php */
/* Location: ./application/controllers/qr_code_generate.php */
