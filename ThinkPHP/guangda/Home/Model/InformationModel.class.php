<?php

namespace Home\Model;

class InformationModel extends MyModel{
	
	/**
	 * 得到分页信息
	 * @param int cate_id 栏目id
	 * @param int page 当前页数  
	 * @return array(array list,int count)
	 */
	public function getList($cate_id,$page,$size){
		$where['category_id'] = $cate_id;
		$data['list'] = $this->where($where)->order('uptime')->page($page.','.$size)->select();
		$data['count']  = $this->where($where)->count();
		return $data;
	}
	
	/**
	 * 得到具体的页面内容
	 * @param int cate_id
	 * @param int id
	 * @return mixed 
	 */
	public function getContent($cate_id,$id){
		$where['id'] = $id;
		$where['category_id'] = $cate_id;
		return $this->where($where)->find();
	}
<<<<<<< HEAD
	
	/**
	 * 根据关键字找文张
	 * @param mixed word array or string 关键字
	 * @return mixed array or false
	 */
	public function getArticleByWord($words){
		if(!is_array($words)){
			$like['title'] = array('like',"%{$words}%");
			$like['content'] = array('like',"%{$words}%");
		}else{
			$arr = array();
			foreach($words as $word){
				$arr[] = "%{$word}%";
			}
			$like['title'] = array('like',$arr,'or');
			$like['content'] = array('like',$arr,'or');
		}
		$like['_logic'] = 'OR';
		$data['list'] = $this->where($like)->select();
		$data['count'] = $this->where($like)->count();
		return $data;
	}
>>>>>>> 23218f5d3f889142247787cb537e1da9e72410b5
}
