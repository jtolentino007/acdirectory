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
          redirect(base_url().'administration');
      }
    }

    function ReturnView($layout,$component,$data2=null)
    {
      $view = ($this->get_called_function() == 'index' ? get_called_class() : get_called_function());
      $data['title'] = str_replace("_"," ",$view);
      $data['RenderBody'] = $this->load->view(strtolower($view).'/'.$component.'.php','',TRUE);
      $merged_data = array_merge($data,$data2);
      $this->load->view('partials/'.$layout,$merged_data);
    }

    function get_called_function() {
      $caller = debug_backtrace();
      $caller = $caller[2];
      $r = $caller['function'];
      return $r;
    }

    function end_session(){
      session_destroy();
      redirect(base_url().'login');
    }

    function get_numeric_value($str){
      return (float)str_replace(',','',$str);
    }

}
