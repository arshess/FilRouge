<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getUser($email=null,$password=null)
	{
		$this->db->select('user_id, email,password');
		$this->db->where('email',$email);
		$truc =  $this->db->get('user');
		return $truc->result();
	}
}
