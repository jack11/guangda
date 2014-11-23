<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>下载专区-资料下载</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/common.css">
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/file_list.css">
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Home/js/jquery.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".comdir td").click(function(){
				$(".comdir td").removeClass("activedir");
				$(this).addClass("activedir");
			});
			$(".comdir td").dblclick(function(){
				// alert("hehe");
				location.href = "http://www.baidu.com";
			});
		});
	</script>
</head>
<body>
	<div id="header">
	<div id="banner"></div>
	<div id="nav">
		<ul class="nav_bar">
			<li ><a class="<?php echo ($first_title[0]['class']); ?>" href="/pro/guangda/ThinkPHP">首页</a></li>
			<li ><a href="<?php echo U('Message/index?c=3');?>" class="<?php echo ($first_title[1]['class']); ?>">行内通知 </a>
				<ul class="li_bar">
					<li ><a href="<?php echo U('Message/index?c=23');?>">综合信息</a></li>
		        	<li ><a href="<?php echo U('Message/index?c=24');?>">重要通知</a></li>
				</ul>
			</li>
			<li><a href="<?php echo U('Message/index?c=4');?>" class="<?php echo ($first_title[2]['class']); ?>">分行信息 </a>
				<ul class="li_bar">
					<li ><a href="<?php echo U('Message/index?c=25');?>">分行简报</a></li>
		        	<li ><a href="<?php echo U('Message/index?c=26');?>">分行发文</a></li>
				</ul>
			</li>
	        <li><a href="<?php echo U('DownLoad/index?c=5');?>" class="<?php echo ($first_title[3]['class']); ?>">下载专区 </a>
	            <ul class="li_bar">
	              <li><a href="<?php echo U('DownLoad/index?c=27');?>">资料下载</a></li>
	              <li><a href="<?php echo U('DownLoad/index?c=28');?>">软件下载</a></li>
	            </ul>
	        </li>
	        <li ><a href="<?php echo U('Communication/index?c=6');?>" class="<?php echo ($first_title[4]['class']); ?>">通讯录</a></li>
	        <li ><a href="<?php echo U('Cultural/index?c=7');?>" class="<?php echo ($first_title[5]['class']); ?>">文化风采</a></li>
	        <li ><a href="<?php echo U('File/index?c=8');?>" class="<?php echo ($first_title[6]['class']); ?>">公共文件夹</a></li>
		</ul>
	</div>
	<script>
		$('.nav_bar li').mouseenter(function(){
			$(this).children('ul').stop(true).slideDown('fast');
		}).mouseleave(function(){
			$(this).children('ul').stop(true).slideUp('fast');
		});
	</script>
	<div id="search_bar">
		<form id="search_form">
			<input type="text" name="" class="keyword" value="全文检索" /><input type="submit" value=" " />
		</form>
	</div>
</div>

	<div id="content">
		<div id="left">
	    	<div class="list_header">下载专区</div>
	        <div class="">
	        	<ul class="msg_list">
					<li class="curr_title"><a href="stripline.html">资料下载</a></li>
		        	<li ><a href="stripline.html">软件下载</a></li>
	            </ul> 
	        </div>
	        
	        <div class="left_bottom"></div>
	    </div>

	    <div id="right">
	    	<div class="right_title">
	    		<ul class="breadcrumbs">
					<li ><span>&gt;&gt;</span><a href="#">公共文件夹</a> </li>
				</ul>
	    	</div>
        	<div class="right_content">
        		<table class="comdir">
        			<tr>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        			</tr>
        			<tr>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        			</tr>
        			<tr>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        				<td><img src="/pro/guangda/ThinkPHP/Public/Home/images/dir_bg.png"><br><label>条线管理</label></td>
        			</tr>
        		</table>
	        </div>
        </div>
	</div>

	<div class="barrier"></div>
	<div class="footer">

	<div class="menu_box"><ul class="footermenu c">
		<li><a href="http://10.5.88.7" target="_blank">广州分行</a>|</li>
      	<li><a href="http://www.cebbank.com" target="_blank">总行</a>|</li>
      	<li><a target="_blank">IAM系统</a>|</li>
      	<li><a target="_blank">数据服务</a>|</li>
      	<li><a href="http://10.5.88.7" target="_blank">广州分行</a>|</li>
      	<li><a href="http://www.cebbank.com" target="_blank">总行</a>|</li>
      	<li><a target="_blank">IAM系统</a>|</li>
      	<li><a href="/pro/guangda/ThinkPHP/Admin/" target="_blank">管理员</a>|</li>
	</ul></div>
	<div class="copyright">中国光大银行湛江分行版权所有</div>
	<div class="copyright">地址：广东省湛江市赤坎区人民大道北45号丽晶大厦</div>
	<div class="auth_logo">
		<img src="/pro/guangda/ThinkPHP/Public/Home/images/conn_msg.png" alt="中国光大银行" title="中国光大银行">
	</div>
</div>

</body>