<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>中国光大银行湛江分行网站首页</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Admin/Css/index.css">
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Admin/Js/jquery.js"></script>
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Admin/Js/admin.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			console.info($(".buttons>li[furl]"));
			$(".buttons li[furl]").click(function(){
				$(this).addClass("active").siblings().removeClass("active");
				$("ul",this).show("slow").find("a:first").addClass("liactive");
				console.info($("ul",this).find("a:not(:first)").removeClass("liactive"));
				$(this).siblings().find("ul").hide("slow");
				var furl = $(this).attr("furl");
				$.ajax(
					{ url: furl,
					  success: function(r){
    					$(".cbody").html(r);
					  }
					}
				);
				$("#cbody").attr("src",furl);
			});
			$(".tab>li").click(function(event){
				$("a",this).addClass("liactive");
				$(this).siblings().find("a").removeClass("liactive");
				var url = $("a",this).attr("url");
				$("#cbody").attr("src",url);
				event.stopPropagation()
			});
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<div class="cright">
				<div class="controls">
					<span class="banner">后台管理</span>
					<!-- 用户信息 -->
					<div class="user-box">
					</div>
				</div>
				<div class="cbody">
					
					<!-- <iframe id="cbody" src="Index/first_index" ></iframe> -->
				</div>
			</div>
		</div>
		<div id="sidebar">
			<strong class="logo"><a href="#">光大银行湛江分行后台管理</a></strong>
			<ul class="buttons">
				<li furl="<?php echo U('List/mul');?>" class="active">
					<a class="btn ico1"><span>行内通知</span>行内通知</a>
					<span class="tooltip"><span>行内通知</span></span>
					<ul class="tab active">
						<li><a class="liactive" url="<?php echo U('List/mul');?>">综合信息</a></li>
						<li><a url="<?php echo U('List/import');?>">重要通知</a></li>
					</ul>
				</li>
				<li furl="<?php echo U('List/bran_msg');?>">
					<a class="btn ico2"><span>分行信息</span>分行信息</a>
					<span class="tooltip"><span>分行信息</span></span>
					<ul class="tab">
						<li><a url="<?php echo U('List/bran_msg');?>" class="liactive">分行简报</a></li>
						<li><a url="<?php echo U('List/bran_iss');?>">分行发文</a></li>
					</ul>
				</li>
				<li furl="List/xz1">
					<a class="btn ico3"><span>下载专区</span>下载专区</a>
					<span class="tooltip"><span>下载专区</span></span>
					<ul class="tab">
						<li><a url="List/xz1" class="liactive">资料下载</a></li>
						<li><a url="List/xz2">软件下载</a></li>
					</ul>
				</li>
				<li furl="List/txl">
					<a class="btn ico4"><span>通讯录</span>通讯录</a>
					<span class="tooltip"><span>通讯录</span></span>
				</li>
				<li furl="List/whfc">
					<a class="btn ico5"><span>文化风采</span>文化风采</a>
					<span class="tooltip"><span>文化风采</span></span>
				</li>
				<li furl="<?php echo U('List/sline?id/1');?>">
					<a class="btn ico6"><span>条线管理</span>条线管理</a>
					<span class="tooltip"><span>条线管理</span></span>
					<ul class="tab">
						<li><a url="<?php echo U('List/sline?id/1');?>" class="liactive">对公条线</a></li>
						<li><a url="<?php echo U('List/sline?id/2');?>">零售条线</a></li>
						<li><a url="<?php echo U('List/sline?id/3');?>">运营条线</a></li>
						<li><a url="<?php echo U('List/sline?id/4');?>">风险条线</a></li>
					</ul>
				</li>
				<li furl="<?php echo U('List/depart?id/1');?>">
					<a class="btn ico7"><span>部门管理</span>部门管理</a>
					<span class="tooltip"><span>部门管理</span></span>
					<ul class="tab">
						<li><a url="<?php echo U('List/depart?id/1');?>" class="liactive">公司业务部</a></li>
						<li><a url="<?php echo U('List/depart?id/2');?>">零售业务部</a></li>
						<li><a url="<?php echo U('List/depart?id/3');?>">办公室</a></li>
						<li><a url="<?php echo U('List/depart?id/4');?>">计划财务部</a></li>
						<li><a url="<?php echo U('List/depart?id/5');?>">风险管理部</a></li>
						<li><a url="<?php echo U('List/depart?id/6');?>">营业部</a></li>
						<li><a url="<?php echo U('List/depart?id/7');?>">业务一部</a></li>
						<li><a url="<?php echo U('List/depart?id/8');?>">业务二部</a></li>
					</ul>
				</li>
			</ul>
			<span class="shadow"></span>
		</div>
	</div>
</body>
</html>