<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
	}

	public function index()
	{
		$data['cms_header'] = $this->get_cms_header("Admin");
		$data['cms_top_bar'] = $this->get_cms_top_bar();
		$data['cms_footer'] = $this->get_cms_footer();
		$data['cms_left_panel'] = $this->get_cms_left_panel();
		$data['cms_right_panel'] = $this->get_cms_right_panel();
		$data['cms_js'] = $this->get_cms_js();
		$this->load->view('admin_view',$data);
	}
}
