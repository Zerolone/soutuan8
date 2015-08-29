<?php
//显示所有错误，警告提示
//error_reporting(E_ALL);


//计算花费时间 count cost time
$startime	= microtime();

//默认时区
date_default_timezone_set('PRC');

//返回自从 Unix 纪元（格林威治时间 1970 年 1 月 1 日 00:00:00）到当前时间的秒数。
define('TIMESTAMP', $_SERVER['REQUEST_TIME']);

//是否显示调试信息 show debug info 说明：1为显示，其他为不显示
define('SHOW_DEBUG', 1);

//数据库查询次数 query count
$query_count = 0;

//版本检测
if (version_compare(PHP_VERSION, '5.1.0', '<')) {
    die('本系统需要PHP版本为5.1以上，你的版本为：' . PHP_VERSION . "，请升级你的PHP版本。");
}
	
/**
 * 数据库定义 Database Define
 */
define('DB_TYPE',				'mysql5');
define('DB_USER',				'soutuan8');
define('DB_PASS',				'xiaopeng123');
define('DB_HOST',				'localhost');
define('DB_PORT',				'3306');
define('DB_NAME',				'soutuan8');
define('DB_LANG',				'UTF8');
define('DB_TABLE_PRE',	'st8_');	
//-----------------------------------------------------------

//版本
//$site_version
$site_version = 'V1.0.0';

//网站物理路径 site dir
define('SITE_DIR',				'/home/bchttpd/80/soutuan8/uf.91cdn.com/');
define('SITE_URL',				'http://www.soutuan8.com/');

//网站目录， 如果为根目录， 则为空
define('SITE_FOLDER',			'');

//图片路径
define('IMAGEURL',			SITE_FOLDER.'/upload/');
define('IMAGEPATH',			SITE_DIR.IMAGEURL);

//日志
define('SITE_LOG',	SITE_DIR . 'log.log');

//常规设置
//页面跳转时间(秒)
define('REFRESH_TIME',10);

/**
 * 默认账号设置
 */
define('ADMINUSER','');
define('ADMINPASS','');

define('NAME', '');
define('PASS','');

//默认组
define('GROUPID',13);
//默认权限
define('PERMISSION',524440);

//取消警告
//error_reporting(E_ALL & ~E_NOTICE);
//取消所有错误提示
//error_reporting(0);

/**
 * Cookies方面
 */

//COOKIE有效目录，使一个空间放置多个论坛,都能访问!
define('DB_CKPATH','/');

//COOKIE有效域名
define('DB_CKDOMAIN','');

////////////////
//采集用的常量//
////////////////
define('STIME', 60); //采集时间

define('STIMERest', 10 * 60);//采集时间间隔, 10 * 60 代表10分钟
?>