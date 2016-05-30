<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends MX_Controller{
	
	public function __construct(){
		parent::__construct();

	}
	
	public function index($page = null){
		$this->load->model('admin/modelcategory');
		$data = array();

		$data['page'] = $page;
		return $data;

		// $this->template->load_view('header',$data);

		// $this->template->build('header',$data);
	}
}
