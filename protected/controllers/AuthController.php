<?php
class AuthController extends Controller{
	private $_identity = null;

	public function actionLogin(){
		
		if(empty($_POST['tel']) || empty($_POST['password'])){
			$url = Yii::app()->createAbsoluteUrl(Yii::app()->user->loginUrl);
			Yii::app()->getRequest()->redirect($url);
			exit;
		}

		if($this->_identity===null){
			$this->_identity=new UserIdentity;
			$this->_identity->tel = $_POST['tel'];
			$this->_identity->password = $_POST['password'];
		}

		if(!$this->_identity->authenticate()){
			echo json_encode("用户名或密码错误");exit;
		}
		
		Yii::app()->user->login($this->_identity,3600);

		$info = $this->_identity->get();
		foreach ($info as $k => $v) {
            if (is_scalar($v))
                Yii::app()->user->setState($k, $v);
            else
                unset($info[$k]);
        }
		
		//Yii::app()->getRequest()->redirect("/web/index");
		echo json_encode("ok");exit;
	}
}

?>