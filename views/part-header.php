<?php

$auth = new Authorizer();
$auth_status = $auth->get_login_status();

?>
<div class="header">
	<div class="container">
		<h1><a href="<?php echo SITE_URL;?>">纽约同城交友</a></h1>
		
		<?php if( $auth_status != 1 ):?>
			<a class="signup" href="<?php echo SITE_URL;?>/signup">注册<span>会员</span></a>
			<a class="signin" href="<?php echo SITE_URL;?>/login">登陆</a>
		<?php endif;?>
		
	</div>
</div>

<?php if( $auth_status == 1 ):?>
	<div class="sub-header">
		<div class="container">
			<a href="<?php echo SITE_URL;?>/account">基本资料</a>
			<a class="signup" href="<?php echo SITE_URL;?>/logout">退出帐号</a>
		</div>
	</div>
<?php endif;?>