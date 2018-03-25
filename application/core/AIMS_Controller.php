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

    function get_cms_header($title)
    {
      $data['title'] = $title;
      return $this->load->view('partials/cms_header',$data,TRUE);
    }

    function get_header_nav()
    {
      return $this->load->view('partials/header_nav','',TRUE);
    }

    function get_cms_top_bar()
    {
      return $this->load->view('partials/cms_top_bar','',TRUE);
    }

    function get_footer()
    {
      return $this->load->view('partials/footer','',TRUE);
    }

    function get_cms_footer()
    {
      return $this->load->view('partials/cms_footer','',TRUE);
    }

    function get_cms_left_panel()
    {
      return $this->load->view('partials/cms_left_panel','',TRUE);
    }

    function get_cms_right_panel()
    {
      return $this->load->view('partials/cms_right_panel','',TRUE);
    }

    function get_js()
    {
      return $this->load->view('partials/js_footer','',TRUE);
    }

    function get_cms_js()
    {
      return $this->load->view('partials/js_cms','',TRUE);
    }

    function get_cms_css()
    {
      return $this->load->view('partials/cms_css','',TRUE);
    }

    function end_session(){
        session_destroy();
        redirect(base_url().'login');
    }

    function get_numeric_value($str){
        return (float)str_replace(',','',$str);
    }




}
