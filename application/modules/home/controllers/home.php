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

		$this->load->model(array('modelcategory'));
		$this->load->model(array('admin/modelgallery'));
		$this->load->model(array('admin/modelbanner'));

		$list_category = $this->modelcategory->getCategories(array("type"=>0,"status"=>1));
		$list_parent = array();
		$list_gallery = array();
		foreach ($list_category as $key => $value) {
		// 	$childs = $this->modelcategory->getCategories(array("type"=>0,"status"=>1,"parent"=>$value['id']));
		// 	if(count($childs)>0) {
		// 		foreach ($childs as $k => $v) {
		// 			$childs[$k]['items'] = $this->modelgallery->getGallery(array('category_id'=>$v['id']));
		// 		}
		// 	}
			
		// 	$list_category[$key]['childs'] = $childs;

			if ($value['parent'] == -1) {
				$list_parent[] = $value;
			}else{
				$list_gallery[] = $value;
			}
		}
		if(count($list_gallery)>0)
			foreach ($list_gallery as $k => $v) {
				$list_gallery[$k]['items'] = $this->modelgallery->getGallery(array('category_id'=>$v['id']));
			}
		$data['list_parent'] = $list_parent;
		$data['list_gallery'] = $list_gallery;


		$banners = $this->modelbanner->getBanner(array('position'=>0));
		$data['banners'] = $banners;

		$this->load->model(array('admin/modelmember'));
		$list_member = $this->modelmember->getMembers(null,"LIMIT 3");
		$data['list_member'] = $list_member;

		$this->template->build('home',$data);
	}
	
	public function show(){
		$parent = $this->input->get_post('id'); 
		$childs = $this->modelcategory->getCategories(array("type"=>0,"status"=>1,"parent"=>$parent));
		header('Content-type: application/json');
    	print (json_encode($childs));die;
    	return;
	}
}
