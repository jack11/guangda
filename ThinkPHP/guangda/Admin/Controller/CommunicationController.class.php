<?php
namespace Admin\Controller;

class CommunicationController extends BaseController {
	
	protected function _initialize(){
	}
	
	public function txl(){
		$this->display('Communication/tongxunlu');
	}
	
}