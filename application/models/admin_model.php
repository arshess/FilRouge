<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
