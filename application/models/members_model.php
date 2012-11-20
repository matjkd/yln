<?php

class Members_model extends CI_Model {

	function list_addresses($member_id) {
		$this -> db -> where('idcompany', $member_id);
		$this -> db -> join('regions', 'regions.region_id = address.region', 'LEFT');
		$query = $this -> db -> get('address');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}
	}

	function get_member($member_id) {

		$this -> db -> where('company.idcompany', $member_id);
		$this -> db -> join('address', 'address.idcompany = company.idcompany', 'LEFT');
		$this -> db -> where('company.active', 1);
		$this->db->limit(1);
		$query = $this -> db -> get('company');
		if ($query -> num_rows == 1) {
			return $query -> result();
		}
	}
	function get_profile($profile_id) {

		$this -> db -> where('idkeypeople', $profile_id);
		$this -> db -> where('user_active', 1);
		$this -> db -> where('visible', 1);
		$query = $this -> db -> get('keypeople');
		if ($query -> num_rows == 1) {
			return $query -> result();
		}
	}
	
	function get_random_member() {

		
		$this->db->limit(1);
		$this -> db -> where('active', 1);
			$this -> db -> join('address', 'address.idcompany = company.idcompany', 'LEFT');
		$this->db->order_by('company.idcompany', 'random');
		$query = $this -> db -> get('company');
		if ($query -> num_rows == 1) {
			return $query -> result();
		}
	}
	
	function list_members() {
		$this -> db -> where('active', 1);
		$this -> db -> order_by('company_name');
		$this -> db -> join('address', 'address.idcompany = company.idcompany', 'LEFT');
		$this->db -> group_by('company_name');
		$query = $this -> db -> get('company');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}
	}

	function list_keypeople($member_id) {
		$this -> db -> where('idcompany', $member_id);
		$this -> db -> where('user_active', 1);
		$this -> db -> where('visible', 1);
		$query = $this -> db -> get('keypeople');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}

	}
		function list_all_addresses() {
		$this -> db -> join('company', 'address.idcompany = company.idcompany', 'LEFT');
		$this -> db -> join('regions', 'address.region = regions.region_id', 'LEFT');
		$this -> db -> where('company.active', 1);
		$this -> db -> order_by('regions.order');
		$query = $this -> db -> get('address');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}

	}
	
	
	function list_regions() {
		$this -> db -> order_by('order');
		$query = $this -> db -> get('regions');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}
	}

}
