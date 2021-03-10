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
					set_cookie('email',$email,604800);

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
		// $passwordInputed = password_hash($this->input->post('inputPassword'),PASSWORD_DEFAULT);
	}
}
