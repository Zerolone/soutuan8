<?php
/**
 * 后台文档调用公共程序
 * 
 * @author 		Zerolone
 * @version 		2009-2-27 13:28:26
*/

//session函数
require('../../include/sessions.php');
$userid			= 0;
if (isset($_SESSION['userid'])){
	$userid		= $_SESSION['userid'];	
}

$user			= 'UnKnow';
if (isset($_SESSION['user'])){
	$user		= $_SESSION['user'];	
}

//配置函数，如果为本地测试的话， 则调用config_local文件， 否则
if (strpos(' '.$_SERVER["HTTP_HOST"], 'localhost')) {
	//本地调试用Config文件
	require('../../include/config_local.php');
}
else{
	//网络用Config文件
	require('../../include/config.php');
}

//用户登录验证
require('../../include/checklogin.php');

//连接数据库-并实例化
require('../../class/'.DB_TYPE.'.php');
$MyDatabase=new Database();

//抓取类
require('../../class/snatch.php');

//函数地址
require("../../include/function.php");

?>