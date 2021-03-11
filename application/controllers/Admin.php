<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
//		$this->load->view('public/index');
		$this->load->model('Admin_model');
		$data['ARentList']= $this->Admin_model->showAdminLocationToValidate();
		var_dump($data);
		$this->load->view('template/header');
		$this->load->view('admin/viewAllLocation', $data);
		$this->load->view('template/footer');
	}

	public function showAdminLocation(){
		$this->load->model('Admin_model');
		$data['ARentList']= $this->Admin_model->showAdminLocationToValidate();
		$this->load->view('template/header');
		$this->load->view('admin/viewAllLocation', $data);
		$this->load->view('template/footer');
	}


	public function showAdminOneLocation($id){
		$this->load->model('Admin_model');
		$data['ARentOne']= $this->Admin_model->showAdminOneLocationToValidate($id);
		$this->load->view('template/header');
		$this->load->view('admin/viewOneLocation', $data);
		$this->load->view('template/footer');
	} 







}



