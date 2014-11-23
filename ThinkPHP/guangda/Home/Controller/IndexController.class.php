<?php
namespace Home\Controller;
class IndexController extends BaseController {
	
	protected $allow_category_id = array(0);
	
	
    public function index(){
    	$this->findCurrTitle('首页');
		$this->assign('first_title',$this->first_titles);
		$this->display();
    }
	
	/**
	 * 综合信息
	 */
	protected function multiple(){
		
	}
	
	/**
	 *  重要信息 
	 */
	protected function important(){
		
	}
	
	/**
	 * 条线信息
	 */
	 protected function line(){
	 	
	 }
	 
	 /**
	  * 部门信息
	  */
	  protected function department(){
	  	
	  }
	  
	  /**
	   * 产品
	   */
}