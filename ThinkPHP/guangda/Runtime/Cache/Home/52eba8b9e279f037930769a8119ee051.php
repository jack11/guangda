<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>下载专区-资料下载</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/common.css">
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/cultural_content.css">
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Home/js/jquery.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".btn_left").click(function(){
				var showli = $("#pic_ul li:visible");
				if(showli.prev().length == 0){
					showli.hide("slow");
					$("#pic_ul li:last").show("slow");
				}else{
					showli.hide("slow").prev().show("slow");
				}
			});
			$(".btn_right").click(function(){
				var showli = $("#pic_ul li:visible");
				if(showli.next().length == 0){
					showli.hide("slow");
					$("#pic_ul li:first").show("slow");
				}else{
					showli.hide("slow").next().show("slow");
				}
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
					<li ><span>&gt;&gt;</span><a href="#">文化风采</a> </li>
				</ul>
	    	</div>
        	<div class="right_content">
        		<div class="cultural_title">
        			<span>青岛未出口鱼片黑名单企业向美</span>
        		</div>
        		<div class="cultural_img">
        			<input class="btn_left" type="button" value="left">
        			<ul id="pic_ul">
        				<li class="active"><img src="/pro/guangda/ThinkPHP/Public/Home/images/whshow.png"></li>
        				<li><img src="/pro/guangda/ThinkPHP/Public/Home/images/whshow1.png"></li>
        				<li><img src="/pro/guangda/ThinkPHP/Public/Home/images/whshow2.png"></li>
        				<li><img src="/pro/guangda/ThinkPHP/Public/Home/images/whshow3.png"></li>
        				<li><img src="/pro/guangda/ThinkPHP/Public/Home/images/whshow4.png"></li>
        			</ul>
        			<input class="btn_right" type="button" value="right">
        		</div>
        		<p class="cultural_content">
        			青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美青岛未出口鱼片黑名单企业向美
        		</p>
	        </div>
        </div>
	</div>

	<div class="barrier"> </div>
	<div class="footer">

	<div class="menu_box"><ul class="footermenu c">
		<li><a href="http://10.5.88.7" target="_blank">广州分行</a>|</li>
      	<li><a href="http://www.cebbank.com" target="_blank">总行</a>|</li>
      	<li><a target="_blank">IAM系统</a>|</li>
      	<li><a target="_blank">数据服务</a>|</li>
      	<li><a href="http://10.5.88.7" target="_blank">广州分行</a>|</li>
      	<li><a href="http://www.cebbank.com" target="_blank">总行</a>|</li>
      	<li><a href="http://www.cebbank.com" target="_blank">总行</a>|</li>
      	<li><a target="_blank">IAM系统</a></li>
	</ul></div>
	<div class="copyright">中国光大银行湛江分行版权所有</div>
	<div class="copyright">地址：广东省湛江市赤坎区人民大道北45号丽晶大厦</div>
	<div class="auth_logo">
		<img src="/pro/guangda/ThinkPHP/Public/Home/images/conn_msg.png" alt="中国光大银行" title="中国光大银行">
	</div>

</div>

</body>