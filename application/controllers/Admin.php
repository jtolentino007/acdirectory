<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
		$this->validate_session();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
	}

	public function index()
	{
		$this->ReturnView('_layout');
	}
}
