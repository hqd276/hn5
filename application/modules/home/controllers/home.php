<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data );
		$this->template->set_partial('footer','footer',$data );
	}
	
	public function index(){
		$data = array();
		$this->load->model(array('admin/modelsetting'));
		$this->load->helper(array('util')); 

		$setting = $this->modelsetting->getSetting(null);
		$setting = add_array_key('key',$setting);
		foreach ($setting as $key => $value) {
			$setting[$key]['data'] = json_decode($value['value']);
		}
		$data['setting'] = $setting;

		$this->load->model(array('admin/modelgallery'));
		$list_gallery_1 = $this->modelgallery->getGallery(array('category_id'=>1),"LIMIT 16");
		$data['list_gallery_1'] = $list_gallery_1;

		$list_gallery_2 = $this->modelgallery->getGallery(array('category_id'=>2),"LIMIT 16");
		$data['list_gallery_2'] = $list_gallery_2;

		$this->load->model(array('admin/modelmember'));
		$list_member = $this->modelmember->getMembers(null,"LIMIT 3");
		$data['list_member'] = $list_member;

		$this->template->build('home',$data);
	}
}
