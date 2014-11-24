<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<title>具体内容</title>
		<meta charset="utf-8" />
		<meta name="author" />
		<meta name="keyword" />
		<meta name="description" />
		<link rel="stylesheet" type="text/css" href="/guangda/ThinkPHP/Public/Home/css/common.css">
		<!-- <link rel="stylesheet" type="text/css" href="/guangda/ThinkPHP/Public/Home/css/style.css"> -->

		<script type="text/javascript" src="/guangda/ThinkPHP/Public/Home/js/jquery.js"></script>
		<script type="text/javascript" src="/guangda/ThinkPHP/Public/Home/js/index.js"></script>

		<style>
			#content{min-height:300px;height:0;}
			#left{width:170px;float:left;}
			.tabs{margin-top:20px;}
			.tabs li {margin-bottom: 10px;padding-left: 8px;color: #999;}
			.tabs .current {color: #333;font-weight:bold;}
			
			#center{width:600px;float:left;padding-left:10px;border-left:1px #CCCCCC solid;}
			.search {margin:auto;width:350px;}
			.search_bar{float: left;line-height:33px;font-size:15px;font-weight:bold;padding-top:5px;}
			.search form{width: 300px;height: 33px;margin-top: 3px;border: 1px solid #dadada;line-height: 30px;float: left;}
			.search input[type=text]{height:33px;}
			.submit{background: url(/guangda/ThinkPHP/Public/Home/images/search_bg.png);width: 28px;height: 28px;border: none;}
			.keyword,.key{width:252px;height:33px;border: none;line-height:33px;}
			.hot_word{padding-left:50px;}
			.hot_word span{margin-left:5px;color:#369}
			
			.count{margin-top:10px; color:#666;}
			.res_cate{color:#679DF7;}
			.res_title,.res_cate{font: 17px/1.5 Tahoma,Helvetica,'SimSun',sans-serif;}
			.res_time{color:#666;}
			.result li{margin-top:10px;}
			
			#right{width:80px;float:right;padding:80px 30px;}
			#right li{margin-top:5px;width:100px;overflow: hidden;}
			.right_title{font-weight: bold;}
			
			#pager{margin-top:0px;height:34px;border: 1px solid #EEEEEE;float: right;background-color: #F5F5F5;}
			#pager .all_page{height:34px;line-height:34px;padding:0 12px;float:left;border: 1px solid #EEEEEE;}
			#pager .to_page{height:34px;line-height:34px;float:right;}
			#pager .to_page input{width:51px;height:33px;line-height:34px;border: 1px solid #EEEEEE;}
			#pager .to_page a{float: right;}
			#pager ul{float: left;}
			#pager ul li{float: left;border: 1px solid #EEEEEE;}
			#pager a{height: 34px;line-height:34px;padding:0 12px;display: block;color: black;}
			#pager a:hover{background-color: white;color: #9768AC;}
			#pager ul li .active{background-color: white;color: #9768AC;}
		</style>
		<script>
			$("#left").ready(function(){
				
			})
		</script>
	</head>
	<body>
		<div id="header">
	<div id="banner"></div>
	<div id="nav">
		<ul class="nav_bar">
			<li ><a class="<?php echo ($first_title[0]['class']); ?>" href="/guangda/ThinkPHP">首页</a></li>
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
			<input type="text" name="keyword" class="keyword" value="全文检索" /><input type="submit" value=" " />
		</form>
	</div>
</div>
		<div id="content">
			<div id="left">
				<ul class="tabs">
					<input type="hidden" value="<?php echo ($data["time"]); ?>"id="time_hidden">
					<li class="current">
						<em>› </em>全部时间
					</li>
					<li>
						<em style="color: #fff;">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;searchLevel=3&amp;qs=txt.time.a&amp;timeLength=1&amp;orderField=default&amp;timeType=inside&amp;isAdv=1">24小时内</a>
					</li>
					<li>
						<em style="color: #fff;">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;searchLevel=3&amp;qs=txt.time.a&amp;timeLength=7&amp;orderField=default&amp;timeType=inside&amp;isAdv=1">1周内</a>
					</li>
					<li>
						<em style="color: #fff;">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;searchLevel=3&amp;qs=txt.time.a&amp;timeLength=30&amp;orderField=default&amp;timeType=inside&amp;isAdv=1">1月内</a>
					</li>
					<li>
						<em style="color: #fff;">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;searchLevel=3&amp;qs=txt.time.a&amp;timeLength=365&amp;orderField=default&amp;timeType=inside&amp;isAdv=1">1年内</a>
					</li>
				</ul>
				<ul class="tabs">
					<input type="hidden" value="<?php echo ($data["type"]); ?>"id="type_hidden">
					<li class="current">
						<em>› </em>标题和全文
					</li>
					<li>
						<em style="color: #fff">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;orderField=default&amp;searchLevel=4&amp;isAdv=1&amp;qs=txt.form.subject">全文</a>
					</li>
					<li>
						<em style="color: #fff">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;orderField=default&amp;searchLevel=4&amp;isAdv=1&amp;qs=txt.form.subject">标题</a>
					</li>
				</ul>
				<ul class="tabs">
					<input type="hidden" value="<?php echo ($data["order"]); ?>"id="order_hidden">
					<li class="current">
						<em>› </em>按相关度排序
					</li>
					<li>
						<em style="color: #fff;">› </em><a href="/f/search?q=mysql%E5%BE%97qwe&amp;sId=10969241&amp;ts=1416739037&amp;mySign=26ea9f50&amp;menu=1&amp;rfh=1&amp;searchLevel=3&amp;qs=txt.tsort.a&amp;orderField=posted&amp;orderType=desc">按时间排序</a>
					</li>
				</ul>
			</div>
			
			<div id="center">
				<div class="search">
					<div class="search_bar">搜索：</div>
					<form action="<?php echo U("search/result");?>"> 
						<input name="keyword" type="text" class="keyword key" value="<?php echo ($data["keyword"]); ?>"/>
						<input type="submit" value=" " class="submit"/>
					</form>
					<div class="barrier"></div>
					<p class="hot_word">
						<a href="#"><span>银行</span></a>
						<a href="#"><span>我们</span></a>
						<a href="#"><span>信用卡</span></a>
						<a href="#"><span>汇报</span></a>
						<a href="#"><span>我们</span></a>
						<a href="#"><span>信用卡</span></a>
						<a href="#"><span>汇报</span></p></a>
				</div>
				<div class="result">
					<?php if($list): ?><p class="count">总搜索到<?php echo ($data["count"]); ?>结果</p>
					
					<ul>
						<?php if(is_array($list)): foreach($list as $key=>$v): ?><li><a href="<?php echo U("message/index?c=$v[category_id]");?>" class="res_cate">[<?php echo ($v["category_name"]); ?>]</a> 
								<a href="<?php echo U("Message/content?c=$v[category_id]&id=$v[id]");?>" class="res_title"><?php echo ($v["title"]); ?></a>
								<br><p class="res_content"><?php echo ($v["content"]); ?></p>
								<p class="res_time"><?php echo (date("Y-m-d",$v["uptime"])); ?> - <?php echo ($v["category_name"]); ?></p>
							</li><?php endforeach; endif; ?>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						<li><a href="" class="res_cate">[对公条线]</a> 
							<a href="#" class="res_title">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE</a>
							<br><p class="res_content">最近花了10多天重新写了泡菜博客,采用了PHP5+SQLITE技术。原因是MYSQL管理非常麻烦,而且还得花钱另外买数据库。sqlite 是一款轻量级的、基于文件的嵌入式数据库,...</p>
							<p class="res_time">2012-07-01 18:34:04 - 综合消息</p>
						</li>
						
					</ul>
				</div>
				<div id="pager">
					<?php echo ($pageCode); ?>
				</div>
				<?php else: ?>
					抱歉，没有找到与<?php echo ($keyword); ?> 相关的文章。<?php endif; ?>
			</div>
			
			<div id="right">
				<ul>
					<li class="right_title">搜索历史</li>
					<li><a href="#">php</a></li>
					<li><a href="#">mysql</a></li>
					<li><a href="#">光大银行</a></li>
					<li><a href="#">哈哈</a></li>
					<li><a href="#">serversql</a></li>
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
      	<li><a href="/guangda/ThinkPHP/Admin/" target="_blank">管理员</a>|</li>
	</ul></div>
	<div class="copyright">中国光大银行湛江分行版权所有</div>
	<div class="copyright">地址：广东省湛江市赤坎区人民大道北45号丽晶大厦</div>
	<div class="auth_logo">
		<img src="/guangda/ThinkPHP/Public/Home/images/conn_msg.png" alt="中国光大银行" title="中国光大银行">
	</div>
</div>
	
	</body>