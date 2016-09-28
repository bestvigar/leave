<?php
	namespace Home\Controller;
	use Think\Controller;
	class AddController extends CommonController{
	public function add(){
		$this->display();
	}
	public function doAdd(){
		$m=M('User');
		$m->usename=$_POST['usename'];
		$m->useclass=$_POST['useclass'];
		$m->usenum=$_POST['usenum'];
		$m->sdata=$_POST['sdata'];
		$m->edata=$_POST['edata'];
		$m->usepnum=$_POST['usepnum'];
		$id=$m->add();
		if($id){
				$this->success('信息添加成功',U('First/first'));
			}
		else{
					$this->error('信息添加失败');
			}
	}
}
?>