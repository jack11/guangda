<?php
namespace Home\Controller;
class MessageController extends BaseController {
	protected $allow_category_id = array(3,23,24,4,25,26,1,2,10,11,12,13,15,16,17,18,19,20,21,22);
	
	public function index(){
		//左边导航
		$tree = $this->category->getCateList($this->category_id);
		if(false == $tree){
			$this->error();
		}
		//面包屑导航
		$nav = $this->category->getPosition($this->category_id);
		
		//新闻列表
		$infomation = D('Information');
		$page = $this->getInt('get.p');
		$size = 15;
		$data = $infomation->getList($this->category_id,$page,$size);
		
		$p = new \Think\Page();
		$data['pageCode'] = $p->setPageSize(8)->setSign('p')->getCode($data['count'], $size);
		
		$this->findCurrTitle($tree[0]['name']);
		$this->assign('first_title',$this->first_titles);
		$this->assign('left_nav',$tree);
		$this->assign('right_nav',$nav);
		$this->assign('list',$data['list']);
		$this->assign('pageCode',$data['pageCode']);
		
		$this->display('Message/list');
	}
	
	/**
	 * 单篇文章
	 */
	public function content(){
		$id = $this->getInt('get.id');
		$info = D('Information');
		$content = $info->getContent($this->category_id,$id);
		if(empty($content)){
			$this->error();
		}
		//左边导航
		$tree = $this->category->getCateList($this->category_id);
		//面包屑导航
		$nav = $this->category->getPosition($this->category_id);
		$this->findCurrTitle($tree[0]['name']);
		$this->assign('first_title',$this->first_titles);
		$this->assign('left_nav',$tree);
		$this->assign('right_nav',$nav);
		$this->assign('content',$content);

		$this->display();
	}
}