<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	include_once('./functions.php');

	$id = $_GET['id'];
	$member_object = get_json('member-'.$id);
	$p = new Member($member_object);
	
?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>纽约交友 - <?php echo $p->super_title?$p->super_title:$p->title;?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $p->intro?$p->intro:$p->excerpt;?>">
	<meta name="keywords" content="纽约交友,法拉盛交友">
	<meta name="author" content="Colin Zhao">
	<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
	<meta name="format-detection" content="telephone=no">
	<?php include(SITE_PATH.'/parts/css.php');?>
</head>
<body>
	<?php include(SITE_PATH.'/parts/header.php');?>
	<div class="main">
		<div class="container">
			<div class="breadcrum">
				<a href="<?php echo SITE_URL;?>"><u>首页</u></a> >> 
				<a href="<?php echo SITE_URL;?>/blog"><u>所有会员</u></a> >>
				<?php echo $p->super_title?$p->super_title:$p->title;?>
			</div>
			<h2>
				<?php echo $p->super_title?$p->super_title:$p->title;?>
			</h2>
			<div class="highlight">
				<img class="profile" src="<?php echo $p->profile;?>" alt="纽约交友会员照片" />
				<div class="contacts">
					<p>名字: <?php echo $p->title;?></p>
					<p>性别: <?php echo $p->gender==='m'?'男生':'女生';?></p>
					<p>年龄: <?php echo $p->get_age();?></p>
					<p>
						微信:
						<?php if($p->vip):?>						
							<b class="focus"><?php echo $p->get_wechat();?></b>
						<?php else:?>
							仅VIP公开微信号,升级<a href="#">成为会员</a>?
						<?php endif;?>
					</p>
					<p>电邮: <?php echo $p->email?$p->email:'<span class="sub">未填写</span>';?></p>
					<p>手机: <?php echo $p->phone?$p->phone:'<span class="sub">未填写</span>';?></p>
					<?php /* if($p->award):?>
						<p>附加: 如果成婚,愿意包媒人<b class="focus"><?php echo $p->award;?></b>刀大红包.</p>
					<?php endif; */?>
				</div>
				<div class="clear"></div>
			</div>
			<div class="content">
				<?php if($p->vip):?>
					&#9888; <?php echo $p->gender==='m'?'他':'她';?>是本交友网VIP会员,<a href="#">成为会员</a>有较多的好处.
				<?php endif;?>
				<?php echo $p->content;?>
				<p>&nbsp;</p>
				
				<!-- Suggestions -->
				<h3>其它<?php echo $p->gender==='m'?'帅哥':'美女';?>会员</h3>
				<div class="suggest">
					<?php $counter = 0;?>
					<?php foreach($p->get_suggestions() as $suggest_id):?>
						<?php 
							$suggest_object = get_json('member-'.$suggest_id);
							$s = new Member($suggest_object);
						?>
						<div class="unit <?php echo ++$counter===3?'last':'';?>">
							<a href="<?php echo $s->get_url();?>">
								<img src="<?php echo $s->profile;?>" />
								<span><br/><?php echo $s->title;?></span>
							</a>
						</div>
					<?php endforeach;?>
					<div class="clear"></div>
				</div>
				<!-- Suggestions end -->
				
				<p>&nbsp;</p>
				<?php include(SITE_PATH.'/parts/ad-mary.php');?>
			</div>
		</div>
	</div>
	<?php include(SITE_PATH.'/parts/footer.php');?>
</body>