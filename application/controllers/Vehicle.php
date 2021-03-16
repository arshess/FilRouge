<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vehicle extends CI_Controller
{


	public function index()
	{
		if ($this->session->userdata('admin') == 1) {
			$this->load->model('vehicle_model');
			$data['vehic'] = $this->vehicle_model->list_vehicle();
			$this->load->view('template/header');

			$this->load->view('Vehicle/viewAListVehicle',$data);
			$this->load->view('template/footer');
		}
		else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function showOneVehicle($id){
		if ($this->session->userdata('admin') == 1) {
			$this->load->library('image_lib');
			$this->load->model('vehicle_model');
			$data['vehic'] = $this->vehicle_model->list_vehicle();
			$this->load->model('vehicle_model');
			$data['oneVehic'] = $this->vehicle_model->list_OneVehicle($id);
			$this->load->view('template/header');
			$this->load->view('Vehicle/viewAListVehicle',$data);
			$this->load->view('template/footer');
		}
		else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	public function deleteVehicule($id){
		if ($this->session->userdata('admin') == 1) {
			$this->load->model('Vehicle_model');
			$this->Vehicle_model->deleteVehicule($id);
			redirect(base_url('Vehicle/index'));
		}
		else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}

	// public function updateVehicule($id){
	// 	if ($this->session->userdata('admin') == 1) {
	// 		$data= array(
	// 			'numberPlate' => $this->input->post('numberPlate'),
	// 			'mileage' => $this->input->post('mileage'),
	// 			'horses' => $this->input->post('horses'),
	// 			'picture' => $this->input->post('picture')
	// 		);

	// 		if ($this->form_validation->run() == TRUE) {
	// 			$this->load->model('Vehicle_model');
	// 			$this->Vehicle_model->updateVehicule($id, $data);
	// 			redirect(base_url('Vehicle/index'));
	// 		} else {
	// 			$this->load->model('Vehicle_model');
	// 			$data['oneVehic'] = $this->Vehicle_model->list_OneVehicle($id);
	// 			$this->load->view('/admin/updateVehicule', $data);
	// 		}
	// 	}
	// 	else{
	// 		$this->load->view('template/header');
	// 		$this->load->view('inscription');
	// 		$this->load->view('template/footer');
	// 	}
			

	// 	$this->load->view('Vehicle/viewAListVehicle', $data);
	// 	$this->load->view('template/footer');
	// }

	public function updateVehicule($id)
	{
		if ($this->session->userdata('admin') == 1) {
		$data = array(
			'numberPlate' => $this->input->post('numberPlate'),
			'mileage' => $this->input->post('mileage'),
			'horses' => $this->input->post('horses'),
		);
		$this->form_validation->set_rules('numberPlate', 'numberPlate', 'required');
		$this->form_validation->set_rules('mileage', 'mileage', 'required');
		$this->form_validation->set_rules('horses', 'horses', 'required');
		$this->load->view('template/header');
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Vehicle_model');
			$this->Vehicle_model->updateVehicule($id, $data);
			redirect(base_url('Vehicle/index'));
		} else {
			$this->load->model('Vehicle_model');
			$data['oneVehic'] = $this->Vehicle_model->list_OneVehicle($id);
			$this->load->view('/admin/updateVehicule', $data);
		}
		// $this->load->view('Vehicle/viewAListVehicle', $data);
		$this->load->view('template/footer');
	}
	else{
		$this->load->view('template/header');
		$this->load->view('inscription');
		$this->load->view('template/footer');
	}
	}
	public function getTypes()
	{
		$this->load->model('Vehicle_model');
		$data['types'] = $this->Vehicle_model->getTypes();
		$this->load->view('admin/ajoutVehicule', $data);
	}
	public function getModeles()
	{
		$this->load->model('Vehicle_model');
		$data['modeles'] = $this->Vehicle_model->getModeles();
		$this->load->view('admin/ajoutVehicule', $data);
	}
	public function getAgency()
	{
		$this->load->model('Vehicle_model');
		$data['agences'] = $this->Vehicle_model->getAgency();
		$this->load->view('admin/ajoutVehicule', $data);
	}
	public function getDispo()
	{
		$this->load->model('Vehicle_model');
		$data['dispo'] = $this->Vehicle_model->getDispo();
		$this->load->view('admin/ajoutVehicule', $data);
	}
	public function addVehicule()
	{
		$data = array(
			'numberPlate' => $this->input->post('numberPlate'),
			'doors' => $this->input->post('doors'),
			'fuelType' => $this->input->post('fuelType'),
			'mileage' => $this->input->post('mileage'),
			'horses' => $this->input->post('horses'),
			'productedYear' => $this->input->post('productedYear'),
			'type_id' => $this->input->post('type'),
			'modele_id' => $this->input->post('modele'),
			'agency_id' => $this->input->post('agency'),
			'dispo_id' => $this->input->post('disponibility'),

		);
		$this->form_validation->set_rules('numberPlate', 'numberPlate', 'required');
		$this->form_validation->set_rules('doors', 'doors', 'required');
		$this->form_validation->set_rules('fuelType', 'fuelType', 'required');
		$this->form_validation->set_rules('mileage', 'mileage', 'required');
		$this->form_validation->set_rules('horses', 'horses', 'required');
		$this->form_validation->set_rules('productedYear', 'productedYear', 'required');
		$this->load->view('template/header');
		if ($this->form_validation->run() == TRUE) {
			$this->load->model('Vehicle_model');
			$this->Vehicle_model->addVehicule($data);
			redirect(base_url('Vehicle/index'));
		} else {
			$this->load->model('Vehicle_model');
			$data['types'] = $this->Vehicle_model->getTypes();
			$data['modeles'] = $this->Vehicle_model->getModeles();
			$data['agences'] = $this->Vehicle_model->getAgency();
			$data['dispo'] = $this->Vehicle_model->getDispo();
			$this->load->view('admin/ajoutVehicule', $data);
		}
		$this->load->view('template/footer');
	}
}
