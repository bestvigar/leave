<?php
	namespace Home\Controller;
	use Think\Controller;
	class RegisterController extends CommonController{
	public function register(){
		$this->display();
	}
	public function doesAdd(){
		$m=M('User1');
		$m->name=$_POST['name'];
		$m->password=$_POST['password'];
		$id=$m->add();
		if($id){
				$this->success('注册成功',U('Login/login'));
			}
		else{
					$this->error('注册失败');
			}
	}
}

?>