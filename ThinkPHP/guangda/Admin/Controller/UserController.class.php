<?php
namespace Admin\Controller;

class UserController extends BaseController {
	protected $user = null;
	
	public function _initialize(){
		$this->user = D('User');
	}
	
	public function login(){
		if(!IS_POST){
			$this->display('User/login');
		}else{
			$name = $this->getString('post.user');
			$password = $this->getString('post.password');
			$info = $this->user->login($name,$password);
			if(!$info){
				$this->error('用户名错误或密码错误',U('User/login'));
				$this->assign('error','用户名错误或密码错误');
				$this->display('User/login');
			}else{
				$auth = D('Auth');
				$info['auths'] = $auth->getAuths($info['id']);
				session('admin',$info);
				$this->success('登录成功',U('index/index'));
			}
		}
	}
	
	public function loginout(){
		Session(null);
		$this->success('退出成功',U('index/index'));
	}
	
	
}