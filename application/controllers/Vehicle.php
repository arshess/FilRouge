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




}
