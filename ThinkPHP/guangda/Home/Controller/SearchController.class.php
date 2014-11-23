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
		
		$this->assign('first_title',$this->first_titles);
		$this->assign('list',$list);
		$this->display('Search/result');
	}
	
}