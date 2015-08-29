<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" />
<!--样式表-->
<link rel="stylesheet"  href="<?=SITE_FOLDER?>/css/manage.css" type="text/css" >
<script language="javascript" src="<?=SITE_FOLDER?>/js/all.js"></script>
<script language="javascript" src="<?=SITE_FOLDER?>/js/edit.js"></script>
<script language="javascript">
function update_check(){
  var check_title		= document.admin_frm.title;
  if (check_title.value == ""){
		alert("请输入标题！");
		check_title.focus();
		return false;
	}
	
	admin_frm.action 			= "update.php?";
	admin_frm.target				=	"_self";
	admin_frm.submit();
}

</script>
</head>
<body>
<div id="Layer1" style="position:absolute; left:200px; top:17px; width:1px; height:1px; z-index:1; visibility:hidden">
	<table border="1" width="100%" id="table1" cellspacing="0" cellpadding="0" bordercolor="#000000" onClick="HiddenLayer();">
		<tr>
			<td><img src="images/loadingpic.gif" name="ViewImg"></td>
		</tr>
	</table>
</div>
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
      <form name="admin_frm" method="POST">
<tr bgcolor="#6A6A6A">
    <td colspan="2" height="26"><b><font color="#FFFFFF">&nbsp;规则管理 &gt;&gt; 规则操作</font></b></td>
  </tr>
  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">标　　题：</font></td>
      <td bgcolor="#FFFFFF">
      <input name="ttitle" type="text" class="InputBox" id="ttitle" style="width:300" value="<?=$ttitle?>" size="80"></td>
  </tr>
  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">采集地址：</font></td>
    <td bgcolor="#FFFFFF"><input name="turl" type="text" class="InputBox" id="turl" style="width:300" value="<?=$turl?>" size="80"></td>
  </tr>  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">补全地址：</font></td>
    <td bgcolor="#FFFFFF"><input name="tfill" type="text" class="InputBox" id="tfill" style="width:300" value="<?=$tfill?>" size="80"></td>
  </tr><tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">图片补全地址：</font></td>
    <td bgcolor="#FFFFFF"><input name="tpicfill" type="text" class="InputBox" id="tpicfill" style="width:300" value="<?=$tpicfill?>" size="80"></td>
  </tr><tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">网站编码：</font></td>
    <td bgcolor="#FFFFFF">
    	<input name="tcode" type="radio" id="tcode1" value="0" <?php if($tcode==0) echo 'checked'?>><label for="tcode1">UTF8</label>
    	<input type="radio" name="tcode" id="tcode2" value="1" <?php if($tcode==1) echo 'checked'?>><label for="tcode2">GBK GB2312</label>      
    </td>
  </tr>
  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">顺　　序：</font></td>
    <td bgcolor="#FFFFFF"><select name="torder" class="inputbox" id="torder"><?=getOrderList($torder)?></select></td>
  </tr>
  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">团 顺 序：</font></td>
    <td bgcolor="#FFFFFF"><select name="tuanorder" class="inputbox" id="tuanorder"><?=getOrderList($tuanorder)?></select></td>
  </tr>	  
  <tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">内容规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="content" cols="45" rows="1" id="content" style="width:500"><?=$content?></textarea></td>
	  </tr>	  
	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">标题规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="title" cols="45" rows="1" id="title" style="width:500"><?=$title?></textarea></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">价格规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="price" cols="45" rows="1" id="price" style="width:500"><?=$price?></textarea></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">图片规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="pic" cols="45" rows="1" id="pic" style="width:500"><?=$pic?></textarea></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">地址规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="url" cols="45" rows="1" id="url" style="width:500"><?=$url?></textarea></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">结束时间规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="date" cols="45" rows="1" id="date" style="width:500"><?=$date?></textarea></td>
	  </tr>	        	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">人数规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="person" cols="45" rows="1" id="person" style="width:500"><?=$person?></textarea></td>
	  </tr>	   <tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF"> 满团人数规则：</font></td>
	  <td bgcolor="#FFFFFF"><textarea name="limitperson" cols="45" rows="1" id="limitperson" style="width:500"><?=$limitperson?></textarea></td>
	  </tr>	 
  <tr>
    <td bgcolor="#999999"></td>
    <td bgcolor="#FFFFFF">
      <input type="hidden" name="tid"				value="<?=$tid?>" />
      <input type="hidden" name="mode"			value="<?=$mode?>" />
      <input type="hidden" name="pagenum"		value="<?=$pagenum?>" />
      <input type="button" value="<?=$mode_title?>" name="B1" class="inputbox" accesskey="Y" onClick="update_check();" />
      <input type="button" name="Submit2" value=" 返 回 (ALT + B) " onClick="history.back(-1)" class="inputbox" accesskey="B">				</td>
  </tr>
 </form>
</table>
