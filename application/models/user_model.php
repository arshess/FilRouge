<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
	public function getUser($email = null)
	{
		$this->db->where('email', $email);
		$this->db->where('archived',0);
		$truc =  $this->db->get('user');
		return $truc->result();
	}
	public function getAllUsers(){
		$truc =  $this->db->get('user');
		return $truc->result();
	}
	public function addUser($firstname, $lastname, $email, $password)
	{
		$data = ['lastName' => $lastname, 'firstName' => $firstname, 'email' => $email, 'password' => $password, 'admin' => '0'];
		return $this->db->insert('user', $data);
	}
	public function updateProfil($id, $firstname, $lastname, $birthdate, $address, $zipcode, $city, $idcard, $license, $email, $avatar = null)
	{
		$data = ['firstName' => $firstname, 'lastName' => $lastname, 'birthDate' => $birthdate, 'address' => $address, 'zipCode' => $zipcode, 'city' => $city, 'IdCard' => $idcard, 'driverLicense' => $license, 'avatar' => $avatar, 'email' => $email];
		return $this->db->update('user', $data, "user_id = " . $id);
	}
	public function deleteAccount($id){
		$this->db->where('user_id',$id);
		$this->db->delete('user');
	}
	public function checkAdmin($id = null)
	{
		$this->db->select('admin');
		$query = $this->db->get_where('user', ['user_id' => $id]);
		return $query->result();
	}
	public function archiveProfil($id){
		$data = ['archived'=>1];
		return $this->db->update('user', $data, "user_id = " . $id);
	}
	public function reactivateAccount($id){
		$data = ['archived'=>0];
		return $this->db->update('user', $data, "user_id = " . $id);
	}

	public function getTypes()
	{
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
	function fetchModele($query, $type)
	{
		$this->db->distinct();
		$this->db->select("modele.name,modele.modele_id");
		$this->db->from("modele");
		$this->db->join('vehicule', 'vehicule.modele_id = modele.modele_id');
		$this->db->join('marque', ' marque.marque_id = modele.marque_id');

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
		$this->db->join('type', 'type.type_id = vehicule.type_id');
		$this->db->join('modele', 'modele.modele_id = vehicule.modele_id');
		$this->db->join('marque', 'marque.marque_id = modele.modele_id');
		if ($query != '') {
			$this->db->where('vehicule.type_id', $query);
		}
		$this->db->order_by('marque.marque_id', 'ASC');
		return $this->db->get();
	}
	//j'ai rajouté =null sur $limit et $page pour éviter un message d'erreur. a toi de voir
	public function getVehicule($query = null, $type = null, $limit = null, $page = null)
	{
		$limit = 10;
		$param_offset = 100;
		$params = array_slice($this->uri->rsegment_array(), $param_offset);
		$this->db->select('
		vehicule.vehicule_id,
		marque.name as name,
		modele.name as modele,
		vehicule.doors,fuelType,mileage,horses,productedYear,picture
		');
		$this->db->from('vehicule');
		$this->db->join('modele', 'modele.modele_id = vehicule.modele_id');
		$this->db->join('marque', 'marque.marque_id = modele.marque_id');
		$this->db->join('type', 'type.type_id = vehicule.type_id');

		if ($query != '') {
			$this->db->where('modele.modele_id', $query);
			$this->db->where('type.type_id', $type);
		}
		$this->db->limit($limit, $page);
		$this->db->order_by('marque.name', 'ASC');
		$vehicule = $this->db->get();
		if ($vehicule->num_rows() > 0) {
			foreach ($vehicule->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	public function compteRow()
	{

		$data = $this->db->count_all('vehicule');
		return $data;
	}
	public function getDetailsVehicule($id)
	{
		$this->db->where('vehicule_id', $id);
      $query = $this->db->get('vehicule');
      return $query->result();

	}

	public function getHistoricLocationUser($id){
		$this->db->select('
		location_id as idLoc,
		location.startedDate as startTime,
		location.returnDate as endTime,
		location.mileageStart as startCpt,
		location.mileageReturn as endCpt,
		location.vehicule_id as IdVehic,
		modele.name as Nmodele,
		marque.name as Nmarque
		');
		$this->db->from('location');
		$this->db->join('vehicule', 'vehicule.vehicule_id = location.vehicule_id', 'left');
		$this->db->join('modele', 'modele.modele_id = vehicule.vehicule_id', 'left');
		$this->db->join('marque', 'marque.marque_id = modele.marque_id', 'left');
		
		
		$this->db->where('location.user_id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	
	public function updateLocationUser($id){



	}

}
