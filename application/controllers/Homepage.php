<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
	}

	public function index()
	{
		$data['header'] = $this->get_header("Where in Angeles City");
		$this->load->view('index',$data);
	}
}
