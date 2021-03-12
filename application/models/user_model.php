<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getUser($email = null)
	{
		// $this->db->select('*');
		$this->db->where('email', $email);
		$truc =  $this->db->get('user');
		return $truc->result();
	}
	public function addUser($firstname, $lastname, $email, $password)
	{
		$data = ['lastName' => $lastname, 'firstName' => $firstname, 'email' => $email, 'password' => $password,'admin'=>'0'];
		return $this->db->insert('user', $data);
	}
}
