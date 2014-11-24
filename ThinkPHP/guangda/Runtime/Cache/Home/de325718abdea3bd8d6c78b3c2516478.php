<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>具体内容</title>
		<meta charset="utf-8" />
		<meta name="author" />
		<meta name="keyword" />
		<meta name="description" />
		<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/common.css">
		<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/result.css">

		<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Home/js/jquery.js"></script>
		<script type="text/javascript" src="/pro/guangda/ThinkPHP/Public/Home/js/index.js"></script>

		
		<script>
			$("#left").ready(function(){
				$('#left .tabs').each(function(i){
					var val = $(this).children("input[type='hidden']").val();
					var set = false;
					$(this).children('li').each(function(){
						if($(this).val()==val){
							$(this).html("<em >› </em>"+$(this).text());
							$(this).addClass('current');
							set = true;
						}else{
							$(this).html("<em style='color: #fff;'>› </em>"+$(this).html());
							$(this).children('a').attr('href',$(this).children('a').attr('href')+$(this).val()) ;
						}
					});
					if(set == false){
						$(this).children('li:first').html("<em >› </em>"+$(this.html()))
						set = true;
					}
				});
				
			})
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
		<form id="search_form" method="get" action="<?php echo U("search/result");?>">
			<input type="hidden" name="submit" value="true" />
			<input type="text" name="keyword" class="keyword" value="全文检索" /><input type="submit" value=" " />
		</form>
	</div>
</div>
		<div id="content">
			<div id="left">
				<ul class="tabs">
					<input type="hidden" value="<?php echo ($data["time"]); ?>"id="time_hidden">
					<li value="0">
						<a href="<?php echo ($data["no_time"]); ?>&time=">全部时间</a>
					</li>
					<li value="1">
						<a href="<?php echo ($data["no_time"]); ?>&time=">24小时内</a>
					</li>
					<li value="7">
						<a href="<?php echo ($data["no_time"]); ?>&time=">1周内</a>
					</li>
					<li value="30">
						<a href="<?php echo ($data["no_time"]); ?>&time=">1月内</a>
					</li>
					<li value="365">
						<a href="<?php echo ($data["no_time"]); ?>&time=">1年内</a>
					</li>
				</ul>
				<ul class="tabs">
					<input type="hidden" value="<?php echo ($data["type"]); ?>"id="type_hidden">
					<li value="0">
						<a href="<?php echo ($data["no_type"]); ?>&type=">标题和全文</a>
					</li>
					<li value="1">
						<a href="<?php echo ($data["no_type"]); ?>&type=">全文</a>
					</li>
					<li value="2">
						<a href="<?php echo ($data["no_time"]); ?>&type=">标题</a>
					</li>
				</ul>
				<ul class="tabs"> 
					<input type="hidden" value="<?php echo ($data["order"]); ?>"id="order_hidden">
					<li  value="0">
						<a href="<?php echo ($data["no_order"]); ?>&order=">按时间升序</a>
					</li>
					<li value="1">
						<a href="<?php echo ($data["no_order"]); ?>&order=">按时间降序</a>
					</li>
				</ul>
			</div>
			
			<div id="center">
				<div class="search">
					<div class="search_bar">搜索：</div>
					<form action="<?php echo U("search/result");?>" method="post"> 
						<input type="hidden" name="submit" value="true" />
						<input name="keyword" type="text" class="keyword key" value="<?php echo ($data["keyword"]); ?>"/>
						<input type="submit" value=" " class="submit"/>
					</form>
					<div class="barrier"></div>
					<p class="hot_word">
						<?php if(is_array($data["hotword"])): foreach($data["hotword"] as $key=>$v): ?><a href="<?php echo U("search/result");?>?keyword=<?php echo ($v["word"]); ?>"><span><?php echo ($v["word"]); ?></span></a><?php endforeach; endif; ?>
				</div>
				<div class="result">
					<p class="count">总搜索到<?php echo ($data["count"]); ?>结果</p>
					<ul class="list">
						<?php if($list): if(is_array($list)): foreach($list as $key=>$v): ?><li><a href="<?php echo U("message/index?c=$v[category_id]");?>" class="res_cate">[<?php echo ($v["category_name"]); ?>]</a> 
								<a href="<?php echo U("Message/content?c=$v[category_id]&id=$v[id]");?>" class="res_title"><?php echo ($v["title"]); ?></a>
								<br><p class="res_content"><?php echo ($v["content"]); ?>哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊哈哈哈哈哈哈哈哈哈哈哈啊哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈啊哈哈</p>
								<p class="res_time"><?php echo (date("Y-m-d",$v["uptime"])); ?> - <?php echo ($v["category_name"]); ?></p>
							</li><?php endforeach; endif; ?>
						
						
					</ul>
					<div class="barrier"></div>
					<div id="pager">
					<?php echo ($pageCode); ?>
					</div>
					<?php else: ?>
					抱歉，没有找到与<span style="color:red;"><?php echo ($data["keyword"]); ?></span>相关的文章。<br>
					请更换关键字或条件再搜索<?php endif; ?>
				</div>
				
				
			</div>
			<div id="right">
				<ul>
					<li class="right_title">搜索历史</li>
					<?php if(is_array($data["history"])): foreach($data["history"] as $key=>$v): ?><li><a href="<?php echo ($v["url"]); ?>"><?php echo ($v["keyword"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>

			<!-- <?php if($list): ?><ul>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><li>[<a href=""><?php echo ($v["category_name"]); ?></a>]<a href="#"><?php echo ($v["title"]); ?></a><br><?php echo ($v["content"]); ?><br /><?php echo (date("Y-m-d",$v["uptime"])); ?></li><?php endforeach; endif; ?>
			<?php echo ($pageCode); ?>
			</ul>
			<?php else: ?>
			没有搜索到结果<?php endif; ?> -->
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
      	<li><a href="/pro/guangda/ThinkPHP/Admin/" target="_blank">管理员</a></li>
	</ul></div>
	<div class="copyright">中国光大银行湛江分行版权所有&nbsp;&nbsp;&nbsp;&nbsp;地址：广东省湛江市赤坎区人民大道北45号丽晶大厦</div>

	<div class="auth_logo">
		<img src="/pro/guangda/ThinkPHP/Public/Home/images/conn_msg.png" alt="中国光大银行" title="中国光大银行" style="height:100px;width: 204px;">
		<img src="/pro/guangda/ThinkPHP/Public/Home/images/weixin.png"  title="关注微信" style="height:100px;width: 100px;">
		<!-- <img src="/pro/guangda/ThinkPHP/Public/Home/images/conn_msg.png" alt="中国光大银行" title="中国光大银行" style="height:100px;width: 160px;"> -->
	</div>
</div>
	</body>