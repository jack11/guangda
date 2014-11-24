<?php
namespace Admin\Controller;

class ListController extends BaseController {
	
	protected function _initialize(){
	}
	
	/*
	 * 具体页面
	 */ 
    public function mul(){
    	$this->assign('temp','综合信息');
		
        $this->display('Common/list');
    }
	
	public function import(){
		$this->assign('temp','重要通知');
        $this->display('Common/list');
	}
	
	public function bran_msg(){
		$this->assign('temp','分行信息');
        $this->display('Common/list');
	}
	
	public function bran_iss(){
		$this->assign('temp','分行发文');
        $this->display('Common/list');
	}
	
	public function whfc(){
		$this->assign('temp','文化风采');
        $this->display('Common/list');
	}
	
	public function sline(){
		$slid = $this->getString("id");
		$temp = '';
		switch ($slid) {
			case '1':
				$temp = '对公条线';
				break;
			case '2':
				$temp = '零售条线';
				break;
			case '3':
				$temp = '运营条线';
				break;
			case '4':
				$temp = '风险条线';
				break;
			default:
				break;
		}
		$this->assign('temp',$temp);
        $this->display('Common/list');
	}
	
	public function depart(){
		$slid = $this->getString("id");
		$temp = '';
		switch ($slid) {
			case '1':
				$temp = '公司业务部';
				break;
			case '2':
				$temp = '零售业务部';
				break;
			case '3':
				$temp = '办公室';
				break;
			case '4':
				$temp = '计划财务部';
				break;
			case '5':
				$temp = '风险管理部';
				break;
			case '6':
				$temp = '营业部';
				break;
			case '7':
				$temp = '业务一部';
				break;
			case '8':
				$temp = '业务二部';
				break;
			default:
				break;
		}
		$this->assign('temp',$temp);
        $this->display('Common/list');
	}
	
	/*
	 * 操作方法
	 * */
	public function add(){
		$type = $this->getString("type");
		$this->assign('op',0);
		$this->assign('item',$type);
        $this->display('Common/detail');
    }
	
	public function update(){
		$type = $this->getString("type");
		$this->assign('op',1);
		$this->assign('item',$type);
		$this->assign('title',"这是标题");
		$this->assign('ptime',"这是时间");
		$this->assign('content',"这是内容");
        $this->display('Common/detail');
    }
	
	public function delete(){
		$type = $this->getString("type");
		$this->assign('item',$type);
        $this->display('Common/detail');
    }
	
	public function search(){
		$kw = $this->getString("search_word");
		$this->assign('kw',$kw);
        $this->display('Common/list');
    }
}