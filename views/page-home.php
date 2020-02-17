<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<div class="main">
		<div class="container">
			<div class="content">
				<?php $show_ad_once = true;?>
				<?php foreach($members as $member): ?>
					<div class="member clear">
						<h2>
							<a href="<?php echo $member->get_url();?>"><?php echo $member->get_super_title();?></a>	
						</h2>
						<a href="<?php echo $member->get_url();?>">
							<img class="profile" src="<?php echo $member->get_profile_image_url();?>" />
						</a>
						<p>
							<?php echo $member->get_title();?> , <?php echo $member->get_age();?> , <?php echo $member->get_gender();?><br/>
							<?php if( $member->get_wechat() ):?>						
								微信: <b class="focus"><?php echo $member->get_wechat();?></b><br/>
							<?php endif;?>
						</p>
						<p class="intro">
							<?php echo $member->get_intro();?> ...
							<a href="<?php echo $member->get_url();?>">[更多]</a>
						</p>
						<div class="clear"></div>
					</div>
					<?php 
					if($show_ad_once){
						include( ROOT_PATH . '/parts/ad-mary.php' );
						$show_ad_once = false;
					}
					?>
					
				<?php endforeach;?>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>