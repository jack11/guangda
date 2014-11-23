<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/guangda/ThinkPHP/Public/Admin/Css/iframe_common.css" />
<script type="text/javascript" src="/guangda/ThinkPHP/Public/Admin/Js/jquery.js"></script>
<style type="text/css">
	.cbody_content table{margin:10px 0 0 40px;font-size:16px;color:black;}
	.cbody_content tr{height:38px;margin-top:15px;}
	input,select,textarea{border: 1px solid #DBDBDB;}
	#ptime{color:#8a8a8a;}
	.if_title input{width:600px;height:18px;padding:3px;}
	.if_content textarea{width:600px;height:180px;}
	.if_operate{text-align:right;}
	.if_operate input{height:32px;width:70px;background-color:#DDDDDD;color:#787878;border:1px solid #BBBBBB;}
	.if_operate input:hover{background-color:#CECECE;cursor:pointer;}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		if(<?php echo ($op); ?>==1){
			$("#ptime").html("<?php echo ($ptime); ?>");
			$("#fb").val("提交修改");
			return;
		}
		showtime();
	});
	
	function showtime() {
            today = new Date();
            y = today.getFullYear();
            M = today.getMonth() + 1;
            d = today.getDate();
            h = today.getHours();
            m = today.getMinutes();
            s = today.getSeconds();
            weekday = new Array("星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六");
            w = weekday[today.getDay()];
            if (m < 10) m = '0' + m;
            else m = m;
            if (s < 10) s = '0' + s;
            else s = s;
            $("#ptime").html(y + "年" + M + "月" + d + "日 " + h + ":" + m + ":" + s);
            setTimeout("showtime()", 1000);
        }
</script>
<div class="cbody_content">
	<form>
		<table>
			<tr><td>标题：</td><td><?php echo ($item); ?></td></tr>
			<tr><td>标题：</td><td class="if_title"><input type="text" value="<?php echo ($title); ?>"></td></tr>
			<tr><td>当前时间：</td>
				<td><label id="ptime"></label>
				</td>
			</tr>
			<tr><td>内容：</td><td class="if_content"><textarea><?php echo ($content); ?></textarea></td></tr>
			<tr><td></td><td class="if_operate"><input id="fb" type="submit" value="发布" /></td></tr>
		</table>
	</form>
</div>