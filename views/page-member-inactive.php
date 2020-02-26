<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
	<style>
	.panel-error{
		margin-bottom:25px;
	}
	</style>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<div class="main">
		<div class="container">
		
			<div class="panel-error center">
				<b>此用户已注销 !</b>
			</div>
		
			<div class="breadcrum">
				<a href="<?php echo SITE_URL;?>"><u>首页</u></a> >> 
				<!--<a href="<?php echo SITE_URL;?>/blog"><u>所有会员</u></a> >> -->
				<?php echo $member->get_super_title();?>
			</div>
			<h2>
				<?php echo $member->get_super_title();?>
			</h2>
			<div class="highlight">
				<img class="profile" src="<?php echo DEFAULT_SILHOUETTE;?>" alt="纽约交友会员照片" />
				<div class="contacts">
					<p>名字: <span class="sub">信息已过期</span></p>
					<p>性别: <span class="sub">信息已过期</span></p>
					<p>年龄: <span class="sub">信息已过期</span></p>
					<p>微信: <span class="sub">信息已过期</span></p>
					<p>电邮: <span class="sub">信息已过期</span></p>
					<p>手机: <span class="sub">信息已过期</span></p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="content">
				
				<?php echo $member->get_content();?>
				
				<?php if( $member->get_about_me() ):?>
					<h3>基本资料</h3>
					<div><?php echo $member->get_about_me();?></div>
				<?php endif;?>
				
				<?php if( $member->get_preference() ):?>
					<h3>喜欢什么样的<?php echo $member->get_opposite_gender();?></h3>
					<div><?php echo $member->get_preference();?></div>
				<?php endif;?>
				
				<p>&nbsp;</p>
				
				<?php /*
				<!-- Suggestions -->
				<h3>其它<?php echo $member->get_gender();?>会员</h3>
				<div class="suggest">
					<?php $counter = 0;?>
					<?php foreach($member->get_suggestions() as $suggest_id):?>
						<?php 
							$suggest = new Member($suggest_id);
						?>
						<div class="unit <?php echo ++$counter===3?'last':'';?>">
							<a href="<?php echo $suggest->get_url();?>">
								<img src="<?php echo $suggest->get_profile_image_url();?>" />
								<span><br/><?php echo $suggest->get_title();?></span>
							</a>
						</div>
					<?php endforeach;?>
					<div class="clear"></div>
				</div>
				<!-- Suggestions end -->
				*/ ?>
				
				<p>&nbsp;</p>
				<?php include( ROOT_PATH . '/views/part-ad-mary.php' );?>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>