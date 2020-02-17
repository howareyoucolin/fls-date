<?php if( ! defined('ROOT_PATH') ) die( 'Curiosity kills cat!' );

include_once( ROOT_PATH . '/functions.php');

	$members = get_json('members-active');

?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约同城婚介交友 - 找男朋友找女朋友</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="纽约有什么好的婚介交友? 你在相亲,找男朋友吗? 理工男在找女朋友. 18岁与家人一起移民来美国, 在纽约法拉盛住了差不多十多年. 广交友, 性格好.">
	<meta name="keywords" content="纽约婚介交友, 法拉盛婚介找友, 纽约找男朋友">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<meta name="google-site-verification" content="rA4kzdLnrqIZt9dQUioJXNJcSwFcvdNOzwEpIRumI8s">
	<?php include(ROOT_PATH.'/parts/css.php');?>
</head>
<body>
	<?php include(ROOT_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<div class="content">
				<?php $show_ad_once = true;?>
				<?php foreach($members as $member):?>
					<?php $p = new Member($member);?>
					<div class="member clear">
						<h2>
							<a href="<?php echo $p->get_url();?>"><?php echo $p->get_title();?></a>	
						</h2>
						<a href="<?php echo $p->get_url();?>">
							<img class="profile" src="<?php echo $p->profile;?>" />
						</a>
						<p>
							<?php echo $p->title;?> , <?php echo $p->get_age();?> , <?php echo $p->gender==='m'?'男生':'女生';?><br/>
							<?php if($p->vip && $p->get_wechat()):?>						
								微信: <b class="focus"><?php echo $p->get_wechat();?></b><br/>
							<?php endif;?>
						</p>
						<p class="intro">
							<?php echo $p->get_intro();?> ...
							<a href="<?php echo $p->get_url();?>">[更多]</a>
						</p>
						<div class="clear"></div>
					</div>
					<?php 
					if($show_ad_once){
						include(SITE_PATH.'/parts/ad-mary.php');
						$show_ad_once = false;
					}
					?>
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<?php include(ROOT_PATH.'/parts/footer.php');?>
</body>