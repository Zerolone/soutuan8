<?php
/**
 * 广告添加页面
 * 
 * @author Zerolone
 * @version 2009-12-4 23:02:31
 */

require('../include/common.php');
require('common.php');
define('PAGENAME','add.php');

//方式
$mode				= 'add';
$mode_title = ' 添 加 (Alt +Y) ';

if ($ttitle!=''){
	$ttitle.='-复制';
}


//管理员日志
$log_content			= '广告 &gt;&gt; 添加前台';
require('../../include/log.php');

require(PAGENAME.'.php');
require('../../include/debug.php');
?>