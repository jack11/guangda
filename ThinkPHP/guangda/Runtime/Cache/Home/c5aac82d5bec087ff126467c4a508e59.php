<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>中国光大银行湛江分行网站首页</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/guangda/ThinkPHP/Public/Home/css/common.css">
	<link rel="stylesheet" type="text/css" href="/guangda/ThinkPHP/Public/Home/css/index.css">
	<script type="text/javascript" src="/guangda/ThinkPHP/Public/Home/js/jquery.js"></script>
	<script type="text/javascript" src="/guangda/ThinkPHP/Public/Home/js/index.js"></script>
	
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
		<div class="row">
			<div id="mul_msg">
				<div class="list_header">综合信息</div>
				<div class='msg_list_first'>
					<h3><a href='#'>中国海洋学会2007年</a><span>[14-10-11]</span></h3>
					<p>中国海洋学会成立于1979年，是全国海洋科技工作者和涉海单位自愿组织的学术性、公益性法人社会团体，是发展我国海洋科学技术事业的重要社会力量。</p>
				</div>
				<ul class="msg_list">
					<li><a href="detail_msg.html">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海鲜进口</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海鲜进口</a><span>[14-10-11]</span></li>
				</ul>
			</div>
			<div id="pic_msg">
				<div class='turn_img'>
					<ul>
						<a href='#'><li><img src='/guangda/ThinkPHP/Public/Home/images/04.jpg' /><span class='img_title'>中国海洋学会2007年</span><div class='turn_img_bg'></div></li></a>
						<a href='#'><li><img src='/guangda/ThinkPHP/Public/Home/images/02.jpg' /><span class='img_title'>青岛未出口鱼片上黑名单企业向美方申诉成功</span><div class='turn_img_bg'></div></li></a>
						<a href='#'><li><img src='/guangda/ThinkPHP/Public/Home/images/03.jpg' /><span class='img_title'>我国将坚持“以养为主”打造现代水产养殖业</span><div class='turn_img_bg'></div></li></a>
						<a href='#'><li><img src='/guangda/ThinkPHP/Public/Home/images/01.jpg' /><span class='img_title'>极度通胀下的越南渔业陷困境</span><div class='turn_img_bg'></div></li></a>
					</ul>
					<ol>
						<li class='curr'>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
					</ol>
				</div>
			</div>
			<div id="important_msg">
				<div class="list_header">重要通知</div>
				<ul class="msg_list">
					<li><a href='#'>青岛未出口鱼片</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海</a><span>[14-10-11]</span></li>
					<li><a href='#'>俄罗斯海产品</a><span>[14-10-11]</span></li>
					<li><a href='#'>MPEDA:虾类出</a><span>[14-10-11]</span></li>
					<li><a href='#'>深圳拟出台首</a><span>[14-10-11]</span></li>
					<li><a href='#'>深圳拟出台</a><span>[14-10-11]</span></li>
					<li><a href='#'>MPEDA:虾类出</a><span>[14-10-11]</span></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div id="stripline_msg" class='turn_msg'>
				<ul class='turn_msg_title'>
					<li class='curr_title'><a href="stripline.html">对公条线</a></li>
					<li ><a href="stripline.html">零售条线</a></li>
					<li ><a href="stripline.html">运营条线</a></li>
					<li ><a href="stripline.html">风险条线</a></li>
				</ul>
				<ul class='turn_news_block curr_content msg_list'>
					<li><a href="detail_msg.html">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海鲜进口</a><span>[14-10-11]</span></li>
					<li><a href='#'>俄罗斯海产品市场发展势头迅猛</a><span>[14-10-11]</span></li>
					<li><a href='#'>MPEDA:虾类出口锐减影响水产品贸易全局</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟发布蓝鳍金枪鱼禁捕令</a><span>[14-10-11]</span></li>
					<li><a href='#'>深圳拟出台首部深圳拟出台首部用海设施和构筑物登记管理规定</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>广东茂名海域管理亮点纷呈</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将开展海水入侵和土壤盐渍化监测</a><span>[14-10-11]</span></li>
					<li><a href='#'>广东省成立水产品质量安全专项整治行动领导小组</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国海洋自然保护区存在的主要问题及对策建议</a><span>[14-10-11]</span></li>
					<li><a href='#'>烟台市海洋功能区划、海洋环保规划通过评审</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
					<li><a href='#'>全国海岛保护与开发规划开始编制</a><span>[14-10-11]</span></li>
					<li><a href='#'>上海首个共建海洋科普教育基地揭牌</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>北大西洋海底山脉中的奇特新物种</a><span>[14-10-11]</span></li>
					<li><a href='#'>2007年是“国际海豚年”</a><span>[14-10-11]</span></li>
					<li><a href='#'>日本确认发现世界最大海生兽类化石</a><span>[14-10-11]</span></li>
					<li><a href='#'>最美岛屿”搬上方寸之地</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
					<li><a href='#'>海岛与群岛/岛屿、暗礁</a><span>[14-10-11]</span></li>
					<li><a href='#'>四个大洋的名称是怎么来的？</a><span>[14-10-11]</span></li>
					<li><a href='#'>市霞山区解放东路40号广东海洋大学霞山校区高层407 </a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>北大西洋海底山脉中的奇特新物种</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>最美岛屿”搬上方寸之地</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
					<li><a href='#'>烟台市海洋功能区划、海洋环保规划通过评审</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
					<li><a href='#'>全国海岛保护与开发规划开始编制</a><span>[14-10-11]</span></li>
				</ul>
			</div>
			<div id="product_msg">
				<div id="product_title" class="list_header">产品信息</div>
				<table>
					<tr><td><img src="/guangda/ThinkPHP/Public/Home/images/02.jpg"></td></tr>
					<tr><td><img src="/guangda/ThinkPHP/Public/Home/images/04.jpg"></td></tr>
				</table>
			</div>
			<div id="deparment" class="turn_msg">
				<ul class='turn_msg_title_vertical'>
					<li class='curr_title'><a href="department.html">公司业务部</a></li>
					<li ><a href="department.html">零售业务部</a></li>
					<li ><a href="department.html">办公室</a></li>
					<li ><a href="department.html">计划财务部</a></li>
					<li ><a href="department.html">风险管理部</a></li>
					<li ><a href="department.html">营业部</a></li>
					<li ><a href="department.html">业务一部</a></li>
					<li ><a href="department.html">业务二部</a></li>
				</ul>
				<ul class='turn_news_block curr_content msg_list'>
					<li><a href="detail_msg.html">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海鲜进口</a><span>[14-10-11]</span></li>
					<li><a href='#'>俄罗斯海产品市场发展势头迅猛</a><span>[14-10-11]</span></li>
					<li><a href='#'>MPEDA:虾类出口锐减影响水产品贸易全局</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟发布蓝鳍金枪鱼禁捕令</a><span>[14-10-11]</span></li>
					<li><a href='#'>深圳拟出台首部深圳拟出台首部用海设施和构筑物登记管理规定</a><span>[14-10-11]</span></li>
					<li><a href='#'>MPEDA:虾类出口锐减影响水产品贸易全局</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>广东茂名海域管理亮点纷呈</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将开展海水入侵和土壤盐渍化监测</a><span>[14-10-11]</span></li>
					<li><a href='#'>广东省成立水产品质量安全专项整治行动领导小组</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国海洋自然保护区存在的主要问题及对策建议</a><span>[14-10-11]</span></li>
					<li><a href='#'>烟台市海洋功能区划、海洋环保规划通过评审</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
					<li><a href='#'>全国海岛保护与开发规划开始编制</a><span>[14-10-11]</span></li>
					<li><a href='#'>上海首个共建海洋科普教育基地揭牌</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>北大西洋海底山脉中的奇特新物种</a><span>[14-10-11]</span></li>
					<li><a href='#'>2007年是“国际海豚年”</a><span>[14-10-11]</span></li>
					<li><a href='#'>日本确认发现世界最大海生兽类化石</a><span>[14-10-11]</span></li>
					<li><a href='#'>最美岛屿”搬上方寸之地</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
					<li><a href='#'>海岛与群岛/岛屿、暗礁</a><span>[14-10-11]</span></li>
					<li><a href='#'>四个大洋的名称是怎么来的？</a><span>[14-10-11]</span></li>
					<li><a href='#'>市霞山区解放东路40号广东海洋大学霞山校区高层407 </a><span>[14-10-11]</span></li>
					<li><a href='#'>海岛与群岛/岛屿、暗礁</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>北大西洋海底山脉中的奇特新物种</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>最美岛屿”搬上方寸之地</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
					<li><a href='#'>烟台市海洋功能区划、海洋环保规划通过评审</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
					<li><a href='#'>全国海岛保护与开发规划开始编制</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href="detail_msg.html">青岛未出口鱼片上黑名单企业向美青岛未出口鱼片上黑名单企业向美</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海鲜进口</a><span>[14-10-11]</span></li>
					<li><a href='#'>俄罗斯海产品市场发展势头迅猛</a><span>[14-10-11]</span></li>
					<li><a href='#'>MPEDA:虾类出口锐减影响水产品贸易全局</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟发布蓝鳍金枪鱼禁捕令</a><span>[14-10-11]</span></li>
					<li><a href='#'>深圳拟出台首部深圳拟出台首部用海设施和构筑物登记管理规定</a><span>[14-10-11]</span></li>
					<li><a href='#'>欧盟拟禁马海鲜进口</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>广东茂名海域管理亮点纷呈</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将开展海水入侵和土壤盐渍化监测</a><span>[14-10-11]</span></li>
					<li><a href='#'>广东省成立水产品质量安全专项整治行动领导小组</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国海洋自然保护区存在的主要问题及对策建议</a><span>[14-10-11]</span></li>
					<li><a href='#'>烟台市海洋功能区划、海洋环保规划通过评审</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
					<li><a href='#'>全国海岛保护与开发规划开始编制</a><span>[14-10-11]</span></li>
					<li><a href='#'>上海首个共建海洋科普教育基地揭牌</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>北大西洋海底山脉中的奇特新物种</a><span>[14-10-11]</span></li>
					<li><a href='#'>2007年是“国际海豚年”</a><span>[14-10-11]</span></li>
					<li><a href='#'>日本确认发现世界最大海生兽类化石</a><span>[14-10-11]</span></li>
					<li><a href='#'>最美岛屿”搬上方寸之地</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
					<li><a href='#'>海岛与群岛/岛屿、暗礁</a><span>[14-10-11]</span></li>
					<li><a href='#'>四个大洋的名称是怎么来的？</a><span>[14-10-11]</span></li>
					<li><a href='#'>市霞山区解放东路40号广东海洋大学霞山校区高层407 </a><span>[14-10-11]</span></li>
					<li><a href='#'>海岛与群岛/岛屿、暗礁</a><span>[14-10-11]</span></li>
				</ul>
				<ul class='turn_news_block msg_list'>
					<li><a href='#'>北大西洋海底山脉中的奇特新物种</a><span>[14-10-11]</span></li>
					<li><a href='#'>我国将坚持“以养为主”打造现代水产养殖业</a><span>[14-10-11]</span></li>
					<li><a href='#'>极度通胀下的越南渔业陷困境</a><span>[14-10-11]</span></li>
					<li><a href='#'>最美岛屿”搬上方寸之地</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
					<li><a href='#'>烟台市海洋功能区划、海洋环保规划通过评审</a><span>[14-10-11]</span></li>
					<li><a href='#'>南海区海洋工作指导委员会第二次会议召开</a><span>[14-10-11]</span></li>
					<li><a href='#'>全国海岛保护与开发规划开始编制</a><span>[14-10-11]</span></li>
					<li><a href='#'>煮熟的螃蟹为何会变色</a><span>[14-10-11]</span></li>
				</ul>
			</div>
		</div>
	</div>
	
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
</html>