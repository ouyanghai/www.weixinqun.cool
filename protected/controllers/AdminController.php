<?php
class AdminController extends TopController{
	public $menu;
	public function init(){
		parent::init();
		$this->layout='//layouts/admin';

		$this->menu = array(
			array("label"=>"任务审核","url"=>"/admin/index"),
			array("label"=>"用户审核","url"=>"/admin/user"),
			array(
				"label"=>"用户信息",
				"ctr"=>array("modifyPass"),
				"childMenu"=>array(
					array('label'=>"修改密码","url"=>"/admin/modifyPass"),
				),
			),
			/*
			array(
				"label"=>"账单流水",
				"ctr"=>array("recharge","rechargeList"),
				"childMenu"=>array(
					array('label'=>'账号充值',"url"=>"/admin/recharge"),
					array('label'=>'充值记录',"url"=>"/admin/rechargeList"),
				),
			),
			*/
		);
	}

	public function actionIndex(){
		$page = !empty($_GET['page'])&&intval($_GET['page'])>1 ? intval($_GET['page']) : 1;
		$size = 5;
		$start = ($page-1)*$size;

		$command = Yii::app()->db->createCommand();
		$res = array();
		
		$res = $command->setText("select * from `qun_img` where status=0 order by created asc limit {$start},{$size}")->queryAll();
		$count = $command->setText("select count(*) from `qun_img` where status=0")->queryScalar();
		$pages = ceil($count/$size);
		
		$this->render('index',array("data"=>$res,'page'=>$page,'pages'=>$pages));
	}

	public function actionUser(){
		$page = !empty($_GET['page'])&&intval($_GET['page'])>1 ? intval($_GET['page']) : 1;
		$size = 5;
		$start = ($page-1)*$size;

		$command = Yii::app()->db->createCommand();
		$res = array();
		
		$res = $command->setText("select * from `user_img` where status=0 order by created asc limit {$start},{$size}")->queryAll();
		$count = $command->setText("select count(*) from `user_img` where status=0")->queryScalar();
		$pages = ceil($count/$size);

		$this->render('user',array("data"=>$res,'page'=>$page,'pages'=>$pages));
	}

	public function actionModifyPass(){
		$this->render('modifypass');
	}

	public function actionList(){
		$this->render('list');
	}

	//登录页面
	public function actionLoginPage(){
		$this->layout='//layouts/column3';
		$this->render('login');
	}
	/*
	//注册页面
	public function actionRegPage(){
		$this->layout='//layouts/column3';
		$this->render('register');
	}
	*/
	public function actionLogout(){
		// 清空用户之前的登录状态
        Yii::app()->user->clearStates();
        Yii::app()->user->logout();
        echo json_encode("ok");
	}

	public function actionDoModifyPass(){
		$password = $_POST['password'];
		$newpass = $_POST['newpass'];
		$repass = $_POST['repass'];
		$tel = Yii::app()->user->tel;

		$command = Yii::app()->db->createCommand();
		$num = $command->setText("update `qun_user` set password='{$newpass}' where tel='{$tel}' and password='{$password}'")->execute();
		if($num > 0){
			echo json_encode("修改成功");
		}else{
			echo json_encode("修改失败");	
		}
		
	}

	public function actionTaskManage(){
		if(empty($_POST['id']) || empty($_POST['status'])){
			echo json_encode("error");exit;
		}
		$id = $_POST['id'];
		$status = $_POST['status'];
		$command = Yii::app()->db->createCommand();
		$sql = "update `qun_img` set status='{$status}' where id={$id} and status=0";
		$num = $command->setText($sql)->execute();
		if($num > 0){
			echo json_encode("ok");exit;
		}
		echo json_encode("error");exit;
	}

	public function actionUserManage(){
		if(empty($_POST['id']) || empty($_POST['status'])){
			echo json_encode("error");exit;
		}
		$id = $_POST['id'];
		$status = $_POST['status'];
		$command = Yii::app()->db->createCommand();
		$sql = "update `user_img` set status='{$status}' where id={$id} and status=0";
		$num = $command->setText($sql)->execute();
		if($num > 0){
			echo json_encode("ok");exit;
		}
		echo json_encode("error");exit;
	}
	/*
	public function actionDoRegister(){
		if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['repassword']) ||empty($_POST['tel'])){
			echo json_encode("参数错误");
			exit;
		}
		if($_POST['password'] != $_POST['repassword']){
			echo json_encode("两次输入密码不一致");
			exit;
		}
		if(!preg_match("/^1[34578]\d{9}$/", $_POST['tel'])){
			echo json_encode("手机号码格式错误");
			exit;	
		}
		$nick = $_POST['username'];
		$password = $_POST['password'];
		$tel = $_POST['tel'];
		$now = date('Y-m-d H:i:s');

		$command = Yii::app()->db->createCommand();
		$sql = "insert into `qun_user` (nick,password,tel,created,updated) values('{$nick}','{$password}','{$tel}','{$now}','{$now}')";
		$num = $command->setText($sql)->execute();
		if($num < 1){
			echo json_encode("网络错误");
			exit;
		}
		echo json_encode("ok");
		exit;
	}
	*/
	public function filters(){
		return array(
			"auth - loginPage,regpage"
		);
	}
}

?>