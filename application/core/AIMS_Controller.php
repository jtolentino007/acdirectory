<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AIMS_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    function validate_session(){
        if(!$this->session->user_id){
            redirect(base_url().'login');
        }
    }

    function get_header($title)
    {
      $data['title'] = $title;
      return $this->load->view('partials/header',$data,TRUE);
    }

    function end_session(){
        session_destroy();
        redirect(base_url().'login');
    }

    function get_numeric_value($str){
        return (float)str_replace(',','',$str);
    }




}
