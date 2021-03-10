<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
//		$this->load->view('public/index');
$this->load->model('admin_model');
$data = $this->admin_model->showAdminLocationToValidate();
$this->load->view('views/template/header');
$this->load->view('views/admin/viewAllLocation', $data);
$this->load->view('views/template/footer');
	}

	public function show_location(){
		$this->load->model('admin_model');
		$data = $this->admin_model->showAdminLocationToValidate();
		$this->load->view('views/template/header');
      $this->load->view('views/admin/viewAllLocation', $data);
      $this->load->view('views/template/footer');
	}








}



