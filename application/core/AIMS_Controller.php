<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AIMS_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
    }


    function validate_session(){
        if(!$this->ion_auth->logged_in()){
            redirect(base_url().'authentication');
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
