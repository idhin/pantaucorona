<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('MPantauCorona','mp');
	}


	public function index()
	{
		$data['total'] = $this->mp->loadData();
		// print_r ($data); die;
		$this->load->view('dashboard',$data);
	}
}
