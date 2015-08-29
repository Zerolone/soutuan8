<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>条目列表</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8 ">
<link href="<?=SITE_FOLDER?>/css/manage.css" type=text/css rel=stylesheet>
<meta content="MSHTML 6.00.2900.2180" name=GENERATOR>
</head>
<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">
<script language="JavaScript" src="<?=SITE_FOLDER?>/js/all.js"></script>
<script language="JavaScript" src="<?=SITE_FOLDER?>/js/trcolor.js"></script>
<script language="JavaScript">
function goto(pagenum)
{
	article_list_frm.pagenum.value	= pagenum;
//	alert(pagenum);
	article_list_frm.submit();
}
</script>
  <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC" id="DBList">
<tr bgcolor="#6A6A6A">
    <td colspan="15" height="26"><b><font color="#FFFFFF">&nbsp;规则管理 &gt;&gt; 规则列表</font></b></td>
  </tr>
    <tr valign=center align=middle>
      <td width="40" bgcolor=#999999 height=20><font color="#FFFFFF">顺序</font></td>
      <td width="60" bgcolor=#999999><font color="#FFFFFF">名称</font></td>
      <td width="*" bgcolor=#999999><font color="#FFFFFF">采集地址</font></td>
      <td width="30" bgcolor=#999999><font color="#FFFFFF">修改</font></td>
      <td width="30" bgcolor=#999999><font color="#FFFFFF">复制</font></td>
      <td width="50" bgcolor=#999999><font color="#FFFFFF">采集时间</font></td>
      <td width="50" bgcolor=#999999><font color="#FFFFFF">采集标志</font></td>
      <td width="30" bgcolor=#999999><font color="#FFFFFF">抓取</font></td>
      <td width="30" bgcolor=#999999><font color="#FFFFFF">删除</font></td>
    </tr>
  <form name="form1" action="update.php" method="post">
		<?php
			if(isset($tuanlist_list)){
				foreach ($tuanlist_list as $tuanlist){
		?>
    <label for="del<?=$tuanlist['tid']?>">
    <tr>
      <td><input type="hidden" name="tid[]" value="<?=$tuanlist['tid']?>">
      <!---->
      <select name="torder[]" class="inputbox" id="torder[]"><?=getOrderList($tuanlist['torder'])?></select>
      <!---->
			</td>
      <td>&nbsp;<?=$tuanlist['ttitle']?></td>
      <td>&nbsp;<?=$tuanlist['turl']?></td>
      <td>&nbsp;<a href="#" onClick="ffClick('tuanlist/edit.php?tid=<?=$tuanlist['tid']?>&pagenum=<?=$pagenum?>','修改：<?=$tuanlist['ttitle']?>');">修改</a></td>
      <td>&nbsp;<a href="#" onClick="ffClick('tuanlist/add.php?tid=<?=$tuanlist['tid']?>&pagenum=<?=$pagenum?>','规则添加');">复制</a></td>
      <td>&nbsp;<?=date('y-m-d H:i' , $tuanlist['uptime'])?></td>
      <td>&nbsp;<?=$tuanlist['upsuccess']?></td>
      <td>&nbsp;<a href="#" onClick="ffClick('tuanlist/catch.php?tid=<?=$tuanlist['tid']?>','抓取：<?=$tuanlist['ttitle']?>');">抓取</a></td>
			<td><input name="del[]" type="checkbox" id="del<?=$tuanlist['tid']?>" value="<?=$tuanlist['tid']?>">删除</td>
    </tr>
    </label>
    <?php
				}
		}	
		?>
    <tr>
      <td valign=bottom height=20 colspan="15" align=right>
	      <input type="hidden" name="pagenum" value="<?=$pagenum?>">
        <input name="s_all" type="button" class="inputbox"  onClick="ffClick('tuanlist/update.php?mode=all','全部采集');"   value="全部采集">
        <input name="s_list_order" type="submit" class="inputbox" value="修改顺序">
        <input type="button" class="inputbox" onclick='selectalldel()' value="全选删除">
        <input name="s_list_del" type="submit" class="inputbox" onClick="return confirm('你真的要删除所选内容？！');" value="删除">
        <input type="reset" class="inputbox" value="全不选">			</td>
    </TR>
  	</form>
		<tr height="22" valign="bottom">
    <td colspan="15" width="100%" align="right">
		<form method="get" action="" style="MARGIN-BOTTOM:0px" name="article_list_frm">
       <input type="hidden" name="parentid" value="<?=$parentid?>">
<?=SplitPage($recordcount, $pagenum, $pagesize);?>
</form>			</td>
	</tr>
	</table>
</body>
</html>
