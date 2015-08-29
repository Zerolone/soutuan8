<?php
/**
 * 用户添加、修改公共页面
 * 
 * @version 2009-3-3 14:59:20
*/

//获取id
$id=Request('id',0);

//初始化用户名
$user		= '';

//初始化提示内容
$mode_note='';

//初始化顺序
$order			=	1;

//获取用户信息
$SqlStr	= 'SELECT * FROM `' .DB_TABLE_PRE. 'admin` WHERE `id`= ' . $id;
$MyDatabase->SqlStr=$SqlStr;
if ($MyDatabase->Query ()) {
	$DB_Record = $MyDatabase->ResultArr [0];
	$user				= $DB_Record['user'];
	$order			= $DB_Record['order'];
}
?>