<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	#newline td{padding-left:5px;padding-right:5px;}
	#newline input[type="text"]{width:90px;}
	.newline td{padding-left:5px;padding-right:5px;}
	.newline input[type="text"]{width:90px;}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$(".cbody_content tr:odd").css({background: "#ffffff"}); // 1, 3 行
		//$(".cbody_content tr:even").css({background: "#ffffff"}); // 2, 4 行
	});
</script>
<div class="cbody_title">
	<ul>
		<li><a id="adduser" ourl="<?php echo U("Download/add?type=$temp");?>"><span class="add_icon"></span>添加</a></li>
		<li><a id="updateuser"><span class="update_icon"></span>修改</a></li>
		<li><a ourl="<?php echo U("Download/delete?type=$temp");?>" tag="del"><span class="delete_icon"></span>删除</a></li>
		<li><input id="skw" value="<?php echo ($kw); ?>" type="text">
			<a ourl="<?php echo U("Download/search");?>" tag="search_tag"><span class="search_icon"></span>查询</a>
			</form>
		</li>
		<li><?php echo ($temp); echo ($kw); ?></li>
	</ul>
</div>
<div class="cbody_content">
	<table id="users">
		<thead><th><input type="checkbox"></th><th>姓名</th><th>岗位</th><th>座机</th><th>电话</th><th>所属部门</th><th>操作</th></thead>
		<tr><td><input type="checkbox"></td><td>张三</td><td>业务主办</td><td>0759-2533283</td><td>18402060706</td><td>办公室</td>
			<td>
				<a href="#" title="修改"><span class="update_icon"></span></a>
				<a href="#" title="删除"><span class="delete_icon"></span></a>
				<a href="#" title="查看"><span class="see_icon"></span></a>
			</td>
		</tr>
		<tr><td><input type="checkbox"></td><td>张三</td><td>业务主办</td><td>0759-2533283</td><td>18402060706</td><td>办公室</td>
			<td>
				<a href="#" title="修改"><span class="update_icon"></span></a>
				<a href="#" title="删除"><span class="delete_icon"></span></a>
				<a href="#" title="查看"><span class="see_icon"></span></a>
			</td>
		</tr>
		<tr><td><input type="checkbox"></td><td>张三</td><td>业务主办</td><td>0759-2533283</td><td>18402060706</td><td>办公室</td>
			<td>
				<a href="#" title="修改"><span class="update_icon"></span></a>
				<a href="#" title="删除"><span class="delete_icon"></span></a>
				<a href="#" title="查看"><span class="see_icon"></span></a>
			</td>
		</tr>
		<tr><td><input type="checkbox"></td><td>张三</td><td>业务主办</td><td>0759-2533283</td><td>18402060706</td><td>办公室</td>
			<td>
				<a href="#" title="修改"><span class="update_icon"></span></a>
				<a href="#" title="删除"><span class="delete_icon"></span></a>
				<a href="#" title="查看"><span class="see_icon"></span></a>
			</td>
		</tr>
	</table>
	<div id="pager">
    	<div class="all_page">共 8 页</div>
    	<ul>
    		<li><a title="首页" href="#">&lt;&lt;</a></li>
    		<li><a title="上一页" href="#">&lt;</a></li>
    		<li><a href="#">1</a></li>
    		<li><a href="#">2</a></li>
    		<li><a href="#" class="active">3</a></li>
    		<li><a href="#">4</a></li>
    		<li><a href="#">5</a></li>
    		<li><a href="#">6</a></li>
    		<li><a href="#">7</a></li>
    		<li><a href="#">8</a></li>
    		<li><a title="下一页" href="#">&gt;</a></li>
    		<li><a title="尾页" href="#">&gt;&gt;</a></li>
    	</ul>
    	<!-- <div class="to_page">
    		<input type="text" value="">
    		<a href="#">GO</a>
    	</div> -->
    </div>
</div>
<script type="text/javascript">
	var op = false;
	$("#adduser").click(function(){
		if(op == false){
			op = true;
			var newline = '<tr id="newline"><td></td>';
			newline +='<td><input type="text" /></td>';
			newline +='<td><input type="text" /></td>';
			newline +='<td><input type="text" /></td>';
			newline +='<td><input type="text" /></td>';
			newline +='<td><input type="text" /></td>';
			newline +='<td><input type="button" value="添加" /><input id="acancel" type="button" value="取消" /></td>';
			newline +='</tr>';
			$("#users").prepend(newline);
			$("#acancel").bind("click", function(){
				$("#newline").hide();
				op = false;
			});
		}
		
	});
	
	$("#updateuser").click(function(){
		if($("input:checked").length == 1 && op == false){
			op = true;
			var line = $("input:checked").parent().parent().html();
			$("input:checked").parent().siblings(":not(:last)").each(function(){
				$(this).html("<input type='text' value='"+ $(this).html() +"'>");
			}).siblings(":last").html('<input type="button" value="添加" /><input id="ucancel" type="button" value="取消" />');
			$("input:checked").parent().parent().addClass("newline");
			$("#ucancel").bind("click", function(){
				$("input:checked").parent().parent().html(line).removeClass("newline");
				op = false;
			});
		}
	});
</script>