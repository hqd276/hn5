<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Right extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index($type = 0){
		$this->load->model('admin/modelcategory');
		$this->load->model('admin/modelnews');

		$categories = $this->modelcategory->getCategories(array('type'=>$type));
		// foreach ($categories as $key => $value) {
		// 	if($value['parent'] == -1) {
		// 		foreach ($categories as $k => $v) {
		// 			$categories[$key]['child'] =$v;
		// 		}
		// 	}
		// }
		$recent_post = $this->modelnews->getNews(array('type'=>$type),' LIMIT 0,3 ',' created DESC');

		$data = array();

		$data["categories"] = $categories;
		$data["recent_post"] = $recent_post;

		return $data;
	}
	
}
