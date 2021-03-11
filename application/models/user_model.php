<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function getTypes(){
		$query = $this->db->get('type');
        return $query->result();
    }
	// public function getModeles(){
	// 	$query = $this->db->get('modele');
    //     return $query->result();
    // }
	// public function getMarques(){
	// 	$query = $this->db->get('marque');
    //     return $query->result();
    // }
	function fetchModele($query,$type)
    {
		$this->db->distinct();
        $this->db->select("modele.name,modele.modele_id");
        $this->db->from("modele");
		$this->db->join('vehicule','vehicule.modele_id = modele.modele_id');
		$this->db->join('marque',' marque.marque_id = modele.marque_id');
   
            $this->db->where('vehicule.type_id', $type);
			$this->db->where('marque.marque_id', $query);
        
        $this->db->order_by('modele.name', 'ASC');
        return $this->db->get();
    }
	function fetchMarque($query)
    {
		$this->db->distinct();
        $this->db->select("marque.name , marque.marque_id");
        $this->db->from("vehicule");
		$this->db->join('type','type.type_id = vehicule.type_id');
		$this->db->join('modele', 'modele.modele_id = vehicule.modele_id');
		$this->db->join('marque','marque.marque_id = modele.modele_id');
        if ($query != '') {
            $this->db->where('vehicule.type_id', $query);
        }
        $this->db->order_by('marque.marque_id', 'ASC');
        return $this->db->get();
		
    }
	public function getVehicule($query,$type){
		$this->db->select('
		marque.name as name,
		modele.name as modele,
		vehicule.doors,fuelType,mileage,horses,productedYear
		 ');
		$this->db->from('vehicule');
		$this->db->join('modele', 'modele.modele_id = vehicule.modele_id');
		$this->db->join('marque','marque.marque_id = modele.marque_id');
		$this->db->join('type','type.type_id = vehicule.type_id');

		if($query != ''){
				$this->db->where('modele.modele_id',$query);
				$this->db->where('type.type_id',$type);
		}
		$this->db->order_by('marque.name','ASC');
		return $this->db->get();
	}
	// public function getVehiculeDispo($date,$query,$type){
	// 	$dispo = 4;
	// 	$date = '';
	// 	$this->db->select('*');
	// 	$this->db->from('vehicule');
	// 	$this->db->join('modele', 'modele.modele_id = vehicule.modele_id');
	// 	$this->db->join('marque','marque.marque_id = modele.marque_id');
	// 	$this->db->join('type','type.type_id = vehicule.type_id');
	// 	$this->db->join('location','location.vehicule_id = vehicule.vehicule_id');
	// 	$this->db->join('disponibility','disponibility.dispo_id = vehicule.dispo_id');
	

	// 	if($query != ''){
	// 			$this->db->where('vehicule.type_id',$type);
	// 			$this->db->where('marque.marque_id',$query);
	// 			$this->db->where('disponibility.dispo_id',$dispo);
	// 			$this->db->where('location.expectedReturnDate >',$date);	
	// 	}
	// 	$this->db->order_by('marque.name','ASC');
	// 	return $this->db->get();
	// }
	
	
}
