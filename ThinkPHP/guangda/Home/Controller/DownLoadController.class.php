<?php
namespace Home\Controller;
class DownLoadController extends BaseController {
	protected $allow_category_id = array(5,27,28);
	
	public function index(){
		//左边导航
		$tree = $this->category->getCateList($this->category_id);
		//面包屑导航
		$nav = $this->category->getPosition($this->category_id);
		$this->findCurrTitle($tree[0]['name']);
		
		
		//新闻列表
		$down = D('DownLoad');
		$page = $this->getInt('get.p',1);
		
		$size = 15;
		$data = $down->getList($this->category_id,$page,$size);

		
		$p = new \Think\Page();
		$data['pageCode'] = $p->setPageSize(8)->setSign('p')->getCode($data['count'], $size);
		
		
		//分发
		$this->assign('first_title',$this->first_titles);
		$this->assign('left_nav',$tree);
		$this->assign('right_nav',$nav);
		$this->assign('list',$data['list']);
		$this->assign('pageCode',$data['pageCode']);
		$this->display('DownLoad/list');
	}
	
	public function detail(){
		$id = I('get.id',1)+0;
		if($id<=0) {
			$this->error('你访问的页面不存在','');
		}
		$down = D('DownLoad');
		$content = $down->find($id);
		$error = '';
		$tree = array();
		if(empty($content)){
			$error = '不存在该文章';
		}else{
			$cate = D('Category');
			//左边导航
			$tree = $cate->getCateList($content['category_id']);

			//面包屑导航
			$nav = $cate->getPosition($content['category_id']);
			$this->findCurrTitle($tree[0]['name']);
			$this->assign('first_title',$this->first_titles);
			$this->assign('left_nav',$tree);
			$this->assign('data',$content);
			$this->assign('right_nav',$nav);
		}
		
		$this->assign('error',$error);
		$this->display('DownLoad/detail');
	}
	
}