<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	
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
			redirect('http://localhost/FilRouge/Vehicle/index');
		}
		else {
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
}

	public function updateVehicule($id){
		if ($this->session->userdata('admin') == 1) {
			$data= array(
				'numberPlate' => $this->input->post('numberPlate'),
				'mileage' => $this->input->post('mileage'),
				'horses' => $this->input->post('horses'),
				'picture' => $this->input->post('picture')
			);

			if ($this->form_validation->run() == TRUE) {
				$this->load->model('Vehicle_model');
				$this->Vehicle_model->updateVehicule($id, $data);
				redirect('http://localhost/FilRouge/Vehicle/index');
			} else {
				$this->load->model('Vehicle_model');
				$data['oneVehic'] = $this->Vehicle_model->list_OneVehicle($id);
				$this->load->view('/admin/updateVehicule', $data);
			}
		}
		else{
			$this->load->view('template/header');
			$this->load->view('inscription');
			$this->load->view('template/footer');
		}
	}		


}
