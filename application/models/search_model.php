<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Search_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function get_results($term) {
		
		
		
		 $this->db->like('company_name', $term);
		 $this->db->or_like('city', $term);
		 $this->db->or_like('region_name', $term);
		$this -> db -> having('active', 1);
		
		$this -> db -> order_by('company_name');
		$this -> db -> join('address', 'address.idcompany = company.idcompany', 'LEFT');
		$this -> db -> join('regions', 'regions.region_id = address.region', 'LEFT');
		//$this->db -> group_by('company_name');
		$query = $this -> db -> get('company');
		if ($query -> num_rows > 0) {
			return $query -> result();
		}
	}	
}