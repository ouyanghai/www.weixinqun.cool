<!DOCTYPE html>
<html>
<head>
	<title>用户登录</title>
	<meta http-equiv="Content-Type" content="html/text; charset=utf-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->assets['app']; ?>/css/admin.css">
	<script type="text/javascript" src='<?php echo $this->assets['app']; ?>/js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='<?php echo $this->assets['app']; ?>/js/jquery.form.js'></script>
	<script type="text/javascript" src='<?php echo $this->assets['app']; ?>/js/admin.js'></script>
</head>
<body>
<div id='login-module'>
	<form id='login-form'>
		<div class='input-row'>
		SIGN IN
		</div>
		<div class='input-row'>
			<input type='text' id='login-tel' placeholder='TELEPHONE'/>	
		</div>
		<div class='input-row'>
			<input type='password' id='login-password' placeholder='PASSWORD'/>
		</div>
		
		<div class='input-row'>
			<input type='button' id='login-btn' value='Sign In' />
		</div>
	</form>
</div>
</body>
</html>