<?php

namespace Home\Controller;
class SearchController extends BaseController {
	
	public function result(){
		$keyword = $this->getString('post.keyword');
		if(empty($keyword)){
			$this->error('请输入关键字');
		}
		$info = D('Information');
		$list = $info->getArticleByWord($keyword);
		if($list){
			$p = new \Think\Page();
			$list['pageCode'] = $p->setPageSize(8)->setSign('p')->getCode($list['count'], $size);
		}
		
		$this->assign('first_title',$this->first_titles);
		$this->assign('list',$list['list']);
		$this->assign('pageCode',$list['pageCode']);
		$this->display('Search/result');
	}
	
}