<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle_model extends CI_Model {

	
	public function list_vehicle(){
		$this->db->select('
			vehicule.vehicule_id AS idVeh,
			vehicule.numberPlate AS immat,
			marque.name AS marque,
			modele.name AS modelle
		');
		$this->db->from('vehicule');
		$this->db->join('modele','modele.modele_id = vehicule.modele_id','left');
		$this->db->join('marque','marque.marque_id = modele.marque_id','left');
		$this->db->order_by('marque, modelle, immat');
		$result = $this->db->get();
		return $result->result();

	}

	public function list_OneVehicle($id){
		$this->db->select('
			vehicule.vehicule_id AS idVeh,
			vehicule.numberPlate AS immat,
			vehicule.doors AS doors,
			vehicule.fuelType AS fuelType,
			vehicule.horses AS horses,
			vehicule.picture AS pic,
			vehicule.mileage AS miles,
			vehicule.productedYear AS millesime,
			vehicule.agency_id,
			agency.name AS agence,
			marque.name AS marque,
			modele.name AS modelle
		');
		$this->db->from('vehicule');
		$this->db->join('modele','modele.modele_id = vehicule.modele_id','left');
		$this->db->join('marque','marque.marque_id = modele.marque_id','left');
		$this->db->join('agency','agency.agency_id = vehicule.agency_id','left');
		$this->db->where('vehicule_id',$id);
		$result = $this->db->get();
		return $result->result();

	}

	public function deleteVehicule($id){
		$this->db->where('vehicule_id',$id);
		$this->db->delete('vehicule');
	}
	public function updateVehicule($id,$data){
		
		$this->db->where('vehicule_id', $id);
        $query = $this->db->update('vehicule', $data);
        return $query;
	}
	public function getTypes()
	{
		$query = $this->db->get('type');
		return $query->result();
	}
	public function getModeles(){
		$query = $this->db->get('modele');
	    return $query->result();
	}
	public function getAgency(){
		$query = $this->db->get('agency');
	    return $query->result();
	}
	public function getDispo(){
		$query = $this->db->get('disponibility');
		
	    return $query->result();
	}
	public function addVehicule( $data){
		$query = $this->db->insert('vehicule', $data);
        return $query;
	}


}
