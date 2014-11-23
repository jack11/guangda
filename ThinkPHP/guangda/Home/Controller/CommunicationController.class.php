<?php
namespace Home\Controller;
class CommunicationController extends BaseController {
	
	protected $allow_category_id = TRUE;
	

	public function index(){
		$cate_id = 6;
		//左边导航
		$tree = $this->category->getCateList($cate_id);
		$tmp = $tree[0];
		$this->findCurrTitle($tree[0]['name']);
		
		if($this->category_id == $cate_id){
			$cate_id = 2;
		}else{
			$cate_id = $this->category_id;
		}
		//左边导航
		$tree = $this->category->getCateList($cate_id);
		if(false == $tree){
			$this->error();
		}
		//面包屑导航
		$nav = $this->category->getPosition($cate_id);
		$tree[0] = $nav[0] = $tmp;
		$this->assign('first_title',$this->first_titles);
		$this->assign('left_nav',$tree);
		$this->assign('right_nav',$nav);
		$this->display('Communication/tongxunlu');
	}
}