<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yi_San_Korean_Restaurant extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
	}

	public function index()
	{
		$data['header'] = $this->get_header("Where in Angeles City");
		$data['header_nav'] = $this->get_header_nav();
		$data['footer'] = $this->get_footer();
		$data['js_footer'] = $this->get_js();
		$this->load->view('yisan_view',$data);
	}
}
