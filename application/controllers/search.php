<?php
  
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');
  
  class Search extends MY_Controller {
    
    function __construct() {
      parent::__construct();
      $this->load->model('search_model');
	   $this->load->model('members_model');
	    $this->load->model('gallery_model');
    }
	
	  public function index() {
     
	
 
    }
	
	
	
	public function results() {
		$data['column1'] = 8;
		$data['column2'] = 4;
		$data['sidebox'] = 'side';
		$data['title'] = 'Search Results';
		$data['search'] = $this->input->post('search');
		$data['results'] = $this->search_model->get_results($data['search']);
		 $data['main_content'] = "global/bootstrap/searchresults";
		 $this->load->vars($data);
		 $this->load->view('template/main');
		
	}
	
	
  }
  