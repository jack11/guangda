<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title>管理员登陆</title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <meta charset=utf-8>
  <link rel="stylesheet" href="/pro/guangda/ThinkPHP/Public/Admin/Css/login.css" type="text/css" />
  <script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Admin/Js/jquery.js"></script>
  <script>
  	$(document).ready(function(){
	  $("input[name='sub']").click(function(){
	  	$.ajax({
	  		url:"<?php echo U('user/login');?>",
	  		type:"post",
	  		data:$('.form').serialize(),
	  		success:function(data){
	  			console.log(data);
	  			if(data.status==0){
	  				$('.error').html(data.info+'<br>');
	  			}else if(data.status==1){
	  				location.href=data.url;
	  			}
	  		},
	  		error:function(data){
	  			console.log(data);
	  		},
	  	});
	  });
	});
  </script>
 </head>
	
 <body>
 <div class="bg">
  <form class="form" method='POST' action='<?php echo U("user/login");?>'>
		账号:<input type='text' name='user' class="input"><br>
		密码:<input type='password' name='password' class="input"><br>
		验证码:<input type='text' name='password' class="input"><br>
		<span class="error"></span>
		<input type='button' name='sub' value='登陆'>
	</form>
 </div>
 </body>
</html>