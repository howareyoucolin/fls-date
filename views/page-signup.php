<!DOCTYPE html>
<html lang="zh">
<head>
	<?php include( ROOT_PATH . '/views/part-head.php' );?>
	<style>
		.main h2{margin-bottom:25px;}
		.main p.label{margin:0;}
		.red{color:#D00;}
		select,input[type=text]{box-sizing:border-box;border:1px solid #EEE;padding:5px;height:36px;outline:0;max-width:400px;width:100%;line-height:24px;}
		input[type=submit]{width:200px;height:36px;}
		select{width:80px;}
		select.small{width:50px;}
		textarea{box-sizing:border-box;border:1px solid #EEE;padding:5px;outline:0;width:100%;height:180px;line-height:24px;}
		@media only screen and (max-width: 680px){
			textarea{height:250px;}
			input[type=submit]{width:100%;}
		}
	</style>
</head>
<body>
	<?php include( ROOT_PATH . '/views/part-header.php' );?>
	<div class="main">
		<div class="container">
			<h2>免费注册会员</h2>
			<div class="content">
				<form action="" method="post">
					<p class="label">名字: <span class="red">*</span></p>
					<p><input type="text" name="name" /></p>
					<p>
						性别: <span class="red">*</span>
						<input type="radio" name="gender" value="m"> 男生
						<input type="radio" name="gender" value="f"> 女生
					</p>
					<p class="label">身高:</p>
					<p>
						<select name="height">
							<option value=""></option>
							<?php for($i = 140; $i < 200; $i++): ?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php endfor; ?>
						</select>
					</p>
					<p class="label">生日日期: <span class="red">*</span></p>
					<p>
						<select name="birth_year">
							<?php for($i = 1970; $i <= date('Y') - 18; $i++): ?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php endfor; ?>
						</select>
						<select class="small" name="birth_month">
							<?php for($i = 1; $i <= 12; $i++): ?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php endfor; ?>
						</select>
						<select class="small" name="birth_day">
							<?php for($i = 1; $i <= 31; $i++): ?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php endfor; ?>
						</select>
					</p>
					<p class="label">微信号码: <span class="red">*</span></p>
					<p><input type="text" name="wechat" /></p>
					<p class="label">电话号码:</p>
					<p><input type="text" name="phone" /></p>
					<p class="label">电子邮箱:</p>
					<p><input type="text" name="email" /></p>
					<p class="label">标题: </p>
					<p><input type="text" name="super_title" /></p>
					<p class="label">基本资料: <span class="red">*</span></p>
					<p><textarea name="bio"></textarea></p>
					<p class="label">喜欢什么样的男生/女生: </p>
					<p><textarea name="likes"></textarea></p>
					<p><input name="submit" type="submit" class="btn" value="提交" /></p>
				</form>
			</div>
		</div>
	</div>
	<?php include( ROOT_PATH . '/views/part-footer.php' );?>
</body>