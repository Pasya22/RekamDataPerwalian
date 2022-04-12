<?php
	class MLogin extends CI_Model{
		function __construct(){
		parent::__construct();
		}

		function GoLogin($username,$password){
			$this->db->select('*');
			$this->db->from('login');
			$this->db->where('nid', $username);
			$this->db->where('nid', $password);
			$query = $this->db->get();
			return $query;
		}

	}
