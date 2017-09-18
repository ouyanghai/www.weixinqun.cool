<?php
class WebController extends TopController{
	public $menu = array(
		array("label"=>"首页","url"=>"index"),
		array("label"=>"微信群","url"=>"list"),
		array("label"=>"发布微信群","url"=>"upload"),

	);
	public function init(){
		parent::init();
		$this->layout = "//layouts/web";

	}

	public function actionIndex(){
		$command = Yii::app()->db->createCommand();
		$res1 = $command->setText("select id,qun_logo,qun_name,created from `qun_img` where status=1 and qun_cate<10 limit 0,16")->queryAll();

		$res2 = $command->setText("select id,qun_logo,qun_name,created from `qun_img` where status=1 and qun_cate>9 and qun_cate<20 limit 0,16")->queryAll();

		$res3 = $command->setText("select id,qun_logo,qun_name,created from `qun_img` where status=1 and qun_cate>19 and qun_cate<28 limit 0,10")->queryAll();
		
		$this->render("index",array('data1'=>$res1,'data2'=>$res2,'data3'=>$res3));
	}
	
	public function actionShuaiGe(){
		$this->render("shuaige");
	}

	public function actionUpload(){
		$this->render("upload");
	}

	public function actionGetUpload(){
		
		if(!isset($_POST['qun_cate']) || !isset($_POST['qun_city']) || !isset($_POST['qun_name']) || !isset($_POST['qun_info'])){
			echo json_encode("参数错误");exit;
		}

		$qun_cate = $_POST['qun_cate'];
		$qun_city = $_POST['qun_city'];
		$qun_name = $_POST['qun_name'];
		$qun_info = $_POST['qun_info'];
		$city_name = $_POST['city_name'];
		$keyword = !empty($_POST['qun_keyword']) ? $_POST['qun_keyword'] : "";
		$keyword = str_replace(" ", ",", $keyword);

		$files = $this->uploadFile("upload");
		if(empty($files)){
			echo json_encode("文件错误");exit;
		}

		$qun_logo = $files['qun_logo'];
		$qun_img  = $files['qun_img'];
		$qun_user_img = $files['qun_user_img'];

		$date = date('Y-m-d H:i:s');

		$command = Yii::app()->db->createCommand();
		$sql = "insert into `qun_img` (qun_cate,qun_city,city_name,qun_name,keyword,qun_info,qun_logo,qun_img,qun_user_img,status,created,updated) values('{$qun_cate}','{$qun_city}','{$city_name}','{$qun_name}','{$keyword}','{$qun_info}','{$qun_logo}','{$qun_img}','{$qun_user_img}',0,'{$date}','{$date}')";
		$num = $command->setText($sql)->execute();

		echo json_encode("ok");exit;
	}
	
	public function actionList(){
		$city = isset($_GET['city']) ? intval($_GET['city']) : 0;
		$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
		$keyword = !empty($_GET['k']) ? $_GET['k'] : "";
		$where = "";
		if($city > 0){
			$where .= " and qun_city='{$city}'";
		}
		if($cate > 0){
			$where .=" and qun_cate='{$cate}'";
		}

		$page = !empty($_GET['page'])&&intval($_GET['page'])>1 ? intval($_GET['page']) : 1;
		$size = 20;
		$start = ($page-1)*$size;
		$command = Yii::app()->db->createCommand();
		$sql = "select * from `qun_img` where status=1 {$where} order by created desc limit {$start},{$size}";
		$psql= "select count(*) from `qun_img` where status=1 {$where}";
		if(!empty($keyword)){
			$city = 0;
			$cate = 0;
			$sql = "select * from `qun_img` where status=1 and keyword like '%{$keyword}%' order by created desc limit {$start},{$size}";
			$psql= "select count(*) from `qun_img` where status=1 and keyword like '%{$keyword}%'";
		}
		$res = $command->setText($sql)->queryAll();
		$count = $command->setText($psql)->queryScalar();
		$pages = ceil($count/$size);
		$city_name = "全国";

		if($city > 0){
			$city_name = $command->setText("select name from b2b_city where id={$city}")->queryScalar();	
		}
		
		$this->render("list",array('city'=>$city,'cate'=>$cate,'page'=>$page,'data'=>$res,'city_name'=>$city_name,'pages'=>$pages));
	}

	public function actionDetail(){
		$id = !empty($_GET['id']) ? $_GET['id'] : 1;
		$command = Yii::app()->db->createCommand();
		$sql = "select * from `qun_img` where id={$id}";

		$res = $command->setText($sql)->queryRow();
		$this->render("detail",array("data"=>$res));
	}

	public function actionSearch(){
		$this->render("list");
	}

	//批量接收二维码信息
	public function actionGetPost(){
		
		if(!isset($_GET['cate_name']) || empty($_GET['city_name']) || empty($_GET['qun_name']) || empty($_GET['qun_logo'])|| empty($_GET['qun_user_img'])|| empty($_GET['qun_img'])){
			echo json_encode("参数错误");exit;
		}
		$date = date("Y-m-d");
		$dirname = Yii::app()->basePath."/../images/upload/{$date}";
		if(!is_dir($dirname))
			mkdir($dirname,0777,true);

		$city_name = rtrim($_GET['city_name'],"市");
		$cate_name = $_GET['cate_name'];

		$qun_cate = $this->getCateIdByName($cate_name);
		if(empty($qun_cate)){
			echo json_encode("参数行业名称错误");exit;
		}
		$qun_city = $this->getCityIdByName($city_name);
		if(empty($qun_city)){
			echo json_encode("参数城市名{$qun_city}称错误");exit;
		}

		$user_wx  = $_GET['user_wx'];
		$qun_name = $_GET['qun_name'];
		$qun_info = $_GET['qun_info'];
		$keyword = str_replace(" ", ",", $_GET['qun_keyword']);

		$qun_logo = $filename = date('Y-m-d',time()).md5(uniqid()).".jpg";
		$content = file_get_contents($_GET['qun_logo']);
		file_put_contents($dirname.'/'.$filename,$content);

		$qun_user_img = $filename = date('Y-m-d',time()).md5(uniqid()).".jpg";
		$content = file_get_contents($_GET['qun_user_img']);
		file_put_contents($dirname.'/'.$filename,$content);

		$qun_img = $filename = date('Y-m-d',time()).md5(uniqid()).".jpg";
		$content = file_get_contents($_GET['qun_img']);
		file_put_contents($dirname.'/'.$filename,$content);

		$date = date('Y-m-d H:i:s');

		$command = Yii::app()->db->createCommand();
		$sql = "insert into `qun_img` (user_wx,qun_cate,qun_city,city_name,qun_name,keyword,qun_info,qun_logo,qun_img,qun_user_img,status,created,updated) values('{$user_wx}','{$qun_cate}','{$qun_city}','{$city_name}','{$qun_name}','{$keyword}','{$qun_info}','{$qun_logo}','{$qun_img}','{$qun_user_img}',1,'{$date}','{$date}')";
		$num = $command->setText($sql)->execute();

		echo json_encode("ok");exit;
	}

	public function getCateIdByName($name){
		foreach ($this->cate as $key => $value) {
			if($value==$name){
				return $key;
			}
		}
		return "";
	}

	public function getCityIdByName($name){
		$command = Yii::app()->db->createCommand();
		$id = $command->setText("select id from `b2b_city` where name like '{$name}%' limit 0,1")->queryScalar();
		return $id;
	}

	public function actionGetMobileFile(){
		if(empty($_GET['imgInfo']) || empty($_FILES['uploadfile'])){
			echo "参数错误";exit;
		}

		$date = date("Y-m-d");
		$dirname = Yii::app()->basePath."/../images/upload/{$date}";
		if(!is_dir($dirname))
			mkdir($dirname,0777,true);

		$imgInfo = $_GET['imgInfo'];
		$file = $_FILES['uploadfile'];

		$filename = date('Y-m-d',time())."_{$imgInfo}_".md5(uniqid());
		$ext = strrchr($file['name'],'.');
		$filename .= $ext;
		move_uploaded_file($file['tmp_name'],$dirname.'/'.$filename);
		echo $filename;
	}
	
	public function actionGetMobileFileInfo(){
		
		if(!isset($_GET['cate_name']) || empty($_GET['city_name']) || empty($_GET['qun_name']) || empty($_GET['qun_logo'])|| empty($_GET['qun_user_img'])|| empty($_GET['qun_img'])){
			echo json_encode("参数错误");exit;
		}
		$date = date("Y-m-d");
		
		$city_name = rtrim($_GET['city_name'],"市");
		$cate_name = $_GET['cate_name'];

		$qun_cate = $this->getCateIdByName($cate_name);
		if(empty($qun_cate)){
			echo json_encode("参数行业名称错误");exit;
		}
		$qun_city = $this->getCityIdByName($city_name);
		if(empty($qun_city)){
			echo json_encode("参数城市名{$qun_city}称错误");exit;
		}

		$user_wx  = $_GET['user_wx'];
		$qun_name = $_GET['qun_name'];
		$qun_info = $_GET['qun_info'];
		$keyword = str_replace(" ", ",", $_GET['qun_keyword']);

		$qun_logo = $_GET['qun_logo'];

		$qun_user_img = $_GET['qun_user_img'];

		$qun_img = $_GET['qun_img'];

		$command = Yii::app()->db->createCommand();
		$sql = "insert into `qun_img` (user_wx,qun_cate,qun_city,city_name,qun_name,keyword,qun_info,qun_logo,qun_img,qun_user_img,status,created,updated) values('{$user_wx}','{$qun_cate}','{$qun_city}','{$city_name}','{$qun_name}','{$keyword}','{$qun_info}','{$qun_logo}','{$qun_img}','{$qun_user_img}',0,'{$date}','{$date}')";
		$num = $command->setText($sql)->execute();

		echo json_encode("ok");exit;
	}

}

?>