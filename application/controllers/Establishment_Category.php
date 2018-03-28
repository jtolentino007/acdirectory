<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Establishment_category extends AIMS_Controller
{
	function __construct()
	{
		parent::__construct('');
		$this->load->model('Establishment_category_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['est_categories'] = $this->Establishment_category_model->get_est_categories();
		$this->ReturnView('_layout','index');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create new Establishment Category';

		$config = array(
			array(
				'field' => 'est_category_name',
				'label' => 'Establishment Category name',
				'rules' => 'required'
			),
			array(
				'field' => 'est_category_desc',
				'label' => 'Establishment Category Description',
				'rules' => 'required'
			)
		);

		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE)
		{
			$this->ReturnView('_layout');
		}
	}
}
