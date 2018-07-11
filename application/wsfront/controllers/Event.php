<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    //Do your magic here
  }

  public function index()
  {
    $data['event'] = $this->Querymodel->getListEvent($limit=3, $start=0);
    $data['content'] = 'event';
    $this->load->view('layout/default', $data); 
  }

}

/* End of file Event.php */
/* Location: ./application/wsfront/controllers/Event.php */