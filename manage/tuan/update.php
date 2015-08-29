<?php
/**
 * 团购添加、修改、删除
 * 
 * @author Zerolone
 * @version 2010-6-14 17:20:31
 */

require('../include/common.php');

$page_name	= '../../include/refresh.php';

$refresh_msg	= '[<font color=blue>不成功</font>]，请返回重试。';
$refresh_txt	= '失败';

$mode			= Request('mode');				//提交方式， add为添加， edit为修改, all为全采集

$tid			    = Request('tid',0);				//编号
$order		    = Request('order');			  //顺序
$content	    = Request('content');
$title		    = Request('title');
$price		    = Request('price');
$pic		      = Request('pic');
$url          = Request('url');
$date		      = Request('date');
$person       = Request('person');
$limitperson  = Request('limitperson');
$pagenum	    = Request('pagenum',1);		//pagenum

//跳转url
$refresh_url  = 'list.php?pagenum='.$pagenum;

$ArrField=array('order', 'title', 'price', 'pic', 'url', 'date', 'person', 'limitperson');
$ArrValue=array($order,  $title,  $price,  $pic,  $url,  $date,  $person,  $limitperson);

if($mode=='add'){
	if($MyDatabase->Insert('tuan', $ArrField, $ArrValue)){
		$refresh_msg	= '团购：[<font color=red>'.$title.'</font>]，添加成功，点击关闭。';
		$refresh_txt	= '成功';
		
		$page_name	= '../../include/refreshno.php';
	}else{
		$refresh_msg	= '团购：[<font color=red>'.$title.'</font>]，添加失败，点击返回。';

		$page_name	= '../../include/refreshback.php';
	}
	
	//管理员日志
	$log_content			= '团购 &gt;&gt; 添加 &gt;&gt; 【'. $title .'】'.$refresh_txt;	
}
elseif ($mode=='edit'){
	if($MyDatabase->Update('tuan', $ArrField, $ArrValue, '`id`='.$tid)){
		$refresh_txt = '成功';
	}
		
	$refresh_msg	= '团购：[<font color=red>'.$title.'</font>]，修改'.$refresh_txt.'，返回修改页面。';
	$log_content			= '团购 &gt;&gt; 修改 &gt;&gt; 【'. $title .'】'.$refresh_txt;	
	
	$refresh_url  = 'edit.php?tid='.$tid;
}
//删除团购
elseif( isset($_POST['s_list_del']) ){
	for($i = 0;$i<sizeof( $_POST["del"] );$i++){
		if($MyDatabase->Delete('tuan', '`id`='.$_POST["del"][$i])){
			$refresh_txt = '成功';
		}
	}
	
	$refresh_msg	= '删除团购[<font color=red>'.$refresh_txt.'</font>]，返回团购显示页面。';
	$log_content			= '团购 &gt;&gt; 删除 &gt;&gt; '.$refresh_txt;
}
//修改顺序
elseif( isset($_POST['s_list_order']) ){
	for($i = 0;$i<sizeof( $_POST["torder"] );$i++)	{
		if($MyDatabase->Update('tuan', array('torder'), array($_POST["torder"][$i]), '`id`='.$_POST["tid"][$i])){
			$refresh_txt = '成功';
		}
	}

	$refresh_msg	= '团购顺序：[<font color=red>修改'.$refresh_txt.'</font>]，点击返回。';
	$log_content			= '团购顺序 &gt;&gt; 修改 &gt;&gt; '.$refresh_txt;	
}

require('../../include/log.php');

require($page_name.'.php');
require('../../include/debug.php');
?>