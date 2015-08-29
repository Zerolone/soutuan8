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
    <td colspan="2" height="26"><b><font color="#FFFFFF">&nbsp;团购管理 &gt;&gt; 团购操作</font></b></td>
  </tr>
  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">标　　题：</font></td>
      <td bgcolor="#FFFFFF">
      <input name="title" type="text" class="InputBox" id="title" style="width:300" value="<?=$title?>" size="80"></td>
  </tr>
  <tr>
    <td align="right" width="100" bgcolor="#999999" height="20"><font color="#FFFFFF">顺　　序：</font></td>
    <td bgcolor="#FFFFFF"><select name="order" class="inputbox" id="order"><?=getOrderList($order)?></select></td>
  </tr>	
	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">价格：</font></td>
	  <td bgcolor="#FFFFFF"><input name="price" type="text" class="InputBox" id="price" style="width:300" value="<?=$price?>" size="80"></td>
	  </tr>	  
	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">图片：</font></td>
	  <td bgcolor="#FFFFFF"><input name="pic" type="text" class="InputBox" id="pic" style="width:300" value="<?=$pic?>" size="80"></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">地址：</font></td>
	  <td bgcolor="#FFFFFF"><input name="url" type="text" class="InputBox" id="url" style="width:300" value="<?=$url?>" size="80"></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">结束时间：</font></td>
	  <td bgcolor="#FFFFFF"><input name="date" type="text" class="InputBox" id="date" style="width:300" value="<?=$date?>" size="80"></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">人数：</font></td>
	  <td bgcolor="#FFFFFF"><input name="person" type="text" class="InputBox" id="person" style="width:300" value="<?=$person?>" size="80"></td>
	  </tr>	  
    	<tr>
	  <td width="100" height="20" align="right" bgcolor="#999999"><font color="#FFFFFF">最低人数：</font></td>
	  <td bgcolor="#FFFFFF"><input name="limitperson" type="text" class="InputBox" id="limitperson" style="width:300" value="<?=$limitperson?>" size="80"></td>
	  </tr>	 
  <tr>
    <td bgcolor="#999999"></td>
    <td bgcolor="#FFFFFF">
      <input type="hidden" name="tid"				value="<?=$tid?>" />
      <input type="hidden" name="mode"			value="<?=$mode?>" />
      <input type="hidden" name="pagenum"		value="<?=$pagenum?>" />
      <input type="button" value="<?=$mode_title?>" name="B1" class="inputbox" accesskey="Y" onClick="update_check();" /></td>
  </tr>
 </form>
</table>
