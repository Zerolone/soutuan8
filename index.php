<?php
/**
 * 首页显示
 * 
 * @version 2010-6-14 16:46:39
 * @author Zerolone
 */

include 'include/common.php';
define('PAGENAME','index.php');

$pagenum 	= Request('pagenum',1);		//读取页数
$pagesize = 20 ;										//页面记录数
$recordcount	= 0;									//总记录

$SqlStr	= 'SELECT COUNT( * ) AS `count` FROM `'.DB_TABLE_PRE.'tuan`';
$MyDatabase->SqlStr = $SqlStr;
if ($MyDatabase->Query ()) $recordcount = $MyDatabase->ResultArr [0]['count'];

//列表
$SqlStr	= 'SELECT * FROM `'.DB_TABLE_PRE.'tuan`';
$SqlStr.= ' ORDER BY `order` ASC, `id` DESC';
$SqlStr.= ' LIMIT '. $pagesize * ($pagenum-1) .' ,'.$pagesize.';';
$MyDatabase->SqlStr = $SqlStr;
if ($MyDatabase->Query ()) $tuan_list = $MyDatabase->ResultArr;

require(PAGENAME.'.php');
?>