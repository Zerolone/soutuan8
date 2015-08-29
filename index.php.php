<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜团吧</title>
<link href="global.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="form.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="images/logo.jpg" alt="logo" /></a>
  <input type="text" id="search_text" />
  <input type="image" src="images/search_but.jpg" id="search_but" />
</div>
<div class="clear"></div>
<ul id="nav">
</ul>
<div id="content">
  <div id="list">
    <?php
		  if(isset($tuan_list)){
				foreach($tuan_list as $tuan){
		?>    
    <a href="<?=$tuan['url']?>" target="_blank"><img src="<?=$tuan['pic']?>" alt="<?=$tuan['title']?>" /><h2><?=subString($tuan['title'],22)?></h2><p>现价：<?=$tuan['price']?>元</p></a>
		<?php }}?>
  </div>
    
  <div class="clear"></div>
  <p class="page">
  <?=SplitPageFront($recordcount, $pagenum, $pagesize);?>
  (共<?=round($recordcount/$pagesize)?>页)</span></p>
  <div class="clear"></div>
</div>
<div id="footer">Copyright (C) 2010 Soutuan8 Inc. All rights reserved. </div>
<div style="visibility: hidden;"><script language="javascript" type="text/javascript" src="http://js.users.51.la/3895112.js"></script></div>
</body>
</html>