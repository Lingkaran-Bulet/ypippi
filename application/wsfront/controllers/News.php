<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['article'] = $this->Querymodel->getListArticle($limit=3, $start=0);
    	
    	$data['content'] = 'news';
		$this->load->view('layout/default', $data);
	}

}

/* End of file News.php */
/* Location: ./application/wsfront/controllers/News.php */