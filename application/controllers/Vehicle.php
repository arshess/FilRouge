<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	
	public function index()
	{
		$this->load->model('vehicle_model');
		$data['vehic'] = $this->vehicle_model->list_vehicle();
		$this->load->view('template/header');

		$this->load->view('Vehicle/viewAListVehicle',$data);
		$this->load->view('template/footer');
	}

	public function showOneVehicle($id){
		$this->load->library('image_lib');
		$this->load->model('vehicle_model');
		$data['vehic'] = $this->vehicle_model->list_vehicle();
	
		$this->load->model('vehicle_model');
		$data['oneVehic'] = $this->vehicle_model->list_OneVehicle($id);
	
	
		$this->load->view('template/header');

		$this->load->view('Vehicle/viewAListVehicle',$data);
		$this->load->view('template/footer');
	
	}

	public function deleteVehicule($id){
		$this->load->model('Vehicle_model');
		$this->Vehicle_model->deleteVehicule($id);
        redirect('http://localhost/FilRouge/Vehicle/index');
    }
	public function updateVehicule($id){
		$data= array(
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
            redirect('http://localhost/FilRouge/Vehicle/index');
        } else {
			$this->load->model('Vehicle_model');
            $data['oneVehic'] = $this->Vehicle_model->list_OneVehicle($id);
            $this->load->view('/admin/updateVehicule', $data);
        }
		$this->load->view('template/footer');

	}
	


}
