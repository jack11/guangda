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
		  			$("input[name='code']").val('');
		  			$(".code_img").attr('src',$(".code_img").attr('src')+'?')
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
	
	$(document).ready(function(){
		$("input[name='user']").focus(clearError);
		$("input[name='password']").focus(clearError);
		$("input[name='code']").focus(clearError);
	})
	function clearError(){
		$('.error').html('');
	}
  </script>
 </head>
	
 <body>
 <div class="bg">
  <form class="form" method='POST' action='<?php echo U("user/login");?>'>
		账&nbsp;&nbsp;号:<input type='text' name='user' class="input"><br>
		密&nbsp;&nbsp;码:<input type='password' name='password' class="input"><br>
		<div class="code">
			验证码:<input type='text' name='code'>
		</div>
		<img src="<?php echo U("User/code");?>" onclick="this.src+='?'" class="code_img"/><br>
		<div class="sub">
			<input type='button' name='sub' value='登陆'>&nbsp;&nbsp;<span class="error"></span>
		</div>
	</form>
 </div>
 </body>
</html>