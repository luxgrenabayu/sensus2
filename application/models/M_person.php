<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_person extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function setPerson($data)
	{
		$query = $this->db->insert('person',$data);
	}

	public function getPerson()
	{
		$query = $this->db->query("Select a.*,b.name as name_region from person a left join regions b on a.region_id = b.id");

		// $this->db->select('*');
		// $this->db->from('person');
		// $this->db->join('regions', 'person.region_id = regions.id');
		// $query = $this->db->get();
		return $query->result();
	}

	public function getPersonId($id)
	{
		$query = $this->db->query("Select a.*,b.name as name_region from person a left join regions b on a.region_id = b.id where a.id = $id");
		return $query->row();
	}

	public function delete($id)
	{
		$this->db->delete('person',array('id' => $id));
	}

	public function updatePerson($id,$data)
	{
		return $this->db->update('person', $data, array('id' => $id));
	}


}
