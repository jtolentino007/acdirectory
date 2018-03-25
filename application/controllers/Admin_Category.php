<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Category extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['cms_header'] = $this->get_cms_header("Main Category");
		$data['cms_top_bar'] = $this->get_cms_top_bar();
		$data['cms_footer'] = $this->get_cms_footer();
		$data['cms_left_panel'] = $this->get_cms_left_panel();
		$data['cms_right_panel'] = $this->get_cms_right_panel();
		$data['cms_js'] = $this->get_cms_js();

		$this->load->view('cms_category_view',$data);
	}
}
