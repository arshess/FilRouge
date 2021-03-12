<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{



	public function showAdminLocationToValidate()
	{
		//Requete pour afficher les locations à venir classées la première la plus proche
		$this->db->select(
			'location.location_id AS idLoc,
		location.startedDate AS debutDate,
		location.expectedReturnDate AS retourDate,
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
		$this->db->join('vehicule', 'location.vehicule_id = vehicule.vehicule_id');
		$this->db->join('user', 'location.user_id = user.user_id');
		$this->db->join('plan', 'location.plan_id = plan.plan_id');
		$this->db->join('modele', 'vehicule.modele_id = modele.modele_id');
		$this->db->join('marque', 'modele.marque_id = marque.marque_id');
		$this->db->where('started = 0');
		$this->db->order_by('location.startedDate', 'ASC');
		$result = $this->db->get();
		return $result->result();
	}

	public function showAdminOneLocationToValidate($id)
	{
		//Requete pour afficher les locations à venir classées la première la plus proche
		$this->db->select(
			'location.location_id AS idLoc,
		location.startedDate AS debutDate,
		location.returnDate AS retourDate,
		vehicule.numberPlate AS immatriculation,
		vehicule.vehicule_id AS id_vehicule,
		plan.designation AS plan, 
		user.firstName AS Prenom,
		user.lastName AS Nom,
		user.email AS email,
		marque.name AS marque,
		modele.name as modele,
		'
		);

		$this->db->from('location');
		$this->db->join('vehicule', 'location.vehicule_id = vehicule.vehicule_id', 'left');
		$this->db->join('user', 'location.user_id = user.user_id', 'left');
		$this->db->join('plan', 'location.plan_id = plan.plan_id', 'left');
		$this->db->join('modele', 'vehicule.modele_id = modele.modele_id', 'left');
		$this->db->join('marque', 'modele.marque_id = marque.marque_id', 'left');
		$this->db->where('location.location_id = ' . $id);
		$result = $this->db->get();
		return $result->result();
	}

	public function updateAdminLoc($data){
		//$dataloc['dispo_id'] = $data['dispo_id'];
		$dataloc['mileageStart'] = $data['mileageStart'];
		$dataloc['started'] = $data['started'];
		$id = $data['location_id'];
		
		$idVehicule = $data['vehicule_id'];
		$dataveh['dispo_id'] = $data['dispo_id'];
		
		$this->db->trans_start();
		$this->db->where('location_id', $id);
		$this->db->update('location', $dataloc);

		$this->db->where('vehicule_id', $idVehicule);
		$this->db->update('vehicule', $dataveh);
		
		return $this->db->trans_complete();
	}

	public function updateAdminRet($data){
		//$dataloc['dispo_id'] = $data['dispo_id'];
		$dataloc['returnDate'] = $data['returnDate'];
		$dataloc['mileageReturn'] = $data['mileageReturn'];
		$dataloc['ended'] = $data['ended'];

		$id = $data['location_id'];
		
		$this->db->trans_start();

		$this->db->where('location_id', $id);
		$this->db->update('location', $dataloc);
		
		$idVehicule = $data['vehicule_id'];
		$dataveh['dispo_id'] = $data['dispo_id'];

		$this->db->where('vehicule_id', $idVehicule);
		$this->db->update('vehicule', $dataveh);
		
		return $this->db->trans_complete();
	}





	public function showAdminReturnToValidate()
	{
		//Requete pour afficher les locations à venir classées la première la plus proche
		$this->db->select(
			'location.location_id AS idLoc,
		location.startedDate AS debutDate,
		location.expectedReturnDate AS retourDate,
		location.mileageStart AS startmileage,
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
		$this->db->join('vehicule', 'location.vehicule_id = vehicule.vehicule_id');
		$this->db->join('user', 'location.user_id = user.user_id');
		$this->db->join('plan', 'location.plan_id = plan.plan_id');
		$this->db->join('modele', 'vehicule.modele_id = modele.modele_id');
		$this->db->join('marque', 'modele.marque_id = marque.marque_id');
		$this->db->where('started','1');
		$this->db->where('ended','0');
		$this->db->order_by('location.expectedReturnDate', 'ASC');
		$result = $this->db->get();
		return $result->result();
	}

	public function showAdminOneReturnToValidate($id)
	{
		//Requete pour afficher les locations à venir classées la première la plus proche
		$this->db->select(
			'location.location_id AS idLoc,
		location.startedDate AS debutDate,
		location.expectedReturnDate AS retourDate,
		location.mileageStart AS startmileage,
		vehicule.numberPlate AS immatriculation,
		vehicule.vehicule_id AS id_vehicule,
		plan.designation AS plan, 
		user.firstName AS Prenom,
		user.lastName AS Nom,
		user.email AS email,
		marque.name AS marque,
		modele.name as modele
		'
		);

		$this->db->from('location');
		$this->db->join('vehicule', 'location.vehicule_id = vehicule.vehicule_id', 'left');
		$this->db->join('user', 'location.user_id = user.user_id', 'left');
		$this->db->join('plan', 'location.plan_id = plan.plan_id', 'left');
		$this->db->join('modele', 'vehicule.modele_id = modele.modele_id', 'left');
		$this->db->join('marque', 'modele.marque_id = marque.marque_id', 'left');
		$this->db->where('location.location_id = ' . $id);
		$result = $this->db->get();
		return $result->result();
	}







}
