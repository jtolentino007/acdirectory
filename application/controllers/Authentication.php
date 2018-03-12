<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Authentication extends AIMS_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->library(array('ion_auth', 'form_validation'));
      $this->load->helper(array('url','language'));

      $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter','ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

      $this->lang->load('auth');
    }

    public function index()
    {
      $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['identity'] = array('name' => 'identity',
				'id' => 'identity',
        'class' => 'form-control',
				'type' => 'text',
				'value' => $this->form_validation->set_value('identity'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'password',
        'class' => 'form-control',
				'type' => 'password',
			);

      if($this->ion_auth->logged_in()){
        redirect(base_url().'Dashboard');
      } else {
        $this->load->view('auth/login',$this->data);
      }
    }

    public function login()
  	{
  		$this->data['title'] = $this->lang->line('login_heading');

  		// validate form input
  		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required');
  		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required');

  		if ($this->form_validation->run() === TRUE)
  		{
  			// check to see if the user is logging in
  			// check for "remember me"
  			$remember = (bool)$this->input->post('remember');

  			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
  			{
  				//if the login is successful
  				//redirect them back to the home page
  				$this->session->set_flashdata('message', $this->ion_auth->messages());
  				redirect(base_url().'Dashboard', 'refresh');
  			}
  			else
  			{
  				// if the login was un-successful
  				// redirect them back to the login page
  				$this->session->set_flashdata('message', $this->ion_auth->errors());
  				redirect('Authentication/login', 'refresh'); // use redirects instead of loading views for compatibility with MY_Controller libraries
  			}
  		}
  		else
  		{
  			// the user is not logging in so display the login page
  			// set the flash data error message if there is one
  			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

  			$this->data['identity'] = array('name' => 'identity',
  				'id' => 'identity',
          'class' => 'form-control',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('identity'),
  			);
  			$this->data['password'] = array('name' => 'password',
  				'id' => 'password',
          'class' => 'form-control',
  				'type' => 'password',
  			);

  			$this->load->view('auth/login', $this->data);
  		}
  	}

    public function logout()
  	{
  		$this->data['title'] = "Logout";

  		// log the user out
  		$logout = $this->ion_auth->logout();

  		// redirect them to the login page
  		$this->session->set_flashdata('message', $this->ion_auth->messages());
  		redirect(base_url().'Authentication/login', 'refresh');
  	}

    public function forgot_password()
  	{
  		// setting validation rules by checking whether identity is username or email
  		if ($this->config->item('identity', 'ion_auth') != 'email')
  		{
  			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_identity_label'), 'required');
  		}
  		else
  		{
  			$this->form_validation->set_rules('identity', $this->lang->line('forgot_password_validation_email_label'), 'required|valid_email');
  		}


  		if ($this->form_validation->run() === FALSE)
  		{
  			$this->data['type'] = $this->config->item('identity', 'ion_auth');
  			// setup the input
  			$this->data['identity'] = array('name' => 'identity',
  				'id' => 'identity',
  			);

  			if ($this->config->item('identity', 'ion_auth') != 'email')
  			{
  				$this->data['identity_label'] = $this->lang->line('forgot_password_identity_label');
  			}
  			else
  			{
  				$this->data['identity_label'] = $this->lang->line('forgot_password_email_identity_label');
  			}

  			// set any errors and display the form
  			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
  			$this->load->view('auth/forgot_password', $this->data);
  		}
  		else
  		{
  			$identity_column = $this->config->item('identity', 'ion_auth');
  			$identity = $this->ion_auth->where($identity_column, $this->input->post('identity'))->users()->row();

  			if (empty($identity))
  			{

  				if ($this->config->item('identity', 'ion_auth') != 'email')
  				{
  					$this->ion_auth->set_error('forgot_password_identity_not_found');
  				}
  				else
  				{
  					$this->ion_auth->set_error('forgot_password_email_not_found');
  				}

  				$this->session->set_flashdata('message', $this->ion_auth->errors());
  				redirect(base_url()."authentication/forgot_password", 'refresh');
  			}

  			// run the forgotten password method to email an activation code to the user
  			$forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item('identity', 'ion_auth')});

  			if ($forgotten)
  			{
  				// if there were no errors
  				$this->session->set_flashdata('message', $this->ion_auth->messages());
  				redirect(base_url()."authentication/login", 'refresh'); //we should display a confirmation page here instead of the login page
  			}
  			else
  			{
  				$this->session->set_flashdata('message', $this->ion_auth->errors());
  				redirect(base_url()."authentication/forgot_password", 'refresh');
  			}
  		}
  	}
  }

?>
