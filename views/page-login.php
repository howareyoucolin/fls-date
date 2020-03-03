<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
	<style>
	input[type=text],input[type=password]{box-sizing:border-box;border:1px solid #EEE;padding:5px;height:36px;outline:0;max-width:400px;width:100%;line-height:24px;}
	input[type=submit]{width:200px;height:36px;margin-top:20px;}
	@media only screen and (max-width: 680px){
		input[type=submit]{width:100%;}
	}
	</style>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<div class="main">
		<div class="container">
		
			<h2>会员登陆</h2>
		
			<p>&nbsp;</p>
		
			<!--<div id="err-msg" class="panel-error"></div>-->
				
			<form id="form-login" action="" method="post">
			
				<p class="label">微信号码 / 电话号码 / 电子邮箱:</p>
				<p><input type="text" name="username" /></p>
				
				<p class="label">帐号密码:</p>
				<p><input type="password" name="password" /></p>
				
				<p><input name="submit" type="submit" class="btn" value="登陆" /></p>
				
			</form>
				
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>	