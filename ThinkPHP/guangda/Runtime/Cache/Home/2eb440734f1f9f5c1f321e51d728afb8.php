<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>综合信息</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/common.css">
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/list.css">
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Home/js/jquery.js"></script>
	<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Home/js/index.js"></script>
	
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
	    	<div class="list_header"><?php echo ($left_nav[0]['name']); ?></div>
	        <div class="">
	        	<ul class="msg_list">
	        		<?php if(is_array($left_nav[1])): foreach($left_nav[1] as $key=>$v): ?><li class="<?php echo ($v["curr"]); ?>"><a href="<?php echo U("Message/index?c=$v[id]");?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
	            </ul> 
	        </div>
	        
	        <div class="left_bottom"> </div>
	    </div>

	    <div id="right">
	    	<div class="right_title">
	    		<ul class="breadcrumbs">
	    			<?php if(is_array($right_nav)): foreach($right_nav as $key=>$v): ?><li ><span>&gt;</span><a href="<?php echo U("Message/index?c=$v[id]");?>"><?php echo ($v["name"]); ?></a> </li><?php endforeach; endif; ?>
				</ul>
	    	</div>
        	<div class="right_content">
	    		
	        	<ul>
	        		<?php if(is_array($list)): foreach($list as $key=>$v): ?><li><span><?php echo (date("Y-m-d",$v["uptime"])); ?></span><a href="<?php echo U("Message/content?c=$v[category_id]&id=$v[id]");?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
					
	            	<li><span>2014-07-09</span><a href="/pro/guangda/ThinkPHP/Home/Message/content/id/1">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片上黑出口鱼片上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青青岛未出口鱼片上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片上上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片上黑岛未出口鱼片上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a></li>
	            	<li><span>2014-07-09</span><a href="#">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a></li>
	            </ul>
	        </div>
	        <div id="pager">
	        	<?php echo ($pageCode); ?>
	        	
	        	<!-- <div class="to_page">
	        		<input type="text" value="">
	        		<a href="#">GO</a>
	        	</div> -->
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