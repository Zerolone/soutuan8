<?php
/**
 * 采集规则添加、修改、删除
 * 
 * @author Zerolone
 * @version 2010-6-3 9:58:53
 */

require('../include/common.php');

$page_name	= '../../include/refresh.php';

$refresh_msg	= '[<font color=blue>不成功</font>]，请返回重试。';
$refresh_txt	= '失败';

$mode			= Request('mode');				//提交方式， add为添加， edit为修改, all为全采集

$tid			 = Request('tid',0);				//编号
$ttitle		 = Request('ttitle');			//标题
$torder		 = Request('torder');			//顺序
$turl      = Request('turl');
$tfill     = Request('tfill');
$tpicfill  = Request('tpicfill');
$tcode     = Request('tcode');
$tuanorder = Request('tuanorder', 99);

$content	    = base64_encode(Request('content'));
$title		    = base64_encode(Request('title'));
$price		    = base64_encode(Request('price'));
$pic		      = base64_encode(Request('pic'));
$url          = base64_encode(Request('url'));
$date		      = base64_encode(Request('date'));
$person       = base64_encode(Request('person'));
$limitperson  = base64_encode(Request('limitperson'));

$pagenum	= Request('pagenum',1);		//pagenum

//跳转url
$refresh_url  = 'list.php?pagenum='.$pagenum;

$ArrField=array('ttitle', 'torder', 'turl', 'tfill', 'tpicfill', 'tcode', 'content', 'title', 'price', 'pic', 'url', 'date', 'person', 'limitperson', 'tuanorder');
$ArrValue=array($ttitle,  $torder,  $turl,  $tfill,  $tpicfill,  $tcode,  $content,  $title,  $price,  $pic,  $url,  $date,  $person,  $limitperson,  $tuanorder);

if($mode=='add'){
	if($MyDatabase->Insert('tuanlist', $ArrField, $ArrValue)){
		$refresh_msg	= '团购规则：[<font color=red>'.$ttitle.'</font>]，添加成功，点击关闭。';
		$refresh_txt	= '成功';
		
		$page_name	= '../../include/refreshno.php';
	}else{
		$refresh_msg	= '团购规则：[<font color=red>'.$ttitle.'</font>]，添加失败，点击返回。';

		$page_name	= '../../include/refreshback.php';
	}
	
	//管理员日志
	$log_content			= '团购规则 &gt;&gt; 添加 &gt;&gt; 【'. $title .'】'.$refresh_txt;	
}
elseif ($mode=='edit'){
	if($MyDatabase->Update('tuanlist', $ArrField, $ArrValue, '`tid`='.$tid)){
		$refresh_txt = '成功';
	}
		
	$refresh_msg	= '团购规则：[<font color=red>'.$ttitle.'</font>]，修改'.$refresh_txt.'，返回修改页面。';
	$log_content			= '团购规则 &gt;&gt; 修改 &gt;&gt; 【'. $ttitle .'】'.$refresh_txt;	
	
	$refresh_url  = 'edit.php?tid='.$tid;
}
//删除团购规则
elseif( isset($_POST['s_list_del']) ){
	for($i = 0;$i<sizeof( $_POST["del"] );$i++){
		if($MyDatabase->Delete('tuanlist', '`tid`='.$_POST["del"][$i])){
			$refresh_txt = '成功';
		}
	}
	
	$refresh_msg	= '删除团购规则[<font color=red>'.$refresh_txt.'</font>]，返回团购规则显示页面。';
	$log_content			= '团购规则 &gt;&gt; 删除 &gt;&gt; '.$refresh_txt;
}
//修改顺序
elseif( isset($_POST['s_list_order']) ){
	for($i = 0;$i<sizeof( $_POST["torder"] );$i++)	{
		if($MyDatabase->Update('tuanlist', array('torder'), array($_POST["torder"][$i]), '`tid`='.$_POST["tid"][$i])){
			$refresh_txt = '成功';
		}
	}

	$refresh_msg	= '团购规则顺序：[<font color=red>修改'.$refresh_txt.'</font>]，点击返回。';
	$log_content			= '团购规则顺序 &gt;&gt; 修改 &gt;&gt; '.$refresh_txt;	
}
//采集开始了
elseif( $mode=='all'){
	$cpage=Request('cpage', 1);	//采集分页
	$csize=10;                  //每页采集数
	$SqlWhere	= 'AND (`uptime` < ' . (TIMESTAMP - STIMERest) . ' OR `upsuccess`=0) ';
	
	$SqlStr	= 'SELECT COUNT( * ) as `count` FROM `'.DB_TABLE_PRE.'tuanlist` WHERE 1=1 ' ;
	$SqlStr.=	$SqlWhere;
	$MyDatabase->SqlStr = $SqlStr;
	$recordcount	= 0;	//总记录
	if ($MyDatabase->Query ()) {
		$DB_Record = $MyDatabase->ResultArr [0];
	
		$recordcount	= $DB_Record['count'];
	}
		
	$SqlStr	= ' SELECT * FROM `' .DB_TABLE_PRE. 'tuanlist` WHERE 1=1 ';
	$SqlStr.=	$SqlWhere;
	$SqlStr.= ' LIMIT '. $csize * ($cpage-1) .' ,'.$csize.';';
	$MyDatabase->SqlStr = $SqlStr;
	if ($MyDatabase->Query ()) {
		$DB_Record_Arr = $MyDatabase->ResultArr;
		foreach ( $DB_Record_Arr as $DB_Record ) {
			$tid	       = $DB_Record['tid'];
			$turl        = $DB_Record['turl'];
			$tfill       = $DB_Record['tfill'];
			$tpicfill    = $DB_Record['tpicfill'];
			$tcode       = $DB_Record['tcode'];
			$tuanorder   = $DB_Record['tuanorder'];
			
			$content	   = base64_decode($DB_Record['content']);
			$title		   = base64_decode($DB_Record['title']);
			$price		   = base64_decode($DB_Record['price']);
			$pic		     = base64_decode($DB_Record['pic']);
			$url		     = base64_decode($DB_Record['url']);
			$date		     = base64_decode($DB_Record['date']);
			$person	     = base64_decode($DB_Record['person']);
			$limitperson = base64_decode($DB_Record['limitperson']);
			
			
			ob_flush();
			//抓取内容
			$s=new Snatch($turl, $tcode);
			
			//获取内容
			$s->getAll($content, $title, $price, $pic, $url, $date, $person, $limitperson, $tfill, $tpicfill, $tuanorder);			
			
			//入库
			$s->todb($MyDatabase, $tid);
			
			flush();
		}
	}
	
	if ($cpage>= ceil( $recordcount / $csize) ){
		$refresh_msg	= '团购采集完毕，点击关闭。<a href="update.php?mode=all">采集失败的列表</a>';
		$page_name	= '../../include/refreshno.php';
		
		
	}else {
		$refresh_msg	= '团购采集第[<font color=red>'. $cpage .'</font>]页完成，开始采集下页，点击开始。';
		$cpage++;
		$refresh_url = 'update.php?mode=all&cpage='.$cpage;
	}
	
	$log_content			= '团购采集';		
}
require('../../include/log.php');

require($page_name.'.php');
require('../../include/debug.php');
?>