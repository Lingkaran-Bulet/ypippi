<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){	
		parent::__construct();
	
	}
	
	
  public function index()
  {
    
    $data['article'] = $this->Querymodel->getListArticle();
    $data['event'] = $this->Querymodel->getListEvent();
    
    $data['content'] = 'home';
    $this->load->view('layout/default', $data);
  }

}

/* End of file Home.php */
/* Location: ./application/wsfront/controllers/Home.php */