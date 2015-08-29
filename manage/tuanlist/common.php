<?php
/**
 * 公告添加、修改公共页面
 * 
 * @author Zerolone
 * @version 2010-3-16 9:40:25
 */

$tid			= Request('tid',0);		 //tid
$ttitle		= '';									 //标题
$torder		= 1;									 //顺序
$turl     = '';                  //采集地址
$tfill    = '';                  //补全地址
$tpicfill = '';                  //图片补全地址
$tcode		= 0;;                  //网页编码， 0为UTF8			
$tuanorder= 99;					  

$content	='';                   //内容规则
$title		= '';                  //标题规则
$price		= '';                  //价格规则
$pic		  = '';                  //图片规则
$url		  = '';                  //地址规则
$date		  = '';                  //结束时间规则
$person   = '';                  //人数
$limitperson   = '';                  //最低人数

$pagenum	=	Request('pagenum',1);		//接受pagenum

//获取公告信息
$SqlStr	= ' SELECT * FROM `' .DB_TABLE_PRE. 'tuanlist` WHERE `tid`= ' . $tid;
$MyDatabase->SqlStr = $SqlStr;
if ($MyDatabase->Query ()) {
	$DB_Record = $MyDatabase->ResultArr [0];
	
	$ttitle		= $DB_Record['ttitle'];
	$torder		= $DB_Record['torder'];
	$turl     = $DB_Record['turl'];
	$tfill    = $DB_Record['tfill'];
	$tpicfill = $DB_Record['tpicfill'];
	$tcode    = $DB_Record['tcode'];
	$tuanorder= $DB_Record['tuanorder'];
	
	$content	= base64_decode($DB_Record['content']);
	$title		= base64_decode($DB_Record['title']);
	$price		= base64_decode($DB_Record['price']);
	$pic		  = base64_decode($DB_Record['pic']);
	$url		  = base64_decode($DB_Record['url']);
	$date		  = base64_decode($DB_Record['date']);
	$person	  = base64_decode($DB_Record['person']);
	$limitperson	  = base64_decode($DB_Record['limitperson']);
}
?>