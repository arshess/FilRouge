<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	public function index()
	{
		$this->load->view('welcome_message');
	}


	public function connexion()
	{
		$this->load->model('User_model', '', true);
		$this->load->library('Form_validation');
		$this->load->helper('form');
		$this->load->view('template/header');

		$this->form_validation->set_rules('inputEmail', 'email', 'trim|htmlentities|valid_email|required');
		$this->form_validation->set_rules('inputPassword', 'mot de passe ', 'trim|htmlentities|min_length[8]|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('connexion');
		} else {
			$email = $this->input->post('inputEmail');
			$users = $this->User_model->getUser($email);
			// si Y'a des résultats
			foreach ($users as $user) {
				//si Password = password stocké pour ce mail
				if (password_verify($this->input->post('inputPassword'), $user->password)) {
					$this->load->view('/modals/connexionOK');
					//set session et cookies
					// set_cookie('email', $email, 604800);
					$this->session->set_userdata('email',$email);
				} else {
					$this->load->view('modals/connexionIdInconnu');
				}
			}
			$this->load->view('connexion');
		}
		$this->load->view('template/footer');
	}


	public function inscription()
	{
		$this->load->model('User_model', '', true);
		$this->load->library('Form_validation');
		$this->load->helper('form');
		$this->load->view('template/header');
		//set rules
		$this->form_validation->set_rules('inputFirstname', 'prénom', 'trim|ucfirst|htmlentities|required');
		$this->form_validation->set_rules('inputLastname', 'nom de famille', 'trim|ucfirst|htmlentities|required');
		$this->form_validation->set_rules('inputEmail', 'email', 'trim|htmlentities|valid_email|is_unique[user.email]|required');
		$this->form_validation->set_rules('inputPassword', 'mot de passe ', 'trim|htmlentities|min_length[8]|required');
		$this->form_validation->set_rules('inputPassword2', 'confirmation du mot de passe ', 'trim|htmlentities|min_length[8]|matches[inputPassword]|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('inscription');
		} else {
			$firstname = $this->input->post('inputFirstname');
			$lastname  = $this->input->post('inputLastname');
			$email     = $this->input->post('inputEmail');
			$password  = password_hash($this->input->post('inputPassword'), PASSWORD_DEFAULT);
			if ($this->User_model->addUser($firstname, $lastname, $email, $password)) {
				$this->load->view('modals/inscription1ok');
				$this->load->view('inscription');
			}
		}
		$this->load->view('template/footer');
	}


	public function deconnexion()
	{
		$this->load->view('template/header');
		if ($this->session->userdata('email')) {
			$this->session->unset_userdata('email');
			$this->session->sess_destroy();
			if (get_cookie('email')) {
				delete_cookie('email');
				$this->load->view('modals/deconnexion');
				$this->load->view('connexion');
				$this->load->view('template/footer');
			}
		}
	}
}
