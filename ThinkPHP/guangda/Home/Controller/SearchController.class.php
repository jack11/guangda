<?php

namespace Home\Controller;
class SearchController extends BaseController {
	
	public function result(){
		$data['keyword'] = $keyword = trim($this->getString('get.keyword'),'');
		$keyword = explode(' ', $keyword);
		if(empty($keyword)){
			$this->error('请输入关键字');
		}
		
		$data['time'] = $time = $this->getInt('get.time');
		if($time<=0){
			$time = 0;
		}
		$time = $time * 3600 * 24;
		
		$data['type'] = $type = trim($this->getInt('get.type'));
		$type = ($type<=0 || $type>2)?0:$type;
		
		$data['order'] = $order = trim($this->getString('get.order'));
		$order = in_array($order, array('desc','asc'))?$order:'desc';
		
		$info = D('Information');
		$list = $info->getArticleByParams($keyword,$time,$type,$order);
		$data['count'] = $list['count'];
		$list = $list['list'];
		if($list){
			$cate_ids = array();
			foreach ($list as  $value) {
				if(!in_array($value['category_id'], $cate_ids)){
					$cate_ids[] = $value['category_id'];
				}
			}
			$cate = D('Category');
			$names = $cate->getNameByIds($cate_ids);
			foreach ($list as $key => $value) {
				foreach ($names as  $v) {
					if($value['category_id'] == $v['id']){
						$list[$key]['category_name'] = $v['name'];
					}
				}
			}
			
			$p = new \Think\Page();
			$size = 10;
			$pageCode = $p->setPageSize(8)->setSign('p')->getCode($data['count'], $size);
			$this->assign('pageCode',$pageCode);
		}
		
		
		$this->assign('first_title',$this->first_titles);
		$this->assign('list',$list);
		$this->assign('data',$data);
		$this->display('Search/result');
	}
	
}