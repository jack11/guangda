<?php
namespace Home\Controller;
class FileController extends BaseController {
	protected $allow_category_id = array(8);
	
	public function index(){
		$this->getNav();
		$this->display('File/common_dir');
	}
	
	protected function getNav(){
		$tree = $this->category->getCateList($this->category_id);
		//面包屑导航
		$nav = $this->category->getPosition($this->category_id);
		$this->findCurrTitle($tree[0]['name']);
		//分发
		$this->assign('first_title',$this->first_titles);
		$this->assign('left_nav',$tree);
		$this->assign('right_nav',$nav);
	}
}