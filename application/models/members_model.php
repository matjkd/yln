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
	
	function get_region($region_id) {

		$this -> db -> where('region_id', $region_id);
		$query = $this -> db -> get('regions');
		if ($query -> num_rows == 1) {
			return $query -> result();
		}
	}
	
	function get_random_member() {

		
		$this->db->limit(1);
		$this -> db -> where('active', 1);
		$this -> db -> join('address', 'address.idcompany = company.idcompany', 'LEFT');
		$this -> db -> join('regions', 'regions.region_id = address.region', 'LEFT');
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
		//$this->db -> group_by('company_name');
		$query = $this -> db -> get('company');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}
	}
	
	function get_economicProfiles($firmID) {
		
		$addresses = $this->list_addresses($firmID);
		$profiles = array();
		
		//get matching cities
		foreach($addresses as $row):
			
			$this->db->where('profile_city', $row->city);
			
			
			$this -> db -> join('regions', 'profile_region = regions.region_id', 'LEFT');
			$query = $this->db->get('economicProfile');
			if ($query -> num_rows > 0) {
			$temp = $query->result();
			$profiles = array_merge((array)$temp, (array)$profiles);
			}
		endforeach;
		
		//get matching cities
		foreach($addresses as $row):
			
			$this->db->where('profile_city', '');
			$this->db->where('profile_region', $row->region);
			
			$this -> db -> join('regions', 'profile_region = regions.region_id', 'LEFT');
			$query2 = $this->db->get('economicProfile');
			
			if ($query2 -> num_rows > 0) {
			$temp = $query2->result();
			$profiles = array_merge((array)$temp, (array)$profiles);
			}
		endforeach;
		
			return $profiles;
		
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
		
		function list_members_in_region($region_id) {
		$this -> db -> join('company', 'address.idcompany = company.idcompany', 'LEFT');
		$this -> db -> join('regions', 'address.region = regions.region_id', 'LEFT');
		$this -> db -> where('company.active', 1);
		$this -> db -> where('regions.region_id', $region_id);
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
	function list_populated_regions() {
		$this -> db -> order_by('regions.order');
		
		$this -> db -> join('address', 'address.region = regions.region_id', 'BOTH');
		$this->db->join('company', 'company.idcompany = address.idcompany');
		$this->db->where('company.active', 1);
		$this -> db ->group_by('regions.region_id');
		$query = $this -> db -> get('regions');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}
	}

}
