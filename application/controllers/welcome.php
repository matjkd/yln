<?php
  
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');
  
  class Welcome extends MY_Controller {
    
    function __construct() {
      parent::__construct();
      $this->load->model('captcha_model');
	   $this->load->model('members_model');
	    $this->load->model('gallery_model');
    }
    
    public function index() {
     
	$this->home('home');
 
    }
    
    function get_content_data($menu) {
	     $data['content'] = $this->content_model->get_content($menu);
		 $data['events'] = $this->events_model->get_events();
	     $data['newsLimit'] = $this->content_model->get_news_content(5);
		 $data['random_firm'] = $this->members_model->get_random_member();
		 $data['galleries'] = $this->gallery_model->get_galleries();
		 $data['events_news'] = $this->content_model->get_events_news();
	     
      foreach ($data['content'] as $row):
               
               $data['title'] = $row->title;
               $data['sidebox'] = $row->sidebox;
               $data['metatitle'] = $row->meta_title;
               $data['slideshow_active'] = $row->slideshow;
               $data['meta_keywords'] = $row->meta_keywords;
               $data['meta_description'] = $row->meta_desc;
               $data['slideshow'] = $row->slideshow;
               $data['content_id'] = $row->content_id;
			   $data['category'] = $row->category;
			   $data['column1'] = $row->column1;
				$data['column2'] = $row->column2;
				  $data['hideDate'] = $row->hideDate;
				  $data['hideSocial'] = $row->hideSocial;
                $this->assignedGallery = $row->assignedGallery;
               endforeach;
			   
			    if ($data['category'] == 'newsletters') {
					$this->load->model('newsletter_model');
					$data['country'] = $this->input->post('country');
					$data['newsletters'] = $this->newsletter_model->list_newsletters();
					$data['countries'] = $this->newsletter_model->list_countries();
	 			}
      
      $data['attachments'] = $this->content_model->get_attachments($data['content_id']);
    $this->load->vars($data);
    return $data;
  }
  
  function test() {
    $data['main_content'] = 'slideshow/slideshow';
    $this->load->vars($data);
    $this->load->view('template/main');
  }
  
/**
 * Re formats old Joomla URIs so they collect the same info
 */  
  function webroute() {


	if($this->uri->segment(3)==NULL){
	$segment_active = end($this->uri->segment_array());
  	} else {
  	$segment_active = $this->uri->segment(3);
	
	if($this->uri->segment(2) == "1-legal-news") {
		$breaksegment = explode("-",$segment_active);
		if(($pos = strpos($segment_active, '-')) !== false)
			{
			  if(is_numeric($breaksegment[0])) {
			  $segment_active = substr($segment_active, $pos + 1);
			  }
			}
			else
				{
				   $segment_active = get_last_word($segment_active);
				}
			
		}
	
	
	
	
  }
	$menu = str_replace('.html', '', $segment_active );
	$this->home($menu);
	
  }
  
  function home($menu = NULL) {
  
	if($menu == NULL){
    $segment_active = $this->uri->segment(3);
    if ($segment_active != NULL) {
      $data['menu'] = $this->uri->segment(3);
    } else {
      $data['menu'] = $this->uri->segment(1);
    }
	}
	else {
	$data['menu'] =	$menu;
	}
    $data['menu'] = str_replace('.html', '',  $data['menu']);
    
    $this->get_content_data($data['menu']);
    if ($data['menu'] == 'news') {
      $data['news'] = $this->content_model->get_news_content(10, 0);
		 $data['oldNews'] = $this->content_model->get_news_content(1000, 10);
    }
	
	
	 
	 
	$data['linked_gallery'] =    $this->assignedGallery;
		if($data['linked_gallery'] != NULL){
				
				$data['galleryImages'] = $this->content_model->get_gallery($data['linked_gallery']);
			} else {
				
			}
	
	 
    $data['captcha'] = $this->captcha_model->initiate_captcha();
    
    
    $data['sidebar'] = "sidebox/side";
    $data['main_content'] = "global/" . $this->config_theme . "/content";
    //$data['cats'] = $this->products_model->get_cats();
    //$data['products'] = $this->products_model->get_all_products();
    $data['section2'] = 'global/links';
    $data['seo_links'] = $this->content_model->get_seo_links();
    if ($this->session->flashdata('message')) {
      $data['message'] = $this->session->flashdata('message');
    }
    
    $data['slideshow'] = 'header/slideshow';
    $this->load->vars($data);
    $this->load->view('template/main');
  }
  
  function gallery($gallery) {
    $data['content'] = $this->content_model->get_gallery($gallery);
    if ($data['content'] != NULL) {
      foreach ($data['content'] as $row):
               
               if ($row->title != NULL) {
                 $data['title'] = $row->title;
               }
               $data['sidebox'] = $row->sidebox;
               
               if ($row->meta_title != NULL) {
                 $data['metatitle'] = $row->meta_title;
               }
               
               if ($row->meta_keywords != NULL) {
                 $data['meta_keywords'] = $row->meta_keywords;
               }
               
               if ($row->meta_desc != NULL) {
                 $data['meta_description'] = $row->meta_desc;
               }
               
               $data['slideshow_active'] = $row->slideshow;
               endforeach;
    }
      
      
      $data['main_content'] = "global/gallery";
      $this->load->vars($data);
      $this->load->view('template/main');
      }
  
   function main() {
    $segment_active = $this->uri->segment(3);
    if ($segment_active != NULL) {
      $data['menu'] = $this->uri->segment(3);
    } else {
      $data['menu'] = 'home';
    }
    
    $data['content'] = $this->content_model->get_content($data['menu']);
    $data['captcha'] = $this->captcha_model->initiate_captcha();
    foreach ($data['content'] as $row):
             
             $data['title'] = $row->title;
             $data['sidebox'] = $row->sidebox;
             $data['metatitle'] = $row->meta_title;
             
             endforeach;
    $data['main_content'] = "global/" . $this->config_theme . "/content";
  $data['cats'] = $this->products_model->get_cats();
  $data['products'] = $this->products_model->get_all_products();
  $data['section2'] = 'global/links';
  if ($this->session->flashdata('message')) {
    $data['message'] = $this->session->flashdata('message');
  }
  
  $data['slideshow'] = 'header/slideshow';
  $this->load->vars($data);
  $this->load->view('template/main');
  }

function view_event($id) {
		
		$segment_active = end($this->uri->segment_array());
		$data['eventID'] = $segment_active;
		$data['event'] = $this->events_model->get_event($segment_active);
		foreach($data['event'] as $row):
			
			if($row->linked_gallery != NULL){
				$data['linked_gallery'] = $row->linked_gallery;
				$data['galleryImages'] = $this->content_model->get_gallery($data['linked_gallery']);
			} else {
				$data['linked_gallery'] = NULL;
			}
			
		endforeach;
		
		$data['menu'] = 'view_event';
		$this->get_content_data($data['menu']);
		
		$data['sidebar'] = "sidebox/side";
	    $data['main_content'] = "global/" . $this->config_theme . "/content";
		
	    //$data['cats'] = $this->products_model->get_cats();
	    //$data['products'] = $this->products_model->get_all_products();
	    $data['section2'] = 'global/links';
	    $data['seo_links'] = $this->content_model->get_seo_links();
	    if ($this->session->flashdata('message')) {
	      $data['message'] = $this->session->flashdata('message');
    	}
    
	    $data['slideshow'] = 'header/slideshow';
	    $this->load->vars($data);
	    $this->load->view('template/main');
	}
  
  function login() {
    if ($this->session->flashdata('message')) {
      $data['message'] = $this->session->flashdata('message');
    }
    $id = 'login';
    $data['content'] = $this->content_model->get_content($id);
    $data['main_content'] = "user/login_form";
    $data['title'] = "Login";
    
    $data['page'] = "login";
    $this->load->vars($data);
    $this->load->view('template/main');
  }
  
  }
  
  /* End of file welcome.php */
  /* Location: ./application/controllers/welcome.php */
