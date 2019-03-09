<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_region extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function setRegion($data)
	{
		$query = $this->db->insert('regions',$data);
	}

	public function getRegion()
	{
		$query = $this->db->query('SELECT * FROM regions ORDER BY id');
		return $query->result();
	}

	public function getRegionId($id)
	{
		$query = $this->db->query("SELECT * FROM regions WHERE id='$id'");
		return $query->row();
	}

	public function delete($id)
	{
		$this->db->delete('regions',array('id' => $id));
	}

	public function updateRegion($id,$data)
	{
		return $this->db->update('regions', $data, array('id' => $id));
	}

	public function getSummary()
	{
		$query = $this->db->query("SELECT a.* , Count(b.id) as jumlahPenduduk, sum(b.income) as totalPendapatan, AVG(b.income) as rataPendapatan
		FROM regions a LEFT JOIN person b on b.region_id = a.id GROUP BY a.id");
		return $query->result();
	}

}
