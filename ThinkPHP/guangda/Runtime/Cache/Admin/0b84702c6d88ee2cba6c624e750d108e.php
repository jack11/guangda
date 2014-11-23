<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">

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
<div class="op_content">
	<form>
		<table>
			<tr><td>操作条目：</td><td><?php echo ($item); ?></td></tr>
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