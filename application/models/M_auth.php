<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_by_where($email,$password)
	{
		$query = $this->db->query("SELECT * FROM users WHERE email='$email' AND password='$password' ");
		return $query->row();
	}

}
