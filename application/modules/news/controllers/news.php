<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends MX_Controller {
	private $b_Check = true;

	public function __construct(){
		parent::__construct();

		#Tải thư viện và helper của Form trên CodeIgniter 
		$this->load->helper(array('form')); 
		$this->load->helper(array('util_helper')); 
		$this->load->library(array('form_validation'));

		#Tải model 
		$this->load->model('admin/modelnews');
		$this->load->model('admin/modelcategory');

		$data = Modules::run('header','home');
		$this->template->set_partial('header','header',$data);

		$this->template->set_partial('footer','footer',$data);
	}
	
	public function index($type = 0,$cat = 0){
		$dataR = Modules::run('right',$type);
		$this->template->set_partial('right','right',$dataR);

		$data = array();
		switch ($type) {
			case 0:
				$data['title'] = "News & Events";
				$data['page'] = "news";
				break;
			case 1:
				$data['title'] = "Themes";
				break;
			case 2:
				$data['title'] = "Tours";
				$data['page'] = "tour";
				break;
			case 3:
				$data['title'] = "Blog";
				$data['page'] = "blog";
				break;
			
			default:
				# code...
				break;
		}

		if ($cat>0){
			$category = $this->modelcategory->getCategoryById($cat);
			$data['cat'] = $category;
			$list_news = $this->modelnews->getNews(array('category_id'=>$cat),' LIMIT 0,5');
		}else{
			$data['cat'] = array('type'=>$type,'id'=>0,'name'=>'');
			$list_news = $this->modelnews->getNews(array('type'=>$type),' LIMIT 0,5');
		}

		$data['list_news'] = $list_news;
		$this->template->build('news',$data);
	}
	public function detail($id=0) {
		if ($id<=0) 
			redirect(base_url().'news/list');

		$detail_news = $this->modelnews->getNewsById($id);
		if($detail_news['category_id']>0){
			$category = $this->modelcategory->getCategoryById($detail_news['category_id']);
			$other_news = $this->modelnews->getNews(array('category_id'=>$category['id']),' LIMIT 0,5');
		}else{
			$category = array("type"=>$detail_news['type'],"id" =>0,"name"=>"");
			$other_news = $this->modelnews->getNews(array('type'=>$detail_news['type']),' LIMIT 0,5');
		}
		

		$dataR = Modules::run('right',$detail_news['type']);
		$this->template->set_partial('right','right',$dataR);

		$data['other_news'] = $other_news;
		$data['item'] = $detail_news;
		$data['cat'] = $category;
		$this->template->build('news-detail',$data);
	}
}