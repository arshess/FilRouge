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


}
