<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	#soft_upload{margin-left:40px;margin-top:10px;color:black;}
	#soft_upload tr{height:38px;margin-top:20px;}
	#soft_upload td{padding:0 10px;}
	.soft_icon{max-width:80px;max-height:80px;}
</style>
<table id="soft_upload">
	<tr><td>操作条目：</td><td><?php echo ($item); ?></td></tr>
	<tr><td>标题：</td><td class="if_title"><input type="text" value="<?php echo ($title); ?>" /></td></tr>
	<tr><td>相册图片：</td><td><input type="file" id="upload_file" /><img /></td></tr>
	<tr><td>具体内容:</td><td class="if_content"><textarea><?php echo ($content); ?></textarea></td></tr>
	<tr><td></td><td class="if_operate"><input id="fb" type="submit" value="发布" /></td></tr>
</table>