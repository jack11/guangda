<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	protected $first_titles = array();
	
	protected $allow_category_id = array(0);
	
	protected $category_id = 0;
	
	protected $category = null;
	
	
	public function __construct(){
		$this->first_titles = array(
			array('name'=>'首页','class'=>''),
			array('name'=>'行内通知','class'=>''),
			array('name'=>'分行信息','class'=>''),
			array('name'=>'下载','class'=>''),
			array('name'=>'通讯录','class'=>''),
			array('name'=>'文化风采','class'=>''),
			array('name'=>'公共文件夹','class'=>'')
			);
		parent::__construct();
	}
	
	protected function _initialize(){
		$this->isAllowCategory();
		$this->category = D('Category');
	}
	
	
	protected function findCurrTitle($title){
		foreach ($this->first_titles as $key => $value) {
			if($value['name'] == $title){
				$this->first_titles[$key]['class'] = 'active';
			}
		}
	}
	
	protected function isAllowCategory(){
		$cate_id = $this->getInt('get.c');
		if($cate_id<0 || ($this->allow_category_id!==TRUE && !in_array($cate_id, $this->allow_category_id))){
			$this->error();
		}
		$this->category_id = $cate_id;
	}
	
	protected function error($message='',$jumpUrl='',$ajax=false){
		if(''===$message){
			$message = '你所访问的页面不存在';
		}
		parent::error($message,$jumpUrl,$ajax);
	}
	
	protected function getString($name,$default=''){
		return I($name,$default,'string');
	}
	
	protected function getInt($name,$default=0){
		return I($name,$default,'int');
	}
	protected function getArray($name,$default=array()){
		$res = I($name,$default);
		if(!is_array($res)){
			return array();
		}
		return $res;
	}
	
	protected function _empty($name){
		$this->error();
	}
	
	
	
	
}