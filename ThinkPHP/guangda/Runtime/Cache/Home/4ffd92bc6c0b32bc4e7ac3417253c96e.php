<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>具体内容</title>
	<meta charset="utf-8" />
	<meta name="author" />
	<meta name="keyword" />
	<meta name="description" />
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/common.css">
	<link rel="stylesheet" type="text/css" href="/pro/guangda/ThinkPHP/Public/Home/css/msg_content.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	
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
        		
			<?php if(($error) == ""): ?><div class="msg_title">
	        		<h2><?php echo ($content["title"]); ?></h2>
	        	</div>
	        	<div class="post_time"><?php echo (date("Y-m-d H:i:s",$content["uptime"])); ?></div>
	        	<div class="msg_content">
	        		<?php echo ($content["content"]); ?>
					<!--判断阅读权限-->
					<!--判断是否已经扣点-->
					<p>在高压态势下，“四风”问题更加隐蔽，穿上隐身衣、进入青纱帐。有的领导干部坐公交、打出租去参加宴请，有的躲进“培训中心”、私人会所大吃大喝，不收敛不收手、顶风违纪行为仍时有发生。</p>
					<p>冰冻三尺非一日之寒。作风问题具有顽固性、反复性。“四风”问题是长期形成的痼疾顽症，不可能短期内消除。纠正“四风”不可能一蹴而就、一劳永逸，不能指望一下子解决所有问题。一下子很容易成为一阵子，一阵子容易、一辈子难。</p>
					<p>落实八项规定精神以来，在党中央的坚强领导下，在全党全社会的共同努力下，作风建设取得了明显进展和阶段成效，密切了党群关系、赢得了党心民心。然而，纠正“四风”工作还不平衡，基础还不稳固。树倒根存。享乐主义和奢靡之风虽然在面上有所好转，但防止反弹的任务依然艰巨。形式主义、官僚主义积习难改，以形式主义反对形式主义现象仍然突出。有些领导干部说，现在对违反八项规定精神的事都“不想”了。其实，目前阶段仅仅是“不敢”，远没有做到“不能”，更没有达到“不想”。在高压态势下，“四风”问题更加隐蔽，穿上隐身衣、进入青纱帐。有的领导干部坐公交、打出租去参加宴请，有的躲进“培训中心”、私人会所大吃大喝，不收敛不收手、顶风违纪行为仍时有发生。</p>
					<p>我们必须保持冷静清醒，既要坚定改进作风的信心和决心，又要看到我们现在取得的这一点点成绩，与党中央的要求、人民群众的期盼还有很大距离。要继续加大正风肃纪力度，以最严格的标准、最严厉的措施治理作风问题，形成有力震慑，彻底打消一些人的观望侥幸之心。目前要重点查处党的十八大后、中央八项规定出台和开展群众路线教育实践活动后的顶风违纪行为，越往后执纪越严，强化“不敢”的氛围，为“不能”、“不想”准备条件。</p>
					<p>落实八项规定精神，不坚持不足以深化，不深化也无以坚持。当前，改进作风到了节骨眼上，干部群众最担心的是问题反弹，最盼望的是保持长效。要抓常、抓细、抓长，锲而不舍、驰而不息，决不能紧一阵松一阵、进三步退两步，决不让“四风”问题反弹回潮。要盯住一个个具体问题，以具体问题的突破，带动作风的整体转变。要进一步畅通社会监督渠道，依靠群众和媒体开展监督。要加大执纪查处和点名曝光力度，持续释放执纪必严的强烈信号。改进作风最终还要靠制度，要在实践中细化制度，不断建立健全改进作风的长效机制，坚持不懈把纠正“四风”这篇文章往深里做。</p>
					<p>习近平总书记指出的“作风建设永远在路上”这一再精彩不过的论断，彰显了党中央对作风建设的决心和毅力，从严治党将成为新常态，作风建设必须落地生根。要咬住落实八项规定精神不放，一年接着一年干，坚持住、不发散，经过艰苦不懈的努力，让人民群众看到实实在在的成效和变化，使优良的作风成为全党的习惯和风气，成为党的建设的亮丽名片。<br>
					&nbsp;</p>  
	        	</div>
	        	<?php else: echo ($error); endif; ?>
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