<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Administration extends AIMS_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->library(array('ion_auth', 'form_validation', 'session'));
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

    public function register()
  	{
  		$this->data['title'] = $this->lang->line('create_user_heading');

  		$tables = $this->config->item('tables', 'ion_auth');
  		$identity_column = $this->config->item('identity', 'ion_auth');
  		$this->data['identity_column'] = $identity_column;

  		// validate form input
  		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'trim|required');
  		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'trim|required');
  		if ($identity_column !== 'email')
  		{
  			$this->form_validation->set_rules('identity', $this->lang->line('create_user_validation_identity_label'), 'trim|required|is_unique[' . $tables['users'] . '.' . $identity_column . ']');
  			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email');
  		}
  		else
  		{
  			$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'trim|required|valid_email|is_unique[' . $tables['users'] . '.email]');
  		}
  		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'trim');
  		$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'trim');
  		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
  		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

  		if ($this->form_validation->run() === TRUE)
  		{
  			$email = strtolower($this->input->post('email'));
  			$identity = ($identity_column === 'email') ? $email : $this->input->post('identity');
  			$password = $this->input->post('password');

  			$additional_data = array(
  				'first_name' => $this->input->post('first_name'),
  				'last_name' => $this->input->post('last_name'),
  				'company' => $this->input->post('company'),
  				'phone' => $this->input->post('phone'),
  			);
  		}
  		if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data))
  		{
  			// check to see if we are creating the user
  			// redirect them back to the admin page
  			$this->session->set_flashdata('message', $this->ion_auth->messages());
  			redirect(base_url()."administration", 'refresh');
  		}
  		else
  		{
  			// display the create user form
  			// set the flash data error message if there is one
  			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

  			$this->data['first_name'] = array(
  				'name' => 'first_name',
  				'id' => 'first_name',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('first_name'),
  			);
  			$this->data['last_name'] = array(
  				'name' => 'last_name',
  				'id' => 'last_name',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('last_name'),
  			);
  			$this->data['identity'] = array(
  				'name' => 'identity',
  				'id' => 'identity',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('identity'),
  			);
  			$this->data['email'] = array(
  				'name' => 'email',
  				'id' => 'email',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('email'),
  			);
  			$this->data['company'] = array(
  				'name' => 'company',
  				'id' => 'company',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('company'),
  			);
  			$this->data['phone'] = array(
  				'name' => 'phone',
  				'id' => 'phone',
  				'type' => 'text',
  				'value' => $this->form_validation->set_value('phone'),
  			);
  			$this->data['password'] = array(
  				'name' => 'password',
  				'id' => 'password',
  				'type' => 'password',
  				'value' => $this->form_validation->set_value('password'),
  			);
  			$this->data['password_confirm'] = array(
  				'name' => 'password_confirm',
  				'id' => 'password_confirm',
  				'type' => 'password',
  				'value' => $this->form_validation->set_value('password_confirm'),
  			);

  			$this->load->view('auth/create_user', $this->data);
  		}
  	}

    public function authenticate()
  	{
  		$this->data['title'] = $this->lang->line('login_heading');

  		// validate form input
  		$this->form_validation->set_rules('identity', str_replace(':', '', $this->lang->line('login_identity_label')), 'required', 'Username or Email Address is required');
  		$this->form_validation->set_rules('password', str_replace(':', '', $this->lang->line('login_password_label')), 'required', 'Password is required');

  		if ($this->form_validation->run() === TRUE)
  		{
  			// check to see if the user is logging in
  			// check for "remember me"
  			$remember = (bool)$this->input->post('remember');

  			if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
  			{
  				//if the login is successful
  				//redirect them back to the home page
          $user = $this->ion_auth->user()->row();

          $newdata = array(
           'username'  => $user->first_name.' '.$user->last_name,
           'email'     => $user->email
          );

          $this->session->set_userdata($newdata);

          $response['status'] = "success";
          $response['message'] = $this->ion_auth->messages();
          echo json_encode($response);
  			}
  			else
  			{
  				// if the login was un-successful
  				// redirect them back to the login page
          $response['status'] = "error";
          $response['message'] = $this->ion_auth->errors();
          echo json_encode($response);
  			}
  		}
  		else
  		{
        if (form_error('identity') == null && form_error('password') == null)
        {
          redirect(base_url().'administration');
        } else {
          $response['status'] = "error";
          $response['message'] = form_error('identity').form_error('password');
          echo json_encode($response);
        }
  		}
  	}

    public function logout()
  	{
  		$this->data['title'] = "Logout";

  		// log the user out
  		$logout = $this->ion_auth->logout();

  		// redirect them to the login page
  		$this->session->set_flashdata('message', $this->ion_auth->messages());
  		redirect(base_url().'administration', 'refresh');
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
