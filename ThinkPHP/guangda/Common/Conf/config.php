<?php
return array(

	//调试模式
	'SHOW_PAGE_TRACE' =>true,
	

	//数据库配置
	'DB_DSN' => 'mysqli://root:@localhost:3306/guangda',

	'MODULE_ALLOW_LIST' => array('Home','Admin'),
	'DEFAULT_MODULE'  => 'Home', //默认分组
	
	//url模式 
	'URL_MODEL' => '2',
	'URL_CASE_INSENSITIVE' => true,
	'VAR_CONTROLLER' =>'controller', 

	'URL_HTML_SUFFIX'=>''
);