<?php
/**
 * 规则列表显示
 * 
 * @author Zerolone
 * @version 2010-6-3 9:42:27
 */

require('../include/common.php');
define('PAGENAME','list.php');

$pagenum 	= Request('pagenum',1);		//读取页数
$pagesize = 20 ;										//页面记录数
$recordcount	= 0;									//总记录

$SqlStr	= 'SELECT COUNT( * ) AS `count` FROM `'.DB_TABLE_PRE.'tuanlist`';
$MyDatabase->SqlStr = $SqlStr;
if ($MyDatabase->Query ()) {
	$recordcount = $MyDatabase->ResultArr [0]['count'];
}

//列表
$SqlStr	= 'SELECT * FROM `'.DB_TABLE_PRE.'tuanlist`';
$SqlStr.= ' ORDER BY `torder` ASC';
$SqlStr.= ' LIMIT '. $pagesize * ($pagenum-1) .' ,'.$pagesize.';';
$MyDatabase->SqlStr = $SqlStr;
if ($MyDatabase->Query ()) {
	$tuanlist_list = $MyDatabase->ResultArr;
}

//管理员日志
$log_content			= '采集规则 &gt;&gt; 列表';
require('../../include/log.php');

require(PAGENAME.'.php');
require('../../include/debug.php');
?>