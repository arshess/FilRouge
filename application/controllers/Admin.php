<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


	public function index()
	{
		$this->load->view('template/header');
		// $this->load->view('admin/viewAdmin');
		$this->load->view('template/footer');
	}

	public function showAdminLocation()
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->model('Admin_model');
			$data['ARentList'] = $this->Admin_model->showAdminLocationToValidate();
			$this->load->view('template/header');
			$this->load->view('admin/viewAllLocation', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}


	public function showAdminOneLocation($id)
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->model('Admin_model');
			$data['ARentOne'] = $this->Admin_model->showAdminOneLocationToValidate($id);
			$this->load->view('template/header');
			$this->load->view('admin/viewOneLocation', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function showProfil()
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->view('template/header');
			$this->load->model('User_model', '', true);
			$data['users'] = $this->User_model->getAllUsers();
			$this->load->view('admin/viewAProfils', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function deleteAccount($id)
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->view('template/header');
			$this->load->model('User_model', '', true);
			$data['users'] = $this->User_model->getAllUsers();
			$this->User_model->deleteAccount($id);
			$this->load->view('admin/viewAProfils', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}
	public function reactivateAccount($id)
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->view('template/header');
			$this->load->model('User_model', '', true);
			$data['users'] = $this->User_model->getAllUsers();
			$this->User_model->reactivateAccount($id);
			$this->load->view('admin/viewAProfils', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}
	public function showLocation()
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->view('template/header');
			$this->load->view('admin/showAdminLocation');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}
	public function showVehicle()
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->view('template/header');

			$this->load->view('admin/showAdminVehicle');
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function updateLocation()
	{
		if ($this->session->userdata('admin') == 1) {
			$data['mileageStart'] = $this->input->post('startmileage');
			$data['location_id'] = $this->input->post('idLoc');
			$data['startedDate'] = $this->input->post('beginDate') . ' ' . $this->input->post('beginHour');
			$data['started'] = 1;

			$data['vehicule_id'] = $this->input->post('idVehicule');
			$data['dispo_id'] = 1;

			$this->load->model('Admin_model');
			$this->Admin_model->updateAdminLoc($data);
			$this->showAdminLocation();
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function updateReturn()
	{
		if ($this->session->userdata('admin') == 1) {
			$data['mileageReturn'] = $this->input->post('returnmileage');
			$data['location_id'] = $this->input->post('idLoc');
			$data['returnDate'] = $this->input->post('endDate') . ' ' . $this->input->post('endHour');
			$data['ended'] = 1;

			$data['vehicule_id'] = $this->input->post('idVehicule');
			$data['dispo_id'] = 4;

			$this->load->model('Admin_model');
			$this->Admin_model->updateAdminRet($data);
			$this->showAdminReturn();
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function showAdminReturn()
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->model('Admin_model');
			$data['ARentList'] = $this->Admin_model->showAdminReturnToValidate();
			$this->load->view('template/header');
			$this->load->view('admin/viewAllReturns', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function showAdminOneReturn($id)
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->model('Admin_model');
			$data['ARentOne'] = $this->Admin_model->showAdminOneReturnToValidate($id);
			$this->load->view('template/header');
			$this->load->view('admin/viewOneReturn', $data);
			$this->load->view('template/footer');
		} else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}
}
