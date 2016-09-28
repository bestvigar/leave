<?php
	namespace Home\Controller;
	use Think\Controller;
class FirstController extends CommonController{
		public function first(){
			$message=M('User');
			$arr=$message->select();
			$this->assign('list',$arr);

			$this->display();
		}
}
?>