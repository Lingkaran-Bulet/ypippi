<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function index()
  {
    
    $getFullurl = $this->uri->uri_string();
    $exp = explode('/read/', $getFullurl);
    
    $table = $exp[0];
    $slug = $exp[1];

    switch ($table) {
      case 'news':
        $table = 'article';
        $view = 'news-details';
        break;
      default:
        $table = 'event';
        $view = 'event-details';
        break;
    }

    $data['detail'] = $this->Querymodel->getDetail($table, $slug);
    
    $data['content'] = $view;
    $this->load->view('layout/default', $data); 
  }

}

/* End of file Branch.php */
/* Location: ./application/wsfront/controllers/Branch.php */