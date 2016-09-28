<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{	
			public function _initialize(){
					//初始化的时候检查用户权限
				if(!isset($_SESSION['name']) || $_SESSION['name']='')
				{
					$this->redirect('Login/login');
				}
			}
	}
?>
