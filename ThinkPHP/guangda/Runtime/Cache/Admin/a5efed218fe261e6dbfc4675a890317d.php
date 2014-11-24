<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>404</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Admin/Css/common.css">
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Admin/Js/jquery.js"></script>
	<style>
		#content{min-height:300px;height:0;text-align:center;}
	</style>

</head>
<body>
	
	
	<div id="content">
		<div class="system-message">
		<?php if(isset($message)) {?>
		<h1>跳转提醒</h1>
		<p class="success"><?php echo($message); ?></p>
		<?php }else{?>
		<h1>错误提醒</h1>
		<p class="error"><?php echo($error); ?></p>
		<?php }?>
		<p class="detail"></p>
		<p class="jump">
		页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
		</p>
		</div>
		<script type="text/javascript">
		(function(){
		var wait = document.getElementById('wait'),href = document.getElementById('href').href;
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time <= 0) {
				location.href = href;
				clearInterval(interval);
			};
		}, 1000);
		})();
		</script>
	</div>
	
	
	
	

</body>