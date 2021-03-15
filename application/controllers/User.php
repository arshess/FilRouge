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
	public function index($page = 0)
	{
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/FILROUGE/index.php/User/index';
		$config['per_page'] = 10;
		$config['num_links'] = 10;
		$config['total_rows'] = $this->user_model->compteRow();
		$this->pagination->initialize($config);
		$data['types'] = $this->user_model->getTypes();
		$data['vehicule'] = $this->user_model->getVehicule($query = null, $type = null, $config['per_page'], $page);
		// $data['modeles'] = $this->user_model->getModeles();
		// $data['marques'] = $this->user_model->getMarques();
		$this->load->view('template/header');
		$this->load->view('reservation', $data);
		$this->load->view('template/footer');
	}


	public function connexion($return = null)
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
					$data['return'] = $return;
					$this->load->view('/modals/connexionOK', $data);
					$this->session->set_userdata('id', $user->user_id);
					$this->session->set_userdata('email', $email);
					// pas fan, mais trop tard pour utiliser une requete sql pour check a chaque chargement du header
					$this->session->set_userdata('admin', $user->admin);
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
			if ($data[0]->avatar == null) {
				$data[0]->avatar = 'defaut.png';
				
			}
			$data[0]->IdCard = $this->censure($data[0]->IdCard);
			$data[0]->driverLicense = $this->censure($data[0]->driverLicense);
			$this->load->view('profil', $data[0]);
		} else {
			$this->load->view('modals/connexionnecessaire');
			$this->load->view('connexion');
		}
		$this->load->view('template/footer');
	}
	public function updateProfil()
	{
		$this->load->model('User_model', '', true);
		$this->load->library('Form_validation');
		$this->load->helper('form');
		$this->load->view('template/header');
		if ($this->session->userdata('id')) {
			$config['upload_path']          = './public/images/avatar/';
			$config['allowed_types']        = 'gif|jpg|png';
			// $config['max_size']             = 10000;
			// $config['max_width']            = 2000;
			// $config['max_height']           = 2000;
			$config['overwrite']            = TRUE;
			$config['file_name']            = $this->session->userdata('id');

			$this->load->library('upload', $config);
			// $this->form_validation->set_rules('inputAvatar', 'avatar', 'trim|htmlentities');
			$this->form_validation->set_rules('inputLastname', 'nom de famille', 'ucfirst|trim|htmlentities|required');
			$this->form_validation->set_rules('inputFirstname', 'prénom', 'ucfirst|trim|htmlentities|required');
			$this->form_validation->set_rules('inputbirthDate', 'inputbirthDate', 'trim|htmlentities|required');
			$this->form_validation->set_rules('inputAddress', 'adresse', 'trim|htmlentities|required');
			$this->form_validation->set_rules('inputZipcode', 'code postal', array('trim', 'htmlentities', 'regex_match[/^(([0-9]{2}|(2A|2a|2B|2b))([0-9]){3})$/]', 'alpha_numeric', 'required'));
			$this->form_validation->set_rules('inputCity', 'ville', 'ucfirst|trim|htmlentities|required');
			$this->form_validation->set_rules('inputIdCard', 'date d\'identité', 'trim|htmlentities|alpha_numeric|max_length[15]|required');
			$this->form_validation->set_rules('inputDriverLicense', 'permis de conduire', array('trim', 'htmlentities', 'max_length[19]', 'alpha_numeric', 'regex_match[/^([a-zA-Z0-9]{1,15})([0-9]{4})$/]', 'required'));
			$this->form_validation->set_rules('inputEmail', 'email', 'trim|htmlentities|valid_email|required');
			if ($this->form_validation->run() == FALSE) {
				$data = $this->User_model->getUser($this->session->userdata('email'));
				if ($data[0]->avatar == null) {
					$data[0]->avatar = 'defaut.png';
				}
				$this->load->view('updateprofil', $data[0]);
			} else {
				$id        = $this->session->userdata('id');
				$firstname = $this->input->post('inputFirstname');
				$lastname  = $this->input->post('inputLastname');
				$birthdate = $this->input->post('inputbirthDate');
				$address   = $this->input->post('inputAddress');
				$zipcode   = $this->input->post('inputZipcode');
				$city      = $this->input->post('inputCity');
				$idcard    = $this->input->post('inputIdCard');
				$license   = $this->input->post('inputDriverLicense');
				$email     = $this->input->post('inputEmail');
				// var_dump($_FILES('inputAvatar'));
				if ($_FILES['inputAvatar'] != null) {

					if ($this->upload->do_upload('inputAvatar')) {
						$avatar = $this->upload->data('file_name');
						// si l'image est trop grande, on la resize
						if ($this->upload->data('image_width') > 300 || $this->upload->data('image_height') > 300) {
							$config['image_library']  = 'gd2';
							$config['source_image']   = './public/images/avatar/' . $avatar;
							$config['create_thumb']   = TRUE;
							$config['image_library']  = 'gd2';
							$config['source_image']   = './public/images/avatar/' . $avatar;
							$config['create_thumb']   = TRUE;
							$config['maintain_ratio'] = TRUE;
							$config['width']          = 200;
							$config['height']         = 200;

							$this->load->library('image_lib', $config);
							$this->image_lib->resize();
						}

						if ($this->User_model->updateProfil($id, $firstname, $lastname, $birthdate, $address, $zipcode, $city, $idcard, $license, $email, $avatar)) {
							$this->load->view('modals/updateOK');
						}
					}
				} else {

					if ($this->User_model->updateProfil($id, $firstname, $lastname, $birthdate, $address, $zipcode, $city, $idcard, $license, $email)) {
						$this->load->view('modals/updateOK');
					}
				}
			}
		} else {
			$this->load->view('modals/connexionnecessaire');
			$this->load->view('connexion');
		}
		$this->load->view('template/footer');
	}
	public function fetch()
	{
		$this->load->model('user_model');
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
			$type = $this->input->post('type');
		}
		$data = $this->user_model->fetchModele($query, $type);
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
			$limit = $this->input->post('limit');
			$page = $this->input->post('page');
		}
		$data = $this->user_model->getVehicule($query, $type, $limit, $page);
		echo json_encode($data);
	}
	// public function getVehiculeDispo()
	// {

	// 	$date = '';
	// 	$query = '';
	// 	$type = '';
	// 	$this->load->model('user_model');
	// 	if ($this->input->post('query')) {
	// 		$query = $this->input->post('query');
	// 		$type = $this->input->post('type');
	// 		$date = $this->input->post('date');
	// 	}
	// 	$data = $this->user_model->getVehicule($date, $query, $type);
	// 	echo json_encode($data->result());
	// }

	private function censure($string)
	{
		$length = strlen($string);
		$result = '';
		for ($i = 0; $i < strlen($string); $i++) {
			if ($i < 3 || $length - $i <= 4) {
				$result .= substr($string, $i, 1);
			} else {
				$result .= '*';
			}
		}
		return $result;
	}
}
