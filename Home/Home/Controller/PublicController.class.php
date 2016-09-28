<?php
	namespace Home\Controller;
	use Think\Controller;
	class PublicController extends Controller{
	public function code(){
		import('ORG.Uyil.Image');
		Image::buildImageUerify(4,1,'png',30,30,'code');
	}
}

?>