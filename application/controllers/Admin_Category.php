<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Category extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
		$this->validate_session();
		$this->load->model('Establishment_category_model');
	}

	public function index()
	{
		$this->ReturnView('_layout');
	}
}
?>
