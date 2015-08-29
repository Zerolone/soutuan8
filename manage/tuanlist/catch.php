<?php
/**
 * 抓取
 * 
 * @author Zerolone
 * @version 2010-6-3 10:48:47
 */

require('../include/common.php');
?>
<meta http-equiv=Content-Type content="text/html; charset=utf-8 ">
<?php
$tid			= Request('tid',0);		 //tid

//获取
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
	
	$content	   = base64_decode($DB_Record['content']);
	$title		   = base64_decode($DB_Record['title']);
	$price		   = base64_decode($DB_Record['price']);
	$pic		     = base64_decode($DB_Record['pic']);
	$url		     = base64_decode($DB_Record['url']);
	$date		     = base64_decode($DB_Record['date']);
	$person	     = base64_decode($DB_Record['person']);
	$limitperson = base64_decode($DB_Record['limitperson']);
	
	//抓取内容
	$s=new Snatch($turl,$tcode);
	
	//获取内容
	$s->getAll($content, $title, $price, $pic, $url, $date, $person, $limitperson, $tfill, $tpicfill, $tuanorder);
	
	echo '内容:<textarea style="width:800px;height:200px">' . $s->content . '</textarea><hr>';
	echo '标题:' . $s->title . '<hr>';
	echo '价格:' . $s->price . '<hr>';
	echo '图片:' . $s->pic . '<hr>';
	echo '地址:' . $s->url . '<hr>';
	echo '时间:' . $s->date . '<hr>';
	echo '人数:' . $s->person . '<hr>';
	echo '最人:' . $s->limitperson . '<hr>';
	echo '顺序:' . $s->tuanorder . '<hr>';
	
	//入库
	$s->todb($MyDatabase, $tid);
}


require('../../include/debug.php');
?>