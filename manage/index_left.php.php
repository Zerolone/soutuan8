<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">
<link href="<?=SITE_FOLDER?>/css/manage.css" rel="stylesheet" type="text/css">
<script language="javascript" src="<?=SITE_FOLDER?>/js/all.js"></script>
<script language="javascript" src="<?=SITE_FOLDER?>/js/leftbar.js"></script>
</head>
<body onResize="showOrHide()" onselectstart="return false;" scroll="no">
<table border="0" bgcolor="#0099FF" width="100%" height="21" cellspacing="0" cellpadding="0">
  <tr>
    <td width="*" class="Menu"></td>
    <td align="center" title="同步左侧菜单" width="65" class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="javascript:location.reload();"><font color="#FFFFFF">同 步 </font></td>
    <td align="right" title="关闭左侧菜单" width="15" class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="HideLeftBar();"><img name="toolBar" src="images/menu_hide.gif"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="1" cellpadding="2">
  <!--管理员管理_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_admin');"> <img id="img_node_admin" src="images/shrink.gif"> 01管理员管理</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_admin">
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('admin/admin.php','用户查看');"> <img src="images/leaf.gif"> 查看</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('admin/add.php','用户添加');"> <img src="images/leaf.gif"> 添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--管理员管理_结束-->

  <!--规则管理_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_tuanlist');"> <img id="img_node_tuanlist" src="images/shrink.gif"> 02规则管理</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_tuanlist">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('tuanlist/list.php','规则查看');"> <img src="images/leaf.gif"> 规则查看</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('tuanlist/add.php','规则添加');"> <img src="images/leaf.gif"> 规则添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--规则管理_结束-->
	
 <!--团购管理_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_tuan');"> <img id="img_node_tuan" src="images/shrink.gif"> 03团购管理</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_tuan">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('tuan/list.php','团购查看');"> <img src="images/leaf.gif"> 团购查看</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('tuan/add.php','团购添加');"> <img src="images/leaf.gif"> 团购添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--团购管理_结束-->

  <!--用户组管理_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="1"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_cycle');"> <img id="img_node_cycle" src="images/shrink.gif"> 04-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_cycle">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('user/group.php','用户组列表');"> <img src="images/leaf.gif"> 用户组列表</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('user/group_add.php','用户组添加');"> <img src="images/leaf.gif"> 用户组添加</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('user/user.php','用户列表');"> <img src="images/leaf.gif"> 用户列表</span></td>
        </tr>        
      </table></td>
  </tr>
  <!--用户组管理_结束-->

  <!--系统设置_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="1"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_qa');"> <img id="img_node_qa" src="images/shrink.gif"> 05-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_qa">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('qa/cate.php','QA分类列表');"> <img src="images/leaf.gif"> QA分类列表</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('qa/cate_add.php','QA分类添加');"> <img src="images/leaf.gif"> QA分类添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--系统设置_结束-->

  <!--留言_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_guestbook');"> <img id="img_node_guestbook" src="images/shrink.gif"> 06-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_guestbook">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('guestbook/guestbook.php','查看作品留言');"> <img src="images/leaf.gif"> 查看作品留言</span></td>
        </tr>
      </table></td>
  </tr>
  <!--留言_结束-->

  <!--调查_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_vote');"> <img id="img_node_vote" src="images/shrink.gif"> 07-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_vote">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('vote/vote.php','投票查看');"> <img src="images/leaf.gif"> 查看</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('vote/add.php','投票添加');"> <img src="images/leaf.gif"> 添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--调查_结束-->

  <!--报名_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_reg');"> <img id="img_node_reg" src="images/shrink.gif"> 08-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_reg">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('reg/reg.php','报名查看');"> <img src="images/leaf.gif"> 查看</span></td>
        </tr>
      </table></td>
  </tr>
  <!--报名_结束-->

  <!--课程设置_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_class');"> <img id="img_node_class" src="images/shrink.gif"> 09-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_class">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('class/class.php','查看课程');"> <img src="images/leaf.gif"> 查看课程</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('class/add.php','添加课程');"> <img src="images/leaf.gif"> 添加课程</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('class/guestbook.php','查看课程留言');"> <img src="images/leaf.gif"> 查看课程留言</span></td>
        </tr>
      </table></td>
  </tr>
  <!--课程设置_结束-->

  <!--讲师留言_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_teacher');"> <img id="img_node_teacher" src="images/shrink.gif"> 10-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_teacher">
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('teacher/guestbook.php','查看讲师留言');"> <img src="images/leaf.gif"> 查看讲师留言</span></td>
        </tr>
      </table></td>
  </tr>
  <!--讲师留言_结束-->

  <!--站点信息_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_info');"> <img id="img_node_info" src="images/shrink.gif"> 11-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_info">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('info/server_info.php','服务器参数');"> <img src="images/leaf.gif"> 服务器参数</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('info/info.php','站点配置');"> <img src="images/leaf.gif"> 站点配置</span></td>
        </tr>
      </table></td>
  </tr>
  <!--站点信息_结束-->

  <!--修改密码_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('admin/password.php','修改密码');"> <img id="img_node_137" src="images/leaf.gif"> 12修改密码</span></td>
  </tr>
  <!--修改密码_结束-->

  <!--管理员操作日志_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('log/log.php','管理员操作日志');"> <img id="img_node_138" src="images/leaf.gif"> 13操作日志</span></td>
  </tr>
  <!--管理员操作日志_结束-->

  <!--在线咨询_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_qq');"> <img id="img_node_qq" src="images/shrink.gif"> 14-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_qq">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('qq/qq.php','在线咨询列表');"> <img src="images/leaf.gif"> 列表</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('qq/add.php','添加在线咨询');"> <img src="images/leaf.gif"> 添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--在线咨询_结束-->

  <!--友情链接_开始-->
  <tr>
    <td><img src="images/blank.gif" height="1" width="0"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="extendnode('node_link');"> <img id="img_node_link" src="images/shrink.gif"> 15-</span>
      <table border="0" width="100%" cellspacing="1" cellpadding="2" style="display:none" id="node_link">
        <tr>
          <td><img src="images/blank.gif" height="1" width="7"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('link/link.php','友情链接列表');"> <img src="images/leaf.gif"> 列表</span></td>
        </tr>
        <tr>
          <td><img src="images/blank.gif" height="1" width="10"> <span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('link/add.php','添加友情链接');"> <img src="images/leaf.gif"> 添加</span></td>
        </tr>
      </table></td>
  </tr>
  <!--友情链接_结束-->

  <tr>
    <td><img src="images/blank.gif" height="1" width="0"><span class="Menu" onMouseOver="hl_menu(this,0)" onMouseOut="hl_menu(this,1)" onClick="ffClick('loginout.php','退出系统');"> <img id="img_node_9" src="images/leaf.gif"> 00退出</span></td>
  </tr>
  <!--退出_结束-->
</table>
</body>
