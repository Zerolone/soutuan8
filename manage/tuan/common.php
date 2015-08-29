<?php
/**
 * 公告添加、修改公共页面
 * 
 * @author Zerolone
 * @version 2010-3-16 9:40:25
 */

$tid			= Request('tid',0);		 //tid
$title		= '';                  //标题规则
$price		= '';                  //价格规则
$pic		  = '';                  //图片规则
$url		  = '';                  //地址规则
$date		  = '';                  //结束时间规则
$person   = '';                  //人数
$limitperson   = '';                  //最低人数
$order    = 99;

$pagenum	=	Request('pagenum',1);		//接受pagenum

//获取公告信息
$SqlStr	= ' SELECT * FROM `' .DB_TABLE_PRE. 'tuan` WHERE `id`= ' . $tid;
$MyDatabase->SqlStr = $SqlStr;
if ($MyDatabase->Query ()) {
	$DB_Record = $MyDatabase->ResultArr [0];
	
	$title	   	 = $DB_Record['title'];
	$price	     = $DB_Record['price'];
	$pic		     = $DB_Record['pic'];
	$url		     = $DB_Record['url'];
	$date   		 = $DB_Record['date'];
	$person	     = $DB_Record['person'];
	$limitperson = $DB_Record['limitperson'];
	$order       = $DB_Record['order'];
}
?>