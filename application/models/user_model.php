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
	public function updateProfil(){
		return true;
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
	
	public function getVehicule($query = null ,$type = null,$limit,$page){
		$limit = 10;
		$param_offset = 100;
		$params = array_slice($this->uri->rsegment_array(), $param_offset);
		$this->db->select('
		marque.name as name,
		modele.name as modele,
		vehicule.doors,fuelType,mileage,horses,productedYear,picture
		 ');
		$this->db->from('vehicule');
		$this->db->join('modele', 'modele.modele_id = vehicule.modele_id');
		$this->db->join('marque','marque.marque_id = modele.marque_id');
		$this->db->join('type','type.type_id = vehicule.type_id');

		if($query != ''){
				$this->db->where('modele.modele_id',$query);
				$this->db->where('type.type_id',$type);
		}
		$this->db->limit($limit,$page);
		$this->db->order_by('marque.name','ASC');
		$vehicule = $this->db->get();
		if ($vehicule->num_rows() > 0) {
            foreach ($vehicule->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
	public function compteRow(){
		
		$data =$this->db->count_all('vehicule');
		return $data;
		
	}	
}
