<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Laworldmembers extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('captcha_model');
		$this -> load -> model('members_model');
	}

	public function index() {
	}

	public function home() {

		$data['menu'] = 'members';
		$this -> get_content_data($data['menu']);

		$data['captcha'] = $this -> captcha_model -> initiate_captcha();

		$data['sidebar'] = "sidebox/side";
		$data['regions'] = $this->members_model->list_populated_regions();
		
		$data['main_content'] = "global/" . $this -> config_theme . "/content";
		//$data['cats'] = $this->products_model->get_cats();
		//$data['products'] = $this->products_model->get_all_products();
		$data['section2'] = 'global/links';
		$data['seo_links'] = $this -> content_model -> get_seo_links();

		$data['slideshow'] = 'header/slideshow';
		$this -> load -> vars($data);
		$this -> load -> view('template/main');

	}
	
	function ajaxListregion($region_id) {
		//get all companies from a region
		$data['regionmembers'] = $this->members_model->list_members_in_region($region_id);
		$data['region'] = $this->members_model->get_region($region_id);
		$this -> load -> vars($data);
		$this -> load -> view('ajax/memberlist');
	}
	
	function ajaxregion($region_id) {
		$data['regionmembers'] = $this->members_model->list_members_in_region($region_id);
			foreach($data['regionmembers'] as $row): 
	
			$data['region'] = $row->region_name;
	
	 		endforeach; 
		$this -> load -> vars($data);
		$this -> load -> view('ajax/region');
	}

	/*
	 *
	 */
	function view_company() {
	
	  	$company_id =end($this->uri->segment_array());
		
		$data['memberInfo'] = $this -> members_model -> get_member ($company_id);
		if($data['memberInfo'] == NULL) {
			redirect('/find-a-lawyer');
		}
		
		$data['keypeople'] = $this-> members_model ->list_keypeople ($company_id);
		
		$data['addressInfo'] = $this -> members_model -> list_addresses ($company_id);
		$data['menu'] = 'view_company';
		$this -> get_content_data($data['menu']);
		
		foreach($data['memberInfo'] as $row):
		$data['metatitle'] = $row -> company_name." description";
		endforeach;
		
		$data['main_content'] = "global/" . $this -> config_theme . "/content";
		$data['sidebar'] = "sidebox/side";
		$this -> load -> vars($data);
		$this -> load -> view('template/main');
	}
	
	function view_profile() {
	
	  	$profile_id =end($this->uri->segment_array());
		
		$data['profileInfo'] = $this -> members_model -> get_profile ($profile_id);
		if($data['profileInfo'] == NULL) {
			
			redirect('/find-a-lawyer');
		}
		
		//obtain company id from profile
		foreach($data['profileInfo']  as $row):
			$company_id = $row->idcompany;
			$description = strip_tags(substr($row->people_resume, 0, 400));
			$name = $row->firstname." ".$row->lastname;
		endforeach;
		$data['memberInfo'] = $this -> members_model -> get_member ($company_id);
		$data['keypeople'] = $this-> members_model ->list_keypeople ($company_id);
		
		$data['addressInfo'] = $this -> members_model -> list_addresses ($company_id);
		$data['menu'] = 'profile';
		$this -> get_content_data($data['menu']);
		$data['structure'] = 'person';
		
		$data['metatitle'] = $name." Profile";	
		$data['meta_description'] = 	$description;
		
		$data['main_content'] = "global/" . $this -> config_theme . "/content";
		$data['sidebar'] = "sidebox/side";
		$this -> load -> vars($data);
		$this -> load -> view('template/main');
	}

	function get_content_data($menu) {
		$data['content'] = $this -> content_model -> get_content($menu);
		$data['news'] = $this -> content_model -> get_content_cat('news');
		$data['members'] = $this->members_model->list_members();
		$data['allAddresses'] = $this->members_model->list_all_addresses();
		$data['events'] = $this->events_model->get_events();
     $data['newsLimit'] = $this->content_model->get_news_content(5);
		
		if ($this -> session -> flashdata('message')) {
			$data['message'] = $this -> session -> flashdata('message');
		}
		foreach ($data['content'] as $row) :

			$data['title'] = $row -> title;
			$data['sidebox'] = $row -> sidebox;
			$data['metatitle'] = $row -> meta_title;
			$data['slideshow_active'] = $row -> slideshow;
			   $data['hero_active'] = $row->hero;
			$data['meta_keywords'] = $row -> meta_keywords;
			$data['meta_description'] = $row -> meta_desc;
			$data['slideshow'] = $row -> slideshow;
			$data['content_id'] = $row -> content_id;
			$data['hideDate'] = $row->hideDate;
				  $data['hideSocial'] = $row->hideSocial;
				   $data['column1'] = $row->column1;
				$data['column2'] = $row->column2;

		endforeach;

		$data['attachments'] = $this -> content_model -> get_attachments($data['content_id']);
		$this -> load -> vars($data);
		return $data;
	}

}
