<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	#soft_upload{margin-left:40px;margin-top:10px;color:black;}
	#soft_upload tr{height:38px;margin-top:20px;}
	#soft_upload td{padding:0 10px;}
	.soft_icon{max-width:80px;max-height:80px;}
</style>
<table id="soft_upload">
	<tr><td>操作条目：</td><td><?php echo ($item); ?></td></tr>
	<tr><td>软件名称：</td><td class="if_title"><input type="text" value="<?php echo ($title); ?>" /></td></tr>
	<tr><td>选择软件：</td><td><input type="file" id="upload_file" onchange="alert("bb");" /></td></tr>
	<tr><td>软件图标：</td><td><input type="file" /></td></tr>
	<tr><td></td><td class="soft_icon"><img src="<?php echo ($imgpath); ?>"></td></tr>
	<tr><td>软件描述:</td><td class="if_content"><textarea><?php echo ($content); ?></textarea></td></tr>
	<tr><td></td><td class="if_operate"><input id="fb" type="submit" value="发布" /></td></tr>
</table>