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
		<?php else:?>
			<a class="signup" href="<?php echo SITE_URL;?>/logout">退出帐号</a>
		<?php endif;?>
		
	</div>
</div>