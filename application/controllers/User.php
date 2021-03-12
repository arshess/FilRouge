<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


	// public function index()
	// {
	// 	$this->load->view('template/header');
	// 	$this->load->view('reservation');
	// 	$this->load->view('template/footer');
	// }
	public function index()
	{
		$data['types'] = $this->user_model->getTypes();
		// $data['modeles'] = $this->user_model->getModeles();
		// $data['marques'] = $this->user_model->getMarques();
		$this->load->view('template/header');
		$this->load->view('reservation', $data);
		$this->load->view('template/footer');
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
					$this->session->set_userdata('email', $email);
				} else {
					$this->load->view('modals/connexionIdInconnu');
				}
			}
			if (sizeof($users) == 0) {
				$this->load->view('modals/connexionIdInconnu');
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
			$this->load->view('modals/deconnexion');
			$this->load->view('connexion');
			$this->load->view('template/footer');
		}
	}


	public function showProfil()
	{
		$this->load->model('User_model', '', true);
		$this->load->view('template/header');
		if ($this->session->userdata('email')) {
			$data = $this->User_model->getUser($this->session->userdata('email'));
			if($data[0]->avatar==null){
				$data[0]->avatar = 'defaut.png';
			}
			$this->load->view('profil', $data[0]);
		} else {			
			$this->load->view('modals/connexionnecessaire');
			$this->load->view('connexion');
		}
		$this->load->view('template/footer');
	}


	public function updateProfil()
	{
	}
	public function fetch()
	{
		$this->load->model('user_model');
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
			$type = $this->input->post('type');
		}
		$data = $this->user_model->fetchModele($query,$type);
		echo json_encode($data->result());
	}
	public function fetchMarque()
	{
		$this->load->model('user_model');
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->user_model->fetchMarque($query);
		echo json_encode($data->result());
	}
	public function getVehicule()
	{
		$this->load->model('user_model');
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
			$type = $this->input->post('type');
		}
		$data = $this->user_model->getVehicule($query,$type);
		echo json_encode($data->result());
	}
	// public function getVehiculeDispo()
	// {
	// 	$date='2022-12-03 14:00:00';
	// 	$query=2;
	// 	$type=3;
	// 	$this->load->model('user_model');
	// 	if ($this->input->post('query')) {
	// 		$query = $this->input->post('query');
	// 		$type = $this->input->post('type');
	// 		$date = $this->input->post('date');
	// 	}
	// 	$data = $this->user_model->getVehicule($date, $query, $type);
	// 	echo json_encode($data->result());
	// }
	
}
