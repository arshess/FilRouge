<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	

public function showAdminLocationToValidate(){
	//Requete pour afficher les locations à venir classées la première la plus proche
	$this->db->select(
		'location.location_id AS idLoc,
		location.startedDate AS debutDate,
		location.returnDate AS retourDate,
		vehicule.numberPlate AS immatriculation,
		plan.designation AS plan, 
		user.firstName AS Prenom,
		user.lastName AS Nom,
		user.email AS email,
		marque.name AS marque,
		modele.name as modele,
		'
	);
	$this->db->from('location');
	$this->db->join('vehicule', 'location.vehicule_id = vehicule.vehicule_id','left');
	$this->db->join('user', 'location.user_id = user.user_id', 'left');
	$this->db->join('plan', 'location.plan_id = plan.plan_id', 'left');
	$this->db->join('modele', 'vehicule.modele_id = modele.modele_id', 'left');
	$this->db->join('marque', 'modele.marque_id = marque.marque_id', 'left');
	$this->db->order_by('location.startedDate', 'ASC');
   $result = $this->db->get();
   return $result->result();
}

public function showAdminOneLocationToValidate($id){
	//Requete pour afficher les locations à venir classées la première la plus proche
	$this->db->select(
		'location.location_id AS debutDate,
		location.startedDate AS finDate,
		location.returnDate AS retourDate,
		vehicule.numberPlate AS immatriculation,
		plan.designation AS plan, 
		user.firstName AS Prenom,
		user.lastName AS Nom,
		user.email AS email,
		marque.name AS marque,
		modele.name as modele,
		'
	);
	
	$this->db->from('location');
	$this->db->join('vehicule', 'location.vehicule_id = vehicule.vehicule_id','left');
	$this->db->join('user', 'location.user_id = user.user_id', 'left');
	$this->db->join('plan', 'location.plan_id = plan.plan_id', 'left');
	$this->db->join('modele', 'vehicule.modele_id = modele.modele_id', 'left');
	$this->db->join('marque', 'modele.marque_id = marque.marque_id', 'left');
	$this->db->where('location.location_id = ' . $id);
	$result = $this->db->get();
   return $result->result();
}

}