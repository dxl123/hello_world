<?php
//权限控制器
	namespace Application\Admin\Controller;
	use KJ\Controller;
	use KJ\Auth;
	class Admin extends Controller{
		public function __construct(){
			if(!isset($_SESSION['loginName'])){
				echo "<script>alert('请登录');window.location.href='index.php?m=admin&c=login&a=index';</script>";
				exit;
			}
			$auth = new auth();
			if(!$auth -> check()){
				echo "<script>alert('无权访问');window.history.go(-1);</script>";
				exit;
			}
		}
	}
?>