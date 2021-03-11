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
	public function fetch()
	{
		$query = '';
		$type = '';
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
		$query = '';
		$this->load->model('user_model');
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$data = $this->user_model->fetchMarque($query);
		echo json_encode($data->result());
	}
	public function getVehicule()
	{
		$query = '';
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
	
}
